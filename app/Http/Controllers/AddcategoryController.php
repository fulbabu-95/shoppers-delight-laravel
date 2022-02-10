<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;

class AddcategoryController extends Controller
{
    public function addcategory(){
        return view('admin.addcategory');
    }
    public function savecategory(Request $request){
        $this->validate($request, ['category_name' => 'required|unique:categories']);

        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->save();

        return back()->with('status', 'The category name have been successfully saved');
    }

    public function categories(){

        $categories = Category::all();

        return view('admin.categories')->with('categories', $categories);
    }

    public function edit_category(Request $request, $id){
        $category = Category::find($id);

        return view('admin.edit_category')->with('category', $category);
    }

    public function updatecategory(Request $request){
        $this->validate($request, ['category_name' => 'required']);
        $category = Category::find($request->input('id'));
        $category->category_name = $request->input('category_name');
        $category->save();

        return redirect('/categories')->with('status', 'The Category name has been updated successfully.');
    }

    public function delete_category($id){
        $category = Category::find($id);
        $category->delete();

        return back()->with('status', 'The Category has been Deleted successfully.');

    }

}
