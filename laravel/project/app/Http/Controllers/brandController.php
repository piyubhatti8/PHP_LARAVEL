<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_brands()
    {
        return view('backend.add_brands');
    }
    public function store(Request $request)
    {
        $store_brands=new brand;

        $store_brands->brand=$request->brand;

        $store_brands->save();

        Alert::Success('Brand name has been added...');
        return redirect('/add_brands');
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
