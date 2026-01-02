<?php
include("header.php");
?>
<title>SVERI COE Polytechnic</title>	
<div class="gap-60"></div>
<div id="banner-area" style="margin-top: 6%;">
    <img class="img-responsive" style="width: 100%;" src="images/dept_banner/onlineResources.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        <!--	<h2>Department of Information Technology</h2> -->
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->
<h1><center>Online Resources</center></h1>
 	<section id="main-container">
		<div class="container">
  <ul>
    <a href="https://nptel.ac.in/"><li>NPTEL</li></a>
    <a href="https://swayam.gov.in/"><li>SWAYAM</li></a>
    <a href="https://spoken-tutorial.org/"><li>Spoken Tutorial</li></a>
    <a href="https://www.khanacademy.org/"><li>Khan Academy</li></a>
    <a href="https://www.coursera.org/"><li>Coursera</li></a>
    <a href="https://in.udacity.com/"><li>Udacity</li></a>
    <a href="https://www.udemy.com/"><li>Udemy</li></a>
    <a href="https://www.edx.org/"><li>edX</li></a>
  </ul>
  </div>
  </section>
  <?php
    include("footer.php");
?>         
<script type="text/javascript"> 
    var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  
    var div = document.getElementById("college_info");
    if (mobile)
    { 
        div.style.display = "none";
        document.getElementById("home").style.marginTop = "-25px"; 
      //  alert("MOBILE DEVICE!!"); 
    } 
    else 
    {
        div.style.display = "block"; 
      //  alert("NOT A MOBILE DEVICE!!"); 
    }
 </script>