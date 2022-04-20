<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Hash;

class UsersController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('user_access'), 403);
        
        $users=DB::table('users')->where('id','!=',1)->where('type',1)->where('deleted_at',null)->orderby('id','desc')->get();

        return view('backend.users.index', compact('users'));
    }
	public function doct()
    {
        abort_unless(\Gate::allows('user_access'), 403);
        
        $users=DB::table('users')->where('type',2)->where('deleted_at',null)->orderby('id','desc')->get();

        return view('backend.users.index1', compact('users'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('user_create'), 403);

        $roles = Role::all()->pluck('title', 'id');

        return view('backend.users.create', compact('roles'));
    }
	 public function doctorcreate()
    {
         //dd('hdsfsd');
        return view('backend.users.doctorcreate');
    }
	
	 public function doctoredit($user)
    {
         //dd('hdsfsd');
		  $doctors=User::where('id',$user)->first();
		 //dd($doctors);
		$doctor= DB::table('doctors_detail')->where('user_id',$doctors->id)->first();
		 //dd($doctor);
		 
        return view('backend.users.doctoredit',compact('doctor','doctors'));
    }
	
	 

    public function store(Request $req)
    {
        abort_unless(\Gate::allows('user_create'), 403);

       $match=DB::table('users')->where('email',$req->email)->Orwhere('mobile',$req->mobile)->first();
        if($match==null){			
         
        $dbra=DB::table('users')->orderby('id','desc')->first();
        $no=$dbra->no+1;
        //dd($req->name);
        $firstcare_id='FC0000'.$no;
        DB::table('users')->insert([
            'mobile'=> $req->mobile,
            'gender'=> $req->gender,
            'no'=> $no,
            'firstcare_id'=>$firstcare_id,
            'docid'=>$req->docid,
            'type'=>$req->type,
			 'name' =>$req->name,
            'email' =>$req->email,
           
            'password' => Hash::make($req->password),
        ]);
		}
        
       return redirect('admin/users/');
    }

    public function edit(Request $req, $user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);
 //dd($user);
        $roles = Role::where('id',$user)->first();
       
        $user= User::where('id',$user)->first();

        return view('backend.users.edit', compact('roles', 'user'));
    }

    public function update(Request $req,$user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);

        DB::table('users')->where('id',$user)->update([
            'mobile'=> $req->mobile,
            'gender'=> $req->gender,
            
            'type'=>$req->type,
			 'name' =>$req->name,
            'email' =>$req->email,
           
            'password' => Hash::make($req->password),
        ]);
 
       
        return redirect('admin/users/');
    }

    public function show(Request $req, $user)
    {
        abort_unless(\Gate::allows('user_show'), 403);
            
        $roles = Role::where('id',$user)->first();
       
        $user= User::where('id',$user)->first();

        return view('backend.users.show', compact('user'));
    }

    public function destroy($user)
    {
        //abort_unless(\Gate::allows('user_delete'), 403);

User::where('id',$user)->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
