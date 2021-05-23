<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<meta name= "keywords" content= "Burak Ortakuz, Web, Çeviri, Tempest, Satranç">
		<meta name="description" content="Burak Ortakuz'un web sitesi">
		<meta name="author" content="Burak Ortakuz">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Burak Ortakuz'un kişisel web sitesi</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<link rel="stylesheet" type="text/css" href="style.css" >
		<link rel="stylesheet" href="icon.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:ital@1&display=swap" rel="stylesheet">
		
		
	</head>		
	<body>
		
		<header class= "banner container p-0">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="resimler/Burak1.jpg" class="d-block w-100" alt="Bebek Burak Ortakuz">
				  </div>
				  <div class="carousel-item">
					<img src="resimler/Burak2.jpg" class="d-block w-100" alt="Anasıfında Burak Ortakuz">
				  </div>
				  <div class="carousel-item">
					<img src="resimler/Burak3.jpg" class="d-block w-100" alt="İlkokulda Burak Ortakuz">
				  </div>
				  <div class="carousel-item">
					<img src="resimler/Burak4.jpg" class="d-block w-100" id="ortaokulBurak" alt="Ortaokulda Burak Ortakuz">
				  </div>
				  <div class="carousel-item">
					<img src="resimler/Burak5.JPG" class="d-block w-100" alt="Lisede Burak Ortakuz">
				  </div>
				</div>
			  </div>
		</header>
		

		<nav class="container p-0 navbar sticky-top  navbar-expand-lg menu">
			<div class="container-fluid">
				<a class="navbar-brand nav-link" href="index.php">Burak Ortakuz</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bold"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ">
					<li class="nav-item ">
						<a class="nav-link" aria-current="page" href="ozgecmis.html">Özgeçmişim</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="sehrim.html">Şehrim</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="mirasimiz.html">Mirasımız</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="ilgi-alanlarım.php" >İlgi Alanlarım</a>
					</li>
					
					</ul>
					<ul class="navbar-nav ms-auto">
						<li class="nav-item ">
							<a class="nav-link " href="iletisim.html"  >İletişim</a>
						</li>
						<li class="nav-item giris" id="giris">
							<button type="button" class="btn nav-link giris " data-bs-toggle="modal" data-bs-target="#exampleModal">
								Giriş
							</button>
						</li>	
					</ul>
				</div>
			  
			</div>
		</nav>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  
		<div class="modal-dialog">
			<div class="modal-content ">
				<form action="kontrol.php" class=giris method="POST">
					<div class="modal-header">
						<h5 class="modal-title modal-baslik" id="exampleModalLabel">Giriş</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<table>
							<tr>
								<td>
									Email:
								</td>
								<td>
									<input type="email" id="eposta"  name="eposta" placeholder="Mail Adresiniz" required>
								</td>
							</tr>
							<tr>
								<td>
									Şifre:
								</td>
								<td>
									<input type="password" id="sifre"  name="sifre" placeholder="Şifreniz" required>
								</td>
							</tr>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn modal-yazı" data-bs-dismiss="modal">Kapat</button>
						<button type="submit" class="btn modal-yazı">Gönder</button>
					</div>
				</form>
				
			</div>
		</div>
		</div>
		
		<main class="container ana-metin">
			
			<h1> Hoşgeldiniz:
				<?php ;
					$deger =$_SESSION['eposta'];
					$bolunmus = explode("@", $deger);
					echo $bolunmus[0];
				?>
			</h1>
		</main>
		
		<footer class="container bg-dark footer ">			
			<div class="container row ">
				<div class="col-8 ">
					<p class="footer-baslik ">
						Burak Ortakuz'un Kişisel Web Sitesi
					</p>
				</div>
				<div class="col-4 ms-auto text-end">					
					<a href="https://www.facebook.com/burak.ortakuz.1" target="_blank"> <i class="bi bi-facebook  sosyal " style="color:#1877F2;"></i></a>
					<a href="https://www.instagram.com/burakortakuz78/?hl=tr" target="_blank"><i class="bi bi-instagram  sosyal" style="color: #E1306C;"></i></a>
					<a href="https://twitter.com/BurakOrtakuz78" target="_blank"><i class="bi bi-twitter  sosyal" style="color: #1DA1F2;"></i></a>					
				</div>		
			</div>				
		</footer>
		<script  src="bootstrap/js/bootstrap.min.js"></script>
	</body>
<html>	