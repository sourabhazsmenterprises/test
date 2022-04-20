<style>
	.skwidth{
		width: 250px; margin-left: 390px;
	}
	
	@media only screen and (max-width: 800px) {
  .skwidth{
		width: 250px; margin-left: 10px;
	}
}
</style>

<section class="contact-title text-center">
			<div class="contact-wrapper">
				<div class="container">
					<div class= "row">
						<div>
							<h1 class="headline">Service@home</h1>
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

<section class="  text-center " id="serlast" style="margin-bottom:50px; display:none;">
 <div class="container" style=" font-family:times new roman, Helvetica, sans-serif; font-size: 20px; text-align: center;">
  <h2>Tell us the service that you need from the medical staffs, When they reach to your home ?</h2>
  <div class="col-md-6" style="margin-left: 250px;">
    
      <form class="form-horizontal ng-untouched ng-pristine ng-valid" novalidate="">
        <div class="form-group">
          <textarea class="  col-md-6" placeholder="Write your purpose....." rows="5" cols="25" style="width:700px;"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary " style="margin-left: 150px; background: #47b2d8;">Submit</button>
        </div>
      </form>
    
  </div>
</div>
</section>
		 
<section class="  text-center" id="serlasts" style="margin-bottom:50px;display:none;">
 <div class="container" style=" font-family:times new roman, Helvetica, sans-serif; font-size: 20px; text-align: center;">
  <h2>Tell us when you need the service ?</h2>
  <hr>
  <div class="col-md-6" style="margin-left: 250px;">
    
      <form action="/action_page.php" class="form-horizontal ng-untouched ng-pristine ng-valid" novalidate="">
          <div class="form-group">
              <label class="control-label col-sm-4" for="email">Date:</label>
              <div class="col-sm-5">
                <input class="form-control" id="email" placeholder="dd/mm/yyyy" type="date">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Time:</label>
              <div class="col-sm-5">          
                <input class="form-control" id="pwd" name="pwd" placeholder="tt:mm:ss" type="time">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Contact person:</label>
              <div class="col-sm-5">          
                <input class="form-control" id="pwd" name="pwd" placeholder="Name of the person" type="text">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Firstcare Id:</label>
              <div class="col-sm-5">          
                <input class="form-control" id="pwd" name="pwd" placeholder="Firstcareid" type="text">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Patient Name:</label>
              <div class="col-sm-5">          
                <input class="form-control" id="pwd" name="pwd" placeholder="Patient Name" type="text">
              </div>
          </div>
          <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-6">
              <a class="btn btn-primary col-md-5" onclick="services()" style="float: right;background: #47b2d8;">Next</a>
            </div>
        </div>
        </form>
    
  </div>
</div>
</section>
		 

		<section class="  text-center" id="serlastss" style="margin-bottom:50px;">
<div class="container text-center">
	 
	<h3 style="">Doctors, nurses, paramedical staffs and medicines and other medical services will reach to your doorsteps.
We would make sure that the appropriate mediacal staffs and services arrives at your home in optimal time.
 </h3>
	 <hr>
	
	
	<div  class="" style=" margin-top:1%">
  
    
      <form   style="color: black; margin-left:500px; " class=" text-left">

        <div  class="radio">
          <label >
            <input  checked="" id="optionsRadios1" name="optionsRadios" type="radio" value="option1">Nurses
         </label>
      </div>
      <div  class="radio">
          <label >
            <input  id="optionsRadios1" name="optionsRadios" type="radio" value="option1">Doctors
          </label>
      </div>
      <div  class="radio">
          <label >
            <input  id="optionsRadios1" name="optionsRadios" type="radio" value="option1">Paramedical staffs
          </label>
      </div>
      <div  class="radio">
          <label >
            <input  id="optionsRadios1" name="optionsRadios" type="radio" value="option1">Diagnostic lab
          </label>
      </div>
      <div  class="radio">
          <label >
            <input  id="optionsRadios1" name="optionsRadios" type="radio" value="option1">Medicines
          </label>
      </div>
      <div  class="radio">
          <label >
            <input  id="optionsRadios1" name="optionsRadios" type="radio" value="option1">Physiotherapy
          </label>
      </div>
      
      <a  class="btn btn-primary" onclick="service()" style="width: 250px;background: #47b2d8">Next</a>
    </form>
    
  
  
  
</div>
</div> 
	
</section>


<script>
	function service(){
		document.getElementById('serlastss').style.display="none";
		document.getElementById('serlasts').style.display="block";
	}
	function services(){
		document.getElementById('serlastss').style.display="none";
		document.getElementById('serlasts').style.display="none";
		document.getElementById('serlast').style.display="block";
	}
	
</script>

