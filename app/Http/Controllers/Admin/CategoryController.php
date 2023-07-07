<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create()
    {
        $categories = Category::get();
        return view('admin.pages.categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $photo = Null;
        if($request->hasFile('photo')){
            $photo = $request->photo->store('public/img/category');
        }
        Category::create([
            'name' => $request->name,
            'photo' => $photo,
        ]);
        return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.pages.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        if(isset($request->photo)){
        $category->update([
            'name' => $request->name,
            'photo' => $request->photo->store('public/img/category'),
        ]);
    }else{
        $category->update([
            'name' => $request->name,
        ]);
    }
        return redirect()->route('category.create')->with(['success' => 'تم التحديث بنجاح']);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.create')->with(['success' => 'تم الحذف بنجاح']);
    }
}
