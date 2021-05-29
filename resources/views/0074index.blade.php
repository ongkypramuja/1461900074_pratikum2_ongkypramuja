<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Pratikum0074</title>
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}" />
	
	<link rel="stylesheet" href="{{ URL::asset('css/fonts/stylesheet.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/fonts/fonts.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/animat/animate.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/fancybox/jquery.fancybox.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/nivo-lightbox/nivo-lightbox.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/themes/default/default.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/owl-carousel/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/owl-carousel/owl.theme.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/owl-carousel/owl.transitions.css') }}">
	
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" />
</head>
<body>

	<div class='preloader'><div class='loaded'>&nbsp;</div></div>
	
	<header id="home" class="header">
		<div class="main_menu_bg navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="nave_menu">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href="#">
							<div class="logo">
								<img src="images/logo_Universitas-17Agustus1945-Surabaya-thumb.png" height="56" width="94" alt="Image resize"/>
							</div>
						  </a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  
						  <ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#abouts">ABOUT ME</a></li>
							
						  </ul>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
					</div>	
				</div><!--End of row -->
				
			</div><!--End of container -->
			
		</div>
	</header> <!--End of header -->
	
	
	
	<section id="banner" class="banner">
		<div class="container">
			<div class="row">
				<div class="main_banner_area text-center">
					<div class="col-md-12 col-sm-12">
						<div class="single_banner_text wow zoomIn" data-wow-duration="1s">
							<h2>Halo selamat datang</h2>
							<h5>Di Web saya ongky pramuja</h5>
							
							<div class="separetor"></div>
						</div>
					</div>
					
					
					<div class="scrolldown">
						<a href="#abouts" class="scroll_btn"></a>
					</div>
				</div>
				
				
			</div>
		</div>
	</section><!-- End of Banner Section -->
	
	
	<section id="abouts" class="abouts">
		<div class="container">
			<div class="row">
				<div class="main_abouts_content">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_abouts wow fadeInLeft" data-wow-duration="1s">
							<h2>ABOUT ME</h2>
							<div class="separetor2"></div>
							<p>Nama     : Ongky pramuja</p>
							<p>Nbi        : 1461900074 </p>
                            <p>kelas      : Sore</p>
                            <p> Email     : Pramujaongky@gmail.com</p>
                            <p> No.telp   : 081937922650</p>
							
						</div>
					</div>
					
					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_abouts wow fadeInRight" data-wow-duration="1s">
							<img src="images/4x6.jpg" height="300" width="200" alt="Image resize" />
                            
						</div>
					</div>
				</div>
			</div>
		</div>

		<div>
		
		<table id="example" class="table table-striped table-bordered" style="width:100%; margin-top:20%">
        <thead>
            <tr>
				<th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>absen</th>
                <th>tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
			<tr>
			<td>{{ $loop->iteration }} </td>
            <td>{{ $item->nis }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->absen }}</td>
			<td>{{ \Carbon\Carbon::parse($item->tanggal)->format("d-m-Y") }}</td>
            </tr>
			@endforeach
        </tbody>	
		</div>
	</section>
       
    </table>
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
					<div class="main_footer text-center wow zoomIn" data-wow-duration="1s">
						<p>Universitas 17 agustus 1945 <i class="fa fa-heart"></i> by <a> Ongky Pramuja</a>Teknik Informatika</p>
					</div>
				</div>
			</div>
		</footer>

	<!-- STRAT SCROLL TO TOP -->
	
	<div class="scrollup">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>
	
	
	
	
	

	<script type="text/javascript" src="{{ URL::asset('js/jquery/jquery.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('js/fancybox/jquery.fancybox.pack.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('js/nivo-lightbox/nivo-lightbox.min.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
	
	
	
	
	
	<script type="text/javascript" src="{{ URL::asset('js/jquery-easing/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/wow/wow.min.js') }}"></script>
	<!--<script type="text/javascript" src="js/counterup/counterup.min.js"></script>-->
	
	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>-->
	<!--<script type="text/javascript" src="js/counterup/jquery.counterup.min.js"></script>-->
	
	
	<script type="text/javascript" src="{{ URL::asset('js/isotop/isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/isotop/isotop.function.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('js/masonry/masonry.min.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('js/mixitup/jquery.mixitup.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/masonry/masonry.pkgd.min.js') }}"></script>
</body>
</html>