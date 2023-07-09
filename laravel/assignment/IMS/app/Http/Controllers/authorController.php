<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\author;
use Illuminate\Http\Request;

class authorController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function add_authors()
    {
        return view('backend.add_authors');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $data=new author;
        $data->auth_name=$request->auth_name;
        $data->save();

        alert::success('Author added');
        return redirect('/add_authors');
    }

    /**
     * Display the specified resource.
     */
    public function manage_authors()
    {
      $data=author::all();
      return view('backend.manage_authors',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=author::find($id);
        return view('backend.edit_author',["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=author::find($id);
     // $update=author::where("id","=",$id);\
        $data->auth_name=$request->auth_name;
        $data->save();
        alert::success('Author updated successfully...');
        return redirect('/manage_authors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=author::find($id);
        $data->delete();
        alert::success('Author deleted successfully...');
        return redirect('/manage_authors');
    }
}
