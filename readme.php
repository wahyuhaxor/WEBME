<!DOCTYPE html><html><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Karawang Cyber Team Tools Online</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="let's break the security">
	<meta property="og:description" content="let's break the security">
	<meta property="og:image" content="https://raw.githubusercontent.com/KarawangCyber2021Team/website/refs/heads/main/20250728_120812.jpg">
	<meta name="copyright" content="Tools">
	<meta name="author" content="UcenHaxor">
	<meta name="theme-color" content="#1f1f1f">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="dist/css/s-next.css">
	<link rel="stylesheet" href="dist/css/live2d.css">
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script><style type="text/css">* {user-select: auto !important; -webkit-user-select: auto !important;}</style><input type="hidden" id="inject_idm_text_selection"><style></style>
	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Book",
  "name": "Exploits",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "ratingCount": "72801",
    "bestRating": "5",
    "worstRating": "1"
  }
}
  </script><style>
	  @import url('https://fonts.googleapis.com/css?family=Bungee');
	  @import url('https://fonts.googleapis.com/css?family=Squada+One');
	  @import url('https://fonts.googleapis.com/css?family=Bebas+Neue');
	  server {
	  	color: yellow;
	  }
	  oren {
	  	color: orange;
	  }
</style></head>

  

<body class="pace-running sidebar-mini" oncontextmenu="return false" onkeydown="return false" onmousedown="return false" bgcolor="#1f1f1f"><div class="pace pace-active"><div class="pace-progress" data-progress-text="99%" data-progress="99" style="transform: translate3d(99.1946%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
	<noscript>
		<table width="100%" height="100%"><td><center>Website Ini Menggunakan Javascript<br>Silahkan Aktifkan Javascript Anda</center></td></table>
	</noscript>
<div class="wrapper">
	<header class="main-header">
		<a href="index.html" class="logo">
			<span class="logo-mini"><img src="https://i.top4top.io/p_35065ezka0.png" width="30" height="30" style="border-radius: 50%;"></span>
			    <center> <font color="white" class="box-title" style= "font-family: Bungee" "position: center"><font color="orange">WAHYU HAXOR<br><font color="white">Karawang Cyber Team</font></font></center>
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown messages-menu" id="waifuku" style="display: none;">
						<a href="javascript:void(0)" class="dropdown-toggle">
							<font style="font-family: Bungee" onclick="waifu()" id="waifuku2"><oren>SHOW</oren> WAIFU</font>
						</a>
			</div>
		</nav>
	</header>
	<div class="content-wrapper" style="min-height: 880px;">
		<section class="content">
<div class="row">
				<div class="col-md-6">
					<div class="box box-solid" style="background: #2e2d2d;">
						<div class="box-header with-border" style="background: #2e2d2d; border: #ffffff;">
							<font color="white" class="box-title" style="font-family: Bungee"><i class="fa fa-wifi" aria-hidden="true"></i><font color="orange"> IP ANDA</font>
						</div>
						<div class="box-body text-center" style="background: #2e2d2d; font-family: Squada One; text-align: left;" id="bahasaenggres"><font style="font-family: Helvetica"> 
<html>
<body>
<font color="white" class="box-title" style="font-family: Bungee"><p><?php echo $_SERVER['REMOTE_ADDR']; ?></p></font>
</body>
</html>
</font></a></font></i>
						</font></div><font style="font-family: Helvetica">
					</font></div><font style="font-family: Helvetica">
				</font></div><font style="font-family: Helvetica">
								<div class="col-md-6">
					<div class="box box-solid" style="background: #2e2d2d;">
						<div class="box-header with-border" style="background: #2e2d2d; border: #ffffff;">
							<font color="white" class="box-title" style="font-family: Bungee"><i class="fa fa-map-marker" aria-hidden="true"></i><font color="orange"> Kota Anda</font>
						</div>
						<div class="box-body text-center" style="background: #2e2d2d; font-family: Squada One; text-align: left;" id="bahasaenggres"><font style="font-family: Helvetica"> 
							<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
</head>
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

// Cek apakah request sukses
if ($data['status'] === 'success') {
    echo "<p class='box-title' style='font-family: Bungee;'> " . $data['city'] . "</p>";
} else {
    echo "Gagal mendapatkan data lokasi: " . $data['message'];
}
?>

</html>
						</font></div><font style="font-family: Helvetica">
					</font></div><font style="font-family: Helvetica">
				</font></div><font style="font-family: Helvetica">
								<div class="col-md-6">
					<div class="box box-solid" style="background: #2e2d2d;">
						<div class="box-header with-border" style="background: #2e2d2d; border: #ffffff;">
							<font color="white" class="box-title" style="font-family: Bungee"><i class="fa fa-globe" aria-hidden="true"></i> <font color="orange">Browser</I></font>
						</div>
						<div class="box-body text-center" style="background: #2e2d2d; font-family: Squada One; text-align: left;"><font style="font-family: Helvetica"> 
<!DOCTYPE html>
<html lang="id">
<body>
  <font color="white" class="box-title" style="font-family: Bungee"><p><strong><span id="browser">Memuat...</span></strong></p></font>

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
  </script>
