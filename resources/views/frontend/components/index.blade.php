<section>
		<div class="page-content page-container" id="page-content">
			<div class="padding">
				<div class="row container-fluid">
					<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body" style="margin-top:50px;">
								 
								<div class="owl-carousel">
									<?php $da=DB::table('services')->where('deleted_at',null)->get();
									$dad=DB::table('services')->where('deleted_at',null)->first();
									
									?>
									@if($dad != null)
									@foreach($da as $ssa)
									
									<div class="item sk ">
										<a href="{{asset($ssa->link)}}"><center><img src="{{asset($ssa->image)}}" alt="image" class="img-fluid"/></center>	<h3 class="text-center">{{$ssa->name}}</h3>
										<p class="text-center sks">
											{!!$ssa->describtion!!}
											</p> </a></div>
									@endforeach
									@endif
									<!--<div class="item sk"><center> <img src="assets/img/expert.png" alt="image" class="img-fluid" /> </center> <h3 class="text-center">Ask Expert</h3>
										<p class="text-center sks">
											Be guided by the Experts for your medical needs
										</p></div>
									<div class="item sk ">  <center><img src="assets/img/emer.png" alt="image"  class="img-fluid"/> </center><h3 class="text-center">Emergency</h3>
										<p class="text-center sks">
											You need immediate medical attention &amp; we are Here
										</p></div>
									<div class="item sk"> <center><img src="assets/img/know.png" alt="image"  class="img-fluid" /> </center><h3 class="text-center">Knowledge Base</h3>
										<p class="text-center sks">
											Enlighted your knowledge &amp; how to manage a medical problem &amp; find know medical solution
										</p></div>
									<div class="item sk"> <center><img src="assets/img/plan.png" alt="image"  class="img-fluid" /> </center> <h3 class="text-center">Medical Planner</h3>
										<p class="text-center sks">
											Plan your medical calendar
										</p></div>
									<div class="item sk"> <center><img src="assets/img/p2p.png" alt="image"  class="img-fluid" /> </center> <h3 class="text-center">P2P</h3>
										<p class="text-center sks">
											Lets help other and get help by others.
										</p></div>
									<div class="item sk"> <center><img src="assets/img/service.png" alt="image"  class="img-fluid" /> </center> <h3 class="text-center">Service@Home</h3>
										<p class="text-center sks">
											Medicose at your door step at one click
										</p></div>
									<div class="item sk"> <center><img src="assets/img/track.png" alt="image"  class="img-fluid" /> </center><h3 class="text-center">Medical Track</h3>
										<p class="text-center sks">
											Track your medical reports, get live updates on your prescriptions, clinical findings &amp; medicines
										</p></div> -->
									 	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<section class= "heading-slider">
			<div id="starting-slider" class="owl-carousel owl-theme">
 <?php $ba=DB::table('banner_image')->where('deleted_at',null)->get();
		 $bad=DB::table('banner_image')->where('deleted_at',null)->first();
				$count=1;
			 		?>
									@if($bad != null)
									@foreach($ba as $sa)
			  	<div class="item">
			  		<div class="slider-{{$count}}" style="background: url({{asset($sa->image)}}) !important";>
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>{{$sa->tittle}}</h1>
			  							<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum dignissimos tempore ad, eos sint ullam </p>-->
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
				<?php $count++; ?>
				@endforeach
				@endif
			  <!--	<div class="item">
			  		<div class="slider-2">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>We're Caring</h1>
			  							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum dignissimos tempore ad, eos sint ullam </p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="item">
			  		<div class="slider-3">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>We're Responsible</h1>
			  							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum dignissimos tempore ad, eos sint ullam </p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>-->
			 
			</div>
		</section>

		<section class= "starting-text">
      		<div class="container">
      			<div class="row">
      				<div class="welcome">
        				<h2 class="welcome-title">Welcome To Our First Care  </h2>
        				<p class="welcome-txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
		        		<button class="welcome-btn">Read More</button>	
        			</div>
        		</div>
      		</div>
	  	</section>
		  
		<section class= "featured-service-content" style="background:#eee;">
			<div class="container">
				<div class= "row">
					<h2 class="headline text-center">Symptoms</h2>
				</div>
				<div class="row">
					<div class="sub-headline text-center">
						<p>Lorem ipsum dolor sit amet, consectetur </p>
					</div>
				</div>	
				<div class="row">
					 <?php $sa=DB::table('symptoms')->where('deleted_at',null)->get();
		 $sad=DB::table('symptoms')->where('deleted_at',null)->first();
				$count=1;
			 		?>
									@if($sad != null)
									@foreach($sa as $sas) 
					<div class="col-sm-3 service">
						<div class="row text-center">
							<div class="service-icon text-center">
		        				<img height="50px" src="{{asset($sas->image)}}">
		        			</div>
						</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">{{$sas->name}}</h3>
		        				
		        			</div>
	        			</div>
		 						
	        		</div>	<!-- col-sm-3 -->
