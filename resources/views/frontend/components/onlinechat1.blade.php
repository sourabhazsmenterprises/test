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

  <form action="{{url('symptoms-submit2')}}" method="Post">
	@csrf
		<section class="contact-content container-fluid" style="margin-bottom:50px;">
			<div class="row">
			<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Symptoms</label>
					<input type="text" class="form-control" name="symptoms[]" list="sk">
					<datalist id="sk">
						<option>Body Pain</option>
						<option>Headache</option>
						<option>Fever</option>


						</datalist>
					</div>
				
				</div>
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">From</label>
					<input type="date" name="from[]" class="form-control">
				 
					</div>
				
				</div>
				
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Till</label>
					<input type="date" name="till[]" class="form-control">
				 
					</div>
				
				</div>
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Explain your problem</label>
					<textarea  cols="40" rows="2" name="explain_your_problem[]" style="border-radius: 4px;"></textarea>
				 
					</div>
				
				</div>
				
				
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Symptoms</label>
					<input type="text" class="form-control" name="symptoms[]"  list="sks">
					<datalist id="sks">
						<option>Body Pain</option>
						<option>Headache</option>
						<option>Fever</option>


						</datalist>
					</div>
				
				</div>
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">From</label>
					<input type="date" name="from[]"  class="form-control">
				 
					</div>
				
				</div>
				
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Till</label>
					<input type="date" name="till[]" class="form-control">
				 
					</div>
				
				</div>
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Explain your problem</label>
					<textarea  cols="40" rows="2" name="explain_your_problem[]" style="border-radius: 4px;"></textarea>
				 
					</div>
				
				</div>
				
			 
			</div>
			
			
			
			
			
			
			
			
			
			<div class="row" id="sectionview" style="display:none;">
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Symptoms</label>
					<input type="text" class="form-control" name="symptoms[]" list="sk">
					<datalist id="sk">
						<option>Body Pain</option>
						<option>Headache</option>
						<option>Fever</option>


						</datalist>
					</div>
				
				</div>
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">From</label>
					<input type="date" name="from[]" class="form-control">
				 
					</div>
				
				</div>
				
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Till</label>
					<input type="date" name="till[]" class="form-control">
				 
					</div>
				
				</div>
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Explain your problem</label>
					<textarea  cols="40" rows="2" name="explain_your_problem[]" style="border-radius: 4px;"></textarea>
				 
					</div>
				
				</div>
			<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Symptoms</label>
					<input type="text" class="form-control" name="symptoms[]" list="sk">
					<datalist id="sk">
						<option>Body Pain</option>
						<option>Headache</option>
						<option>Fever</option>


						</datalist>
					</div>
				
				</div>
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">From</label>
					<input type="date" name="from[]" class="form-control">
				 
					</div>
				
				</div>
				
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Till</label>
					<input type="date" name="till[]" class="form-control">
				 
					</div>
				
				</div>
				
				<div class="col-md-3"> 
				
				<div class="form-group">
					<label style="font-size:22px; font-weight:400;">Explain your problem</label>
					<textarea  cols="40" rows="2" name="explain_your_problem[]" style="border-radius: 4px;"></textarea>
				 
					</div>
				
				</div>
				
			</div>
			
			
			
			
					<div class="row">
				<div class="col-md-6  ">
					<input class="btn btn-info mr-2" onclick="showdfu()" value=" Add more symptoms" style="margin-right:10px;">
						<input  class="btn btn-info" onclick="showbutton()" value="Submit ">
				</div>
				<div class="col-md-2 text-center">
					<a class="btn btn-info" href="{{url('chat-direct')}}">Chat directly</a>
				</div>
			</div>	
</section>
					<section class="contact-content" id="chatbutton" style="margin-bottom:50px;display:none;">
			
					<div class="row">
				<div class="col-md-3">
						</div>
						
						<div class="col-md-8">
							<div style="border:2px solid #c1c1c1;padding:20px;">
								<h2>What did you do fo above sysmptoms</h2>
								 <p><input type="radio"  name="sysmptoms" onclick="this.form.submit()"> Visited any clinic/hospital/doctor</p> 
								<p><input type="radio" name="sysmptoms"> Did some self medication</p>
								<p><input type="radio" name="sysmptoms"> Did not take medical assistance</p>
							</div>
						</div>
						
						
						</div>
</section>
</form>
<script>
	function showbutton(){
		$("#chatbutton").toggle();
	}
	function showdfu(){
		$("#sectionview").show();
	}
</script>