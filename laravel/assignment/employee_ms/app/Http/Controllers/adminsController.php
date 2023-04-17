<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class adminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function login()
    {
        return view('backend.login');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function chk_login(Request $request)
    {
      $unm=$request->unm;
      $pass=$request->pass;
        $admins=admin::where('unm',$unm)->first();
        if($admins){

            if($admins->pass==$pass){
                session()->put('anm',$admins->aname);
                session()->put('aid',$admins->id);
                Alert::success('Congrats','Logged in successfully');
                return redirect('/dashboard');
            }
            else{
                Alert::error('Login Failed..!','Wrong Password..');
                return redirect()->back(); 
            }
        }
        else{
            Alert::error('Login Failed..!','Wrong Username..');
            return redirect()->back(); 
        }


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
