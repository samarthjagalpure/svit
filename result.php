<?php
include("header.php");
?>
    <title>Result</title>
	
<body>
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

<div id="banner-area" style="margin-top: 10%;">
    <img class="img-responsive" style="width: 100%;" src="images/dept_banner/college-header.jpg" alt ="" />
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
	<div class="main_body_content_div">

        <div class="main_body_div">
	<div class="main_body_div_heading">
            <h2>MSBTE SUMMER / WINTER RESULT </h2>
           </div>

		<div class="container">

			<h2><a href="notice/ganesh.pdf">1.Computer Engineering Department Result</a></h2>
			<h2><a href="notice/ganesh.pdf">2.Information Technology Department Result</a></h2>
			<h2><a href="notice/ganesh.pdf">3.Civil Engineering Department Result</a></h2>
			<h2><a href="notics/ganesh.pdf">4.Mechanical Engineering Department Result</a></h2>
			<h2><a href="notice/ganesh.pdf">5.Electrical Engineering Department Result</a></h2>
			<h2><a href="notice/ganesh.pdf">6.Electronics Engineering Department Result</a></h2>
			
			
		</div><!--/ container end -->
            
			
			
			
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
    
	
	
	
</body>
<?php
    include("footer.php");
?>