</body>
</html>
						</font></div><font style="font-family: Helvetica">
					</font></div><font style="font-family: Helvetica">
				</font></div><font style="font-family: Helvetica">
				<div class="col-md-6">
					<div class="box box-solid" style="background: #2e2d2d;">
						<div class="box-header with-border" style="background: #2e2d2d; border: #ffffff;">
							<font color="white" class="box-title" style="font-family: Bungee"><i class="fa fa-user" aria-hidden="true"></i> <font color="orange">OS ANDA</font>
						</div>
						<div class="box-body text-center" style="background: #2e2d2d; font-family: Squada One; text-align: left;"><font style="font-family: Helvetica"> 
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
</head>
<body>
  <font color="white" class="box-title" style="font-family: Bungee"><p><strong><span id="os-name">Memuat...</span></strong></p></font>

  <script>
    function detectOS() {
      const platform = navigator.platform.toLowerCase();
      const userAgent = navigator.userAgent.toLowerCase();

      if (platform.indexOf('win') !== -1) {
        return 'Windows';
      } else if (platform.indexOf('mac') !== -1) {
        return 'macOS';
      } else if (platform.indexOf('linux') !== -1) {
        return 'Linux';
      } else if (/android/.test(userAgent)) {
        return 'Android';
      } else if (/iphone|ipad|ipod/.test(userAgent)) {
        return 'iOS';
      } else {
        return 'Sistem Operasi tidak terdeteksi';
      }
    }

    document.getElementById('os-name').textContent = detectOS();
  </script>
</body>
</html>

						</font></div><font style="font-family: Helvetica">
					</font></div><font style="font-family: Helvetica">
				</font></div><font style="font-family: Helvetica">
				<div class="col-md-6">
					<div class="box box-solid">
					</div>
				</div>
			</font></font></div><font style="font-family: Helvetica"><font style="font-family: Helvetica">
			<div class="panel panel-default">
				<style>a[class="btn Right Interactive Hand"]{display:none;}</style>
				<div class="panel-body" style="background-color: #1f1f1f; text-align: center; font-family: Bungee">+ Karawang Cyber Tean Tools Web Based +<br><br>
					<font face="Helvetica">
						Berisi alat yang di gunakan untuk deface dan mencari kelemahan suatu website, namun tidak hanya alat untuk deface saja selebihnya cek menu di samping :)<br><i><font color="orange">kalau ada request atau tool yang error silahkan chat admin via</font></a> <a href="#" onclick="location.replace('https://t.me/XkiiAeLah');"><font color="orange"><u>telegram</u></font></a></font></i> <br>
						<!--
						[<b>12-January-2024</b>] Fix Tool <u>DA PA Checker</u><br>
						[<b>12-January-2024</b>] Fix Tool <u>Reverse IP</u><br>
						[<b>12-January-2024</b>] Fix Tool <u>Scan Subdomain</u><br>
					-->
					</font>
				</div>
			</div>
			<!--
			<div class="panel panel-default">
				<style>a[class="btn Right Interactive Hand"]{display:none;}</style>
				<div class="panel-body" style="background-color: #1f1f1f; text-align: center; font-family: Bungee">+ List Request +<br><br>
					<font face="Helvetica">
						Klik <a href="req.html" target="_blank"><font color="orange">di sini</font></a> untuk melihat daftar request kalian.<br>bagi kalian yang ingin request<br>silahkan menuju bagian <a href="comment.html" target="_blank"><font color="orange">comment</font></a> atau live chat.
					</font>
				</div>
			</div>
			<div class="panel panel-default">
				<style>a[class="btn Right Interactive Hand"]{display:none;}</style>
				<div class="panel-body" style="background-color: #1f1f1f; text-align: center">
					<font face="Helvetica">
						Official UcenHaxor (exploits.icu)<br>Bot WA : <a href="https://wa.me/629601948286?text=!euy" target="_blank">+629601948286</a><br>Gunakan <b>!euy</b> untuk melihat menu tools.
					</font>
				</div>
			</div>
		-->
			<div class="panel panel-default">
				<style>a[class="btn Right Interactive Hand"]{display:none;}</style>
				<div class="panel-body" style="background-color: #1f1f1f; text-align: center; font-family: Bungee">+ Live Chat +<br><br>
					<iframe src="https://www5.cbox.ws/box/?boxid=957907&boxtag=j5jUY4" width="100%" height="450" allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto" class="komen"></iframe>
				</div>
			</div>
		</font></font></section><font style="font-family: Helvetica"><font style="font-family: Helvetica">
	</font></font></div><font style="font-family: Helvetica"><font style="font-family: Helvetica">
	<!-- <iframe src="https://api.countapi.xyz/hit/exploits.host/visits" width="0" height="0" style="position: absolute; width:0; height:0; border:0;"></iframe> -->
	<iframe src="https://www.easycounter.com/counter.php?exploitsmyid" width="0" height="0" style="position: absolute; width:0; height:0; border:0;"></iframe>
	<footer class="main-footer">		
		<center>Copyright © 2025 by Karawang Cyber Team All Rights Reserved </center>
	</footer>

<script type="text/javascript">loadlive2d("live2d", "path/pio/model.json");</script>
<script src="dist/js/server2.js"></script>
<script src="dist/js/jquery-2.1.4.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/plugins/velocity/velocity.min.js"></script>
<script src="dist/js/s-next.js"></script>


</font></font></div></body></html>