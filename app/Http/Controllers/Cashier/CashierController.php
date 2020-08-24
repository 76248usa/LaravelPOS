<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Table;
use App\Category;
use App\Menu;

class CashierController extends Controller
{

    public function index()
    {
        $tables = Table::all();

        //$categories = Category::pluck('name', 'id')->all();
        //$menus = Menu::all()->pluck('name', 'category_id');
        return view('cashier.index', compact('tables'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }

    public function storeMenuTable(Request $request, $id)
    {
        //$input = $request->all();
        //dd($input);


        $table = Table::findOrFail($id);
        $een = $request->menu_id;
        $twee = $request->menu_id2;

        //$request->all();
        $table->menus()->sync([$een, $twee]);
        $table->save();

        //dd($table);

        //return view('cashier.singleTable');
        return redirect('/cashier');
    }


    public function show($id)
    {
    }

    public function showSingleTable($id)
    {
        $table = Table::findOrFail($id);

        //dd($table);

        return view('cashier.singleTable', compact('table'));
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

    public function createTableMenus($id)
    {
        $menus = Menu::pluck('name', 'id')->all();
        return view('cashier.createTableMenus', compact('menus', 'id'));
    }
}
