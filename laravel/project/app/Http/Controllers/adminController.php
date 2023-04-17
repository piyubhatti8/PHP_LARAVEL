<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Hash;
use Session;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function chk_login(Request $request)
    {
        $anm=$request->anm;
        $apss=$request->apass;
        $data=admin::where('anm','=',$anm)->first();
        if($data){
            $_SESSION['anm']=$data->anm;
            $_SESSION['id']=$data->id;
           
                return redirect('/dashboard');

        }
        else{
            echo "<script>
            alert('please check unm & pwd...');
            </script>";
        }
        
    }
    public function logout()
    {
        unset( $_SESSION['anm']);
        unset( $_SESSION['id']);
        return redirect('/login');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
