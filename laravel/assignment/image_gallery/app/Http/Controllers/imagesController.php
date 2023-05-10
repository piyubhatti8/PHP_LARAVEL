<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;
use App\Models\categorie;
use \RealRashid\SweetAlert\Facades\Alert;
/**
 * Summary of imagesController
 */
class imagesController extends Controller
{
    public function index()
    {
        $data=categorie::all();
        return view('frontend.index',['data'=>$data]); // Passed category name to index route.

    }
  
    //--------------------------------------------------------------Header route to pass data--------------------------------------------
    public function header()
    {
        $data=categorie::all();
        return view('frontend.layout.header',['data'=>$data]);

    }

//--------------------------------------------------------------Index route---------------------------------------------------------------

    //--------------------------------------------------------------Add images form------------------------------------------------------
    public function add_images()
    {
        $data=categorie::all();
        return view('backend.add_images',['data'=>$data]);

    
    }
    //--------------------------------------------------------------Function to add images--------------------------------------------

    public function insert_images(Request $request)
    {
        $data = new image;
        $data->name=$request->name;
        $data->cat_id=$request->cat_id;
        $data->des=$request->des;

        
    foreach($request->file('file') as $multi_file)
            {
                $file = time().rand(1000,9999).'_img.'.$multi_file->extension();
                $multi_file->move('backend/assets/img/admin/photos',$file);  
                $file_arr[] = $file;  
            }
	        $data->file=implode(',',$file_arr);
            $data->save();
            if($data){
                Alert::success('Congrats','Image has been added..');
                return redirect('/add_images');
             }
        
    }
    //--------------------------------------------------------------Gallery view in index--------------------------------------------
    public function category(string $id)
    {
        $data=image::where('cat_id','=',$id);
        return view('frontend.cat_wise_images',['data'=>$data]);

    }
 

     
    public function create()
    {
        //
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
