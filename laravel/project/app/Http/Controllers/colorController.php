<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\color;
use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class colorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_colors()
    {
        return view('backend.add_colors');
    }
    public function store(Request $request)
    {
        $store_colors=new color;

        $store_colors->color=$request->color;

        $store_colors->save();

        Alert::Success('Color has been added...');
        return redirect('/add_colors');
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
