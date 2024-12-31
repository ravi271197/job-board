<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories_arr = array();

        $categories = Categories::paginate(10);
        
        if (isset($categories) && !empty($categories)) {
            $categories_arr = $categories;
        }
        return view('backend.categories.index', ['categories' => $categories_arr]);
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $category = new Categories();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.category.index');
    }

    public function edit($id){
        
        $category_arr = array();

        $category = Categories::find($id);
        if (isset($category) && !empty($category)) {
            $category_arr = $category;
        }

        return view('backend.categories.edit',['category' => $category_arr]);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $category = Categories::find($id);

        if (!$category) {
            toastr()->error('Category not found');
            return redirect()->back();
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.category.index');
    }

    public function delete($id){

        $category = Categories::find($id);
        if (!$category) {
            toastr()->error('Category not found');
            return redirect()->back();
        }
        $category->delete();

        return redirect()->route('admin.category.index');
    }
}
