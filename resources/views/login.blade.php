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
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                                <li class="active"><a href="{{ url('login') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            <!-- </div> -->
        </nav>
        <br>
        <br>

        <div id="fh5co-login" class="fh5co-section animate-box">
            <div class="col-md-3">

            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible text-white" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X
                    </button>
                </div>
                @endif
                <form action="{{ route('user-login') }}" method="POST">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input name="email" type="email" id="email" class="form-control form-control-lg"
                        placeholder="Enter a valid email address" />
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>
            
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input name="password" type="password" id="password" class="form-control form-control-lg"
                        placeholder="Enter password" />
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>
            
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="{{ url('register') }}"
                            class="link-danger">Register</a></p>
                    </div>
                </form>
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