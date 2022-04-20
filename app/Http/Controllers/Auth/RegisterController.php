<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required'],
            'gender' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
   
     */
    protected function create(Request $req)
    {
        $match=DB::table('users')->where('email',$req->email)->Orwhere('mobile',$req->mobile)->first();
        if($match==null){			
          $user =User::create([
            'name' =>$req->fist_name,
            'email' =>$req->email,
           
            'password' => Hash::make($req->password),
        ]);

        $dbra=DB::table('users')->where('type',1)->orderby('id','desc')->skip(1)->first();
        $no=$dbra->no+1;
        //dd($no);
        $firstcare_id='FC0000'.$no;
        DB::table('users')->where('id',$user->id)->update([
            'mobile'=> $req->mobile,
			 'middle_name' =>$req->middle_name,
			'last_name' =>$req->last_name,
            'gender'=> $req->gender,
            'no'=> $no,
            'firstcare_id'=>$firstcare_id,
            'docid'=>$req->docid,
             
			'blood_group'=>$req->bloodground,
			'dob'=>$req->dob,
			
        ]);
 
        Auth::login($user);
        if($req->type=='1'){ 
			//dd($req->type);
        return redirect('/')->with('mymsg231','Register Successfully');

        }

        else{
			//dd($req->type);
            return redirect('/register2')->with('mymsg231','Register Successfully');   
        }
    }
        else{
        return back()->with('mymsg231','Please Enter A Unique Email Id And Mobile Number'); ;
    }
        
    }
}
