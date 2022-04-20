 
@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users Show</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 <section class="content">
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.user.title') }}
    </div>

    <div class="card-body">
		@if($user->type=='1')
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th><?php //dd($user->name);?>
                        {{ trans('global.user.fields.name') }}
                    </th>
                    <td>
                        {{ $user->name }}
                    </td>
               
                    <th>
                        {{ trans('global.user.fields.email') }}
                    </th>
                    <td>
                        {{ $user->email }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Mobile
                    </th>
                    <td>
                        {{ $user->mobile }}
                    </td>
                 
                    <th>
                        Roles
                    </th>
                    <td>
                    	@if($user->type=='1')
			Patient
			@elseif($user->type=='2')
			Doctor
			@elseif($user->type=='3')
			Diagnostic Centers
			@elseif($user->type=='4')
			Pharmacy
			
			
			@else
			
			@endif
                    </td>
				</tr>
				<tr>
					<?php $register2=DB::table('register2')->where('user_id',$user->id)->orderby('id','desc')->first();?>
					<th>
						Town/City
					</th>
					<td>
						@if($register2!=null) {{$register2->town_city}} @else N.A  @endif
					</td>
					
					<th>
						Region
					</th>
					<td>
						@if($register2!=null) {{$register2->region}} @else N.A  @endif
					</td>
                </tr>
				<tr>
					<th>
						State
					</th>
					<td>
						@if($register2!=null) {{$register2->state}} @else N.A  @endif
					</td>
					<th>
						Pin Code
					</th>
					<td>
						@if($register2!=null) {{$register2->pin_code}} @else N.A  @endif
					</td>
				</tr>
				<tr>
					<th>
						Address
					</th>
					<td>
						@if($register2!=null) {{$register2->complete_address }} @else N.A  @endif
					</td>
					<th>
						Alternative Mobile Number
					</th>
					<td>
						@if($register2!=null) {{$register2->alternative_mobile_number}} @else N.A  @endif
					</td>
				</tr>
				
				<tr>
					<th>
						 	Emergency Contact Person
					</th>
					<td>
						@if($register2!=null) {{$register2->emergency_contact_person }} @else N.A  @endif
					</td>
					<th>
						Emergency Contact Person Name
					</th>
					<td>
						@if($register2!=null) {{$register2->emergency_contact_person_name}} @else N.A  @endif
					</td>
				</tr>
				
				
				<tr>
					<th>
						 Emergency Contact Person Number
					</th>
					<td>
						@if($register2!=null) {{$register2->emergency_contact_person_number}} @else N.A  @endif
					</td>
					<th>
						Profile  Image
					</th>
					<td>
						@if($register2!=null) <img src="{{asset($register2->profile)}}" style="height:150px; width:150px;"> @else N.A  @endif
					</td>
				</tr>
				
				
				
				
            </tbody>
        </table>
		<div>
		<h4 class="m-3">Other Detail</h4>
		</div>
		<?php $register3=DB::table('regiter3')->where('user_id',$user->id)->orderby('id','desc')->first();?>
				
		 <table class="table table-bordered table-striped">
            <tbody>
					
				<tr>
					<th>
						 Relationship
					</th>
					<td>
						@if($register3!=null) {{$register3->relationship}} @else N.A  @endif
					</td>
					<th>
						First Name
					</th>
					<td>
						@if($register3!=null)  {{$register3->first_name}} @else N.A  @endif
					</td>
				</tr>
				
				<tr>
					<th>
						Middle Name
					</th>
					<td>
						@if($register3!=null) {{$register3->middle_name}} @else N.A  @endif
					</td>
					<th>
						Last Name
					</th>
					<td>
						@if($register3!=null)  {{$register3->last_name}} @else N.A  @endif
					</td>
				</tr>
				
					<tr>
					<th>
						Gender
					</th>
					<td>
						@if($register3!=null) {{$register3->gender}} @else N.A  @endif
					</td>
					<th>
						Date Of Birth
					</th>
					<td>
						@if($register3!=null)  {{$register3->dob}} @else N.A  @endif
					</td>
				</tr>
				
				<tr>
					<th>
						 Phone
					</th>
					<td>
						@if($register3!=null) {{$register3->phone}} @else N.A  @endif
					</td>
					<th>
						Email
					</th>
					<td>
						@if($register3!=null)  {{$register3->email}} @else N.A  @endif
					</td>
				</tr>
				
				<tr>
					<th>
						Blood Group
					</th>
					<td>
						@if($register3!=null) {{$register3->blood_group}} @else N.A  @endif
					</td>
					 
				</tr>
				
				
				
            </tbody>
        </table>
		
		
		
		
		
		<div>
		<h4 class="m-3"> Habits & Life Style</h4>
		</div>
		<?php $habitslifestyle=DB::table('habits_lifestyle')->where('user_id',$user->id)->orderby('id','desc')->first();?>
				
		 <table class="table table-bordered table-striped">
            <tbody>
					
				<tr>
					<th>
						 Drinking Alchohol
					</th>
					<td>
						@if($habitslifestyle!=null) {{$habitslifestyle->drinking_alchohol}} @else N.A  @endif
					</td>
					<th>
						Smoking
					</th>
					<td>
						@if($habitslifestyle!=null)  {{$habitslifestyle->smoking}} @else N.A  @endif
					</td>
				</tr>
				
				<tr>
					<th>
						 Excercise
					</th>
					<td>
						@if($habitslifestyle!=null) {{$habitslifestyle->excercise}} @else N.A  @endif
					</td>
					<th>
						Water Intake
					</th>
					<td>
						@if($habitslifestyle!=null)  {{$habitslifestyle->water_intake}} @else N.A  @endif
					</td>
				</tr>
				<tr>
			  <th>
						Food Habits 
					</th>
					<td>
						@if($habitslifestyle!=null)  {{$habitslifestyle->food_habits}} @else N.A  @endif
					</td>
				</tr>
				
				
            </tbody>
        </table>
		
		
		
		<div>
		<h4 class="m-3"> General Health</h4>
		</div>
		<?php $general_health=DB::table('general_health')->where('user_id',$user->id)->orderby('id','desc')->first();?>
				
		 <table class="table table-bordered table-striped">
            <tbody>
					
				<tr>
					<th>
						 Height
					</th>
					<td>
						@if($general_health!=null) {{$general_health->height}} @else N.A  @endif
					</td>
					<th>
						Weight
					</th>
					<td>
						@if($general_health!=null)  {{$general_health->weight}} @else N.A  @endif
					</td>
				</tr>
				
				 
				 
				
				
            </tbody>
        </table>
		
		
		<div>
		<h4 class="m-3">Family History</h4>
		</div>
		<?php $family_history=DB::table('family_history')->where('user_id',$user->id)->orderby('id','desc')->first();?>
				
		 <table class="table table-bordered table-striped">
            <tbody>
					
				<tr>
					<th>
						 Relation Ship
					</th>
					<td>
						@if($family_history!=null) {{$family_history->relationship}} @else N.A  @endif
					</td>
					<th>
						Disease 1
					</th>
					<td>
						@if($family_history!=null)  {{$family_history->disease1}} @else N.A  @endif
					</td>
				</tr>
				<tr>
					
					<th>
						Disease 2
					</th>
					<td>
						@if($family_history!=null)  {{$family_history->disease2}} @else N.A  @endif
					</td>
				</tr>
				
				 
				 
				
				
            </tbody>
        </table>
		
		
		<div>
		<h4 class="m-3">Medical Upload</h4>
		</div>
		<?php $uploadmedical=DB::table('uploadmedical')->where('user_id',$user->id)->orderby('id','desc')->get();
		$uploadmedicals=DB::table('uploadmedical')->where('user_id',$user->id)->orderby('id','desc')->first();
		
		?>
				
		 <table class="table table-bordered table-striped">
            <tbody>
				@if($uploadmedicals!=null)
				@foreach($uploadmedical as $ds)
				<tr>
					<th>
						 Detail 
					</th>
					<td>
						@if($ds!=null) <a href="{{asset($ds->pre)}}" target="_blank">view </a>@else N.A  @endif
					</td>
					 
				</tr>
				@endforeach
				@endif
				 
				
				
            </tbody>
        </table>
		<div>
		<h4 class="m-3">Prescription Upload</h4>
		</div>
		<?php $uploadpre=DB::table('uploadpre')->where('user_id',$user->id)->orderby('id','desc')->get();
		$uploadpres=DB::table('uploadpre')->where('user_id',$user->id)->orderby('id','desc')->first();
		
		?>
				
		 <table class="table table-bordered table-striped">
            <tbody>
				@if($uploadpres!=null)
				@foreach($uploadpre as $ds)
				<tr>
					<th>
						 Detail 
					</th>
					<td>
						@if($ds!=null) <a href="{{asset($ds->pre)}}" target="_blank">view </a>@else N.A  @endif
					</td>
					 
				</tr>
				@endforeach
				@endif
				 
				
				
            </tbody>
        </table>
		@else
		
		 <table class="table table-bordered table-striped">
            <tbody>
					
				<tr>
					<th>
						 Name
					</th>
					<td>
						@if($user!=null) {{$user->name}} @else N.A  @endif
					</td>
					<th>
						Email
					</th>
					<td>
						@if($user!=null)  {{$user->email}} @else N.A  @endif
					</td>
					</tr>
				<tr>
					<th>
						Mobile
					</th>
					<td>
						@if($user!=null)  {{$user->mobile}} @else N.A  @endif
					</td>
					<?php $doc=DB::table('doctors_detail')->where('user_id',$user->id)->orderby('id','desc')->first(); ?>
					<th>
						Qualification
					</th>
					<td>
						@if($doc!=null)  {{$doc->qualification}} @else N.A  @endif
					</td>
				</tr>
				<tr>
					<th>
						Present Address
					</th>
					<td>
						@if($doc!=null)  {{$doc->present_address}} @else N.A  @endif
					</td>
					<th>
						Permanent Address
					</th>
					<td>
						@if($doc!=null)  {{$doc->permanent_address}} @else N.A  @endif
					</td>
					
					
				</tr>
				<tr>
					<th>
						Indian medical council reg id
					</th>
					<td>
						@if($doc!=null)  {{$doc->reg_id}} @else N.A  @endif
					</td>
					<th>
						Addhar Number
					</th>
					<td>
						@if($doc!=null)  {{$doc->aadhar}} @else N.A  @endif
					</td>
				</tr>
				
				
				<tr>
					<th>
						Addhar Image
					</th>
					<td>
						@if($doc!=null)  <img src="{{asset($doc->aadhar_image)}}" style="height:150px; width:150px;">@else N.A  @endif
					</td>
					<th>
						Pan
					</th>
					<td>
						@if($doc!=null) {{$doc->pan}}@else N.A  @endif
					</td>
					
				</tr>
		
		
		    </tbody>
        </table>
		@endif
		
		
    </div>
</div>
</section>
</div>

@endsection