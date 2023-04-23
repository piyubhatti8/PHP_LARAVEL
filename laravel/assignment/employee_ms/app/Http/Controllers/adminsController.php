<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\admin;
use Hash;
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
    public function manage_users()
    {
        $users=new user;
        $users=user::all()->paginate(3);
        return view('backend.manage_users',["users"=>$users]);
    }
    public function login()
    {
        return view('backend.login');
    }
    /**
     * Store a newly created resource in storage.
     */
public function logincheck(Request $request)
    {
		$unm=$request->unm;
		$pass=$request->pass;
		
		$data=admin::where('unm','=',$unm)->first();
		if($data)
		{
			if(Hash::check($pass,$data->pass))
			{
				session()->put('unm',$data->unm);
				session()->put('admin_id',$data->id);
				
				Alert::success('Congrats', 'You\'ve Successfully Logined');
				return redirect('/dashboard');
			}
			else
			{
				Alert::error('Login Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
				Alert::error('Login Failed', 'Wrong Username');
				return redirect()->back();
		}
    }
	
	public function adminlogout()
    {
		session()->pull('unm');
		session()->pull('admin_id');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/admin_login');
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
