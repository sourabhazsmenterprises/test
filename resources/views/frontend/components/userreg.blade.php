<style>
	
 .navbar-default {
    background-color: #00bcd4 !important;
    border-color: #00bcd4 !important;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

 
a{
  text-decoration:none;
  color:#444444;
} 


.login-reg-panel{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
	text-align:center;
    width:70%;
	right:0;
    left:0;
    margin: auto;
    margin-top: auto;
height:300px;
background-color: #00bcd4;
margin-top: 25%;
   
    
    background-color: #00bcd4;
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:350px;
    position:absolute;
    top:-26px;
    width:50%;
    right:calc(50% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
    box-shadow: 0 0 15px 9px #00000096;
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;
}
.login-reg-panel{
    color:#B8B8B8;
}
h2{
    color:#fff;
}
p{
    color:#fff;
}
.login-reg-panel #label-login, 
.login-reg-panel #label-register{
    border:1px solid #fff;
    padding:5px 5px;
    width:150px;
    display:block;
    text-align:center;
    border-radius:10px;
    cursor:pointer;
    font-weight: 600;
    font-size: 18px;
    color:#fff;
}
.login-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    left:0;
    position:absolute;
    text-align:left;
}
.register-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    right:0;
    position:absolute;
    text-align:left;
    
}
.right-log{right:50px !important;}

.login-show, 
.register-show{
    z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:25px;
}
.show-log-panel{
    display:block;
    opacity:0.9;
}
 
.login-show input[type="text"], .login-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
	 
