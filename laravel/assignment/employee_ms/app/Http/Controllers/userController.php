<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\countrie;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function fetch_cid()
    {
        $country=countrie::all();
        return view('frontend.signup_user',['country'=>$country]);
    }
    public function user_login()
    {

        return view('frontend.user_login');
    }
 public function chk_user(Request $request)
    {
        
       $unm=$request->unm;
       $pass=$request->pass;
       $get_user=user::where('unm','=',$unm)->first();
       if($get_user){
            if(Hash::check($pass,$get_user->pass)){
                Alert::success('Congrats! Logged in successfully...');
                return redirect('/contact');
            }
            else{
                Alert::error('Ops! Login Failed','Wrong Password...');
                return redirect()->back();
            }
       }
       else{
            Alert::error('Ops! Login Failed','Wrong Username...');
            return redirect()->back();
       }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
       $reg_user=new user;
       $reg_user->name=$request->name;
       $reg_user->unm=$request->unm;
       $reg_user->pass=Hash::make($request->pass);
       $reg_user->gen=$request->gen;
       $reg_user->lang=implode(",",$request->lang);
       $reg_user->mob=$request->mob;
       $reg_user->cid=$request->cid;

       
   

       $file=$request->file('img');
       $path="frontend/assets/upload/user/";
       $filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
       $file->move($path,$filename);

       $reg_user->img=$filename;

       $reg_user->save();
       Alert::Success('Congrats','You\'ve Successfully Registered');
       return redirect()->back();

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
