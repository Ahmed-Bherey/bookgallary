<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    //
    public function create()
    {
        $categories = Category::get();
        $books = Book::get();
        return view('admin.pages.books.create', compact('books','categories'));
    }

    public function store(Request $request)
    {
        $img = Null;
        if($request->hasFile('img')){
            $img = $request->img->store('public/img/books');
        }

        $upload_book = Null;
        if($request->hasFile('upload_book')){
            $upload_book = $request->upload_book->store('public/img/books');
        }
        Book::create([
            // 'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'auther' => $request->auther,
            'review' => $request->review,
            'img' => $img,
            'notes' => $request->notes,
            'upload_book' => $upload_book,
        ]);
        return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
    }

    public function edit($id)
    {
        $categories = Category::get();
        $book = Book::findOrFail($id);
        return view('admin.pages.books.edit', compact('book','categories'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $img = $book->img;
        if(isset($request->img)){
            $img = $request->img->store('public/img/books');
        }

        $upload_book = $book->upload_book;
        if(isset($request->upload_book)){
            $upload_book = $request->upload_book->store('public/img/books');
        }

        $book->update([
            // 'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'auther' => $request->auther,
            'review' => $request->review,
            'img' => $img,
            'notes' => $request->notes,
            'upload_book' => $upload_book,
        ]);
    
        return redirect()->route('book.create')->with(['success' => 'تم التحديث بنجاح']);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('category.create')->with(['success' => 'تم الحذف بنجاح']);
    }
}
