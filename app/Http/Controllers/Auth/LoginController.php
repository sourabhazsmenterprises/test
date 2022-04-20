<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;
use Hash;
use App\Models\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
 public function login(Request $req){
   
    $password =$req->password;
    $email=$req->email;
    $user=DB::table('users')->Orwhere('email',$req->email)->Orwhere('mobile',$req->email)->Orwhere('firstcare_id',$req->email)->first();
    $users=DB::table('users')->Orwhere('email',$req->email)->Orwhere('mobile',$req->email)->Orwhere('firstcare_id',$req->email)->get();
   //dd($users);
	 if($user!=null){
   $usesr=User::find($user->id);
	if($usesr !=null){
    if(Hash::check($req->password, $user->password)) {
        Auth::login($usesr);
        if(Auth::user()->id==1){

            //Auth::login($usesr);
			$var  = Carbon::now('Asia/Kolkata');
				$time = $var->toDateString();
				DB::table('users')->where('id',Auth::user()->id)->update([
					'user_status'=>'1',
					
					'user_date'=>$time,
					]);
            return redirect('admin/');
        }
        else{
        Auth::login($usesr);
        if(Auth::user()->type==1){ 
            return redirect('/')->with('mymsg23','login Successfully');
    $var  = Carbon::now('Asia/Kolkata');
				$time = $var->toDateString();
				DB::table('users')->where('id',Auth::user()->id)->update([
					'user_status'=>'1',
					
					'user_date'=>$time,
					]);
            }
    
            else{
				$var  = Carbon::now('Asia/Kolkata');
				$time = $var->toDateString();
				DB::table('users')->where('id',Auth::user()->id)->update([
					'user_status'=>'1',
					
					'user_date'=>$time,
					]);
					
					
				
                return redirect('/admin')->with('mymsg231','login Successfully');   
            }
    }
    } else {
        return redirect('userreg')->with('mymsg231','Please Check User Id & Password');
    }
		
	}
	 else {
        return redirect('userreg')->with('mymsg231','Please Check User Id');
    }
 }
	 else{
		 return redirect('userreg')->with('mymsg231','Please Check User Id');
	}

 }
	
}
