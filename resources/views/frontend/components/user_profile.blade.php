<style>
	
	body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background:#00bcd4;
    background: #00bcd4
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}
.sidebar a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 19px;
    color: #000;
    display: block;
}
	.sidebar i {
    
    color:#00bcd4;
  
}
	
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
	@media screen and (max-width: 800px) {
	.openbtn{
		display:block !important;
		}
		.openbtn1{
		display:none;
		}
	}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}
	
</style>

<section class="contact-title text-center">
			<div class="contact-wrapper">
				<div class="container">
					<div class="row">
						<div>
							<h1 class="headline">Profile</h1>
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

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="  user-card-full">
                    <div class="row m-l-0 m-r-0">
						  <div class="col-sm-3">
							    <button class="openbtn" onclick="openNav()" style="text-align:left;display:none;margin:10px;">☰</button> 
							  <div class="sidebar openbtn1" id="openbtn1">
								    <button class="openbtn" id="openbtn2" onclick="closeNav()" style="float:right;display:none;margin:10px;">X</button> 
							 @if(Auth::user()->type=='1')
  <a href="#"><i class="fa fa-arrow-right"></i> My Files </a>
  <a href="#"><i class="fa fa-arrow-right"></i> My Cases</a>
  <a href="#"><i class="fa fa-arrow-right"></i> My Present Prescription</a>
  <a href="#"><i class="fa fa-arrow-right"></i> My Diagnostic Reports</a>
  <a href="#"><i class="fa fa-arrow-right"></i> My Medicines</a>
								  @endif
  <a href="#"><i class="fa fa-arrow-right"></i> Privacy Policy</a>
								  
  <a href="#"><i class="fa fa-arrow-right"></i> Legal</a>
  <a href="{{url('logout1')}}"><i class="fa fa-arrow-right"></i> logout</a>
</div>
						</div>
                        <div class="col-sm-3 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600">{{Auth::user()->name}}</h6>
								@if(Auth::user()->type=='1')
                                <p>id : {{Auth::user()->firstcare_id}}</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
								 
								<a href="{{url('register3')}}"><button >Add Members</button> </a>
								@endif
                            </div>
                        </div>
						
                        <div class="col-sm-6">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->email}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->mobile}}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Personal Detail</h6>
                                <div class="row">
									@if(Auth::user()->type==1)
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Gender</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->gender}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">ID</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->firstcare_id}}</h6>
                                    </div>
									@else
									<?php $doc=DB::table('doctors_detail')->where('user_id',Auth::user()->id)->orderby('id','desc')->first();?>
								<?php 	//dd($doc);?>
									<div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Qualification</p>
                                        <h6 class="text-muted f-w-400">@if($doc!=null){{$doc->qualification}}@endif</h6>
                                    </div>
									<div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Present address</p>
                                        <h6 class="text-muted f-w-400">@if($doc!=null){{$doc->present_address}}@endif</h6>
                                    </div>
									
									<div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Permanent address</p>
                                        <h6 class="text-muted f-w-400">@if($doc!=null){{$doc->permanent_address}}@endif</h6>
                                    </div>
									
									<div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Pan</p>
                                        <h6 class="text-muted f-w-400">@if($doc!=null){{$doc->pan}}@endif</h6>
                                    </div>
									<div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Addhar</p>
                                        <h6 class="text-muted f-w-400">@if($doc!=null){{$doc->aadhar}}@endif</h6>
                                    </div>
									@endif
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
	function openNav() {
  document.getElementById("openbtn1").style.display = "block";
		document.getElementById("openbtn2").style.display = "block";
 
}

function closeNav() {
   document.getElementById("openbtn1").style.display = "none";
	  document.getElementById("openbtn2").style.display = "none";

}
	
</script>