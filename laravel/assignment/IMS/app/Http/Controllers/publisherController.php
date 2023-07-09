<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\publisher;
use Illuminate\Http\Request;

class publisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_publishers()
    {
        return view('backend.add_publishers');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new publisher;
        $data->pub_name=$request->pub_name;
        $data->save();
        return redirect('/add_publishers');

    }

    /**
     * Display the specified resource.
     */
    public function manage_publishers()
    {
        $data=publisher::all();
        return view('backend.manage_publishers',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=publisher::find($id);
        return view('backend.edit_publisher',["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=publisher::find($id);
        $data->pub_name=$request->pub_name;
        $data->save();
        alert::success('Publisher has been updated..');
        return redirect('/manage_publishers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=publisher::find($id);
        $data->delete();
        alert::success('Publisher has been removed...');
        return redirect('/manage_publishers');
    }
}
