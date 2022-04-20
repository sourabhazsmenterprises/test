<style>
 .skhover:hover{
	 border-bottom:2px solid black;
	}
</style>

<section class="contact-title text-center">
			<div class="contact-wrapper">
				<div class="container">
					<div class= "row">
						<div>
							<h1 class="headline">Medical Planer</h1>
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


		<section id="tops" class=" ">
<div class="container-fluid text-center">
	<h3 class="text-center">Choose the medical event that you wish to plan</h3>
	<hr>
	 
</div> 
	
</section>
		<div style="margin-bottom:100px;">
			<div class="row" >
					<div class="col-md-3 text-center"> 
						  
						<img src="{{asset('images/vitamins.png')}}" class="img-fluid" style=" " onclick="youselef()">
					 
					<h5 class="skhover"  onclick="youselef()">Medicine Intake</h5>

					</div>
					<div class="col-md-3 text-center"> 
		<img src="{{asset('images/injection.png')}}" class="img-fluid" style=" " onclick="others()">
					<h5 class="skhover" onclick="others()">Vaccination</h5>

					</div>
					<div class="col-md-3 text-center"> 
		<img src="{{asset('images/checkup.png')}}" class="img-fluid" style="  " onclick="generalpublic()">
					<h5 class="skhover" onclick="generalpublic()">CheckUp</h5>

					</div>
				<div class="col-md-3 text-center"> 
		 
					<p style="font-size:18px;background:#00bcd4 ;padding:20px;width:70%;border-radius:5px; " ><i class="fa fa-folder-open" style="padding:20px;background:#fff; border-radius:50%;"></i> My Plans</p>

					</div>
			</div>
			
	</div>

 