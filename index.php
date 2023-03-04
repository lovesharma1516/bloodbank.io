<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center"><b>Excuses never save a life, but blood donation does</b></p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Gwadar" >Gwadar</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (KPK)"></optgroup><option value="Karak" >Karak</option><option value="Mansehra" >Mansehra</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swat" >Swat</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Bahawalpur" >Bahawalpur</option><option value="Gujranwala" >Gujranwala</option><option value="Lahore" >Lahore</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sialkot" >Sialkot</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Karachi" >Karachi</option><option value="Hyderabad" >Hyderabad</option><option value="Nawabshah" >Nawabshah</option><option value="Badin" >Badin</option><option value="Ghotki" >Ghotki</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: red; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							<b>We found that donors desire to help a family member or a friend in need of blood was the most cited motivator for blood donation in this study followed by a positive attitude of staff at the donor clinic, the desire to help other people, and a reminder to donate when there is a shortage of blood.

							Your donation will go to save countless lives and so is appreciated, time and time again. I hope you know how much your blood is a gift to another's life. Thank you kindly for your donation.</b>

						</p>
						<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Blood Pressure</h3>
								<img src="img/img1.jpg" alt="Our Vission" class="img img-responsive" width="300" height="300">
								<p class="text-center">
									<b>Excuses Never Save a Life, but Blood Donation does.</b>
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Blood Storing</h3>
								<img src="img/img2.jpg" alt="Our Vission" class="img img-responsive" width="300" height="300">
								<p class="text-center">
									<b>Blood Donation is very Important for both Donors as well as Receiver!</b>
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Blood Donation</h3>
								<img src="img/img3.jpg" alt="Our Vission" class="img img-responsive" width="300" height="300">
								<p class="text-center">
									<b>Giving blood may lower your risk of suffering a heart attack. </b>
								</p>
							</div>
   			 		</div>

 			</div>

 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>