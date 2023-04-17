<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Hash;
use Session;
use \RealRashid\SweetAlert\Facades\Alert;
class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      //--------------------------------------------------------------User login code--------------------------------------------
      
    public function user_register()
    {
        if(session()->has('id')){
            Alert('Sorry!','Please Logout to register...');  // can not open user_registration page if already logged in...
            return redirect('/index');
        }
        return view('frontend.user_register');
    }

    /**
     * Store a newly created resource in storage.
     */
	     //--------------------------------------------------------------User Registration--------------------------------------------
    public function store(Request $request)
    {
     $data = new user;
     $data->name=$request->name;
     $data->unm=$request->unm;
     $data->pass=Hash::make($request->pass);
     $data->mob=$request->mob;
     $data->save();
     if($data){
        Alert::success('Congrats','You have registered successfully');
        return redirect('/user_login');
     }
           
    }
    /**
     * Display the specified resource.
     */
    //--------------------------------------------------------------User Logout--------------------------------------------
     public function user_login()
     {
        if(session()->has('id')){
            Alert('Sorry!','Please Logout to view login page...');  // can not open user_login page if already loged in...
            return redirect('/index');
        }
         return view('frontend.user_login');
     
     }
      //------------------------------------------User Login Check--------------------------------------
      public function logincheck(Request $request)
     {
         $unm=$request->unm;
         $pass=$request->pass;
         $data=user::where('unm','=',$unm)->first();
         if($data){
             if(Hash::check($pass,$data->pass)){
                 session()->put('unm',$data->unm);
                 session()->put('name',$data->name);
                 session()->put('id',$data->id);
                 $_SESSION['aid']=$data->id;
                 Alert::success('Congrats','You have login successfully');
                 return redirect('/index');
             }
           else{
             Alert::error('Opps','Wrong Password');
             return redirect()->back();
           }     
         }
         else{
             Alert::error('Opps','Wrong Username');
             return redirect()->back();
           }
         
     }
      //------------------------------------------User Logout--------------------------------------
     public function logout()
     {
         session()->pull('id');
         session()->pull('name');
         session()->pull('unm');
         Alert::success('Congrats','You have logout successfully');
        return redirect('/user_login');
     }
     public function users_data(Request $request)
     {
        $search_val=$request->search;
        if(!($search_val=="" || $search_val=="null")){
                $users=user::where('name','LIKE','%'.$search_val.'%')->get();
        }
        else{
            $users=user::all();
        }
        return view('backend.manage_users',['users'=>$users,"search_val"=>$search_val]);
     }
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
