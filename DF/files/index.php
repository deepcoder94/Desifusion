<!DOCTYPE html>
<html>
<head>
	<title>Indifusion</title>
	  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		

	  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  

</head> 
<body>

	<div id="top"></div>
	<section id="homesec">
		<?php include 'navs/normal.php';?>
	<h1 id="title">Desi Fusion</h1>
	<div id="scrollsec">
	<img src="../images/arrow.gif">
	</div>
	</section>	
	<div id="parallax2"  class="abt">
		<div style="display: flex;flex-direction: row">
		<div style="display: flex;flex-direction: column;">
			<img src="https://images.unsplash.com/photo-1569174237922-5689ad487104?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" style="border:5px inset #ccc;margin:85px 19px;width: 50%;height: 43%" data-aos="fade-down-right">
			<img src="https://images.unsplash.com/photo-1569174237922-5689ad487104?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" style="border:5px inset #ccc;margin-top:-120px;margin-left: 249px;width: 53%;height: 45%" data-aos="fade-down-right">
		</div>
		<div style="height: 490px;width: 80%;margin-top: 20px;margin-right: 40px;margin-left: 20px" data-aos="fade-left">
			<h1 style="color:white;text-align: center;font-size: 60px">About us</h1>	
			<hr>
			<p style="color:white;margin-left: 20px;margin-top: 40px;font-size: 20px">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		</div>
		</div>
	</div>
	<div class="pinContainer">
		<div class="section2 panel" id="slidesec">
			<h1 id="titsec">TITLE</h1>
			<div>
			<img src="../images/1a.png" class="im21">
			<img src="../images/1a.png" class="im22">
			<img src="../images/1a.png" class="im23">
			<img src="../images/1a.png" class="im24">
			</div>
		</div>
 		<div class="section3 panel">
 			<h1 id="titsec">TITLE</h1>			
			<div style="margin-top: 60%;" class="tp">
			<img src="../images/1a.png" class="im31" style="margin-left: 120px;opacity: 0;">
			<img src="../images/1a.png" style="opacity: 0" class="im32" >
			<img src="../images/1a.png" style="opacity: 0" class="im33">
			<img src="../images/1a.png" style="opacity: 0" class="im34">
			</div> 			
 		</div>
		<div class="section4 panel" style="overflow: auto;">
			<h1 id="titsec">TITLE</h1>			
			<div style="" class="tp">
			<img src="../images/1a.png" class="im41" style="margin-left: 80px;opacity: 0;position: absolute;">
			<img src="../images/1a.png" style="margin-left: 80px;opacity: 0;position: absolute;" class="im42" >
			<img src="../images/1a.png" style="margin-left: 80px;opacity: 0;position: absolute;" class="im43">
			<img src="../images/1a.png" style="margin-left: 80px;opacity: 0;position: absolute;" class="im44">
			</div> 
		</div> 
	</div>
<div class='scrolltop'>
    <div class='scroll icon fa'><i class="fas fa-chevron-circle-up"></i></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- load your scripts -->
				<script type="text/javascript" src="../js/script.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>  <script>
   AOS.init();

$(document).ready(function(){

   // below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 700, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

}); 
});
  </script>
</body>
</html>