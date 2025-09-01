<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Official Karawang Cyber Team</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="We Are Party At Your Security">
	<meta name="keywords" content="KarawangCyberTeam">
	<meta name="author" content="KarawangCyberTeam">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
	<!-- styles -->
	<link href="css/css-plugins.css" rel="stylesheet" type="text/css"><link href="css/css-style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head><style>
	  @import url('https://fonts.googleapis.com/css?family=Bungee');
	  @import url('https://fonts.googleapis.com/css?family=Squada+One');
	  @import url('https://fonts.googleapis.com/css?family=Bebas+Neue');
	  server {
	  	color: yellow;
	  }
	  oren {
	  	color: orange;
	  }
</style>
<body class="loader">
		<!-- loading start -->
		<div class="loading">
		    <img class="logo-loading" src="https://l.top4top.io/p_35076cthm0.png" alt="logo"></div><!-- loading end -->
	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
		</a><!-- to-top-btn end -->
	    
	    <!-- header start -->
	    <header class="fixed-header"><!-- header-flex-box start --><div class="header-flex-box">
			    <!-- logo start -->
				<a href="index.html" class="logo pointer-large animsition-link">
					<div class="logo-img-box">
				        <img class="logo-black" src="https://c.top4top.io/p_3506f7z0u0.jpg" alt="logo"></div>
		        </a><!-- logo end -->
		        
				<!-- menu-open start -->	
				<div class="menu-open pointer-large">
					<span class="hamburger"></span>
				</div><!-- menu-open end -->
		    </div><!-- header-flex-box end -->
		</header><!-- header end --><!-- nav-container start --><nav class="nav-container dark-bg-1"><!-- nav-logo start --><div class="nav-logo">
				<img src="https://c.top4top.io/p_35141sdfi0.png" alt="logo"></div><!-- nav-logo end -->
			
			<!-- menu-close -->
			<div class="menu-close pointer-large"></div>

			<!-- dropdown-close-box start -->
			<div class="dropdown-close-box">
				<div class="dropdown-close pointer-large">
					<span></span>
				</div>
			</div><!-- dropdown-close-box end -->

			<!-- nav-menu start -->
			<ul class="nav-menu dark-bg-1"><!-- nav-box start --><li class="nav-box nav-bg-change active dropdown-open">
					<a class="pointer-large nav-link" href="">
						<span class="nav-btn active" data-text="Home">Home</span>
					</a>
					
					<div class="nav-bg" ></div>
				</li><!-- nav-box end -->
				
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="https://karawangcyberteam.my.id/" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" >Official Team</span>
					</a>
					<div class="nav-bg" ></div>
									</li><!-- nav-box end -->
													<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="https://github.com/wahyuhaxor" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" >Ghitub</span>
					</a>
					<div class="nav-bg" ></div>
									</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change dropdown-open">
					<a class="pointer-large nav-link" href="#">
						<span class="nav-btn" data-text="GabungTeam">Join Team</span>
					</a>
					<div class="nav-bg" ></div>
				</li><!-- nav-box end -->
				
			</ul><!-- nav-menu end --></nav>
			
				<div class="content-wrapper" style="min-height: 880px;">
		<section class="content">
<div class="row">
				<div class="col-md-6">
					<div class="box box-solid" style="background: #2e2d2d;">
						<div class="box-header with-border" style="background: #2e2d2d; border: #ffffff;">
												<font color="orange" size="3" class="box-title"> IP ANDA : <strong><?php echo $_SERVER['REMOTE_ADDR']; ?></strong></font>
 	<br><font color="orange" size="3"  class="box-title"> Browser : <strong><span id="browser">Memuat...</span></strong></font>

  <script>
    function detectBrowser() {
      const ua = navigator.userAgent;

      if (ua.indexOf("Chrome") > -1 && ua.indexOf("Edg") === -1 && ua.indexOf("OPR") === -1) {
        return "Google Chrome";
      } else if (ua.indexOf("Firefox") > -1) {
        return "Mozilla Firefox";
      } else if (ua.indexOf("Safari") > -1 && ua.indexOf("Chrome") === -1) {
        return "Safari";
      } else if (ua.indexOf("OPR") > -1 || ua.indexOf("Opera") > -1) {
        return "Opera";
      } else if (ua.indexOf("Edg") > -1) {
        return "Microsoft Edge";
      } else if (ua.indexOf("MSIE") > -1 || ua.indexOf("Trident/") > -1) {
        return "Internet Explorer";
      } else {
        return "Browser tidak dikenal";
      }
    }

    document.getElementById("browser").textContent = detectBrowser();
  </script></font>						
<?php
// Dapatkan alamat IP pengunjung
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip = getUserIP();

// Ambil data lokasi dari ip-api
$url = "http://ip-api.com/json/{$ip}?fields=status,message,query,country,regionName,city,zip,lat,lon,timezone,isp";

