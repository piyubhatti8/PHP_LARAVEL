<?php

namespace App\Http\Controllers;
use App\Models\teacher;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class teacherController extends Controller
{
    
    public function __construct()           //Pass variable using construct example.
    {
        // $this->middleware('auth');
        // return $category_name = Category::get();
    }

    public function add_teachers()
    {
        return view('backend.add_teachers');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated= $request->validate([
            'name'=>'required',
            'unm'=>'required|email',
           // 'unm'=>'required',
            'gen'=>'required',
        ]);
        echo "<pre>";
		
        print_r($request->all());
        
        $data=new teacher;
        $data->name=$request->name;
        $data->unm=$request->unm;
        $data->gen=$request->gen;
        $data->lang=implode(',',$request->lang);
        $data->mob=$request->mob;
        $data->add=$request->add;
        $img=$request->file('img');
        $path="backend/assets/upload/";
        $filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
        $img->move($path,$filename);
        $data->img=$filename;
        $data->save();
        alert::success('Teacher has been added...');
        return redirect('/add_teachers');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data=teacher::all();
        return view('backend.manage_teachers',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_teacher(string $id)
    {
        $data=teacher::where("id","=",$id)->first();
        return view('backend.edit_teacher',["data"=>$data]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

   
        $data=teacher::where("id","=",$id)->first();
        //$data=teacher::find($id);
        $data->name=$request->name;
        $data->unm=$request->unm;
        $data->gen=$request->gen;
        $data->lang=implode(',',$request->lang);
        $data->mob=$request->mob;
        $data->add=$request->add;
        if($request->hasFile('img')){
            $old_img=$data->img;

            $img=$request->file('img');
            $path="backend/assets/upload/";
            $filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
            $img->move($path,$filename);        //upload new image
            $data->img=$filename;               //Store file name in the database.

            unlink($path.$old_img);
        }
        $data->save();
        alert::success('Teacher record has been updated...');
        return redirect('/manage_teachers');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=teacher::find($id);
        $img=$data->img;
        $path="backend/assets/upload/";
        $data->delete();
        unlink($path.$img);

        alert::success('Teacher record has been deleted...');
        return redirect('/manage_teachers');

    }
}
