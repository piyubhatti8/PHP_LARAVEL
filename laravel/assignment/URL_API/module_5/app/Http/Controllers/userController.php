<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Hash;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

 //----------------------------------------------------------Login Credential Check Function--------------------------------------------------------------
    public function chk_login(Request $request)
    {

        $unm=$request->unm;
        $pass=$request->pass;
        $data=user::where("unm","=",$unm)->first();   //Finds the record of the username that you have entered.
        if($data){        
            if(Hash::check($pass,$data->pass)){ //Encrypt password that you entered and match it with database.

                return response()->json([
                    "status"=>200,
                    "msg"=>"Logged in successfully..."
                ]);
            }
            else{
                return response()->json([
                    "status"=>401,
                    "msg"=>"Please enter correct password..."
                ]);
            }
        }
        else{
           return response()->json([
            "status"=>401,
            "msg"=>"Please check username...",
           ]);
        }
    }

    
    //----------------------------------------------------------User Registration Function--------------------------------------------------------------
    
    public function store(Request $request)
    {
        $data= new user;
        $data->name=$request->name;
        $data->unm=$request->unm;
        $enc_pass=Hash::make($request->pass); // Encrypted password using hash function.
        $data->pass=$enc_pass;  //Encrypted password
        $data->gen=$request->gen;
        $data->lang=$request->lang;
        $data->mob=$request->mob;   
    
       if($data){

        if($request->hasFile('img'))   // If user request an image file than it will be uploaded...
        {
            $img=$request->file('img');
            $filename=time().'_img.'.$img->getClientOriginalExtension(); //Get File extension
            $img->move('upload/user/',$filename); //Uploaded to desired directory..
            $data->img=$filename;
        }
        $data->save();
        return response()-> json([
            "status"=>200,
            "msg"=>"You have registered successfully..."
        ]);
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
