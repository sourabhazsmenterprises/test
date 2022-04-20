<style>
	label {
  display: inline-block;
  max-width: 100%;
margin: 8px;
  font-weight: 700;
}
	select{
	margin-bottom:20px;	
	}
 
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
	.register-show input[type="button"] {
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

 		<form action="{{url('submitdata')}}" method="post">		
        
<!------ Include the above in your HEAD tag ---------->
<section class="  mt-5" style="margin-top:7%;">
<div class="container mt-3" style=" ">
    	<div class="row">
			<div class="col-md-9 col-md-offset-2 m-auto">
				<div class="panel panel-login">
					 
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">

                <div class="register-show" id="register-show">
                   
		 				 
					
					<center>
						<h3 style="color:#000;" id="register-show1">Please given us the information about your health </h3>                     
						<h5 style="">Self Medical History</h5>
						
					</center>
					<hr>
					
					
						<div class="row">
					    <div class="col-md-4">
							<label style=" ">History of disease</label>
                    
					   </div>
					     <div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="disease" id="disease"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Diabetes">Diabetes</option>
						<option value="Blood pressure">Blood pressure</option>
						<option value="Jaundice">Jaundice</option>
						<option value="Tuberculosis">Tuberculosis</option>
						<option value="Hepatitis">Hepatitis</option>
						<option value="Thyroid issues">Thyroid issues</option>
						<option value="Heart disease">Heart disease</option>
						 	 </select>	 
					   </div>
							<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="disease1" id="disease1"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Diabetes">Diabetes</option>
						<option value="Blood pressure">Blood pressure</option>
						<option value="Jaundice">Jaundice</option>
						<option value="Tuberculosis">Tuberculosis</option>
						<option value="Hepatitis">Hepatitis</option>
						<option value="Thyroid issues">Thyroid issues</option>
						<option value="Heart disease">Heart disease</option>
						 	 </select>	 
					   </div>
							<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="disease2" id="disease2"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Diabetes">Diabetes</option>
						<option value="Blood pressure">Blood pressure</option>
						<option value="Jaundice">Jaundice</option>
						<option value="Tuberculosis">Tuberculosis</option>
						<option value="Hepatitis">Hepatitis</option>
						<option value="Thyroid issues">Thyroid issues</option>
						<option value="Heart disease">Heart disease</option>
						 	 </select>	 
					   </div>
					</div>
					
					<div class="row">
					    <div class="col-md-4">
							<label style="margin-top:20px;">Surgical History</label>
                    
					   </div>
					   	<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="surgical" id="surgical"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Limbs operation">Limbs operation</option>
						<option value="Eye surgery">Eye surgery</option>
						<option value="Abdominal surgery">Abdominal surgery</option>
						<option value="Cardiac Surgery">Cardiac Surgery</option>
						  	 </select>	 
					   </div>
							<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="surgical1" id="surgical1"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Limbs operation">Limbs operation</option>
						<option value="Eye surgery">Eye surgery</option>
						<option value="Abdominal surgery">Abdominal surgery</option>
						<option value="Cardiac Surgery">Cardiac Surgery</option>
						 	 </select>	 
					   </div>
							<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="surgical2" id="surgical2"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Limbs operation">Limbs operation</option>
						<option value="Eye surgery">Eye surgery</option>
						<option value="Abdominal surgery">Abdominal surgery</option>
						<option value="Cardiac Surgery">Cardiac Surgery</option>
						 	 </select>	 
					   </div>
				 
					 
					   
					</div>
					
					
					
					
					<div class="row">
					    <div class="col-md-4">
							<label style="margin-top:20px;">Known Allergies</label>
                    
					   </div>
					    	<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="Known" id="Known"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Dust allergy">Dust allergy</option>
						<option value="Perfume allergy">Perfume allergy</option>
						<option value="Protien allergy">Protien allergy</option>
						<option value="Cold allergy">Cold allergy</option>
						 	 </select>	 
					   </div>
							<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="Known1" id="Known1"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Dust allergy">Dust allergy</option>
						<option value="Perfume allergy">Perfume allergy</option>
						<option value="Protien allergy">Protien allergy</option>
						<option value="Cold allergy">Cold allergy</option>
						 	 </select>	 
					   </div>
							<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="Known2" id="Known2"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Dust allergy">Dust allergy</option>
						<option value="Perfume allergy">Perfume allergy</option>
						<option value="Protien allergy">Protien allergy</option>
						<option value="Cold allergy">Cold allergy</option>
						 	 </select>	 
					   </div>
					   
					   
					</div>
					
				 
					
				  <input type="submit" id="otp" value="Done" class="btn btn-primary mr-2" style="margin-right:5px;"  >
				
				
					<input type="button" id="otp" value="Next" onclick="disp()" class="btn btn-primary mr-2"  style="margin-right:5px;"  >
					  <input type="submit" id="otp" value="Previous" class="btn btn-primary mr-2" style="margin-right:5px;"   >
				  	  

                </div>
              
							</div>
							
							
							
							
							
							
							
							
							  <div class="register-show" id="register-show11" style="display:none">
                   
		 				 
					
					<center>
						<h3 style="color:#000;" id="register-show12">Please given us the information about your health </h3>                     
						<h5 style="">Family History</h5>
						
					</center>
					<hr>
					
					
						<div class="row">
					    <div class="col-md-4">
							<label style=" ">Choose Relationship</label>
                    
					   </div>
					     <div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="relationship1" id="relationship1"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						 	 </select>	 
					   </div>
							<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="relationship2" id="relationship2"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						 	 </select>	 
					   </div>
						 
					</div>
					
					<div class="row">
					    <div class="col-md-4">
							<label style="margin-top:20px;">Disease Name</label>
                    
					   </div>
					   	<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="disease21" id="disease21"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Diabetes">Diabetes</option>
						<option value="Blood pressure">Blood pressure</option>
						<option value="Jaundice">Jaundice</option>
						<option value="Tuberculosis">Tuberculosis</option>
						<option value="Hepatitis">Hepatitis</option>
						<option value="Thyroid issues">Thyroid issues</option>
						<option value="Heart disease">Heart disease</option>
						
						 	 </select>	 
					   </div>
							 
							<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="disease22" id="disease22"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Diabetes">Diabetes</option>
						<option value="Blood pressure">Blood pressure</option>
						<option value="Jaundice">Jaundice</option>
						<option value="Tuberculosis">Tuberculosis</option>
						<option value="Hepatitis">Hepatitis</option>
						<option value="Thyroid issues">Thyroid issues</option>
						<option value="Heart disease">Heart disease</option>
						 	 </select>	 
					   </div>
				 
					 
					   
					</div>
					
					
					
					
					<div class="row">
					    <div class="col-md-4">
							<label style="margin-top:20px;">Disease Name</label>
                    
					   </div>
					    	<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="disease31" id="disease31"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Diabetes">Diabetes</option>
						<option value="Blood pressure">Blood pressure</option>
						<option value="Jaundice">Jaundice</option>
						<option value="Tuberculosis">Tuberculosis</option>
						<option value="Hepatitis">Hepatitis</option>
						<option value="Thyroid issues">Thyroid issues</option>
						<option value="Heart disease">Heart disease</option>
						 	 </select>	 
					   </div>
							<div class="col-md-2">
                    <select type="text" placeholder="Last name" class="form-control" name="disease32" id="disease32"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option value="Diabetes">Diabetes</option>
						<option value="Blood pressure">Blood pressure</option>
						<option value="Jaundice">Jaundice</option>
						<option value="Tuberculosis">Tuberculosis</option>
						<option value="Hepatitis">Hepatitis</option>
						<option value="Thyroid issues">Thyroid issues</option>
						<option value="Heart disease">Heart disease</option>
						 	 </select>	 
					   </div>
						 
					   
					   
					</div>
					
				 
					
				  <input type="submit" id="otp" value="Done" class="btn btn-primary mr-2" style="margin-right:5px;"  >
				
				
					<input type="button" id="otp" value="Next" onclick="disps()" class="btn btn-primary mr-2"  style="margin-right:5px;"  >
					  <input type="button" id="otp" value="Previous" onclick="pre()" class="btn btn-primary mr-2" style="margin-right:5px;"   >
				  	  

                </div>
              
							</div>

						
						
						
						
						  <div class="register-show" id="register-show13" style="display:none">
                   
		 				 
					
					<center>
						<h3 style="color:#000;" id="register-show14">Please given us the information about your health </h3>                     
						<h5 style="">Habits & Lifestyle</h5>
						
					</center>
					<hr>
					
					
						<div class="row">
					    <div class="col-md-4">
							<label style=" ">Drinking Alchohol</label>
                    
					   </div>
					     <div class="col-md-8">
                    <select type="text" placeholder="Last name" class="form-control" name="alchohol" id="alchohol"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option>yes</option>
						<option>No</option>
						 	 </select>	 
					   </div>
					 	 
					</div>
					
					<div class="row">
					    <div class="col-md-4">
							<label style="margin-top:20px;">Smoking</label>
                    
					   </div>
					   	<div class="col-md-8">
                    <select type="text" placeholder="Last name" class="form-control" name="smoking" id="smoking"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						 
						<option>Choose</option>
						<option>yes</option>
						<option>No</option>
						 	 </select>	 
					   </div>
							 
							 
					 
					   
					</div>
					
					
					
					
					<div class="row">
					    <div class="col-md-4">
							<label style="margin-top:20px;">Excercise</label>
                    
					   </div>
					    	<div class="col-md-8">
                    <select type="text" placeholder="Last name" class="form-control" name="excercise" id="excercise"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
					 
						<option>Choose</option>
						<option>yes</option>
						<option>No</option>
						 	 </select>	 
					   </div>
					  
					</div>
							  
							  <div class="row">
					    <div class="col-md-4">
							<label style="margin-top:20px;">Water Intake</label>
                    
					   </div>
					    	<div class="col-md-8">
                    <select type="text" placeholder="Last name" class="form-control" name="water_intake" id="water_intake"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option>yes</option>
						<option>No</option>
						 	 </select>	 
					   </div>
					  
					</div>
							  
							  <div class="row">
					    <div class="col-md-4">
							<label style="margin-top:20px;">Food Habits</label>
                    
					   </div>
					    	<div class="col-md-8">
                    <select type="text" placeholder="Last name" class="form-control" name="food_habits" id="food_habits"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						<option>Choose</option>
						<option>yes</option>
						<option>No</option>
						 	 </select>	 
					   </div>
					  
					</div>
					
				 
					
				  <input type="submit" id="otp" value="Done" class="btn btn-primary mr-2" style="margin-right:5px;"  >
				
				
					<input type="button" id="otp" value="Next" onclick="dispss()" class="btn btn-primary mr-2"  style="margin-right:5px;"  >
					  <input type="button" id="otp" value="Previous" onclick="pres()" class="btn btn-primary mr-2" style="margin-right:5px;"   >
				  	  

                </div>
              
							</div>

						
						
						</div>
						
						
					  <div class="register-show" id="register-show15" style="display:none">
                   
		 				 
					
					<center>
						<h3 style="color:#000;" id="register-show16">Please given us the information about your health </h3>                     
						<h5 style="">General Health Info</h5>
						
					</center>
					<hr>
					
					
						<div class="row">
					    <div class="col-md-4">
							<label style="margin-top:27px ">Height</label>
                    
					   </div>
					     <div class="col-md-8">
                    <input type="number" placeholder="height" class="form-control" name="height" id="height"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
						 
						 	  
					   </div>
						 
						 
					</div>
					
					<div class="row">
					    <div class="col-md-4">
							<label style="margin-top:27px;">Weight</label>
                    
					   </div>
					   	<div class="col-md-8">
                    <input type="number" placeholder="Weight" class="form-control" name="weight" id="weight"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
 
					   </div>
						 
				 
					 
					   
					</div>
					 
					
				  <input type="submit" id="otp" value="Done" class="btn btn-primary mr-2" style="margin-right:5px;"  >
				
				
					<input type="button" id="otp" value="Next" onclick="dispsss()" class="btn btn-primary mr-2"  style="margin-right:5px;"  >
					  <input type="button" id="otp" value="Previous" onclick="press()" class="btn btn-primary mr-2" style="margin-right:5px;"   >
				  	  

                </div>
              
							</div>
	
				 </div>
							 
							
					  <div class="register-show" id="register-show17" style="display:none">
                   
		 				 
					
					<center>
						<h3 style="color:#000;" id="register-show18">Please given us the information about your health </h3>                     
						<h5 style="">Upload Medical Reports</h5>
						
					</center>
					<hr>
						 
					<div class="row">
						<div class="col-md-6">
							<button type="button" class="btn btn-default" onclick="upload()" value="">Upload Prescription</button>
							
							
							<div class="" id="prescription" style="display:none;" >
								<form action="{{url('register8submit')}}" method="post" enctype="multipart/form-data">
									@csrf
								<div class="row">
									
									<div class="col-md-4">
										<label>Date</label>
										
									</div>
									<div class="col-md-8">
										 <input type="date" placeholder="Weight" class="form-control" name="date" id="date"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
										
									</div>
									<div class="col-md-4">
										<label>Upload</label>
										
									</div>
									<div class="col-md-8">
										 <input type="file" placeholder="Weight" class="form-control" name="upload" id="upload"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
										
									</div>
								</div>
									
								<button class="btn btn-default" onclick="this.form.submit()">Submit</button> 
								</form>
							</div>
							
							
							
						</div>
						
						<div class="col-md-6">
							 
							<button type="button" class="btn btn-default" onclick="upload1()" value="">Upload Medical Reports</button>
							
							<div class="" id="prescriptionss" style="display:none;">
								<form action="{{url('register9submit')}}" method="post" enctype="multipart/form-data">
									@csrf
								<div class="row">
									
									<div class="col-md-4">
										<label>Date</label>
										
									</div>
									<div class="col-md-8">
										 <input type="date" placeholder="Weight" class="form-control" name="date" id="date"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
										
									</div>
									<div class="col-md-4">
										<label>Upload</label>
										
									</div>
									<div class="col-md-8">
										 <input type="file" placeholder="Weight" class="form-control" name="upload" id="upload"  style="color:black; " onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)  ||  (event.charCode==32) ">
										
									</div>
								</div>
									
								<button class="btn btn-default" onclick="this.form.submit()">Submit</button> 
								</form>
							</div>
							
							
							
							
						 
						</div>
						
					  </div>
					 
					
				 
					
				  <input type="submit" id="otp" value="Done" class="btn btn-primary mr-2" style="margin-right:5px;"  >
				
				
					 
					  <input type="button" id="otp" value="Previous" onclick="pre()" class="btn btn-primary mr-2" style="margin-right:5px;"   >
				  	  

                </div>
              
							 
			</div>
 