@endforeach
					@endif
	        	<!--	<div class="col-sm-3 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<img   height="50px" src="assets/img/periodissue.jpg" width="50px">
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Period Issue</h3>
		        				 
		        			</div>
	        			</div>
		        			
	        		</div>	 col-sm-3 -->
	        		
	        	<!--	<div class="col-sm-3 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<img   height="50px" src="assets/img/Acne-Pimples.jpg" width="50px">
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Acne/Pimples</h3>
		        			 
		        			</div>
	        			</div>
		        			
	        		</div>	 col-sm-3 -->
	        	
	        	<!--	<div class="col-sm-3 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<img   height="50px" src="assets/img/Fever.jpg" width="50px">
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Fever</h3>
		        				 
		        			</div>
	        			</div>
		        			
	        		</div>	 col-sm-3 -->
	        		<!--<div class="col-sm-3 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<img   height="50px" src="assets/img/Depression.jpg" width="50px">
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Depression</h3>
		        				 
		        			</div>
	        			</div>
		        			
	        		</div>	 col-sm-3 -->
	        		<!-- <div class="col-sm-3 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<img   height="50px" src="assets/img/Diabetes.jpg" width="50px">
		        			</div>
	        			</div>
	        			<div class="row text-center">
		        			<div class="about-service">
		        				<h3 class="text-center">Diabetes</h3>
		        			 
		        			</div>
		        		</div>
	        		</div>	  col-sm-3 -->

				<!--	<div class="col-sm-3 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<img   height="50px" src="assets/img/Cough.jpg" width="50px">
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Cough</h3>
		        				 
		        			</div>
	        			</div>
		        			
	        		</div>
					<div class="col-sm-3 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<img  height="50px" src="assets/img/Hairfall.jpg" width="50px">
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Hairfall</h3>
		        			 
		        			</div>
	        			</div>
		        			
	        		</div> -->
				 
		        			
	        		</div>

				 
			</div>
		</section>
<section  >
			<div class= "container">
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<h2 class= "headline text-center">
						My Files
						</h2>
						<p class="sub-headline text-center">
							Lorem ipsum dolor sit amet, consectetur
						</p>
					</div>
				</div>
				
				<div class= "row">
					<div class= "col-lg-3 col-sm-6 col-xs-12">
						<div style="text-align:center">
							<i class="fa fa-briefcase" aria-hidden="true" style="font-size:40px;padding:10px;color:#00bcd4;"></i>
