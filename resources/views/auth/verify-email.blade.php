@extends('layouts.welcome')

<!DOCTYPE HTML>
<html>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        <nav class="fh5co-nav" role="navigation">
            <!-- <div class="top-menu"> -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card text-center">
                                <div class="card-header text-black">{{ __('Verifikasi Alamat Email Anda') }}</div>
                
                                <div class="card-body">
                                    @if (session()->has('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('Link verifikasi baru telah dikirimkan, silakan check alamat email Anda.') }}
                                        </div>
                                    @endif
                
                                    <p class="text-black">{{ __('Silakan check email Anda untuk link verifikasi email.') }}</p>
                                    <a href="{{ route('verification.send') }}" class="btn btn-danger">Kirim Ulang Link Verifikasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </nav>
        <br>

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
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>