.login-show input[type="submit"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.login-show a{
    display:inline-block;
    padding:10px 0;
}

.register-show input[type="text"], .register-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.register-show input[type="radio"]{
    width:auto;
    display: block;
  
}
	.navbar-default .navbar-nav>li>a {
    color: #fff !important;
}
	.radio-inline, .checkbox-inline {
    display: inline-block;
    padding-left: 16px !important;
    margin-bottom: 0;
    font-weight: 400;
    vertical-align: middle;
    cursor: pointer;
}
.register-show input[type="submit"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.credit {
    position:absolute;
    bottom:10px;
    left:10px;
    color: #3B3B25;
    margin: 0;
    padding: 0;
    font-family: Arial,sans-serif;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 99;
}
a{
  text-decoration:none;
  color:#2c7715;
}
    .mk{
		display:block  !important;
	}
	.sk{
		display:none  !important;
	}
@media only screen and (max-width:1700px) {
	body{
	background:#fafafa;	
	}
	.mk{
		display:none  !important;
	}
	.sk{
		display:block !important;
	}
	 
	.container{
	display:block !important;
	}
	input{
    width: 100%;
    display: block;
    margin: 20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
	.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.form-control {
    height: 38px !important;
}
 .login-reg-panel{
    position: relative;
    top:50%;
    transform: translateY(-50%);
	text-align:center;
    width:100%;
	right:0;
    left:0;
    margin:auto;
    height:500px;
   
    
    background-color: #00bcd4;
}
	.skmobile{
	display:block;	
		
	}
	.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:450px;
    position:absolute;
    top:300px;
    width:auto;
    right:calc(20%);
    transition:0.3s ease-in-out;
    z-index:9999999999999;
    box-shadow: 0 0 15px 9px #00000096;
		display:none;
}
	.login-reg-panel #label-login, .login-reg-panel #label-register{
		border: 1px solid #fff !important;
 
width: 100%;
		 
		margin-top:50px;
display: block;
text-align: center;
border-radius: 10px;
cursor: pointer;
font-weight: 600;
font-size: 18px;
color: #000;
	}
	
}
    
    
</style>

 					    <form method="POST" id="register-form" action="{{ route('registersubmit') }}">
            @csrf
        
<!------ Include the above in your HEAD tag ---------->
<section class="  mt-5" style="margin-top:7%;">
<div class="container mt-3" style=" ">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3 m-auto">
				<div class="panel panel-login">
					 
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
						 
			
                <div class="register-show" id="register-show">
                    <h2 style="color:#000;" id="register-show1">REGISTER</h2>
					  @if(session('mymsg231') != null)
						<div class="alert alert-success   alert-dismissible">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 {{session('mymsg231')}}
</div>
					@endif
					 
					
				     <div class="row">
					    <div class="col-md-4">
                    <input type="text" placeholder="First Name" name="fist_name" id="register-show6" required style="color:black;  " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
					   </div>
					     <div class="col-md-4">
                    <input type="text" placeholder="Middle Name" name="middle_name" id="register-show6"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
					   </div>
					   <div class="col-md-4">
                    <input type="text" placeholder="Last Name" name="last_name" id="register-show6" style="color:black;  " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
					   </div>
					   
					</div>
					<select type="text" class="form-control" name="gender" id="register-show8"  required placeholder="Gender" style="width:100%;color:black ; ">
                        <option value="" style="color:#b5b5b5">Select Your Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="others">Others</option>
                        </select>
					 <div class="row">
					    <div class="col-md-6">
					 <input type="email" placeholder="Email" id="emails" name="email" style="color:black; " onchange="emailsend(this.value)"  required>
								<span id="already" style="color:red;display:none;"style="color:black;  " >Email Already Register</span> 
						 </div>
						 <div class="col-md-6">
							 <input type="text" placeholder="Mobile Number" maxlength="10"  pattern="[6789][0-9]{9}"name="mobile" style="color:black;  " required id="register-show7" onkeypress="return (event.charCode >47 && event.charCode < 58)    ||  (event.charCode==32) ">
						 </div>
						 	 
						 
					</div> 
					<select type="text" class="form-control" name="bloodground"  id="register-show8"  required placeholder="Gender" style="width:100%;color:black ; ">
                        <option value="" style="color:#b5b5b5">Select Your Blood Group</option>
                        <option value="A+">A+</option>
						 <option value="A-">A-</option>
                          
   
    <option value="B+">B+</option>
    <option value="B-">B-</option> 
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    
    <option value="O+">O+</option>
    <option value="O-">O-</option>
   
                         </select>
                     <input  type="date" name="dob"  placeholder="Date Of Birth" id="register-show10" required>
                    <input type="submit" id="otp" value="Next" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="display:none"  >
					 <input type="submit" id="otps" value="Next" class="btn btn-primary" onclick="emailsend(this.value)" style="display:block"  >

                </div>
              
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
 
			
			
			
			
			
			
        </div>



</section>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Step 2</h5>
      <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <input class="form-control" name="otp" onchange="otpverify(this.value)" maxlength="7" Placeholder="Enter a OTP"  onkeypress="return (event.charCode >47 && event.charCode < 58) ">
		  	<span id="otpsd" style="color:red;display:none;"style="color:black;  " >Please Enter Correct OTP</span> 
					
      </div>
      <div class="modal-footer">
		  <div class="form">
			  <button type="button" class="btn btn-primary"  id="otpnexthide" onlclick="otpverify(this.value)"  >Next</button>
          	<button type="button" class="btn btn-primary" id="otpnext" class="close" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#exampleModals" style="display:none" >Next</button>
		  </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Step 3</h5>
      <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="new-password" Placeholder="New Password">
		  <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="new-password"  Placeholder="Confirm Password">
      </div>
      <div class="modal-footer">
		  <div class="form">
          	<button type="submit" class="btn btn-primary "  onclick="this.form.submit()">Submit</button>
		  </div>
      </div>
    </div>
  </div>
</div>
  </form>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

        <script>
			$(document).ready(function() {
  				$("#starting-slider").owlCarousel({
  					autoPlay: 3000,
      				navigation : false, // Show next and prev buttons
      				slideSpeed : 700,
      				paginationSpeed : 1000,
      				singleItem:true
  				});
			});
		</script>


		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>
<script>


$(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.register-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  function doctors(){
	  document.getElementById('docid').style.display="block";
  }
	 function doctorsd(){
	  document.getElementById('docid').style.display="none";
  }
	
	
	function doctorss(){
	  document.getElementById('docids').style.display="block";
  }
	 function doctorsds(){
	  document.getElementById('docids').style.display="none";
  }
	
	
	function emailsend(id){
		var email=document.getElementById('emails').value;
      var xhr = new XMLHttpRequest();
      xhr.open('GET','{{ url("json-response") }}?email='+email,true);

      xhr.onload = function () {       
      var cat_id = JSON.parse(xhr.responseText);
   console.log(cat_id);
		 if(cat_id.data==1){
    document.getElementById('otp').style.display="block";
			 console.log('hel');
			  document.getElementById('otps').style.display="none";
			 console.log('hell');
	 alert('Mail send Please click Again Next Button');
    document.getElementById('already').style.display="none";
			 console.log('hello');
		 }
		  else{
			  document.getElementById('otp').style.display="none"; 
			   document.getElementById('already').style.display="block"; 
		  }
		  
}
xhr.send();
}


function otpverify(id){
	//alert('hello');
   var email= document.getElementById('emails').value;
	//console(email);
        var xhr = new XMLHttpRequest();
        xhr.open('GET','{{ url("json-response") }}?otp='+id+'&emailid='+email,true);
  
        xhr.onload = function () {       
        var cat_id = JSON.parse(xhr.responseText);
     console.log(cat_id);
           if(cat_id.otp==1){
			      alert('Otp Verified Please Click Again Next Button');
      document.getElementById('otpnext').style.display="block";
       document.getElementById('otpnexthide').style.display="none";
			    document.getElementById('otpsd').style.display="none"; 
               
   
           }
            else{
                document.getElementById('otpsd').style.display="block"; 
                 
            }
            
  }
  xhr.send();
  }
	
	
		function emailsends(id){
		
      var xhr = new XMLHttpRequest();
      xhr.open('GET','{{ url("json-response") }}?email='+id,true);

      xhr.onload = function () {       
      var cat_id = JSON.parse(xhr.responseText);
   console.log(cat_id);
		 if(cat_id.data==1){
    document.getElementById('otps').style.display="block";
    document.getElementById('alreadys').style.display="none";
		 }
		  else{
			  document.getElementById('otps').style.display="none"; 
			   document.getElementById('alreadys').style.display="block"; 
		  }
		  
}
xhr.send();
}


function otpverifys(id){
   var email= document.getElementById('emails').value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET','{{ url("json-response") }}?otp='+id+'&emailid='+email,true);
  
        xhr.onload = function () {       
        var cat_id = JSON.parse(xhr.responseText);
     console.log(cat_id);
           if(cat_id.otp==1){
      document.getElementById('otps').style.display="none";
      
           }
            else{
                document.getElementById('otps').style.display="block"; 
                 
            }
            
  }
  xhr.send();
  }
	
	
	$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		$("#register-show").addClass('show-log-panel');
		
		$("#register-show").show();
		$("#register-show1").show();
		$("#register-show2").show();
		
		$("#register-show3").show();
		$("#register-show4").show();
		$("#register-show5").show();
		$("#register-show6").show();
		$("#register-show7").show();
		$("#register-show8").show();
		$("#register-show9").show();
		$("#register-show10").show();
		$("#emails").show();
		$("#otps").hide();
		e.preventDefault();
	});

});
</script>
