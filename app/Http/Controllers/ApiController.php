<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Hash;
use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;
use Mail;
use Carbon\Carbon;
class ApiController extends Controller
{
	
	public function matchotp(Request $req)
    {
		$otps= DB::table('otpsend')->where('email',$req->email)->orderby('id','desc')->first();
		if($otps->otp==$req->otp){
			return response()->json($data=[
						'status' =>200,
						'msg' =>'Valid Otp',
						'Otp'=> $otps,
						]);

			}
		else{

		   return response()->json($data=[
					'status' =>201,
					'msg' =>'Unvalid Otp',
				 
					]);
		}
	}	
		
	public function sendmailotp(Request $req)
    {
        
		   if($req->email){
        $datas=DB::table('users')->where('email',$req->email)->first();
			   $otp=rand(1111111,999999);
			   if($datas==null){
				    DB::table('otpsend')->insert([
						'otp'=>$otp,
						'email'=>$req->email
						
						]);
				   require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
       
        $subject="Otp Detail";
        $email_message = " 
                        otp: $otp";
        
                        try{ 
            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = "DAli4978234@gmail.com";
            $mail->Password = "Ali#98765";// sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->IsHTML(true);
            $mail->AddAddress($req->email, "Firstcare");
            $mail->SetFrom("from-DAli4978234@gmail.com", "Firstcare");
            $mail->AddReplyTo($req->email, "Firstcare");
            $mail->AddCC($req->email, "Firstcare");

           
            $mail->MsgHTML($email_message);
             $mail->Subject = 'Firstcare';
            $mail->Body    = $email_message;
              $mail->send();
							// $data['data']=1;
							
			return response()->json($data=[
                'status' =>200,
                'msg' =>'Mail Send',
                'Otp'=> $otp,
                ]);
         
							
            } catch (Exception $e) {
                
				   return response()->json($data=[
                'status' =>201,
                'msg' =>'Mail Not  Send',
 
                ]);
           }
				  
			   }
			   else{
				    return response()->json($data=[
                'status' =>401,
                'msg' =>'Mail Already Register',
 
                ]);
			   }
			    
			   
        }
          return response()->json($data);
    }
	