</section>

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
	function disp(){
	document.getElementById('register-show').style.display='none';
		document.getElementById('register-show11').style.display='block';
		var disease=document.getElementById('disease').value;
		var disease1=document.getElementById('disease1').value;
		var disease2=document.getElementById('disease2').value;
		
		var surgical=document.getElementById('surgical').value;
		var surgical1=document.getElementById('surgical1').value;
		var surgical2=document.getElementById('surgical2').value;
		
		var Known=document.getElementById('Known').value;
		var Known1=document.getElementById('Known1').value;
		var Known2=document.getElementById('Known2').value;
		
		
		
		
		var xhr = new XMLHttpRequest();
      xhr.open('GET','{{ url("register4submit") }}?disease='+disease+'&disease1='+disease1+'&disease2='+disease2+'&surgical='+surgical+'&surgical1='+surgical1+'&surgical2='+surgical2+'&Known='+Known+'&Known1='+Known1+'&Known2='+Known2,true);

      xhr.onload = function () {       
      var cat_id = JSON.parse(xhr.responseText);
   console.log(cat_id);
		 
		  
}
xhr.send();
		
		
	}
	
</script>
<script>
	function disps(){
	document.getElementById('register-show11').style.display='none';
		document.getElementById('register-show13').style.display='block';
		
		
				var relationship1=document.getElementById('relationship1').value;
		var relationship2=document.getElementById('relationship2').value;
		 
		var disease21=document.getElementById('disease21').value;
		var disease22=document.getElementById('disease22').value;
		 
		var disease31=document.getElementById('disease31').value;
		var disease32=document.getElementById('disease32').value;
		 
		
		
		
		var xhr = new XMLHttpRequest();
      xhr.open('GET','{{ url("register5submit") }}?relationship1='+relationship1+'&relationship2='+relationship2+'&disease21='+disease21+'&disease22='+disease22+'&disease31='+disease31+'disease32='+disease32,true);

      xhr.onload = function () {       
      var cat_id = JSON.parse(xhr.responseText);
   console.log(cat_id);
		 
		  
}
xhr.send();
		
	}
	
