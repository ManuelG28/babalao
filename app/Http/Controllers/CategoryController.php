<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $data = []; //to be sent to the view

        $data["categories"] = Category::all();
        return view('home')->with("data", $data);
    }


    public function add()
    {
        $data = [];
        $data["title"] = "Add New Category";
        return view('category.add')->with("data", $data);
    }

    public function save(Request $request)
    {

        Category::validate($request);
        $category = Category::create($request->only(["name", "specs"]));

        $request->file('image')->storeAs(
            'public/categories',
            $category->id.".png"
        );

        return back()->with('success', 'Item created successfully!');
    }

    public function delete($id)
    {
        if (file_exists('public/categories/'.$id.'.png')) {
            Storage::delete('public/categories/'.$id.'.png');
            @unlink('public/categories/'.$id.'.png');
        }
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('home');
    }
}