    public function register(Request $req){
      
            $user= DB::table('users')->where('email',$req->email)->first();
        
       if($user!=null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'data already registered' 
              
            ]);
        }
        else
        {
            $reg = new User;
			 $reg->name=$req->fist_name;
			 $reg->middle_name=$req->middle_name;
			 $reg->last_name=$req->last_name;
            $reg->email=$req->email;
          $reg->mobile=$req->mobile;
			$reg->middle_name=$req->middle_name;
			$reg->last_name=$req->last_name;
           $reg->gender=$req->gender;
             $reg->password=bcrypt($req->password);
            $reg->docid=$req->docid;
           
			$reg->blood_group=$req->bloodground;
			$reg->dob=$req->dob;
            $reg->save();
   $dbra=DB::table('users')->where('type',1)->orderby('id','desc')->skip(1)->first();
        $no=$dbra->no+1;
			  $firstcare_id='FC0000'.$no;
			    DB::table('users')->where('id',$reg->id)->update([
             
            'no'=> $no,
            'firstcare_id'=>$firstcare_id,
            
			
        ]);
			
			
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'user'=> User::where('id',$reg->id)->select('*')->first()
                ]);
        }
    }
	
	
	
	
	 public function registerstep2(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        {
			
			$path="";
			 if($req->hasFile('profile')){
            $file = $req->file('profile');
            $filename = 'image'.time().'.'.$req->profile->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path = 'upload/'.$filename;
          }
          else{
              $path=$req->profile;
          }
			DB::table('register2')->insert([
			'user_id'=>$req->user_id,
				'town_city'=>$req->town_city,
				'region'=>$req->region,
				'state'=>$req->state,
				
				'pin_code'=>$req->pin_code,
				'complete_address'=>$req->complete_address,
				'alternative_mobile_number'=>$req->alternative_mobile_number,
				'emergency_contact_person'=>$req->emergency_contact_person,
				'emergency_contact_person_name'=>$req->emergency_contact_person_name,
				'emergency_contact_person_number'=>$req->emergency_contact_person_number,
				'profile'=>$path,
			
			]);
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'detail'=>DB::table('register2')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
        }
    }
	
	
	
	 public function registerstep3(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        {
				$ema=DB::table('users')->where('email',$req->email)->first();
			$emas=DB::table('users')->where('id',$req->user_id)->first();
			
		$fdadsf=substr($req->relationship, 0, 1);
		$dasfad=strtoupper($fdadsf);
			 if($ema==null){
			DB::table('regiter3')->insert([
				'firstcare_id'=>$emas->firstcare_id.$dasfad,
			'user_id'=>$req->user_id,
				'relationship'=>$req->relationship,
				'first_name'=>$req->first_name,
				'middle_name'=>$req->middle_name,
				
				'last_name'=>$req->last_name,
				'gender'=>$req->gender,
				'dob'=>$req->dob,
				'phone'=>$req->phone,
				'email'=>$req->email,
				'blood_group'=>$req->blood_group,
				 
			]);
			
			
			$dbra=DB::table('users')->where('type',1)->orderby('id','desc')->first();
			
        $no=$dbra->no+1;
        //dd($no);
        $firstcare_id='FC0000'.$no;
		$subid=$user->firstcare_id;
		  DB::table('users')->insert([
			    'name' =>$req->first_name,
            'email' =>$req->email,
           
            'password' => Hash::make($req->phone),
            'mobile'=> $req->mobile,
			 'middle_name' =>$req->middle_name,
			'last_name' =>$req->last_name,
            'gender'=> $req->gender,
            'no'=> $no,
            'firstcare_id'=>$firstcare_id,
             
            'sub_id'=>$subid,
			'blood_group'=>$req->blood_group,
			'dob'=>$req->dob,
			
        ]);
 
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'detail'=>DB::table('regiter3')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
			 }
			
			else{
				return response()->json($data=[
                'status' =>201,
                'msg' =>'Relation Email Already Register',
                
                ]);
				
			}
        }
    }
	
	
	
	
	
	 public function selfMedicalHistory(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        {
			
			 
			DB::table('self_medical_history')->insert([
			'user_id'=>$req->user_id,
				'history_of_disease'=>$req->history_of_disease,
				'sugical_history'=>$req->sugical_history,
				'known_allergies'=>$req->known_allergies,
				 
				 
			]);
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'detail'=>DB::table('self_medical_history')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
        }
    }
	
	
	
	 public function familyHistory(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        {
			
			 
			DB::table('family_history')->insert([
			'user_id'=>$req->user_id,
				'relationship'=>$req->relationship,
				'disease1'=>$req->disease1,
				'disease2'=>$req->disease2,
				 
				 
			]);
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'detail'=>DB::table('family_history')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
        }
    }
	
	
	
	public function generalHealth(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        {
			
			 
			DB::table('general_health')->insert([
			'user_id'=>$req->user_id,
				'height'=>$req->height,
				'weight'=>$req->weight,
			 	 
				 
			]);
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'detail'=>DB::table('general_health')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
        }
    }
	
	
	
	public function uploadprescription(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        {
			$path="";
			 if($req->hasFile('pre')){
            $file = $req->file('pre');
            $filename = 'image'.time().'.'.$req->pre->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path = 'upload/'.$filename;
          }
          else{
              $path=$req->pre;
          }
			 
			DB::table('uploadpre')->insert([
			'user_id'=>$req->user_id,
				'date'=>$req->date,
				'pre'=>$path,
			 	 
				 
			]);
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'detail'=>DB::table('uploadpre')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
        }
    }
	
	
	
	
	public function uploadmedicalprescription(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        {
			$path="";
			 if($req->hasFile('pre')){
            $file = $req->file('pre');
            $filename = 'image'.time().'.'.$req->pre->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path = 'upload/'.$filename;
          }
          else{
              $path=$req->pre;
          }
			 
			DB::table('uploadmedical')->insert([
			'user_id'=>$req->user_id,
				'date'=>$req->date,
				'pre'=>$path,
			 	 
				 
			]);
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'detail'=>DB::table('uploadmedical')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
        }
    }
	
	
	
		 public function habitslifestyle(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        {
			
			 
			DB::table('habits_lifestyle')->insert([
			'user_id'=>$req->user_id,
				'drinking_alchohol'=>$req->drinking_alchohol,
				'smoking'=>$req->smoking,
				'excercise'=>$req->excercise,
				'water_intake'=>$req->water_intake,
				'food_habits'=>$req->food_habits,
				 
				 
			]);
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'detail'=>DB::table('habits_lifestyle')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
        }
    }
	
	
    public function login(Request $req){
        $user=DB::table('users')->Orwhere('email',$req->email)->Orwhere('mobile',$req->email)->Orwhere('firstcare_id',$req->email)->where('deleted_at',null)->first();
   //dd($user);
		 
      if($user!=null){
                    if(Hash::check($req->password, $user->password)) {
                       return response()->json($data = [
                           'status' => 200,
                           'msg' => 'Success',
                           'user'=> $user
                       ]);
                   } else {
                       return response()->json($data = [
                           'status' => 201,
                           'msg' => 'Wrong Credentials'
                       ]);
                   }
               }
              
	      else  {
                   return response()->json($data = [
                       'status' => 400,
                       'msg' => "You don't have account please click on Sign Up"
                   ]);
               }
           }
  
	
	 public function advanceSearchDetail(Request $req){
        // dd($req);
        //  $searchdetail= DB::table('users')->where('id',$req->id)->orwhere('gender','%'.$req->gender.'%')->orwhere('age','<=',$req->age)->orwhere('marital_status',$req->marital_status)->orwhere('profession',$req->profession)->orwhere('cast',$req->cast)->orwhere('sub-cast',$req->sub_cast)->orwhere('religion',$req->religion)->orwhere('mother_toungue',$req->mother_toungue)->orwhere('qualification',$req->qualification)->orwhere('specialization',$req->specialization)->orwhere('physical_challenged',$req->physical_challenged)->orwhere('city',$req->city)->get();
         
        //   dd($searchdetail);
        
        if($req->id){
             $id=$req->id;
                 $data['id']=$req->id;
        }
        else{
            $id="";
                $data['id']="";
        }
         if($req->gender){
             $gender=$req->gender;
                 $data['gender']=$req->gender;
        }
        else{
            if($req->gender=='male'){
                 $gender="female";
                 $data['gender']="female";
            }
            else{
                $gender="male";
                 $data['gender']="male";
            }
           
        }
         if($req->age){
             $age=$req->age;
                 $data['age']=$req->age;
        }
        else{
            $age="";
                $data['age']="";
        }
          if($req->age1){
             $age1=$req->age1;
                 $data['age1']=$req->age1;
        }
        else{
            $age1="";
                $data['age1']="";
        }
        
         if($req->profession){
             $profession=$req->profession;
                 $data['profession']=$req->profession;
        }
        else{
            $profession="";
                $data['profession']=$req->profession;
        }
         
        if($req->marital){
             $marital=$req->marital;
                 $data['marital']=$req->marital;
        }
        else{
            $marital="";
                $data['marital']="";
        }
         if($req->height){
             $height=$req->height;
                 $data['height']=$req->height;
        }
        else{
            $height="";
                $data['height']="";
        }
        
         if($req->religion){
             
             $religion=$req->religion;
                 $data['religion']=$req->religion;
        }
        else{
            $religion="";
                $data['religion']="";
        }
         
         if($req->cast){
             $cast=$req->cast;
                 $data['cast']=$req->cast;
        }
        else{
            $cast="";
                $data['cast']="";
        }
        
         if($req->sub_cast){
             $sub_cast=$req->sub_cast;
                 $data['sub_cast']=$req->sub_cast;
        }
        else{
            $sub_cast="";
                $data['sub_cast']="";
        }
         if($req->state){
             $state=$req->state;
                 $data['state']=$req->state;
        }
        else{
            $state="";
                $data['state']="";
        }
        if($req->mother_toungue){
             $mother_toungue=$req->mother_toungue;
                 $data['mother_toungue']=$req->mother_toungue;
        }
        else{
            $mother_toungue="";
                $data['mother_toungue']="";
        }
        
         if($req->city){
             $city=$req->city;
                 $data['city']=$req->city;
        }
        else{
            $city="";
                $data['city']=$req->city;
        }
         if($req->qualification){
             $qualification=$req->qualification;
                 $data['qualification']=$req->qualification;
        }
        else{
            $qualification="";
                $data['qualification']="";
        }
          if($req->physical_challenged){
             $physical_challenged=$req->physical_challenged;
              $data['physical_challenged']=$req->physical_challenged;
        }
        else{
            $physical_challenged="";
             $data['physical_challenged']="";
        }
          if($req->specialization){
             $specialization=$req->specialization;
               $data['specialization']=$req->specialization;
        }
        else{ 
            $specialization="";
            $data['specialization']="";
        }
        
            
        $search="";
        $data['search']="";
              $users2=DB::table('users')->where('gender',$gender)->whereBetween('age',[$age,$age1])->orwhere('id',$id)->orwhere('marital_status',$marital)->orwhere('profession',$profession)->orwhere('cast',$cast)->orwhere('sub_cast',$sub_cast)->orwhere('religion',$religion)->orwhere('mother_toungue',$mother_toungue)->orwhere('qualification',$qualification)->orwhere('specialization',$specialization)->orwhere('physical_challenged',$physical_challenged)->orwhere('city',$city)->get();
          return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                'user'=> $users2
                ]);
 
    }
	 public function match(Request $req){
          if($req->gender=='male'){
             $users2= DB::table('users')->where('gender','female')->orwhere('city',$req->state)->get();
             $users1= DB::table('users')->join('interest_request','users.id','interest_request.reuest_id')->where('users.gender','female')->where('interest_request.user_id',$req->user_id)->where('interest_request.accept','0')->select('interest_request.id as interst_id','interest_request.accept as request','users.*')->get();
            }
		 else{
			 
			  $users2= DB::table('users')->where('gender','male')->orwhere('city',$req->state)->get();
			 $users1= DB::table('users')->join('interest_request','users.id','!=','interest_request.reuest_id')->where('users.gender','male')->where('interest_request.user_id',$req->user_id)->where('interest_request.accept','0')->select('interest_request.id as interst_id','interest_request.accept as request','users.*')->get();
              
		 }
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                'user'=> $users2,
			   'users'=>$users1,
                ]);
	 
		 
	 }
	
		 public function featured(Request $req){
         
             $users2= DB::table('users')->where('id','!=',1)->orderby('id','desc')->get();
          
			  
            
		 
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                'user'=> $users2
                ]);
	 
		 
	 }
	
	 public function getprofile(Request $req){
         
             $users2= DB::table('users')->where('id',$req->user_id)->orderby('id','desc')->first();
       	 if($users2!=null){
			 return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                'user'=> $users2
                ]);
			 
		 }
		 else{
		   return response()->json($data=[
                'status' =>201,
                'msg' =>'Data Not Found',
                 
                ]);
	 
		 }
	 }
	 public function edituser(Request $req){
		 //dd($req);
     if($req->hasFile('image')){
            $file = $req->file('image');
            $filename = 'image'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path = 'upload/'.$filename;
          }
          else{
              $path=$req->image;
          }
		//dd($path);
           DB::table('users')->where('id',$req->user_id)->update([
		   
            'phone'=>$req->phone,
            'name'=>$req->name,  
            'gender'=>$req->gender,
           'apply'=>$req->apply,
           'marital_status'=>$req->marital_status,
           'age'=>$req->age,
           'height'=>$req->height,
           'religion'=>$req->religion,
           'cast'=>$req->caste,
			   'sub_cast'=>$req->sub_cast,
          'state'=>$req->state,
         'complexion'=>$req->complexion,
        'father_name'=>$req->father_name,
        'father_occupation'=>$req->father_occupation,
         'district'=>$req->district,
         'present_address'=>$req->present_address,
         'physical_challenged'=>$req->physical_challenged,
			   'specialization'=>$req->specialization,
			   'qualification'=>$req->qualification,
			    'mother_toungue'=>$req->mother_toungue,
			    'address'=>$req->address,
			   'city'=>$req->city,
			   'profession'=>$req->profession,
          'bio'=>$req->bio,
          'active'=>1,
			  'images'=>$path,
		   ]); 
         
             
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'successfully registered',
                'user'=> User::where('id',$req->user_id)->select('*')->first()
                ]);
        }
    
     public function interestrequest(Request $req){
         
             $users2= DB::table('users')->where('id',$req->user_id)->orderby('id','desc')->first();
       	 if($users2!=null){
		$user1=DB::table('interest_request')->where('reuest_id',$req->reuest_id)->where('user_id',$req->user_id)->first();
			 if($user1==null){
				 
				 DB::table('interest_request')->insert([
				 'reuest_id'=>$req->reuest_id,
				 'user_id'=>$req->user_id,
				 
				 ]);
			 }
			 else{
				  DB::table('interest_request')->where('id',$req->interest_id)->update([
				 'reuest_id'=>$req->reuest_id,
				 'user_id'=>$req->user_id,
				 
				 ]);
			 }
			$use=DB::table('interest_request')->where('user_id',$req->user_id)->get();
			 return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                'user'=> $use
                ]);
			 
		 }
		 else{
		   return response()->json($data=[
                'status' =>201,
                'msg' =>'Data Not Found',
                 
                ]);
	 
		 }
	 }
	public function interestaccept(Request $req){
		  
		//dd($req);
		$user1=DB::table('interest_request')->where('reuest_id',$req->reuest_id)->where('user_id',$req->user_id)->first();
		//dd($user1);
			 if($user1==null){
				 
				 DB::table('interest_request')->insert([
				 'reuest_id'=>$req->reuest_id,
				 'user_id'=>$req->user_id,
				 'accept'=>$req->accept
				 ]);
			 }
			 else{
				  DB::table('interest_request')->where('reuest_id',$req->reuest_id)->where('user_id',$req->user_id)->update([
				 'reuest_id'=>$req->reuest_id,
				 'user_id'=>$req->user_id,
				'accept'=>$req->accept
				 
				 ]);
			 }
			$use=DB::table('interest_request')->where('id',$req->interest_id)->first();
			 return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                'user'=> $user1
                ]);
			 
		  
	}
	public function matchlist(Request $req){
		 	$dasss=DB::table('users')->join('interest_request','users.id','interest_request.reuest_id')->where('interest_request.user_id','=',$req->user_id)->orwhere('interest_request.user_id','=',$req->user_id)->where('interest_request.accept',1)->select('users.*')->get();
		return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                'user'=> $dasss
                ]);
	}
	public function requestlist(Request $req){
		$da=DB::table('users')->join('interest_request','users.id','interest_request.user_id')->where('interest_request.reuest_id',$req->user_id)->where('interest_request.accept',0)->select('users.*')->get(); 

//dd($da);
		$das=DB::table('users')->join('interest_request','users.id','interest_request.reuest_id')->where('interest_request.user_id','=',$req->user_id)->where('interest_request.accept',0)->select('users.*')->get();
		$dass=DB::table('users')->join('interest_request','users.id','interest_request.reuest_id')->where('interest_request.user_id','=',$req->user_id)->where('interest_request.accept',2)->select('users.*')->get();
		$dasss=DB::table('users')->join('interest_request','users.id','interest_request.reuest_id')->where('interest_request.user_id','=',$req->user_id)->where('interest_request.accept',1)->select('users.*')->get();
		//dd($da);
		return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                'userrecive'=>$da,
			'usersend'=>$das,
			'usercancel'=>$dass,
			'useraccept'=>$dasss,
                ]);
	}
	
	 public function castSubcast(Request $req){
         
            $cast = ['just a muslim','shia','sunni'];
   $subcast = ['Just a Muslim','Just a Shia','Ansari','Idrisi','Jafari','Just a Sunni','Kalaal','Khan','Malik','Mansuri','Qureshi','Raaeen','Sheikh','Sheikh Siddiqui','Siddiqui','Syed'];
   $mothertongue = ['Arabic','Bengali','English','Garo','Gujarthi','Hindi','Kanada','Malayalam','Manipuri','Marathi','Nepal','Oriya','Punjabi','Rajasthani','Sanskrit','Tamil','Telugu','Urdu'];
  
            
		 
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                'cast'=> $cast,
			   'subcast'=> $subcast,
			   'mothertongue'=> $mothertongue,
			   
                ]);
	 
		 
	 }
	
	public function state(Request $req){
         
             
   $state = [ "Andhra Pradesh",
                "Arunachal Pradesh",
                "Assam",
                "Bihar",
                "Chhattisgarh",
                "Goa",
                "Gujarat",
                "Haryana",
                "Himachal Pradesh",
                "Jammu and Kashmir",
                "Jharkhand",
                "Karnataka",
                "Kerala",
                "Madhya Pradesh",
                "Maharashtra",
                "Manipur",
                "Meghalaya",
                "Mizoram",
                "Nagaland",
                "Odisha",
                "Punjab",
                "Rajasthan",
                "Sikkim",
                "Tamil Nadu",
                "Telangana",
                "Tripura",
                "Uttarakhand",
                "Uttar Pradesh",
                "West Bengal",
                "Andaman and Nicobar Islands",
                "Chandigarh",
                "Dadra and Nagar Haveli",
                "Daman and Diu",
                "Delhi",
                "Lakshadweep",
                "Puducherry"];
  
            
		 
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                
			   'state'=> $state,
			   
                ]);
	 
		 
	 }
	public function city(Request $req){
         
             
   $city = [ "Bangalore",
			"Chennai",
			"Hyderabad",
   
   ];
  
            
		 
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                
			   'city'=> $city,
			   
                ]);
	 
		 
	 }
	public function region(Request $req){
         
             
   $city = [ "jaya nagar",
			"Jp nagar",
			"HSR Layout",
			"Banshankari"
   
   ];
  
            
		 
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                
			   'region'=> $city,
			   
                ]);
	 
		 
	 }
	
		public function disease(Request $req){
         
             
   $city = [ "Diabetes",
"Blood pressure",
"Jaundice",
"Tuberculosis",
"Hepatitis",
"Thyroid issues",
"Heart disease",
   
   ];
  
            
		 
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                
			   'disease'=> $city,
			   
                ]);
	 
		 
	 }
	
	
			public function allergies(Request $req){
         
             
   $city = [ "Dust allergy",
"Perfume allergy",
"Protien allergy",
"Cold allergy" 
 
   
   ];
  
            
		 
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                
			   'allergies'=> $city,
			   
                ]);
	 
		 
	 }
	
	

