@extends('layouts.welcome')

<!DOCTYPE HTML>
<html>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        <nav class="fh5co-nav" role="navigation">
            <!-- <div class="top-menu"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center logo-wrap">
                            <div id="fh5co-logo"><a href="index.html">Bank Sampah Resik</a></div>
                        </div>
                        <div class="col-xs-12 text-center menu-1 menu-wrap">
                            <ul>
                                <li><a href="{{ url('') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li class="active"><a href="{{ url('contact') }}">Contact</a></li>
                                <li><a href="{{ url('login') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            <!-- </div> -->
        </nav>
        <br>
        <br>

        <div id="fh5co-contact" class="fh5co-section animate-box">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Don't be shy, let's chat.</h2>
                        <p>Untuk informasi lebih lanjut, dapat menekan tombol dibawah ini.</p>
                        <p><a href="https://wa.me/+62895333514147" class="btn btn-primary btn-outline">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>

        <footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; Bank Sampah Resik</small>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>