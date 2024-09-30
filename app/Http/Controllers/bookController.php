<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'name')
            ->orderByDesc('id')
            ->get();
        return view('index', compact('books'));
    }
    public function create(){
        $categories = DB::table('categories')
        ->get();

        return view('create', compact('categories'));
    }
    public function store(Request $request){
        // $data = $request->except('_token');
        $data = [
            'title' =>$request['title'],
            'thumbnail' =>$request['thumbnail'],
            'author' =>$request['author'],
            'publisher' =>$request['publisher'],
            'publication' =>$request['publication'],
            'price' =>$request['price'],
            'quantity' =>$request['quantity'],
            'category_id' =>$request['category_id'],
        ];
        DB::table('books')->insert($data);
        return redirect()->route('books.index');//chuyen huong toi trang danh sach;
    }
    public function destroy($id){
        DB::table('books')->delete($id);
        return redirect()->route('books.index');
    }
    public function edit($id){
        $book = DB::table('books')
        ->where('id',$id)
        ->first();
        $categories = DB::table('categories')->get();
        return view('edit',compact('book','categories'));
    }
    public function update(Request $request){
        $data = [
            'title' =>$request['title'],
            'thumbnail' =>$request['thumbnail'],
            'author' =>$request['author'],
            'publisher' =>$request['publisher'],
            'publication' =>$request['publication'],
            'price' =>$request['price'],
            'quantity' =>$request['quantity'],
            'category_id' =>$request['category_id'],
        ];
        DB::table('books')->where('id',$request['id'])->update($data);
        return redirect()->route('books.index');
    }
}