public function Surgical(Request $req){
         
             
   $city = [ "Limbs operation",
"Eye surgery",
"Abdominal surgery",
"Cardiac Surgery" 
 
   
   ];
  
            
		 
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                
			   'Surgical'=> $city,
			   
                ]);
	 
		 
	 }
	


	
	public function sendforgetmail(Request $req){
    $daf=DB::table('users')->where('email',$req->email)->first();
		 //dd($daf);
		 if( $daf != null) {
            //$token = 
			 //dd();
			 DB::table('password_resets')->insert([
				  'email' =>$req->email
			 ]);
              $reg=DB::table('password_resets')->where('email',$req->email)->orderBy('id','desc')->first();
           $randomid = mt_rand(100000,999999); 
            $token = $randomid;

            DB::table('password_resets')->where('email', $req->email)->update(['otp' => $token]);
            
            $user = DB::table('users')->where('email',$req->email)->first();
             //dd($phone);
            
            $to = $req->email;
            $subject = 'Password Reset';
             
            
			 
			  require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
        
        $email_message ="Welcom To Firstcare  Your password  OTP : ".$token;
        
                        try{ 
            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = "DAli4978234@gmail.com";
            $mail->Password = "Ali#98765";// sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->IsHTML(true);
            $mail->AddAddress("DAli4978234@gmail.com", "Firstcare");
            $mail->SetFrom("from-DAli4978234@gmail.com", "Firstcare");
            $mail->AddReplyTo("DAli4978234@gmail.com", "Firstcare");
            $mail->AddCC($req->email, "iecircle");

           
            $mail->MsgHTML($email_message);
             $subject = 'Password Reset';
            $mail->Body    = $email_message;
              $mail->send();
            } catch (Exception $e) {
                return back()->with('error','Message could not be sent.');
           }
		 
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
               
               'otp'=>DB::table('password_resets')->where('email', $req->email)->orderby('id','desc')->first()
                
			]);
        }
		 else{
		  return response()->json($data=[
                'status' =>201,
                'msg' =>'User  Not Found',
               
                
			]);
		}	 
    }
	public function matchforgetdeail(Request $req)
	{
        
        $fara=$req->email;
        $password=$req->password;
        $confirm_password=$req->cnf_password;
        if($password==$confirm_password && $fara != null)
        {
           DB::table('users')->where('email',$fara)->update([
            'password'=>bcrypt($req->password)
		   ]);
                                                        
            DB::table('users')->where('email',$fara)->update([
            'password'=>bcrypt($req->password)
			]);                                            
                                                         
           DB::table('password_resets')->where('email',$fara)->delete();
			
            return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
                    
			]);
       } 
		else{
			return response()->json($data=[
                'status' =>201,
                'msg' =>'not match password',
             
			]);
		}	

    }
	
 public function visit(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        {
		  
		
			 $path="";
			 if($req->hasFile('upload_prescription')){
            $file4=$req->file('upload_prescription');
            $filename4='images'.time().'count1'.'.'.$req->upload_prescription->extension();
            $destinationPath4 = storage_path('../public/upload');
            $file4->move($destinationPath4, $filename4);
            $path = 'upload/'.$filename4;
			  }
			 $path2="";
			  if($req->hasFile('upload_report')){
            $file2=$req->file('upload_report');
            $filename2='image2'.time().'count2'.'.'.$req->upload_report->extension();
            $destinationPath2 = storage_path('../public/upload');
            $file2->move($destinationPath2, $filename2);
            $path2 = 'upload/'.$filename2;
			  }
			
			 $path3="";
			 if($req->hasFile('upload')){
            $file3= $req->file('upload');
            $filename3 = 'image'.time().'count3'.'.'.$req->upload->extension();
            $destinationPath3 = storage_path('../public/upload');
            $file3->move($destinationPath3, $filename3);
            $path3 = 'upload/'.$filename3;
			 }
          
			DB::table('visit')->insert([
			'user_id'=>$req->user_id,
				'visit_type'=>$req->visit_type,
				'type'=>$req->type,
				'place'=>$req->place,
				'date'=>$req->dates,
			   'upload_prescription'=>$path,
			'diagnostic_test1'=>$req->diagnostic_test1,
				'diagnostic_test2'=>$req->diagnostic_test2,
				'upload_report'=>$path2,
'medicine1'=>$req->medicine1,
'medicine2'=>$req->medicine2,
'medicine3'=>$req->medicine3,
				'upload'=>$path3,
				'surgery1'=>$req->surgery1,
'surgery2'=>$req->surgery2,
			]);
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
                'detail'=>DB::table('visit')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
        }
    }
	
	public function  chatSymptoms(Request $req){
      
            $user= DB::table('users')->where('id',$req->user_id)->first();
        
       if($user==null)
          
        {
            return response()->json($data = [
                'status' => 201,
                'msg' => 'User Id Not register' 
              
            ]);
        }
        else
        { 
			DB::table('chat_symptoms')->insert([
			'user_id'=>$req->user_id,
				'chat_type'=>$req->chat_type,
				'symptoms'=>$req->symptoms,
				'form'=>$req->from,
				'till'=>$req->till,
			   'explain_your_problem'=>$req->explain_your_problem,
		 
 
			]);
            
            return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
                'detail'=>DB::table('chat_symptoms')->where('user_id',$req->user_id)->orderby('id','desc')->first() 
                ]);
        }
    }
	
	 public function doctors(Request $req){
         
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Detail',
                 
			   'users'=>DB::table('users')->where('type',2)->orderby('id','desc')->inRandomOrder()->take(1)->get(),
                ]);
	 
		 
	 }
	 public function users(Request $req){
         
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Patient Detail',
                 
			   'users'=>DB::table('users')->where('type',1)->orderby('id','desc')->get(),
                ]);
	 
		 
	 }
	 public function doctorregister(Request $req){
	$dat=DB::table('users')->where('email',$req->email)->first();
		 if($dat==null){
								  $reg = new User;
								 $reg->name=$req->name;
								$reg->email=$req->email;
							   $reg->mobile=$req->mobile;

							 $reg->password=bcrypt($req->mobile);
								 $reg->type='2';
							   $reg->save();
							 if($req->hasFile('aadhar_image')){
								$file = $req->file('aadhar_image');
								$filename = 'image'.time().'.'.$req->aadhar_image->extension();
								$destinationPath = storage_path('../public/upload');
								$file->move($destinationPath, $filename);
								$path = 'upload/'.$filename;
							  }
								 else{
					$path="";
						}
						DB::table('doctors_detail')->insert([ 

							'user_id'=>$reg->id,
								'name'=>$req->name,
							'email'=>$req->email,
							'mobile'=>$req->mobile,
							'aadhar_image'=>$path,

						'qualification'=>$req->qualification,
							'present_address'=>$req->present_address,
						'permanent_address'=>$req->permanent_address,
							'pan'=>$req->pan,
						'aadhar'=>$req->aadhar,
							'reg_id'=>$req->reg_id,
						'department'=>$req->department,
							'desease'=>$req->desease,
							'symptoms'=>$req->symptoms,
						]);
								   return response()->json($data=[
						'status' =>200,
						'msg' =>'Show Doctor Detail',

					   'doctor'=>DB::table('doctors_detail')->where('email',$req->email)->first(),
						]);

		 }
					 else{
			return response()->json($data=[
							'status' =>201,
							'msg' =>'Already Register',


							]);
					 }
	 }


 
  public function availiableUnavailible(Request $req){
         DB::table('users')->where('id',$req->user_id)->update([
			 
			 'available'=>$req->val,

			]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show Patient Detail',
                 
			   'userav'=>DB::table('users')->where('id',$req->user_id)->where('type',2)->orderby('id','desc')->first(),
                ]);
	 
		 
	 }
	
