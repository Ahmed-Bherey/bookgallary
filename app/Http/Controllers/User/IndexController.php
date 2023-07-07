<?php

namespace App\Http\Controllers\User;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    //
    public function home()
    {
        $categories = Category::take(5)->get();
        $books = Book::take(8)->get();
        $comments = Comment::take(10)->get();
        $trends = Book::take(8)->get();
        return view('endUser.index', compact('comments','books','categories','trends'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('endUser.pages.categories', compact('categories'));
    }

    public function books()
    {
        $categories = Category::get();
        $books = Book::get();
        return view('endUser.pages.books', compact('books','categories'));
    }

    public function trends()
    {
        $trends = Book::get();
        return view('endUser.pages.trends', compact('trends'));
    }

    public function book_details($id)
    {
        $categories = Category::get();
        $book = Book::findOrFail($id);
        return view('endUser.pages.book_details', compact('book','categories'));
    }

    public function book_details_store(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        Comment::create([
            'user_id' => Auth::user()->id,
            'book_id' => $book->id,
            'comment' => $request->comment,
        ]);
        return redirect()->back()->with(['success' => 'تم اضافة التعليق بنجاح']);
    }

    public function sub_category($id)
    {
        $category = Category::findOrFail($id);
        $books = Book::where('category_id',$id)->get();
        return view('endUser.pages.sub_category', compact('books','category'));
    }
}
