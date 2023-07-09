<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\book;
use App\Models\author;
use App\Models\publisher;


use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_books()
    {
        $authors=author::all();
        $publishers=publisher::all();
        return view('backend.add_books',["authors"=>$authors,"publishers"=>$publishers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function manage_books()
    {
        $manage_books=book::join('authors','authors.id','=','books.auth_id')
        ->join('publishers','publishers.id','=','books.pub_id')->get(['books.*','authors.auth_name','publishers.pub_name']);
        return view('backend.manage_books',["manage_books"=>$manage_books]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new book;
        $data->name=$request->name;
        $data->isbn=$request->isbn;
        $data->auth_id=$request->auth_id;
        $data->pub_id=$request->pub_id;
        $data->pages=$request->pages;
        $data->edition=$request->edition;
        $data->pub_dt=$request->pub_dt;

        $path="backend/assets/upload/books/";
        $img=$request->file('img');
        $filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
        $img->move($path,$filename);
        $data->img=$filename;
        $data->save();
        alert::success('Book is aaded...');
        return redirect('/manage_books');
    }
    public function edit_book(string $id)
    {
        $authors=author::all();
        $publishers=publisher::all();
    
        $edit_book=book::find($id);
        return view('backend.edit_book',["edit_book"=>$edit_book,"authors"=>$authors,"publishers"=>$publishers]);
    }
    public function update_book(Request $request, string $id)
    {
        $update=book::find($id);
        $update->name=$request->name;
        $update->isbn=$request->isbn;
        $update->auth_id=$request->auth_id;
        $update->pub_id=$request->pub_id;
        $update->pages=$request->pages;
        $update->edition=$request->edition;
        $update->pub_dt=$request->pub_dt;

        if($request->file('img')){
            $old_img=$update->img;
            $img=$request->file('img');
            $path="backend/assets/upload/books/";          
            $filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
            $img->move($path,$filename);
            $update->img=$filename;

            unlink($path.$old_img);
        }
        $update->save();
        alert::success('Book details has been updated');
        return redirect('/manage_books');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete=book::find($id);
        $delete->delete();
        alert::success('Book has been deleted');
        return redirect('/manage_books');
    }
}