</script>
<script>
	function pre(){
	document.getElementById('register-show11').style.display='none';
		document.getElementById('register-show').style.display='block';
	}
	
</script>


<script>
	function press(){
		document.getElementById('register-show13').style.display='block';
		document.getElementById('register-show15').style.display='none';
	}
	
</script>
<script>
	function pre(){
		document.getElementById('register-show17').style.display='none';
		document.getElementById('register-show15').style.display='block';
	}
	
</script>
<script>
	function dispss(){
	document.getElementById('register-show13').style.display='none';
		document.getElementById('register-show15').style.display='block';
						var alchohol=document.getElementById('alchohol').value;
		var smoking=document.getElementById('smoking').value;
		 
		var excercise=document.getElementById('excercise').value;
		var water_intake=document.getElementById('water_intake').value;
		 
		var food_habits=document.getElementById('food_habits').value;
	 	
		
		
		var xhr = new XMLHttpRequest();
      xhr.open('GET','{{ url("register6submit") }}?drinking_alchohol='+alchohol+'&smoking='+smoking+'&excercise='+excercise+'&water_intake='+water_intake+'&food_habits='+food_habits,true);

      xhr.onload = function () {       
      var cat_id = JSON.parse(xhr.responseText);
   console.log(cat_id);
		 
		  
}
xhr.send();
		
	}
	
</script>
<script>
	function pres(){
	document.getElementById('register-show13').style.display='none';
		document.getElementById('register-show11').style.display='block';
	}
	
</script>
<script>
	function dispsss(){
	document.getElementById('register-show15').style.display='none';
		document.getElementById('register-show17').style.display='block';
			var height=document.getElementById('height').value;
		 
		var weight=document.getElementById('weight').value;
	 	
		
		
		var xhr = new XMLHttpRequest();
      xhr.open('GET','{{ url("register7submit") }}?height='+height+'&weight='+weight,true);

      xhr.onload = function () {       
      var cat_id = JSON.parse(xhr.responseText);
   console.log(cat_id);
		 
		  
}
xhr.send();
	 
	
	}
	
</script>
<script>
	function presss(){
	document.getElementById('register-show15').style.display='none';
		document.getElementById('register-show13').style.display='block';
	}
	
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
<script>
	function upload(){
		document.getElementById('prescriptionss').style.display="none";
		document.getElementById('prescription').style.display="block";
		
	}
	function upload1(){
		document.getElementById('prescription').style.display="none";
		document.getElementById('prescriptionss').style.display="block";
		
	}
</script>
