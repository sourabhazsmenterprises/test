@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Doctor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Doctor Create</li>
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
        {{ trans('global.create') }} Doctor
    </div>

    <div class="card-body">
        <form action="{{ url('doctorsregisterssubmit') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                     <div class="col-md-6">
						    <label>Name</label>
					<input type="text" placeholder="Name" name="name" id="register-show6" required class="form-control" style="color:black;  " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
					  </div>
					   <div class="col-md-6">
						      <label>Email</label>
					<input type="email" placeholder="Email" name="email"   required style="color:black;  " class="form-control" > 
					  </div>
					   <div class="col-md-6">
					   <label>Mobile</label>
						   <input type="text" placeholder="Mobile" name="mobile" required style="color:black;  " class="form-control"  onkeypress="return (event.charCode >47 && event.charCode < 58)    ||  (event.charCode==32) " >
						     </div>
					   <div class="col-md-6">
						      <label>Qualification</label>
					     <input type="text" placeholder="Qualification" name="qualification"  class="form-control"  required style="color:black;  "  >
						     </div>
					   <div class="col-md-6">
						      <label>Present address</label>
					  <input type="text" placeholder="Present address" name="present_address" class="form-control"   required style="color:black;  "  >
						     </div>
					   <div class="col-md-6">
						      <label>Permanent Address</label>
					 <input type="text" placeholder="Permnent Address" name="permanent_address" class="form-control"   required style="color:black;  "  >
					 
					
					     </div>
					   <div class="col-md-6">
						    <label>Pan</label>
					 <input type="text" placeholder="Pan" id="Pan" name="pan" style="color:black; " class="form-control"    required>
					 </div>
						  
						  <div class="col-md-6">
							    <label>Indian medical council reg id</label>
							   <input type="text" placeholder="Indian medical council reg id" class="form-control"  name="reg_id" style="color:black;  " required  onkeypress="return (event.charCode >47 && event.charCode < 58)    ||  (event.charCode==32) "  >
							 
						 </div>
					   <div class="col-md-6">
							 
							  <label>Addhar Image</label>
							 <input type="file" placeholder="Aadhar card" class="form-control" name="aadhar_image" style="color:black;  " required    >
						 </div>
						 	 
				   <div class="col-md-6">
							 
							  <label>Department</label>
							 <input type="text" placeholder="Department" class="form-control" name="department" style="color:black;  " required    >
						 </div>
						 	 
						 
					</div> 
					
					 
                   
            <div class="col-md-12 col-lg-12 col-sm-12">
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>

        </form>
    </div>
</div>
</section>

</div>
@endsection

 