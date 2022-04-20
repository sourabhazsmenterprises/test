<style>
	 .active{
		
		background:#00bcd4;
		 color:white;
	}
	.skhover:hover{
		background:#00bcd4;
		color:white;
	}
</style>
<style>
body{
	background:#f2f2f2;
	}
</style>
<section class="contact-title text-center">
			<div class="contact-wrapper">
				<div class="container">
					<div class= "row">
						<div>
							<h1 class="headline">Post Your Symptoms</h1>
						</div>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p>Lorem ipsum dolor sit amet, consectetur </p>
						</div>
					</div>	
				</div>
			</div>
		</section>

 <div class="container-fluid">
	 
			
			
	 <h3 class="text-center">Please fill in the below form for the complaints that you mentioned below</h3>
</div>
		<section class="contact-content container-fluid" style="margin-bottom:50px;">
			<div class="row">
				<div class="col-md-4">
					 <div class="form-group">
						 <label style="font-size:18px; font-weight:400;text-align:left">Symptom 1</label>
						 <input type="text"   style=" float:right;width:300px;height:32px;">
					</div>
				</div>
				
				<div class="col-md-4">
					 <div class="form-group">
						 <label style="font-size:18px; font-weight:400;text-align:left">Symptom 2</label>
						 <input type="text"  style=" float:right;width:300px;height:32px;">
					</div>
				</div>
				
				<div class="col-md-4">
					 <div class="form-group">
						 <label style="font-size:18px; font-weight:400;text-align:left">Symptom 3</label>
						 <input type="text"  style=" float:right;width:300px;height:32px;">
					</div>
				</div>
				
				
			</div>
			<hr style="color:#c1c1c1;border-top: 2px solid #c1c1c1;">
