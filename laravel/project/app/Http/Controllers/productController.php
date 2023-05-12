<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\size;
use App\Models\categorie;
use App\Models\brand;
use App\Models\color;
use App\Models\type;
use Illuminate\Pagination\Paginator;

use Hash;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class productController extends Controller
{

   
    public function product_detail(string $id)
    {
        $product=product::join('types','products.type_id','=','types.id')
        ->join('colors','products.clr_id','=','colors.id')
        ->join('sizes','products.size_id','=','sizes.id')
        ->join('brands','products.brand_id','=','brands.id')
        ->where('products.id','=',$id)
        ->first(['products.*','types.type','colors.color','sizes.size','brands.brand']);  
        return view('frontend.product_detail',["product"=>$product]);
    }


    public function add_products()
    {
        $size_data=size::all();
        $brand_data=brand::all();
        $color_data=color::all();
        $type_data=type::join('categories','types.cate_id','=','categories.id')->orderBy('categories.category','asc')->get();
        return view('backend.add_products',["size_data"=>$size_data,"brand_data"=>$brand_data,"color_data"=>$color_data,"type_data"=>$type_data]);
    }
    public function store(Request $request)
    {
       $store_products=new product;
       $store_products->p_name=$request->p_name;
       $store_products->type_id=$request->type_id;       
       $store_products->brand_id=$request->brand_id;
       $store_products->clr_id=$request->clr_id;
       $store_products->size_id=$request->size_id;
       $store_products->price=$request->price;
       $store_products->qty=$request->qty;
       $store_products->discount=$request->discount;
       $store_products->disc_amt=$request->disc_amt;
       $store_products->des=$request->des;

       $path="backend/assets/upload/products/";
      //img upload
		$img=$request->file('img');		
		$filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		$img->move($path,$filename);  // use move for move image in public/images

		$store_products->img=$filename; // name store in db

            $store_products->save();

       Alert::success('Product has been added successfully...');
       return redirect('/add_products');

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
