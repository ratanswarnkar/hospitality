@include('layouts.header')

	
	
<section class="page-section main-content">
<article class="left-part">
<div class="container">
<!--heading section-->
<div class="common-content">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

<!--package name-->
<h3>Kerala Backwaters Tour Packages</h3>

<!--overview-->
<p>Kerala’s backwaters are the main attraction of the state and actually are an ideal way to enjoy the picturesque beauty of perfect landscapes. Kerala’s backwaters contribute to nearly half of the state, forming a water network extending about 900 km. Dozens of lakes, canals, inlets, and rivers come together to create the stunning landscape which leaves so many tourists mesmerized.</p>


<span id="text">
<p>Cruising through the backwaters of Kerala is one of the most memorable and romantic experiences that you definitely be going to enjoy, and this is why it should not be missed. Kerala backwater tour is the seamless way to enjoy this backwater landscape.</p>

<p>From the dazzling backwaters of Alleppey to those of Kasargod, from enchanting backwaters of Cochin to Kovalam,  there are a bundle of options on the list to choose from. All the places are equally romantic and loaded with rich natural beauty. </p>


</span>

<div class="btn-container">
<button id="toggle">+ Read More</button>
</div>
</div>
</div>
			
			
			
			
			
			
			
			
			
			
<!---hidden form --->			
<form name="enqForm" action="../enquiry.php" method="POST">
<input type="hidden" name="httprefrer" value="https://www.b2bhospitalityindia.com/tour-packages-india/kerala-backwaters-tour.html">
<input type="hidden" name="title" id="title" value="">
<input type="hidden" name="query_type" value="Tour">
</form>
			
			
			
<div class="row">
<div class="hot-page2-alp-con">
<!--LEFT LISTINGS-->

<!--END LEFT LISTINGS-->
<!--RIGHT LISTINGS-->
<div class="col-md-12 hot-page2-alp-con-right">
<div class="hot-page2-alp-con-right-1">
<!--LISTINGS-->
<div class="row">

							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
<!--LISTINGS START-->
<div class="row">
<div class="col-md-12 col-sm-6 col-xs-12">
<div class="hot-page2-alp-r-list">
<div class="col-md-4 hot-page2-alp-r-list-re-sp">


<!--link of image-->
<a href="#">

<div class="hot-page2-hli-1">

<!--image path-->
<img src="../images/tourintro/kerala-backwaters-package.jpg" alt=""> </div>

</a>
</div>
<div class="col-md-4">
<div class="trav-list-bod">

<!--package name link-->
<a href="#">

<!--package name-->
<h4>Kerala Backwaters Package</h4></a>

<!--destinations covered-->
<p>Cochin - Alleppey - Kumarakom - Cochin</p>

<!-- duration -->
<p> 03 Nights / 04 Days</p>

</div>
</div>
<div class="col-md-4">
<div class="col-md-12">

<!--Price of package-->
<p class="price-request">Price On Request</p>

</div>
<div class="col-md-12">
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="hot-page2-alp-ri-p3 tour-alp-ri-p3" >

<!-- detial page link-->
<!-- <a href="../trips-to-india/kerala-backwaters-package.html" class="hot-page2-alp-quot-btn">View Details</a> -->

</span></div>
</div>
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
<span class="hot-list-p3-4">

<!--enquiry link-->
<a href="{{ asset('enquiry') }}" class="hot-page2-alp-quot-btn">Enquiry Now</a>


</span></div></div>
</div>
</div>
<div>

</div>
</div>
</div>
<!--END LISTINGS-->
<!--LISTINGS START-->
<div class="col-md-12 col-sm-6 col-xs-12">
<div class="hot-page2-alp-r-list">
<div class="col-md-4 hot-page2-alp-r-list-re-sp">


<!--link of image-->
<a href="#">

<div class="hot-page2-hli-1">

<!--image path-->
<img src="../images/tourintro/kerala-backwater-tour-kumarakom.jpg" alt=""> </div>

</a>
</div>
<div class="col-md-4">
<div class="trav-list-bod">

<!--package name link-->
<a href="#">

<!--package name-->
<h4>3 Days Kerala Backwaters in Kumarakom</h4></a>

<!--destinations covered-->
<p>Cochin – Kumarakom – Allepey - Cochin</p>

<!-- duration -->
<p>02 Nights / 03 Days</p>

</div>
</div>
<div class="col-md-4">
<div class="col-md-12">

<!--Price of package-->
<p class="price-request">Price On Request</p>

</div>
<div class="col-md-12">
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="hot-page2-alp-ri-p3 tour-alp-ri-p3" >

<!-- detial page link-->
<!-- <a href="../trips-to-india/kerala-backwater-tour-kumarakom.html" class="hot-page2-alp-quot-btn">View Details</a> -->

</span></div>
</div>
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
<span class="hot-list-p3-4">

<!--enquiry link-->
<a href="{{ asset('enquiry') }}" class="hot-page2-alp-quot-btn">Enquiry Now</a>


</span></div></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--END LISTINGS-->
<!--SLIDER-->
	@include('themes.comman.index')

@include('layouts.footer')


		<script type="text/javascript">
  $(document).ready(function() {
  $("#toggle").click(function() {
    var elem = $("#toggle").text();
    if (elem == "+ Read More") {
      //Stuff to do when btn is in the read more state
      $("#toggle").text("- Read Less");
      $("#text").slideDown();
    } else {
      //Stuff to do when btn is in the read less state
      $("#toggle").text("+ Read More");
      $("#text").slideUp();
    }
  });
});
    </script>
	<link rel='stylesheet' id='slick-css-css'  href='../css1/slider/slick.min.css' type='text/css' media='all' />
            <script type='text/javascript' src='../js1/slider/slick.min.js'></script>
            <script type='text/javascript' src='../js1/slider/custom.js'></script>
	<!--========= Scripts ===========-->
	<script src="../js1/jquery-latest.min.js"></script>
	<script src="../js1/bootstrap.js"></script>
	<script src="../js1/custom.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	</body>

	</html>