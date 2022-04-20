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
							<h1 class="headline">Online Chat</h1>
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


		<section class=" ">
<div class="container text-center">
	<h2 class="text-center">Free chat with live doctors and get free digital consulation</h2>
	<p style="border-bottom:1px solid #000"><i> You have a medical problem & we have a solution</i> </p>
	
</div> 
	
</section>
<form action="{{url('symptoms-submit1')}}" method="Post">
	@csrf
		<section class="contact-content" style="margin-bottom:50px;">
			<div class="row">
			<div class="col-md-6 text-center"><span style="font-size:22px;">Chat for Yourself <input type="radio" name="chat" onclick="showbutton()" value="self"></span>
				</div>
				<div class="col-md-6 text-center">
				<span style="font-size:22px; ">Chat for Others <select name="chatothers">
   <option >Select</option>
  <option >Father</option>
   <option >Mother</option>
   <option >Sister</option>
   <option >Brother</option>
   <option >Grandfather</option>
   <option >Grandmother</option>
  <option >Husband</option>
  <option >Wife</option>
  <option >Son</option>
  <option >Daughter</option>

</select>  <input type="radio" name="chat" onclick="showbutton()" value="others"></span>
				</div>
			</div>
						
</section>
					<section class="contact-content" id="chatbutton" style="margin-bottom:50px;display:none;">
			<div class="row">
				<div class="col-md-6 text-center">
						<button class="btn btn-info" type="submit">Tell Something about your health</button>
				</div>
				<div class="col-md-6 text-center">
					<a class="btn btn-info" href="{{url('chat-direct')}}">Chat directly with doctor</a>
				</div>
			</div>
						
						
			
</section>
</form>
<script>
	function showbutton(){
		$("#chatbutton").toggle();
	}
	
</script>