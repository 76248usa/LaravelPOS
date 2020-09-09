<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Table;
use App\Category;
use App\Menu;
use App\Client;

class CashierController extends Controller
{

    public function index()
    {
        $tables = Table::all();
        $clients = Client::all();

        //$categories = Category::pluck('name', 'id')->all();
        //$menus = Menu::all()->pluck('name', 'category_id');
        return view('cashier.index', compact('tables', 'clients'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }

    public function storeClientTable(Request $request, $id)
    {

        $table = Table::findOrFail($id);

        $een = $request->menu_id;
        $twee = $request->menu_id2;
        $drie = $request->menu_id3;
        //$vier = $request->client_id2;
        //$vyf = $request->client_id3;

        $table->menus()->sync([$een, $twee, $drie]);
        //$table->clients()->sync([$drie, $vier, $vyf]);

        $table->save();
        return view('cashier.singleTable', compact('table'));
    }


    public function show($id)
    {
    }

    public function showSingleTable($id)
    {
        $table = Table::findOrFail($id);
        $clients = Client::all();

        return view('cashier.singleTable', compact('table', 'clients'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    public function createClientMenus($id)
    {
        $client = Client::findOrFail($id);
        $menus = Menu::pluck('name', 'id')->all();
        return view('cashier.createClientMenus', compact('client', 'menus'));
    }

    public function storeClientMenus(Request $request, $id)
    {
        $clients = Client::all();
        $client = Client::findOrFail($id);

        $een = $request->menu_id1;
        $twee = $request->menu_id2;
        $drie = $request->menu_id3;
        $client->menus()->attach([$een, $twee, $drie]);
        $client->save();

        $total = 0;
        foreach ($client->menus as $menu) {
            $total += $menu->price;
        }
        //echo $total;


        return view('cashier.clientMenu', compact('client', 'total', 'id'));
    }

    public function createTableMenus($id)
    {
        $menus = Menu::pluck('name', 'id')->all();
        $clients = Client::pluck('name', 'id')->all();


        return view('cashier.createTableMenus', compact('menus', 'id', 'clients'));
    }
}
