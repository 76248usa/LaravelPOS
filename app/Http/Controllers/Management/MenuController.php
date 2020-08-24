<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Menu;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('management/menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::pluck('name', 'id')->all();
        //return $categories;
        return view('management.createMenu', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);


        $request->validate([
            'name' => 'required|unique:menus|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);

        $imageName = "noimage.png";

        if ($file = $request->file('image')) {


            $imageName = time() . $file->getClientOriginalName();


            //$file->move('images', $imageName);

            $request->image->move(public_path('menu_images'), $imageName);

            //$photo = Photo::create(['file'=>$name]);


            // $input['photo_id'] = $photo->id;


        }


        /*if ($request->image) {
            $request->validate([
                'image' => 'nullable|file|image'
            ]);
            $imageName = date('mdYHis') . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('menu_images'), $imageName);
        }*/

        $menu = new Menu();
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->image = $imageName;
        $menu->description = $request->description;
        $menu->category_id = $request->category_id;
        $menu->save();
        $request->session()->flash('status', $request->name . ' is saved successfully');
        return redirect('/management/menu');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        //$categories = Category::all();
        $categories = Category::pluck('name', 'id')->all();
        return view('management/editMenu', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);

        $menu = Menu::findOrFail($id);

        $imageName = "noimage.png";

        if ($file = $request->file('image')) {


            $imageName = time() . $file->getClientOriginalName();
            $request->image->move(public_path('menu_images'), $imageName);
        }


        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->image = $imageName;
        $menu->description = $request->description;
        $menu->category_id = $request->category_id;
        $menu->save();
        $request->session()->flash('status', $request->name . ' is updated successfully');
        return redirect('/management/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        //if ($menu->image) {
        //unlink(public_path('menu_images') . '/' . $menu->image);
        //}

        unlink(public_path() . '/' . 'menu_images' . '/' . $menu->image);


        $menu->delete();
        Session()->flash('status', "Menu is deleted successfully");
        return redirect('/management/menu');
    }
}