$response = file_get_contents($url);
$data = json_decode($response, true);
if ($data['status'] === 'success') {
    echo "<p class='box-title' style='font-family: Bungee;'> " . $data['city'] . "</p>";
} 
?>
<main class="animsition-overlay" data-animsition-overlay="true"><!-- home-slider start --><section class="home-slider" id="up">		<font color="white"></b><a href="index.php"><br>
          <li class="breadcrumb-item"><i color="white" class="fa fa-home fa-lg"></i></a>
 					<center> <font color="white" class="box-title" style= "font-family: Bungee" "position: center"><font color="orange">WAHYU HAXOR<br><font color="white">Programmer Otodidak</font></font></center><br>
	<div align="center">
          <img src="https://i.top4top.io/p_3514y09h00.gif" style="border-radius: 500px;padding-bottom: 80px; width: 250px;">
    </div>
    <div class="tile">
                <font color="white" class="box-title" style= "font-family: Bungee" "position: center"><font color="orange">Top Language</font></center><br><br>                             <img src="https://static.vecteezy.com/system/resources/previews/027/127/463/non_2x/javascript-logo-javascript-icon-transparent-free-png.png" class="language-logo" />
                 <img src="https://k.top4top.io/p_3514opion0.png" class="language-logo" />
                 <img src="https://img.icons8.com/?size=512&id=21278&format=png" class="language-logo" />
                <img src="https://e.top4top.io/p_3514c6a8p0.png"class="language-logo" />
    </div>
    <div class="tile">
                              <font color="white" class="box-title" style= "font-family: Bungee" "position: center"><font color="orange">Lets Connect</font></center><br><br>
<i class="fa fa-whatsapp" style="font-size:20px"></i><a href="https://wa.me/+6283197637174" <font color="orange" class="box-title">WhatsApp</font></i></a>
<i class="fa fa-telegram" style="font-size:20px"></i><a href="https://t.me/wahyu_haxor" <font color="orange" class="box-title">Telegram</font></i></a>
<i class="fa fa-instagram" style="font-size:20px"></i><a href="https://instagram.com/wahyuhere_" <font color="orange" class="box-title">Instagram</font></i></a><br>
</div>
        	<div class="slider-fade slider-tr-delay07 top-margin-30">
										  	<div class="border-btn-box border-btn-red pointer-large">
											</div>
									  	</div>
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
			</section><!-- home-slider end --><!-- flex-min-height-box start --><section id="down" class="dark-bg-1 flex-min-height-box"><!-- flex-min-height-inner start --><div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container small top-bottom-padding-120">
						<!-- flex-container start -->
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns text-center">
								<h2 class="large-title text-height-12">
									<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="About Me">About Me</span>
								</h2>
							</div><!-- column end -->
							<!-- column start -->
							<div class="six-columns">
								<div class="content-right-margin-20">
									<center><p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay02" data-animation="fade-anim"><font face="courier new" size="4">Hello My Name Is Wahyu Haxor Me Is Defacer Or Grey Hat From Karawang Cyber Team Since 2021, I Am a Otodidak Programmer Nick Previously I Was Xnuxer Wahyu But Now It Has Been Changed To Wahyu Haxor </p></center>
								</div>
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns text-center">
								<h2 class="large-title text-height-12">
								<center><br>	<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="About Team">About Team</span><br>
								</h2>
							</div><!-- column end -->
							<!-- column start -->
							<div class="six-columns">
								<div class="content-right-margin-20">
									<center><p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay02" data-animation="fade-anim"><font face="courier new" size="4">Karawang Cyber Team is a group initiated by IT activists domiciled in West Java and was founded on June 14, 2021, even though it is relatively new.</p></center>																		               </div>         
                </div>
            </div>
								</div>
								</div>
								
							
						</div><!-- column end -->
						        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="stats-container p-6 text-center text-white">
                <i class="fas fa-code text-3xl mb-3"></i>
                <h3 class="text-2xl font-bold">15+</h3>
                <p class="opacity-80">Languages Tracked</p>
            </div><br>
            <div class="stats-container p-6 text-center text-white">
                <i class="fas fa-users text-3xl mb-3"></i>
                <h3 class="text-2xl font-bold">50M+</h3>
                <p class="opacity-80">Active Developers</p>
            </div><br>
            <div class="stats-container p-6 text-center text-white">
                <i class="fas fa-chart-line text-3xl mb-3"></i>
                <h3 class="text-2xl font-bold">2024</h3>
                <p class="opacity-80">Latest Data</p>
            </div><br>
            <div class="stats-container p-6 text-center text-white">
                <i class="fas fa-briefcase text-3xl mb-3"></i>
                <h3 class="text-2xl font-bold">1M+</h3>
                <p class="opacity-80">Job Openings</p>
            </div>
        </div>