public function notification(Request $req){
	
	      DB::table('notification')->insert([
			 
			 'user_id'=>$req->user_id,
			'doc_id'=>$req->doc_id,
			  'message'=>$req->message,
			  'tittle'=>$req->tittle,
			'status'=>0,
			  'user_status'=>$req->user_status,
			  
			]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show notification Detail',
                 
			   'noti'=>DB::table('notification')->where('user_id',$req->user_id)->orderby('id','desc')->first(),
                ]);
	 
		 
	 }
	public function notificationlist(Request $req){
	
	       
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show notification Detail',
  'notilist'=>DB::table('notification')->join('users','notification.user_id','users.id')->where('notification.user_status',1)->where('notification.doc_id',$req->doc_id)->select('users.name','notification.*')->get(),
                ]);
	 
		 
	 }
	
public function notificationlistuser(Request $req){
	
	       
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show notification Detail',
  'notilist'=>DB::table('notification')->join('users','notification.doc_id','users.id')->where('notification.user_status',2)->where('notification.user_id',$req->user_id)->select('users.name','notification.*')->get(),
                ]);
	 
		 
	 }

		public function notificationcheck(Request $req){
	
	       DB::table('notification')->where('id',$req->id)->update([
		 	 
			'status'=>$req->status,
			]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show notification Detail',
                 
			   'noticheck'=>DB::table('notification')->where('id',$req->id)->orderby('id','desc')->first(),
                ]);
	 
		 
	 }
	public function notificationrequest(Request $req){
	
	       
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'Show chec Detail',
                 
			   'noticheck'=>DB::table('notification')->where('user_id',$req->user_id)->where('doc_id',$req->doc_id)->orderby('id','desc')->first(),
                ]);
	 
		 
	 }
	

