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
                                <li class="active"><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                                <li><a href="{{ url('login') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            <!-- </div> -->
        </nav>

        <div id="fh5co-timeline">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline animate-box">
                            <li class="timeline-heading text-center animate-box">
                                <div><h3>Sejarah Bank Sampah Resik</h3></div>
                            </li>
                            <li class="animate-box timeline-unverted">
                                <div class="timeline-badge"><i class="icon-genius"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">World Cleanup Day</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Bersamaan dengan berjalannya kegiatan WCD dan juga iuran kebersihan yang terus meningkat, ketua RT 04 memiliki ide untuk mendirikan bank sampah.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge"><i class="icon-genius"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Rapat Rukun Tetangga</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Ketua RT mengutus pemuda-pemudi untuk membangun bank sampah di lingkungan RT 04.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box timeline-unverted">
                                <div class="timeline-badge"><i class="icon-genius"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Bank Sampah Resik</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Pada bulan November 2021 berdirilah Bank Sampah Resik.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge"><i class="icon-genius"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Saung Citongtut</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Pada bulan Januari 2022, dibangun sebuah saung sebagai lokasi kegiatan masyarakat lingkungan RT 04, termasuk kegiatan yang dilakukan Bank Sampah Resik.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box timeline-unverted">
                                <div class="timeline-badge"><i class="icon-genius"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">20 Nasabah</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Diawal berdirinya Bank Sampah Resik, jumlah nasabah tidak lebih dari 20 nasabah. Saat ini nasabah Bank Sampah Resik mencapai 90 nasabah.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge"><i class="icon-genius"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Website Bank Sampah Resik</h3>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Dengan bantuan mahasiswa KKN dari IPB, terbentuklah website resmi Bank Sampah Resik.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
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