<br>
							<a href="">
							<button class="btn btn-primary skss" style="background:#00bcd4"> My Case </button>
							</a>
						</div>
						
					</div>
					<div class= "col-lg-3 col-sm-6 col-xs-12">
						<div style="text-align:center">
		 		<i class="fa fa-file-text-o" aria-hidden="true" style="font-size:40px;padding:10px;color:#00bcd4;"></i>
						<br>	<a href="">
							<button class="btn btn-primary skss" style="background:#00bcd4"> My Present Prescription </button>
							</a>
						</div>
						
					</div>
					<div class= "col-lg-3 col-sm-6 col-xs-12">
						
						<div style="text-align:center">
							<i class="fa fa-bar-chart" aria-hidden="true" style="font-size:40px;padding:10px;color:#00bcd4;"></i>
						<br>
							<a href="">
							<button class="btn btn-primary skss" style="background:#00bcd4"> My Diagnostic Reports </button>
							</a>
						</div>
					</div>
					<div class= "col-lg-3 col-sm-6 col-xs-12">
						<div style="text-align:center"> 
							<i class="fa fa-file" aria-hidden="true" style="font-size:40px;padding:10px;color:#00bcd4;"></i>
						<br>
							<a href="">
							<button class="btn btn-primary skss" style="background:#00bcd4"> My Medicines </button>
							</a>
						</div>
						
						
					</div>
					
				</div>
			</div>
			</section>
		
		<section id= "services" style="background:#eee;margin-top: 31px;">
			<div class= "container">
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<h2 class= "headline text-center">
						Hospitals
						</h2>
						<p class="sub-headline text-center">
							Lorem ipsum dolor sit amet, consectetur
						</p>
					</div>
				</div>
				<div class="owl-carousel" id="owasas">
					
					
						 <?php $ha=DB::table('hospital')->where('deleted_at',null)->get();
		 $had=DB::table('hospital')->where('deleted_at',null)->first();
				$count=1;
			 		?>
									@if($had != null)
									@foreach($ha as $has) 
								<div class="item"  >
				<div class= "row">
					
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="{{asset($has->image)}}" style="height:350px;" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">{{$has->name}}</h4>
								<p>{{$has->describtion}}</p>
								<a href="#" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
									</div>
					</div>
					@endforeach
					@endif
				<!--				<div class="item "  >
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/service2.jpg" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nulla necessitatibus adipisci consequatur explicabo provident officiis fugit. Nihil dolorem officiis.</p>
								<a href="#" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
									</div>
					</div>
								<div class="item   "  >
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/service3.jpg" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ipsum natus, odio quae! Ratione tempora accusantium explicabo tenetur, porro numquam.</p>
								<a href="#" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
									</div>
									</div>
											<div class="item   "  >
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/service4.jpg" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ipsum natus, odio quae! Ratione tempora accusantium explicabo tenetur, porro numquam.</p>
								<a href="#" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
									</div>
					</div>
								<div class="item   "  >
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/service5.jpg" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae nisi nostrum sunt cum, consequuntur asperiores, impedit voluptate eveniet modi quas.</p>
								<a href="#" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
									</div>
					</div>
								<div class="item   "  >
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/service6.jpg" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nulla necessitatibus adipisci consequatur explicabo provident officiis fugit. Nihil dolorem officiis.</p>
								<a href="#" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					</div>
												</div> -->
				</div>
			</div>
		</section>
		
		
		
		
		
		
		