public function deviceauth(Request $req){
	
	       DB::table('chat_token')->insert([
			 
			 'user_id'=>$req->user_id,
			 
				'chat_user'=>$req->chat_user,
			   'token'=>$req->token,
			]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
                 
			   'token'=>DB::table('chat_token')->where('user_id',$req->user_id)->orderby('id','desc')->first(),
                ]);
	 
		 
	 }
	
	public function querys(Request $req){
	// dd($req->query);
	      DB::table('query')->insert([
			'user_id'=>$req->user_id,
			'query'=>$req->querys,
			'description'=>$req->description
			]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'querys'=>DB::table('query')->where('user_id',$req->user_id)->orderby('id','desc')->get(),
                ]);
	 
		 
	 }
	
 
public function matchdocs(Request $req){
	     $da=DB::table('doctors_detail')->join('users','doctors_detail.user_id','users.id')->where('users.type',2)->where('doctors_detail.department',$req->department)->orderby('doctors_detail.id','desc')->select('doctors_detail.*')->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'querys'=>$da
                ]);
	 
		 
	 }
		public function askexpertdoctormessage(Request $req)
    {
        
		 
				   require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
       
        $subject="User Detail";
        $email_message = "  User Name : ".$req->user_name."
					<br/>	Mobile number : ".$req->user_mobile."
					<br/>	Email :".$req->user_email."
                        ";
        
                        try{ 
            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = "DAli4978234@gmail.com";
            $mail->Password = "Ali#98765";// sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->IsHTML(true);
            $mail->AddAddress($req->doc_email, "Firstcare");
            $mail->SetFrom("from-DAli4978234@gmail.com", "Firstcare");
            $mail->AddReplyTo($req->doc_email, "Firstcare");
            $mail->AddCC($req->doc_email, "Firstcare");

           
            $mail->MsgHTML($email_message);
             $mail->Subject = 'Firstcare';
            $mail->Body    = $email_message;
              $mail->send();
							// $data['data']=1;
							
			return response()->json($data=[
                'status' =>200,
                'msg' =>'Mail Send',
                
                ]);
         
							
            } catch (Exception $e) {
                
				   return response()->json($data=[
                'status' =>201,
                'msg' =>'Mail Not  Send',
 
                ]);
           }
				  
		 
    }
	
