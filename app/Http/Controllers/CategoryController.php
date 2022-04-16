<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Prophecy\Call\Call;

class CategoryController extends Controller
{
    public function store(Request $request){

        $request->validate([
            "name" => 'required|unique:categories,name',
            "parent_id" => 'nullable|numeric',
            "image" => 'required'

        ]);
            $category = new Category;
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            if($request->hasFile('image')){
            $category->image = $request->file('image')->store('images');
            }
            $category->save();
            return redirect('view');
    }
    public function show(){

        $categories = Category::latest()->get();
        return view('view',compact('categories'));
    }

    public function edit($id){
        $category = Category::findorFail($id);
        $categories = Category::where('parent_id',null)->get();
        return view('edit',compact('category','categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => 'required|unique:categories,name',
            "parent_id" => 'nullable|numeric',
            "image" => 'required'
            ]);
            $category = Category::find($id);
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            if($request->hasFile('image')){
                $category->image = $request->file('image')->store('images');
            }
            $category->save();
            return redirect('view');
    }

    public function status($id){
        $category = Category::findOrFail($id);
        $category->status = !$category->status;
        $category->save();
        return redirect()->back();
    }

    public function destroy($id)
    {

        $category = Category::findorfail($id);
        $category->delete();
        return redirect('view');
    }

}
