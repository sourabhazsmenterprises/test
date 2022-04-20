<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;
use Mail;
use App\Models\User;
use Auth;

class UiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.webviews.index');
    }

    public function aboutus()
    {
        return view('frontend.webviews.aboutus');
    }
	
	 public function profile()
    {
        return view('frontend.webviews.user_profile');
    }
    public function contactus()
    {
        return view('frontend.webviews.contactus');
    }

    public function services()
    {
        return view('frontend.webviews.services');
    }
	
	 public function register2()
    {
        return view('frontend.webviews.register2');
    }
	
	 public function register3()
    {
        return view('frontend.webviews.register3');
    }
	public function register4()
    {
        return view('frontend.webviews.register4');
    }
	
	
	public function prescribtionDetail()
    {
        return view('frontend.webviews.prescribtionDetail');
    }
	
    public function serviceHome()
    {
        return view('frontend.webviews.servicehome');
    }
	
	
	public function medical()
    {
        return view('frontend.webviews.medical');
    }
	
	 public function onlinechat()
    {
        return view('frontend.webviews.onlinechat');
    }
	 public function askasexpert()
    {
        return view('frontend.webviews.askasexpert');
    }
    
	 public function emergency()
    {
        return view('frontend.webviews.emergency');
    }
	 public function p2p()
    {
        return view('frontend.webviews.p2p');
    }
    
    public function userreg()
    {
        return view('frontend.webviews.userreg');
    }
	public function userlog()
    {
        return view('frontend.webviews.userlog');
    }
   
	public function jsonresponse(Request $req)
    {
        if($req->emailid){
           $otps= DB::table('otpsend')->where('email',$req->emailid)->orderby('id','desc')->first();
                if($otps->otp==$req->otp){
                    $data['otp']=1;

                    }
                    else{

                        $data['otp']=0; 
                    }
        }
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
							 $data['data']=1;
            } catch (Exception $e) {
                return back()->with('error','Message could not be sent.');
           }
				  
			   }
			   else{
				     $data['data']=0;
			   }
			    
			   
        }
          return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	
	public function register2submit(Request $req)
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
			'user_id'=>Auth::user()->id,
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
         return redirect('register3');   
    }
	
	public function register3submit(Request $req)
    {
        
			DB::table('regiter3')->insert([
			'user_id'=>Auth::user()->id,
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
		$subid=Auth::user()->firstcare_id;
		  DB::table('users')->insert([
			    'name' =>$req->fist_name,
            'email' =>$req->email,
           
            'password' => Hash::make($req->phone),
            'mobile'=> $req->mobile,
			 'middle_name' =>$req->middle_name,
			'last_name' =>$req->last_name,
            'gender'=> $req->gender,
            'no'=> $no,
            'firstcare_id'=>$firstcare_id,
            'docid'=>$req->docid,
            'sub_id'=>$subid,
			'blood_group'=>$req->blood_group,
			'dob'=>$req->dob,
			
        ]);
 
         return redirect('register4');   
    }
	
	public function register4submit(Request $req)
    {
		$dis=$req->disease.','.$req->disease1.','.$req->disease2;
       $sur=$req->surgical.','.$req->surgical1.','.$req->surgical2;
       $know=$req->Known.','.$req->Known1.','.$req->Known2;
				 
        
			DB::table('self_medical_history')->insert([
			'user_id'=>Auth::user()->id,
				'history_of_disease'=>$dis,
				'sugical_history'=>$sur,
				'known_allergies'=>$know,
				 
			]);
		$data=1;
          return response()->json($data);
    }
	
		
	public function register5submit(Request $req)
    {
		$relationship1=$req->relationship1.','.$req->relationship2;
       $disease21=$req->disease21.','.$req->disease22;
       $disease31=$req->disease31.','.$req->disease32;
				 
        
			DB::table('family_history')->insert([
			'user_id'=>Auth::user()->id,
				'relationship'=>$relationship1,
				'disease1'=>$disease21,
				'disease2'=>$disease31,
				 
				 
			]);
		$data=1;
          return response()->json($data);
    }
	
	public function register6submit(Request $req)
    {
			 
			DB::table('habits_lifestyle')->insert([
			'user_id'=>Auth::user()->id,
				'drinking_alchohol'=>$req->drinking_alchohol,
				'smoking'=>$req->smoking,
				'excercise'=>$req->excercise,
				'water_intake'=>$req->water_intake,
				'food_habits'=>$req->food_habits,
				 
				 
			]);
		$data=1;
          return response()->json($data);
    }
	public function register7submit(Request $req)
    {
			 
			DB::table('general_health')->insert([
			'user_id'=>Auth::user()->id,
				'height'=>$req->height,
				'weight'=>$req->weight,
			 	 
				 
			]);
		$data=1;
          return response()->json($data);
    }
	public function register8submit(Request $req)
    {
			 
			$path="";
			 if($req->hasFile('upload')){
            $file = $req->file('upload');
            $filename = 'image'.time().'.'.$req->upload->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path = 'upload/'.$filename;
          }
          else{
              $path=$req->upload;
          }
			 
			DB::table('uploadpre')->insert([
			'user_id'=>Auth::user()->id,
				'date'=>$req->date,
				'pre'=>$path,
			 	 
				 
			]);
		$data=1;
          return redirect('profile');
    }
	public function register9submit(Request $req)
    {
			 
			$path="";
			 if($req->hasFile('upload')){
            $file = $req->file('upload');
            $filename = 'image'.time().'.'.$req->upload->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path = 'upload/'.$filename;
          }
          else{
              $path=$req->upload;
          }
			 
			DB::table('uploadpre')->insert([
			'user_id'=>Auth::user()->id,
				'date'=>$req->date,
				'pre'=>$path,
			 	 
				 
			]);
		$data=1;
          return redirect('profile');
    }
	public function onlinechat1()
    {
        return view('frontend.webviews.onlinechat1');
    }
	public function visit()
    {
        return view('frontend.webviews.visit');
    }
	public function chatdirect()
    {
        return view('frontend.webviews.chatdirect');
    }
	public function symptomssubmit1(Request $req)
    {
		//dd($req);
		DB::table('chat_symptoms')->insert([
			     'user_id'=>Auth::user()->id,
				'chat_type'=>$req->chat,
				'type'=>$req->chatothers,
				 
			]);
		
        return redirect('symptoms');
    }
	public function symptomssubmit2(Request $req)
    {
		//dd($req);
		$vs=DB::table('chat_symptoms')->where('user_id',Auth::user()->id)->orderby('id','desc')->first();
		//dd($vs);
		DB::table('chat_symptoms')->where('id',$vs->id)->update([
			     'symptoms'=>implode(",",$req->symptoms),
				'form'=>implode(",",$req->from),
				'till'=>implode(",",$req->till),
			   'explain_your_problem'=>implode(",",$req->explain_your_problem),
		 
 
			]);
        return redirect('visit');
    }
	
	
	public function visitsubmit(Request $req)
    {
		 $path="";
			 if($req->hasFile('upload_prescription')){
            $file = $req->file('upload_prescription');
            $filename = 'image'.time().'.'.$req->upload_prescription->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path = 'upload/'.$filename;
	}
			 $path2="";
			  if($req->hasFile('upload_report')){
            $file = $req->file('upload_report');
            $filename = 'image'.time().'.'.$req->upload_report->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path2 = 'upload/'.$filename;
			  }
			 $path3="";
			  if($req->hasFile('upload')){
            $file = $req->file('upload');
            $filename = 'image'.time().'.'.$req->upload->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path3 = 'upload/'.$filename;
			  }
          
			DB::table('visit')->insert([
			'user_id'=>Auth::user()->id,
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
        return redirect('chat-direct');
    }
	public function doctorsregisters()
    {
        return view('frontend.webviews.doctorsregisters');
    }
	public function doctorsregisterssubmit(Request $req)
	{
		$dat=DB::table('users')->where('email',$req->email)->first();
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
		 if($dat==null){
			  $user =User::create([
            'name' =>$req->name,
            'email' =>$req->email,
           
            'password' => Hash::make($req->mobile),
        ]);
			 DB::table('users')->where('id',$user->id)->update([ 
 'mobile'=>$req->mobile,
			 'type'=>'2' 
		  ]);
		
DB::table('doctors_detail')->insert([ 

'user_id'=>$user->id,
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
]);
		//Auth::login($user);	 
			 return back();
	}
		else{
			 return back() ;
		}
		
	}
	
	public function doctorsregisterssubmitupdate(Request $req,$id)
	{
		$dat=DB::table('doctors_detail')->where('id',$id)->first();
		 if($req->hasFile('aadhar_image')){
            $file = $req->file('aadhar_image');
            $filename = 'image'.time().'.'.$req->aadhar_image->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path = 'upload/'.$filename;
          }
			 else{
				$path=$req->aadhar_image;
			}
		 
			  DB::table('users')->where('id',$dat->user_id)->update([ 
				    'name'=>$req->name,
            		'email'=>$req->email,
 					'mobile'=>$req->mobile,
				   'password' => bcrypt($req->mobile),
			 		'type'=>'2' 
		  ]);
		
		DB::table('doctors_detail')->where('id',$id)->update([ 

			 
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
		]);
		//Auth::login($user);	 
			 return back();
	}
		 public function fogetpassword(){
			 
			return view('auth.forgot-password');
		 }
	
	 public function forgetsendemail(Request $req)
	 {
			  
        $datas=DB::table('users')->where('email',$req->email)->first();
			   $otp=rand(1111111,999999);
			   if($datas!=null){
				    DB::table('otpsend')->insert([
						'otp'=>$otp,
						'email'=>$req->email
						
						]);
				   require base_path("vendor/autoload.php");
					$mail = new PHPMailer(true);     // Passing `true` enables exceptions

					$subject="Otp Detail";
					$email_message = "https://a1fonz.com/firstcare/public/resets-password/$otp";

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
}
				   catch (ModelNotFoundException $exception) {

            return back()->with('mymsg231','Mail Not Send');

        }

				   } else
				   
			   {
				   return back()->with('mymsg231','Invalid Mail Id');
			   }
							return back()->with('mymsg231','Mail Send  Your Email Please check ');
		 
	
}
		public function resetpassword($id){
			//dd($id);
			$emails=DB::table('otpsend')->where('otp',$id)->first();
			$email=$emails->email;
			//dd($email);
			return view('auth.reset-password',compact('email'));
		}
	public function passwordsubmit(Request $req){
			 //dd($req);
			$fara=$req->email;
        $password=$req->password;
        $confirm_password=$req->password_confirmation;
        if($password==$confirm_password && $fara != null)
        {
           DB::table('users')->where('email',$fara)->update([
            'password'=>bcrypt($req->password)
		   ]);
                                                        
            DB::table('users')->where('email',$fara)->update([
            'password'=>bcrypt($req->password)
			]);                                            
                                                         
           DB::table('password_resets')->where('email',$fara)->delete();
			
           return redirect('/')->with('mymsg231','Password Change Please Login ');;
       } 
		else{
			return back()->with('mymsg231','Password Not Match');
		}	

		}
	 
}
