@include('pages.common.header')

    <!--End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Our <span>Club</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Club</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="sec-title centered">
				<div class="title" style="color: purple;"> Our Clubs</div>
				<h2 style="color: purple;">Join our club</h2>
				
			</div>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="contactform">
							<form method="post" action="" enctype="multipart/form-data">
							
								<div class="form-group">
									<h5>Ful name</h5>
									<input class="form-control" type="text" name="fulname" value="" placeholder="Fullname" required="">
								</div>
								
								 <div class="form-group">
					              <h5>Class</h5>
					              <select class="form-control" name="class" required="">
					                <option>Select Class</option>
					                  <option>Reception</option>
					                  <option>Pre-School</option>
					                  <option>Kindergarten 1</option>
					                  <option>Kindergarten 2</option>
					                <option>Elementary One Club</option>
					                <option>Elementary Two</option>
					                <option>Elementary Three</option>
					                <option>Elementary Four</option>
					                <option>Elementary Five</option>
					                
					              </select>
								</div>
								
								   <div class="form-group">
						              <h5>Select your Club</h5>
						              <select class="form-control" name="clubname" required="">
						                <option>Select Club</option>
						                <option>ICT Club</option>
						                <option>Music Club</option>
						                <option>Debate Club</option>
						                <option>Spellin Bee/Scrable Club</option>
						                <option>Karate Club</option>
						                <option>Drama Club</option>
						                <option>Danced Cultural Club</option>
						                <option>Math Club</option>
						                <option>Contemporary Club</option>
						                <option>Art Club</option>
						                <option>Table Tenis Club</option>
						                <option>ELC Chair Club</option>
						                <option>Jet Club</option>
						                <option>Red Cross Club</option>
						              </select>
						            </div>
								
								<div class="form-group">
									<h5>Age</h5>
									<input class="form-control" type="text" name="age" value="" placeholder="Age" required="">
								</div>
								<div class="form-group">
									<h5>Gender</h5>
									<select class="form-control" name="gender" required="">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								
								<div class="form-group">
									<h4>UPLOAD PASSPORD</h4>
                    				<input type="file" name="fileToUpload" id="fileToUpload" required="">
								</div>
								<div class="form-group">
									<h5>Club Leader's Name</h5>
									<input class="form-control" type="text" name="club_leader" value="" placeholder="Club Leader" required="">
								</div>
                               <div class="form-group">
								<button type="submit" class="btn btn-success">Submit</button>	
							</div>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="innercolumn">
							<img style="height: 600px; width: 100%;" class="img-responsive" src="images/resource/club.jpg" alt="">
							                                      
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- End Team Page Section -->
	
	@include('pages.common.footer')
