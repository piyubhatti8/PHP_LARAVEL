<?php

namespace App\Http\Controllers;

use App\Mail\mail_otp;
use App\Models\admin;
use Hash;
use Session;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin_login()
    {
        return view('backend.admin_login');
    }

    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
    public function chk_admin(Request $request)
    {
        $aname=$request->aname;
        $apass=$request->apass;
        $chk_admin=admin::where('aname','=',$aname)->first();
        if($chk_admin){
            if(Hash::check($apass,$chk_admin->apass)){
                session()->put('aname',$chk_admin->name);
                session()->put('aid',$chk_admin->id);
               Alert::success('Login success...');
               return redirect('/dashboard');
            }
            else{
                
                        Alert::error('Wrong Password...');
                        return redirect('/admin_login');

            }
        }
        else{
            Alert::error('Wrong Username...');
            return redirect('/admin_login');
        }
    }

   public function admin_logout()
    {
        session()->pull('aname');
        session()->pull('aid');
        Alert::success('Logout successfully...');
        return redirect('/admin_login');
    }
    public function forgot_pass()
    {
        return view('backend.forgot_pass');
    }
    public function otp_forgot_pass(Request $request)
    {
        $aname=$request->aname;
        $data=admin::where("aname","=",$aname)->first();
        if($data)
        {
            $rnum=rand(1000,9999);
            $emaildata=array("aname"=>$aname,"rnum"=>$rnum);
            Mail::to('piyubhatti8@gmail.com')->send(new mail_otp($emaildata));
            alert::success('OTP sent to your email address...');
            return view('backend.otp_forgot_pass',['rnum'=>$rnum,"data"=>$data]);
            
        }
        else{
            alert::success('User doesnot exist...');
            return redirect('/forgot_pass');
        }
    }
    public function change_pass()
    {     
            return view('backend.change_pass');
        
    }
    public function pwd_change(Request $request,string $rnum,string $id)
    {
        $otp=$request->otp;
        $rnum=$request->rnum;
        $data=admin::where("id","=",$id)->first();
        if($rnum==$otp){
            return view('backend.change_pass',["data"=>$data]);
        }
        else{
            alert::error('Wrong OTP');
            return redirect('/forgot_pass');
        }
        
    }
    public function update_pass(Request $request,string $id)
    {
        $npass=$request->npass;
        $cpass=$request->cpass;
        $update=admin::find($id);
        $update->apass=Hash::make($npass);
        $update->save();
        if($update->save()){
            alert::success('Your password has been changed...');
            return redirect('/admin_login');
        }
       else{
            alert::error('Error in change password');
            return redirect()->back();
       }      
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
