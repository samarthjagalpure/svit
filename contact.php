<?php
include("header.php");
?>
    <title>Contact Us</title>
	
<body>
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

<div id="banner-area" style="margin-top: 10%;">
    <img class="img-responsive" style="width: 100%;" src="images/dept_banner/1.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        <!--	<h2>Department of Information Technology</h2> -->
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container" style="margin-top: -5%;">
		<div class="container">

			<div class="row">
	    		<div class="col-md-7">
                                <!--action= "contact-form.php" -->
	    			<form id="contact-form" action="" method="post" role="form">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Full Name</label>
								<input class="form-control" name="name" id="name" placeholder="Enter Full Name" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Contact Number</label>
									<input class="form-control" name="mobile" id="mobile" 
									placeholder="Enter Mobile Number" type="number" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control" name="subject" id="subject" 
									placeholder="Enter Subject" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit">Send Message</button> 
						</div>
					</form>
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3>Contact Details</h3>
                                        <p style="font-size: ">Swami Vivekanand Institute Of Technology Polytechnic, Solapur</p>
			    		<br>
			    		<p><i class="fa fa-home info"></i>  Gat No. 16/2, Solapur-Barshi Road, A/P. Khed, Taluka- North Solapur. Khed,  Solapur Maharashtra India - 413255.</p>
						<p><i class="fa fa-phone info"></i>  +919545553801 </p>
						<p><i class="fa fa-phone info"></i>  +917767003372 </p>
						<p><i class="fa fa-envelope-o info"></i>principal@svitsolapur.org</p>
						
    				</div>
	    		</div>
	    	</div>

		</div><!--/ container end -->
            <div class="container">
            <div class="row">
                <h3>Swami Vivekanand Institute Of Technology Polytechnic, Solapur</h3>
                <div class="col-md-9 col-sm-7" id="map"></div>
            </div>
			
			
			
			
            </div>
	</section><!--/ Main container end -->
 <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var sveri = {lat: 17.655065, lng: 75.369153};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: sveri});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: sveri, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVzrFCNhNYJwQ1r-5UEYMM38OkSzLlV54&callback=initMap">
	
	
	
	
    </script>
	
	
	
	
</body>
<?php
    include("footer.php");
?>