public function dummyadd(Request $req){
	// dd($req->query);
	      DB::table('dcofield')->insert([
			'field'=>$req->field,
			 
			]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'querys'=>DB::table('dcofield')->where('field',$req->field)->orderby('id','desc')->first(),
                ]);
	 
		 
	 }
	
	public function dummylist(Request $req){
	// dd($req->query);
	      
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'querys'=>DB::table('dcofield')->where('deleted_at',null)->orderby('id','desc')->get(),
                ]);
	 
		 
	 }
	public function docSymptoms(Request $req){
	// dd($req->query);
	      DB::table('symptomss')->insert([
			'symptoms1'=>$req->symptoms1,
			 'symptoms2'=>$req->symptoms2,
			  'symptoms3'=>$req->symptoms3,
			  'from'=>$req->from,
				'till'=>$req->till,
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		  'detail'=>DB::table('symptomss')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
               
                ]);
	 
		 
	 }
	
public function paitientadd(Request $req){
	// dd($req->query);
	      DB::table('addcase')->insert([
			'case_title'=>$req->case_title,
			 'department'=>$req->department,
			  'symptoms'=>$req->symptoms,
			  'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('addcase')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	 
public function paitientlist(Request $req){
	     $da=DB::table('addcase')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	public function doclist(Request $req){
	     $da=DB::table('symptomss')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	
public function clinicalInvestigation(Request $req){
	// dd($req->query);
	      DB::table('dignostic')->insert([
			  'test2'=>$req->test2,
			  'find_suggestion1'=>$req->find_suggestion1,
			  'examine'=>$req->examine,
			  'find_suggestion2'=>$req->find_suggestion2,
			  'observation_notes'=>$req->observation_notes,
			  'patient_id'=>$req->patient_id,
			  'user_id'=>$req->user_id,

			]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>DB::table('dignostic')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->orderby('id','desc')->get(),
                ]);
	 
		 
	 }
	
public function clinicalInvestigationlist(Request $req){
	// dd($req->query);
	     
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>DB::table('dignostic')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->orderby('id','desc')->get(),
                ]);
	 
		 
	 }
public function doctorobservation(Request $req){
	// dd($req->query);
	      DB::table('doctor_observation')->insert([
			'observation_notes'=>$req->observation_notes,
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('doctor_observation')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	 
public function doctorobservationlist(Request $req){
	     $da=DB::table('doctor_observation')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	
public function daignosys(Request $req){
	// dd($req->query);
	      DB::table('daignosys')->insert([
			'test1'=>$req->test1,
			  'observation_notes'=>$req->observation_notes,
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('daignosys')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	 
public function daignosyslist(Request $req){
	     $da=DB::table('daignosys')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	
public function surgery(Request $req){
	// dd($req->query);
	      DB::table('surgery')->insert([
			'surgery1'=>$req->surgery1,
			  'when'=>$req->when,
			  'find_suggestion'=>$req->find_suggestion,
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('surgery')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	 
public function surgerylist(Request $req){
	     $da=DB::table('surgery')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	

public function medicine(Request $req){
	// dd($req->query);
	      DB::table('medicine')->insert([
			'medicine1'=>$req->medicine1,
			  'frequency'=>$req->frequency,
			  'start'=>$req->start,
			  'end'=>$req->end,
			  'find_suggestion'=>$req->find_suggestion,
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('medicine')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	 
public function medicinelist(Request $req){
	     $da=DB::table('medicine')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	

public function excercise(Request $req){
	// dd($req->query);
	      DB::table('excercise')->insert([
			'excercise1'=>$req->excercise1,
			  'freequency'=>$req->frequency,
			  
			  'find_suggestion'=>$req->find_suggestion,
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('excercise')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	 
public function excerciselist(Request $req){
	     $da=DB::table('excercise')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	

public function food(Request $req){
	// dd($req->query);
	      DB::table('food')->insert([
			'food_type'=>$req->food_type,
			  'frequency'=>$req->frequency,
			
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('food')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	 
public function foodlist(Request $req){
	     $da=DB::table('food')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	public function physiotherapy(Request $req){
	// dd($req->query);
	      DB::table('physiotherapy')->insert([
			'physiotherapy1'=>$req->physiotherapy1,
			  'frequency'=>$req->frequency,
			  'find_suggestion'=>$req->find_suggestion,
			
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('physiotherapy')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	 
public function physiotherapylist(Request $req){
	     $da=DB::table('physiotherapy')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	
	public function preventive(Request $req){
	// dd($req->query);
	      DB::table('preventive')->insert([
			'preventive1'=>$req->preventive1,
			  'preventive2'=>$req->preventive2,
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('preventive')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	 
public function preventivelist(Request $req){
	     $da=DB::table('preventive')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'detail'=>$da
                ]);
	 
		 
	 }
	
	public function observationmedicos(Request $req){
	// dd($req->query);
	      DB::table('observationmedicos')->insert([
			'observation'=>$req->observation,
			   
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('observationmedicos')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	public function obseravationpatient(Request $req){
	// dd($req->query);
	      DB::table('obseravationpatient')->insert([
			'observation'=>$req->observation,
			   
			   'patient_id'=>$req->patient_id,
			 'user_id'=>$req->user_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('obseravationpatient')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	public function finalist(Request $req){
	    // $preventive=DB::table('preventive')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get();
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		'preventive'=>DB::table('preventive')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
			   'chatSymptoms'=>DB::table('chat_symptoms')->where('user_id',$req->patient_id)->orderby('id','desc')->first(),

'physiotherapy'=>DB::table('physiotherapy')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
'food'=>DB::table('food')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
        'excercise'=>DB::table('excercise')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
		   'medicine'=>DB::table('medicine')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
'surgery'=>DB::table('surgery')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
			   	 'daignosys'=>DB::table('daignosys')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
			   
'observation'=>DB::table('doctor_observation')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
'dignostic'=>DB::table('dignostic')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->orderby('id','desc')->get(),
'symptoms'=>DB::table('symptomss')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
			    'addcase'=>DB::table('addcase')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
             'obseravationpatient'=>DB::table('obseravationpatient')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
 'observationmedicos'=>DB::table('observationmedicos')->where('user_id',$req->user_id)->where('patient_id',$req->patient_id)->get(),
 
            
]);
	 
		 
	 }
	
public function chatUserList(Request $req){
	// dd($req->query);
	      DB::table('chat_user_detail')->insert([
			   'date'=>$req->date,
			   'patient_id'=>$req->patient_id,
			   'doc_id'=>$req->doc_id,
				]);
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'detail'=>DB::table('chat_user_detail')->where('doc_id',$req->doc_id)->where('patient_id',$req->patient_id)->get(),
                ]);
	 
		 
	 }
	
public function chatPatientDetial(Request $req){
	// dd($req->query);
	 date_default_timezone_set("Asia/Kolkata");
	       $vi=date("Y-m-d");
	  
	$patient_id=DB::table('chat_user_detail')->where('doc_id',$req->doc_id)->orderby('id','desc')->first();
	if($patient_id !=null){

	//	dd($patient_detail);
	$da=DB::table('chat_symptoms')->where('user_id',$patient_id->patient_id)->orderby('id','desc')->first();
		 //dd($da);
		if($da != null){
			if($da->chat_type=='self'){
	$patient_detail=DB::table('users')->where('id',$patient_id->patient_id)->orderby('id','desc')->select('id as user_id','name','middle_name','last_name','email','mobile as phone','gender','blood_group','dob','sub_id','firstcare_id','created_at','updated_at','deleted_at')->first();
				
				
$generalHealth=DB::table('general_health')->where('user_id',$patient_id->patient_id)->orderby('id','desc')->first();
$habitsLifestyle=DB::table('habits_lifestyle')->where('user_id',$patient_id->patient_id)->orderby('id','desc')->first();
	
$selfMedicalHistory=DB::table('self_medical_history')->where('user_id',$patient_id->patient_id)->orderby('id','desc')->first();
$uploadmedical=DB::table('uploadmedical')->where('user_id',$patient_id->patient_id)->orderby('id','desc')->first();
$uploadpre=DB::table('uploadpre')->where('user_id',$patient_id->patient_id)->orderby('id','desc')->first();
	
	







			}
			else{

	$patient_detail=DB::table('regiter3')->where('user_id',$patient_id->patient_id)->where('relationship',$da->chat_type)->orderby('id','desc')->select('user_id as user_id','first_name as name','middle_name','last_name','email','phone','gender','firstcare_id','blood_group','dob','sub_id','created_at','updated_at','deleted_at')->first();
				//dd($patient_id);
				

 
$generalHealth=null;
$habitsLifestyle=null;
	
$selfMedicalHistory=null;
$uploadmedical=null;
$uploadpre=null;
	
	




			}
		}
	else{

$patient_detail=DB::table('users')->where('id',$patient_id->patient_id)->orderby('id','desc')->first();

		

}
		
//dd($patient_id->patient_id);
		//dd($vi);
		//dd(DB::table('visit')->where('user_id',$patient_id->patient_id)->orderby('id','desc')->get());
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'patient'=>$patient_detail,
'visit'=>DB::table('visit')->where('user_id',$patient_id->patient_id)->whereDate('created_at',$vi)->orderby('id','desc')->get(),
			   

'chatSymptoms'=>DB::table('chat_symptoms')->where('user_id',$patient_id->patient_id)->orderby('id','desc')->first(),

'generalHealth'=>$generalHealth,
'habitsLifestyle'=>$habitsLifestyle,
	
'selfMedicalHistory'=>$selfMedicalHistory,
'uploadmedical'=>$uploadmedical,
'uploadpre'=>$uploadpre,
	
	
 	 
                ]);
	}
	else{

return response()->json($data=[
                'status' =>201,
                'msg' =>'failed',
           		  
                ]);
	}
		 
		
	 }
	


public function searchdisease(Request $req){
	// dd($req->query);
	     
		   return response()->json($data=[
                'status' =>200,
                'msg' =>'success',
           		 'search'=>DB::table('disease')->where('disease','like','%'.$req->disease.'%')->get(),
                ]);
	 
		 
	 }

}
