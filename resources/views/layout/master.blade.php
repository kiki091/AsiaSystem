<!DOCTYPE html>
<html lang="en">

	<head>
		@include('partials.head')
	</head>
	<body id="top">
		
		<div class="bgded overlay" style="background-image:url('themes/images/banner-landing.jpg');"> 

			@include('partials.navigation')

			<div id="pageintro" class="hoc clear"> 
			    <div class="flexslider basicslider">
			      	<ul class="slides">
			        	<li>
				          	<article class="text-centered" data-scrollreveal="enter bottom over 1s and move 300px after 0.3s">
				            	<h2 class="heading">HELLO !!</h2>
				            	<br/>
				            	<h2 class="heading">WE ARE ARS</h2>
				            	<p>
				            		We are a creative digital and branding agency experienced in bringing the right blend of technology and design. We develope customized interactive properties that help bussines embracing digital era, bringing to life their dynamic vision and brand values.
				            	</p>
				            
				          	</article>
			        	</li>
			        </ul>
			    </div>
			</div>
			<div id="main-top"></div>
		</div>
		
		@yield('content')

		@include('partials.footer')

		<div class="wrapper row5">
  			<div id="copyright" class="hoc clear"> 
    			<p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - 	<a href="#">Domain Name</a>
    			</p>
    			<p class="fl_right">Template by 
    				<a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>
    			</p>
  			</div>
		</div>

		<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
		
		<script type="text/javascript" src="{{asset('build/js/plugins.js')}}"></script>
	</body>
</html>