<br><br>
<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8bcde9c" data-id="8bcde9c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c971944 elementor-widget elementor-widget-raven-site-logo" data-id="c971944" data-element_type="widget" data-widget_type="raven-site-logo.default">
				<div class="elementor-widget-container">
							<div class="raven-widget-wrapper">
			<div class="raven-site-logo">
									<a class="raven-site-logo-link" href="https://widyasecurity.com">
								<picture><img class="raven-site-logo-desktop raven-site-logo-tablet raven-site-logo-mobile" alt="Widya Security" data-no-lazy="1" src=' https://c.top4top.io/p_35141sdfi0.png '></picture>									</a>
							</div>
		</div>
						</div>
				</div><br>
				<div class="elementor-element elementor-element-a23a9da elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="a23a9da" data-element_type="widget" data-widget_type="icon-list.default">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="/cdn-cgi/l/email-protection#1f77765f68767b667e6c7a7c6a6d766b66317c7072" target="_blank" rel="nofollow">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-envelope"></i>						</span>
										<span class="elementor-icon-list-text"><span class="__cf_email__" data-cfemail="61090821160805180012040214130815184f020e0c">whyuganteng@protonmail.com</span></span>
											</a>
									</li>
						</ul>
						</div>
						<br>
				<div class="elementor-element elementor-element-e5e20ed elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="e5e20ed" data-element_type="widget" data-widget_type="icon-list.default">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="https://maps.app.goo.gl/JGUamB1jqJ6o7W3k7" target="_blank" rel="nofollow">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-map-marked-alt"></i>						</span>
										<span class="elementor-icon-list-text">27RP+H84, Semedo, Kec. Kedungbanteng, Kabupaten Tegal, Jawa Tengah 52472</span>
											</a>
									</li>
						</ul>
						</div><br>
				<div class="elementor-element elementor-element-a120ecc e-grid-align-left e-grid-align-mobile-center elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="a120ecc" data-element_type="widget" data-widget_type="social-icons.default">
							<div class="elementor-social-icons-wrapper elementor-grid" role="list">
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-pulse-shrink elementor-repeater-item-c37e17e" href="https://www.instagram.com/wahyuhere_" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
						<i class="fab fa-instagram"></i>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-animation-pulse-shrink elementor-repeater-item-d3ee538" href="https://www.facebook.com/mwahyurizaki" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
						<i class="fab fa-facebook"></i>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-tiktok elementor-animation-pulse-shrink elementor-repeater-item-6a7ba4d" href="https://www.tiktok.com/@wahyuhaxor" target="_blank">
						<span class="elementor-screen-only">Tiktok</span>
						<i class="fab fa-tiktok"></i>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-pulse-shrink elementor-repeater-item-d38adde" href="https://twitter.com/widyasecurity" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
						<i class="fab fa-twitter"></i>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-whatsapp elementor-animation-pulse-shrink elementor-repeater-item-95d4e99" href="https://wa.me/6281390381654" target="_blank">
						<span class="elementor-screen-only">Whatsapp</span>
						<i class="fab fa-whatsapp"></i>					</a>
				</span>
					</div>
						</div>
					</div>
		</div><br>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b43e0d4" data-id="b43e0d4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-374688e elementor-widget elementor-widget-heading" data-id="374688e" data-element_type="widget" data-widget_type="heading.default">
					<span class="elementor-heading-title elementor-size-default">Jasa</span>				</div>
				<div class="elementor-element elementor-element-0769d13 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="0769d13" data-element_type="widget" data-widget_type="icon-list.default">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="https://widyasecurity.com/penetration-testing/">

											<span class="elementor-icon-list-text">Penetration Testing</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://widyasecurity.com/penetration-testing/">

											<span class="elementor-icon-list-text">Web Designer</span>
											</a>
																			<li class="elementor-icon-list-item">
											<a href="https://widyasecurity.com/penetration-testing/">

											<span class="elementor-icon-list-text">Social Media Hacking</span>
											</a>
									</li>
						</ul>
						</div><br>
				<div class="elementor-element elementor-element-0a77c60 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="0a77c60" data-element_type="widget" data-widget_type="divider.default">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				<div class="elementor-element elementor-element-824ef6f elementor-widget elementor-widget-heading" data-id="824ef6f" data-element_type="widget" data-widget_type="heading.default">
					<span class="elementor-heading-title elementor-size-default">Tentang Wahyu Dev</span>				</div>
				<div class="elementor-element elementor-element-5cad002 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5cad002" data-element_type="widget" data-widget_type="icon-list.default">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="https://widyasecurity.com/tentang/">

											<span class="elementor-icon-list-text">Tentang</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://widyasecurity.com/karir/">

											<span class="elementor-icon-list-text">Karir</span>
											</a>
									</li>
						</ul>
						</div>
					</div>
		</div>
					</div>
				</div>
	             </div>
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end --><!-- section start -->
					</ul><!-- client-list end --></div><!-- container end -->
			</section><!-- section end -->						
					</div><!-- swiper-wrapper end -->
					</main>									
			<footer>
			
			</footer>
<script src="js/js-plugins.js"></script><script src="js/js-main.js"></script></body></html>