<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Hash;


class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=user::all();
		return response()->json([
				"status"=>200,
				"Msg"=>$data,
			]);
    }
	
	public function single($id)
    {
        $data=user::find($id);
		return response()->json([
				"status"=>200,
				"Msg"=>$data,
			]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       $email=$request->email;
		$pass=$request->pass;
		$res=user::where("email","=",$email)->first();
		if($res){
			if(Hash::check($pass,$res->pass)){
				return response()->json([
				"status"=>200,
				"Msg"=>"Login Success...",
			]);
			}
			else{
				return response()->json([
				"status"=>200,
				"Msg"=>"Invalid Password...",
			]);
				
			}
		}
		else{
			return response()->json([
				"status"=>200,
				"Msg"=>"Invalid username...",
			]);
		}
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new user;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->pass=Hash::make($request->pass);
		$data->save();
		return response()->json([
			"status"=>200,
			"Msg"=>"Register Success...",
		]);

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
