@extends('layouts.welcome')

<!DOCTYPE HTML>
<html>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

	@extends('layouts.welcome-nav')

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/saung.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>Kumpulkan, Pisahkan, Uangkan</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-featured-menu" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Memilah Sampah Menjadi 19 Jenis</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Sampah yang kita buang sekaligus mungkin tidak berharga apapun, akan tetapi jika kita dapat memilah sampah dengan baik, dapat menjadi sesuatu yang memiliki nilai harga.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="{{ asset('images/1. Kardus.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Box/Kardus</h3>
						<span class="fh5co-price">Rp2700</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/2. Duplex.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Duplex</h3>
						<span class="fh5co-price">Rp1000</span>	
					</div>
				</div>
				{{-- <div class="clearfix visible-sm-block visible-xs-block"></div> --}}
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="{{ asset('images/3. Botol Bening.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Botol Bening</h3>
						<span class="fh5co-price">Rp1500</span>	
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/4. Gelas Plastik.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Gelas Plastik Bening</h3>
						<span class="fh5co-price">Rp2000</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="{{ asset('images/5. Ember.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Emberan</h3>
						<span class="fh5co-price">Rp1000</span>	
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/6. Kaleng.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Kaleng</h3>
						<span class="fh5co-price">Rp1700</span>	
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="{{ asset('images/7. Kaleng Aluminium.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Armo</h3>
						<span class="fh5co-price">Rp7000</span>	
					</div>
				</div>
				{{-- <div class="clearfix visible-sm-block visible-xs-block"></div> --}}
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/8. Kresek.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Asoy</h3>
						<span class="fh5co-price">Rp500</span>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="{{ asset('images/9. Styrofoam.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Sterofoam</h3>
						<span class="fh5co-price">Rp800</span>	
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/10. Botol Kaca.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Beling</h3>
						<span class="fh5co-price">Rp100</span>	
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="{{ asset('images/11. Kertas HVS.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Kertas HVS</h3>
						<span class="fh5co-price">Rp1500</span>	
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/12. Plastik PE.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Plastik PE</h3>
						<span class="fh5co-price">Rp3500</span>
					</div>
				</div>
			</div>
			<div class="row">
				{{-- <div class="clearfix visible-sm-block visible-xs-block"></div> --}}
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="{{ asset('images/13. Besi.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Besi</h3>
						<span class="fh5co-price">Rp3500</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/14. Tembaga.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Tembaga</h3>
						<span class="fh5co-price">Rp60000</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="{{ asset('images/14. Tembaga.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Tembaga Bakar</h3>
						<span class="fh5co-price">Rp30000</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/15. Baja Ringan.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Baja Ringan</h3>
						<span class="fh5co-price">Rp2000</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/16. Minyak.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Minyak Jelantah</h3>
						<span class="fh5co-price">Rp2000</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="{{ asset('images/17. Campuran.png')}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Campuran</h3>
						<span class="fh5co-price">Rp500</span>
					</div>
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
			<div class="d-flex justify-content-center">
				<img class="p-2" src="{{ asset('images/KKN.png') }}" alt="KKN" width="20%">
				<img src="{{ asset('images/Resik.png') }}" alt="Resik" width="20%">
				<img src="{{ asset('images/Nastari.png') }}" alt="Nastari" width="20%">
				<img src="{{ asset('images/Pemerintah Desa.png') }}" alt="Desa Cicadas" width="20%">
				<img src="{{ asset('images/Aqua.png') }}" alt="Aqua" width="20%">
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ URL::asset('js/jquery.min.js'); }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ URL::asset('js/jquery.easing.1.3.js'); }}"></script>
	<!-- Bootstrap -->
	<script src="{{ URL::asset('js/bootstrap.min.js'); }}"></script>
	<!-- Waypoints -->
	<script src="{{ URL::asset('js/jquery.waypoints.min.js'); }}"></script>
	<!-- Waypoints -->
	<script src="{{ URL::asset('js/jquery.stellar.min.js'); }}"></script>
	<!-- Flexslider -->
	<script src="{{ URL::asset('js/jquery.flexslider-min.js'); }}"></script>
	<!-- Main -->
	<script src="{{ URL::asset('js/main.js'); }}"></script>

	</body>
</html>

