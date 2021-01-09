<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>

<?php
			$title = "Dhiyaa Rindza & Muhammad Kusyana";
			$calon_istri = "Dhiyaa Rindza Fauziyyah, S.I.Kom";
			$calon_suami = "Muhammad Kusyana Ramdan, S.I.Kom";
			$tanggal_nikah = "07 Maret 2021";
			$deskripsi_istri = "Kucing disebut juga kucing domestik atau kucing rumah adalah sejenis mamalia 
								karnivora dari keluarga Felidae. Kata kucing biasanya merujuk kepada kucing 
								yang telah dijinakkan, tetapi bisa juga merujuk kepada kucing besar seperti 
								singa dan harimau.";

			$deskripsi_suami = "Iguana adalah marga kadal yang hidup di daerah tropis Amerika Tengah, 
								Amerika Selatan, dan kepulauan Karibia. Kadal-kadal ini dideskripsikan 
								pertama kali oleh seorang ahli hewan berkebangsaan Austria, Josephus 
								Nicolaus Laurenti pada tahun 1768";
			$tanggal_tunangan = "09 Juni 2021";
			$tanggal_akad = "07 Maret 2021 at 08.00 - 10.00";
			$tanggal_resepsi = "07 Maret 2021 at 11.00 - 14.00";
			$alamat_resepsi = "Gedung Dinas Psikologi Angkatan Darat (DISPSIAD)<br/>
			Jl. Sangkuriang No. 17, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135";
			$alamat_akad = "Gedung Dinas Psikologi Angkatan Darat (DISPSIAD)<br/>
			Jl. Sangkuriang No. 17, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135";
			$alamat_tunangan= "Gedung Dinas Psikologi Angkatan Darat (DISPSIAD)<br/>
			Jl. Sangkuriang No. 17, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135";
		?>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>You're invited - The Wedding of <?php echo $title ?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- CUSTOM HERE -->

		

	<!-- END CUSTOM -->

	<!-- LOADER -->
    <div id="preloader">
		<div class="preloader pulse">
			<h3>The Wedding of<br/>Dhiyaa Rindza & Muhammad Kusyana</h3>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#story">Story</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
						<li><a class="nav-link" href="#wedding">Wedding</a></li>
                    </ul>
                </div> -->
				<audio id="player" src="backsound.mp3" autoplay></audio>
					<div> 
  						<button class="btn btn-success" onclick="document.getElementById('player').play()"><i class="fa fa-volume-up">
						</i></button> 
					</div>
            </div>
			<!-- <audio controls autoplay>
  						<source src="backsound.mp3" type="audio/mpeg">
				</audio> -->
        </nav>
	</header>
	<!-- End header -->
	
	<!-- Start Banner -->
	<div class="home-slider">
		<ul class="rslides">
			<li><img src="images/slider-01.jpg" alt=""></li>
			<li><img src="images/slider-02.jpg" alt=""></li>
			<li><img src="images/slider-03.jpg" alt=""></li>
		</ul>
		<div class="lbox-details">
			<h1>You are Invited</h1>
			<h2>The Wedding of</h2>
			<h1 style="font-size: xx-large;"><?php echo $calon_istri ?> <br/>&<br/><?php echo $calon_suami ?></h1>
			<br/>
			<div class="countdown main-time clearfix">
				<div id="timer">
					<h1 style="color: goldenrod;">Save the Date<br/> <?php echo $tanggal_nikah ?></h1><br/>
					<div id="days"></div>
					<div id="hours"></div>
					<div id="minutes"></div>
					<div id="seconds"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	<!-- Start About us -->
	<div id="about" class="about-box" >
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="title-box">
							<h2 style="color: goldenrod;">The Couple</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-m">
									<div class="about-img">
										<img class="img-fluid" src="images/about-img-01.jpg" alt="" />
									</div>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h2> <i class="fa fa-heart-o" aria-hidden="true"></i> <?php echo $calon_istri ?> <i class="fa fa-heart-o" aria-hidden="true"></i></h2>
								<p><?php echo $deskripsi_istri ?></p>
							</div>
						</div>
						<div class="row align-items-center about-main-info">
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-m">
									<div class="about-img">
										<img class="img-fluid" src="images/about-img-02.jpg" alt="" />
									</div>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h2> <i class="fa fa-heart-o" aria-hidden="true"></i> <?php echo $calon_suami ?> <i class="fa fa-heart-o" aria-hidden="true"></i></h2>
								<p><?php echo $deskripsi_suami ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->
	
	<!-- Start Story -->
	<div id="story" class="story-box main-timeline-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2 style="color: goldenrod;">Our Story</h2>
						<p>Disinilah cerita kami berawal, semua terjadi ketika ...</p>
					</div>
				</div>
			</div>
			
			<div class="timeLine">
				<div class="row">
					<div class="lineHeader hidden-sm hidden-xs"></div>
					<div class="lineFooter hidden-sm hidden-xs"></div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item" >
							<div class="caption">
								<div class="star center-block">
									<span style="color: #6E6E6E;" class="h3">03</span>
									<span>SEPT</span>
									<span>2014</span>
								</div>
								<div class="image">
									<img src="images/time-01.jpg" alt="" />
									<div class="title" style="background-color: black;">
										<h2 style="color: #6E6E6E;">First Meet <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">We met at the wedding of our close friends and immediately found a common language, so a year later our first date happened.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">03</span>
									<span>OKT</span>
									<span>2014</span>
								</div>
								<div class="image">
									<img src="images/time-02.jpg" alt="" />
									<div class="title">
										<h2 style="color: #6E6E6E;">First date <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">We met at the wedding of our close friends and immediately found a common language, so a year later our first date happened.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">22</span>
									<span>OKT</span>
									<span>2014</span>
								</div>
								<div class="image">
									<img src="images/time-02.jpg" alt="" />
									<div class="title">
										<h2 style="color: #6E6E6E;">In Relationship <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">We met at the wedding of our close friends and immediately found a common language, so a year later our first date happened.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">20</span>
									<span>DES</span>
									<span>2020</span>
								</div>
								<div class="image">
									<img src="images/time-03.jpg" alt="" />
									<div class="title">
										<h2 style="color: #6E6E6E;">Proposal <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">We met at the wedding of our close friends and immediately found a common language, so a year later our first date happened.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">03</span>
									<span>JAN</span>
									<span>2021</span>
								</div>
								<div class="image">
									<img src="images/time-04.jpg" alt="" />
									<div class="title">
										<h2 style="color: #6E6E6E;">Engagement <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">For 2 years of work as support engineer responsible about installing and maintenance SWIFT packages for banks. I gain a lot from it before i leave country.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">07</span>
									<span>MAR</span>
									<span>2021</span>
								</div>
								<div class="image">
									<img src="images/time-05.jpg" alt="" />
									<div class="title">
										<h2 style="color: #6E6E6E;">My Wedding <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">Since then i came to Austria as refugee far from my lovers and friends far a way escaping from wars and threats searching a new life that i didn't find until yet.</p>
								</div>
							</div>
						</div>

				</div>
			</div>
			
		</div>
	</div>
	<!-- End Story -->
	
	<!-- Start Family -->
	<!-- <div id="family" class="family-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Family</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-01.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Alonso Wiles </h4>
							<p>{ Leida’s Father }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-02.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Evon Wiles </h4>
							<p>{ Leida’s Mother }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-03.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Chris Wiles </h4>
							<p>{ Leida’s Brother }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-04.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Adina Wiles </h4>
							<p>{ Leida’s Sister }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-05.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Annetta Wiles </h4>
							<p>{ Leida’s Sister }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-06.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Ladonna Wiles </h4>
							<p>{ Leida’s Sister }</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Family -->
	
	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2 style="color: goldenrod;">Gallery</h2>
						<p>Dokumentasi foto mempelai</p>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="popup-gallery clearfix">
					<li>
						<a href="images/gallery-01.jpg">
							<img class="img-fluid" src="images/gallery-01.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-02.jpg">
							<img class="img-fluid" src="images/gallery-02.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-03.jpg">
							<img class="img-fluid" src="images/gallery-03.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-04.jpg">
							<img class="img-fluid" src="images/gallery-04.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-05.jpg">
							<img class="img-fluid" src="images/gallery-05.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-06.jpg">
							<img class="img-fluid" src="images/gallery-06.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-07.jpg">
							<img class="img-fluid" src="images/gallery-07.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-08.jpg">
							<img class="img-fluid" src="images/gallery-08.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Wedding -->
	
	<div id="wedding" class="wedding-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2 style="color: goldenrod;">The Wedding</h2>
						<p><i>Suatu kehormatan dan kebahagiaan bagi kami <br/>
						jika saudara/i dapat hadir untuk 
						memberikan doa dan restu <br/>
						kepada putra/i kami</i></p>
					</div>
				</div>
			</div>
			
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="serviceBox">
                        <div class="service-icon"><i class="flaticon-bachelorette-party"></i></div>
                        <h3 class="title">Tunangan Nikah</h3>
						<h4 class="font"><b><?php echo $tanggal_tunangan ?></b></h4>
                        <p class="description" style="color: a58e0a;">
							<?php 
								//echo $alamat_tunangan
							?>
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="serviceBox">
                        <div class="service-icon"><i class="flaticon-wedding"></i></div>
                        <h3 class="title">Akad Nikah</h3>
						<h4 class="font"><b><?php echo $tanggal_akad ?></b></h4>
                        <p class="description" style="color: a58e0a;">
							<?php 
								echo $alamat_akad
							?>
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="serviceBox">
                        <div class="service-icon"><i class="flaticon-reception-bell"></i></div>
                        <h3 class="title">Resepsi Nikah</h3>
						<h4 class="font"><b><?php echo $tanggal_resepsi ?></b></h4>
                        <p class="description" style="color: a58e0a;">
							<?php 
								echo $alamat_resepsi
							?>
                        </p>
                    </div>
                </div><br/>
				<div class="col-lg-12">
				<br/>
					<div class="title-box">
						<h2 style="color: goldenrod;">Lokasi Acara</h2>
					</div>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.057109226803!2d107.6062867150489!3d-6.883762695025707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6ecbfffffff%3A0x40c481a35f0eafa3!2sDepartment%20of%20Psychology%20TNI%20AD!5e0!3m2!1sen!2sid!4v1610003698854!5m2!1sen!2sid" width="1366" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
				</iframe>
            </div>
		</div>
	</div>
	
	<!-- End Wedding -->
	
	<!-- Start Events -->
	<!-- <div id="events" class="events-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Events</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="images/event-img-01.jpg" alt="" />
						</div>
						<h2>2 June 2018 Engagement</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="#">See location <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="images/event-img-02.jpg" alt="" />
						</div>
						<h2>3 June 2018 Main Ceremony </h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="#">See location <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="images/event-img-03.jpg" alt="" />
						</div>
						<h2>4 June 2018 Wedding party </h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="#">See location <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Events -->
	
	<!-- Start Contact -->
	<!-- <div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contact wth us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<select class="custom-select d-block form-control" id="guest" required data-error="Please select an item in the list.">
								  <option disabled selected>Number Of Guest*</option>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<select class="custom-select d-block form-control" id="event" required data-error="Please select an item in the list.">
								  <option disabled selected>I Am Attending*</option>
								  <option value="1">All events</option>
								  <option value="2">Wedding ceremony</option>
								  <option value="3">Reception party</option>
								</select>
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Contact -->
	
	<!-- Start Footer -->
	
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; <?php echo date('Y'); ?> 
						Design By : <a href="https://html.design/">Gunadhi Pratama</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/responsiveslides.min.js"></script>
    <script src="js/timeLine.min.js"></script>	
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	
</body>
</html>