</section>
	<section class="container-fluid" style="margin-bottom:50px;">
	<div class="row">
		<div class="col-md-4"  >
			<div >
			<p style="padding:30px;" id="visits1" class="skhover active" onclick="visit1()">Visit 1</p>
			
			<p style="padding:30px;" id="visits2" class="skhover" onclick="visit2()">Visit 2</p>
			<p style="padding:30px;" id="visits3" class="skhover" onclick="visit3()">Visit 3</p>
			</div>
		</div>
	
		<div class="col-md-8 " style="border-left:2px solid #c1c1c1; height:100%;" >
			<form action="{{url('visit-submit')}}" method="post">
				@csrf
			<div id="visit1">
				<input type="hidden" name="visit_type" value="visit1">
			<h3>Visit 1</h3>
				<div class="row">
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Type</label>
				<div  class="col-md-9">
				<select class=" form-control " name="type">
					<option>choose</option>
					<option>Hospital</option>
					<option>Clinic</option>
					<option>Doctor</option>
				 	
				</select>
				</div>
			</div>
					</div>
				
						
						
			 
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Place</label>
				<div  class="col-md-9">
				<select class="form-control " name="place" >
					<option>choose</option>
				 	
				</select>
				</div>
			</div>
					</div>
				</div>
			
				
				<div class="row">
					<div class="col-md-6">
				
			<div class="form-group text-center  row">
				<label class="col-md-3 text-right">Date</label>
					<div  class="col-md-9">
				<input type="date" class="form-control "  name="dates" >
				</div>
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Upload    prescription</label>
				<div  class="col-md-9">
				<input type="file" class="form-control " name="upload_prescription"  >
				</div>
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Diagnostic Test1</label>
				<div  class="col-md-9">
				<input type="text" class="form-control " name="diagnostic_test1" >
				</div>
					 
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Diagnostic Test2</label>
				<div  class="col-md-9">
				<input type="text" class="form-control " name="diagnostic_test2" >
				</div> 
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Upload Report</label>
				<div  class="col-md-9">
				<input type="file" class="form-control " name="upload_report" >
				</div>
			</div>
						</div>
					<div class="col-md-6">
						<div class="form-group text-center row">
							<label class="col-md-3  ">Medicine 1</label>
							<div  class="col-md-9">
							<select class="form-control " name="medicine1" >
								<option>choose</option>

							</select>
							</div> 
						</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row" >
				<label class="col-md-3  ">Medicine 2</label>
				<div  class="col-md-9">
				<select class="form-control " name="medicine2">
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Medicine 3</label>
				<div  class="col-md-9">
				<select class="form-control " name="medicine3" >
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Upload <span style="visibility:hidden ">repos</span></label>
				<div  class="col-md-9">
				<input type="file" class="form-control " name="upload"  >
				</div>
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Surgery 1</label>
				<div  class="col-md-9">
				<select class="form-control " name="surgery1" >
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Surgery 2</label>
				<div  class="col-md-9">
				<select class="form-control " name="surgery2">
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
					</div>
				</div>
			<button class="btn btn-info  " onclick="this.form.submit()">Submit</button>
			
			</div>
			
			</form>
			
			<form action="{{url('visit-submit')}}" method="post">
				@csrf
			<div id="visit2" style="display:none;">
				<input type="hidden" name="visit_type" value="visit2">
			<h3>Visit 2</h3>
				
				<div class="row">
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Type</label>
				<div  class="col-md-9">
				<select class=" form-control " name="type">
					<option>choose</option>
					<option>Hospital</option>
					<option>Clinic</option>
					<option>Doctor</option>
				 	
				</select>
				</div>
			</div>
					</div>
				
						
						
			 
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Place</label>
				<div  class="col-md-9">
				<select class="form-control " name="place" >
					<option>choose</option>
				 	
				</select>
				</div>
			</div>
					</div>
				</div>
			
				
				<div class="row">
					<div class="col-md-6">
				
			<div class="form-group text-center  row">
				<label class="col-md-3 text-right">Date</label>
					<div  class="col-md-9">
				<input type="date" class="form-control "  name="dates" >
				</div>
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Upload    prescription</label>
				<div  class="col-md-9">
				<input type="file" class="form-control " name="upload_prescription"  >
				</div>
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Diagnostic Test1</label>
				<div  class="col-md-9">
				<input type="text" class="form-control " name="diagnostic_test1" >
				</div>
					 
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Diagnostic Test2</label>
				<div  class="col-md-9">
				<input type="text" class="form-control " name="diagnostic_test2" >
				</div> 
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Upload Report</label>
				<div  class="col-md-9">
				<input type="file" class="form-control " name="upload_report" >
				</div>
			</div>
						</div>
					<div class="col-md-6">
						<div class="form-group text-center row">
							<label class="col-md-3  ">Medicine 1</label>
							<div  class="col-md-9">
							<select class="form-control " name="medicine1" >
								<option>choose</option>

							</select>
							</div> 
						</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row" >
				<label class="col-md-3  ">Medicine 2</label>
				<div  class="col-md-9">
				<select class="form-control " name="medicine2">
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Medicine 3</label>
				<div  class="col-md-9">
				<select class="form-control " name="medicine3" >
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Upload <span style="visibility:hidden ">repos</span></label>
				<div  class="col-md-9">
				<input type="file" class="form-control " name="upload"  >
				</div>
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Surgery 1</label>
				<div  class="col-md-9">
				<select class="form-control " name="surgery1" >
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Surgery 2</label>
				<div  class="col-md-9">
				<select class="form-control " name="surgery2">
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
					</div>
				</div>
			<button class="btn btn-info  " onclick="this.form.submit()">Submit</button>
			
			
			</div>
			</form>
			<form action="{{url('visit-submit')}}" method="post">
				@csrf
			<div id="visit3" style="display:none;">
				<input type="hidden" name="visit_type" value="visit3">
			<h3>Visit 3</h3>
				
				<div class="row">
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Type</label>
				<div  class="col-md-9">
				<select class=" form-control " name="type">
					<option>choose</option>
					<option>Hospital</option>
					<option>Clinic</option>
					<option>Doctor</option>
				 	
				</select>
				</div>
			</div>
					</div>
				
						
						
			 
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Place</label>
				<div  class="col-md-9">
				<select class="form-control " name="place" >
					<option>choose</option>
				 	
				</select>
				</div>
			</div>
					</div>
				</div>
			
				
				<div class="row">
					<div class="col-md-6">
				
			<div class="form-group text-center  row">
				<label class="col-md-3 text-right">Date</label>
					<div  class="col-md-9">
				<input type="date" class="form-control "  name="dates" >
				</div>
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Upload    prescription</label>
				<div  class="col-md-9">
				<input type="file" class="form-control " name="upload_prescription"  >
				</div>
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Diagnostic Test1</label>
				<div  class="col-md-9">
				<input type="text" class="form-control " name="diagnostic_test1" >
				</div>
					 
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Diagnostic Test2</label>
				<div  class="col-md-9">
				<input type="text" class="form-control " name="diagnostic_test2" >
				</div> 
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Upload Report</label>
				<div  class="col-md-9">
				<input type="file" class="form-control " name="upload_report" >
				</div>
			</div>
						</div>
					<div class="col-md-6">
						<div class="form-group text-center row">
							<label class="col-md-3  ">Medicine 1</label>
							<div  class="col-md-9">
							<select class="form-control " name="medicine1" >
								<option>choose</option>

							</select>
							</div> 
						</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row" >
				<label class="col-md-3  ">Medicine 2</label>
				<div  class="col-md-9">
				<select class="form-control " name="medicine2">
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Medicine 3</label>
				<div  class="col-md-9">
				<select class="form-control " name="medicine3" >
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3 text-right">Upload <span style="visibility:hidden ">repos</span></label>
				<div  class="col-md-9">
				<input type="file" class="form-control " name="upload"  >
				</div>
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Surgery 1</label>
				<div  class="col-md-9">
				<select class="form-control " name="surgery1" >
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
			</div>
					<div class="col-md-6">
			<div class="form-group text-center row">
				<label class="col-md-3  ">Surgery 2</label>
				<div  class="col-md-9">
				<select class="form-control " name="surgery2">
					<option>choose</option>
				 	
				</select>
				</div> 
			</div>
					</div>
				</div>
			<button class="btn btn-info  " onclick="this.form.submit()">Submit</button>
			
			
			</div>
			
			</form>
			
			
			
			
		</div>
	
		</div> 
	</section>
					 
<script>
	function showbutton(){
		$("#chatbutton").toggle();
	}
	
	function visit1(){
		 
		$("#visits1").addClass("active");
		$('#visits2').removeClass( "active" );
		$('#visits3').removeClass( "active" );
		$("#visit1").show();
		$("#visit2").hide();
		$("#visit3").hide();
	}
	function visit2(){
		
		$("#visits2").addClass("active");
		$('#visits1').removeClass( "active" );
		$('#visits3').removeClass( "active" );
		$("#visit2").show();
		$("#visit3").hide();
		$("#visit1").hide();
		//alert('hdad');
	}
	
	function visit3(){
		
		$("#visits3").addClass("active");
		$('#visits2').removeClass( "active" );
		$('#visits1').removeClass( "active" );
		$("#visit3").show();
		$("#visit2").hide();
		$("#visit1").hide();
	}
</script>