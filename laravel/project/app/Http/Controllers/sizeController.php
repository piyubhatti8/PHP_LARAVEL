<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\size;
use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class sizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_sizes()
    {
        return view('backend.add_sizes');
    }
    public function store(Request $request)
    {
        $store_sizes=new size;

        $store_sizes->size=$request->size;

        $store_sizes->save();

        Alert::Success('Size has been added...');
        return redirect('/add_sizes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