<section>
		<div class="page-content page-container" >
			<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<h2 class= "headline text-center">
						Labs
						</h2>
						<p class="sub-headline text-center">
							Lorem ipsum dolor sit amet, consectetur
						</p>
					</div>
				</div>
			<div class="padding">
				<div class="row container-fluid">
					<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								 
								<div class="owl-carousel" id="owasa">
								 <?php $labs=DB::table('labs')->where('deleted_at',null)->get();
		 $labss=DB::table('labs')->where('deleted_at',null)->first();
				$count=1;
			 		?>
									@if($labss != null)
									@foreach($labs as $labsss)	<div class="item sk "  style="height:150px;"> <center><img src="{{asset($labsss->image)}}" alt="image" class="img-fluid" style="height:80px;width:80px;"/></center>	<h3 class="text-center">{{$labsss->name}}</h3>
									  </div>
									@endforeach
									@endif
							<!--		<div class="item sk"  style="height:150px;"><center> <img src="assets/img/labs.jpg" alt="image" class="img-fluid" style="height:80px;width:80px;" /> </center>  <h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;">  <center><img src="assets/img/labs.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;"/> </center><h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/labs.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center><h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/labs.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center><h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/labs.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center> <h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/labs.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center> <h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/labs.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center><h3 class="text-center">Lorem ipsum</h3></div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<section>
		<div class="page-content page-container" style="background:#eee;" >
			<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<h2 class= "headline text-center">
						Pharmacy
						</h2>
						<p class="sub-headline text-center">
							Lorem ipsum dolor sit amet, consectetur
						</p>
					</div>
				</div>
			<div class="padding">
				<div class="row container-fluid">
					<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								 
								<div class="owl-carousel" id="ousl">
										 <?php $pharmacy=DB::table('pharmacy')->where('deleted_at',null)->get();
		 $pharmacys=DB::table('pharmacy')->where('deleted_at',null)->first();
				$count=1;
			 		?>
									@if($pharmacys != null)
									@foreach($pharmacy as $pharmacysss)
									<div class="item sk "  style="height:150px;"> <center><img src="{{asset($pharmacysss->image)}}" alt="image" class="img-fluid" style="height:80px;width:80px;"/></center>	<h3 class="text-center">{{$pharmacysss->name}}</h3>
									  </div>
									@endforeach
									@endif
									<!--<div class="item sk"  style="height:150px;"><center> <img src="assets/img/pharme1.jpg" alt="image" class="img-fluid" style="height:80px;width:80px;" /> </center>  <h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;">  <center><img src="assets/img/pharme1.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;"/> </center><h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/pharme1.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center><h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/pharme1.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center><h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/pharme1.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center> <h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/pharme1.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center> <h3 class="text-center">Lorem ipsum</h3></div>
									<div class="item sk"  style="height:150px;"> <center><img src="assets/img/pharme1.jpg" alt="image"  class="img-fluid" style="height:80px;width:80px;" /> </center><h3 class="text-center">Lorem ipsum</h3></div> -->
									 	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--	<section id= "services">
			<div class= "container">
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<h2 class= "headline text-center">
						Health Feed
						</h2>
						<p class="sub-headline text-center">
							Lorem ipsum dolor sit amet, consectetur
						</p>
					</div>
				</div>
				
				<div class= "row">
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/healthfeed2.png" style="width:100%;height:250px;" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								 
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/healthfeed3.png" style="width:100%;height:250px;" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								 
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/healthfeed4.png" style="width:100%;height:250px;" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								 
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/healthfeed6.png" style="width:100%;height:250px;" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								 
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/healthfeed7.png" style="width:100%;height:250px;" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
							 
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/healthfeed8.png" style="width:100%;height:250px;" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Lorem ipsum</h4>
								 
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</section> -->
		<section class="  gray-bg" id="blog">
            <div class="container">
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<h2 class= "headline text-center">
						Blogs
						</h2>
						<p class="sub-headline text-center">
							Lorem ipsum dolor sit amet, consectetur
						</p>
					</div>
				</div>
                <div class="row">
						 <?php $blog=DB::table('blog')->where('deleted_at',null)->take(3)->get();
		 $blogs=DB::table('blog')->where('deleted_at',null)->first();
				$count=1;
			 		?>
									@if($blogs != null)
									@foreach($blog as $blogss)
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date"> <?php
$date=date_create($blogss->date);
echo date_format($date,"d M ");
?> </div>
                                <a href="#">
                                    <img src="{{asset($blogss->image)}}" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">{{$blogss->name}}</a></h5>
                                <p>{{$blogss->describtion}}</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					@endforeach
					@endif
                  <!--  <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">19 OCT</div>
                                <a href="#">
                                    <img src="assets/img/blog3.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">19 OCT</div>
                                <a href="#">
                                    <img src="assets/img/blog4.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>

