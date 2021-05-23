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
							<a class="nav-link " href="ilgi-alanlarım.html" >İlgi Alanlarım</a>
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
					<form action="giris.php" class=giris method="POST">
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
		
		<div class="container ana-metin">
			<div class="container">
				<div class="row">
					<h1>Burak Ortakuz</h1>
					<p>
						Benim adım Burak Ortakuz. Eylül 2000 yılında Karabük'te doğdum. Kendimden küçük bir kardeşim var ismi Tolga Mete.
						Küçükken mahallemizde futbol gibi oyunlar oynamayı ve çizgi film oynamayı severdim. Anaokulunda iken bir gün babamın
						eve satranç takımı getirmesi ile beraber yeni bir hobi edinmiş oldum.<br> 
					</p>
				</div>
				<div class="row">
				  <div class="col-md-4">
					<img src="resimler/satranc3.jpg" class="img-fluid float-md-start resimler" title="Turnuvada rakibini bekleyen Burak Ortakuz" alt="Turnuvada rakibini bekleyen Burak Ortakuz">
					<p class="text-center resim-altı-yazı text-muted"> 
						Burak Ortakuz 3. Sınıftaki Turnuvada
					</p>
				  </div>
				  <div class="col">
					<p>
						İlkokulumu Esentepe İlköğretim Okulu'nda okudum. Okul yıllarında öğretmenlerimin ve babamın katkıları ile oldukça başarılı bir ilkokul dönemi geçirdim.
						Okulun ilk yıllarında satranç konusunda kendimi geliştirme fırsatı buldum ve okulun satranç kulübüne katıldım. 3. sınıfta İlk defa bir satranç turnuvasına katıldım. Bu turnuvaya 
						katılmama rağmen bu turnuva aslında 4-5. sınıflar için yapılan bir turnuvaydı. Buna rağmen son maçımı kazanmam halinde 
						2. olacaktım ama oldukça çekişmeli bir mücadele ardından malesef olamadım. 4. sınıfta okul
						öğretmenim öncülüğünde bir süre tiyatro da yaptım. 	
					</p>
				  </div>
				</div>
				<div class="row ">
					<p>
						4. sınıfta satranç hocamız okul değiştirdiğinden dolayı turnuvaya katılma imkanım olmadı. 5. sınıfa geçtiğimde 
						bulunduğum okuldan 100.Yıl mahallesine taşınmamız sebebi ile Şehit Nurettin Seki okuluna gittim. Orada yeniden 
						bir satranç öğretmenimiz vardı ve turnuvalara katılma fırsatı bulmuştum. Katıldığım ilk turnuvada -29 Ekim Cumhuriyet
						Bayramı Turnuvası- 7 maçın 7'sini de kazanarak altın madalyayı kazanma fırsatı buldum.<br>
					</p>
				</div>
				<div class="row ">
					
					<div class="col-md-4 ">
						<img src="resimler/satranc2.jpg"class="img-fluid  " title="Ödül Töreninde Burak Ortakuz" alt="Ödül Töreninde Burak Ortakuz">
						<p class="text-center resim-altı-yazı text-muted">
							Burak Ortakuz ödül Töreninde
						</p>
					</div>
					<div class="col order-md-first">
						<p>
							Daha sonraları katıldığım turnuvalarda
							yine bir sürü madalya ve 2 adet kupa kazanmayı başardım. Lise sınavı olarak ilk defa TEOG sınavı yaşanıyordu ve o sınav sonucunda
							Safranbolu Anadolu Lisesi'ni kazanmayı başardım. Orada yine satranç kariyerime devam ettim ve 11. sınıfta Türkiye geneli satranç
							turnuvasının Karabük ayağını lisedeki satranç ekibimiz ile kazandık.Bunun üzerine okul öğretmenimiz ve ekibimiz ile birlikte
							Düzce'ye bölge turnuvasına katılmak için gittik. Orada malesef derece yapamadık ama güzel bir geziydi. 
						</p>
					</div>
					
				</div>
				<div class="row">
					
					<div class="col-md-4">
						<img src="resimler/satranc4.jpg"class="img-fluid float-md-start" title="Kupa Töreninde Burak Ortakuz ve Arkadaşları" alt="Kupa Töreninde Burak Ortakuz ve Arkadaşları">
						<p class="text-center resim-altı-yazı text-muted">
							Burak Ortakuz ve Takımı Ödül Töreninde
						</p>
					</div>
					<div class="col">
						<p>
							Üniversite sınavına ilk 
							denememde 63.000 ile istediğim dereceyi elde edemedim. İkinci denemeye gireceğim sene yeni hobim olan animeler ile tanıştım.
							Küçüklüğümde sürekli çizgi film izlemekten zevk alırdım ve bunların anime olduğunu öğrendikten sonra anime izlemeye başladım.
							İkinci denememde 70.000 oldum ama daha fazla çalışmak istemediğimden her zaman hayalim olan mesleği yukarıdan aşağı tercih 
							olarak yazdım. Bu şekilde Sakarya Üniversite'si bilgisayar mühendisliği 2.öğretim bölümünü kazandım. 1 Sene hazırlık okudum.
							Bu sırada <a href="https://tempestfansub.com/" class="link" target="_blank" >Tempest Fansub</a>'a katılarak anime çevirmeni oldum. Corona virüs yüzünden okulumuz uzaktan devam ediyor
							ve 1. sınıf bitmek üzere.
						</p>
					</div>
				</div>
			</div>	
		</div>
		
		<footer >
			<div class="container bg-dark p-0 py-3">
				<div class="row col-12 ">
						<div class="col-8 col-md-8  my-auto">
							<p class="footer">
								Burak Ortakuz'un Kişisel Web Sitesi
							</p>
						</div>
						<div class="col-4 col-md-4 ms-auto ">
							<p>
								<a href="https://www.facebook.com/burak.ortakuz.1" target="_blank"> <i class="bi bi-facebook  sosyal float-end" style="color:#1877F2;"></i></a>
								<a href="https://www.instagram.com/burakortakuz78/?hl=tr" target="_blank"><i class="bi bi-instagram  sosyal float-end" style="color: #E1306C;"></i></a>
								<a href="https://twitter.com/BurakOrtakuz78" target="_blank"><i class="bi bi-twitter  sosyal float-end" style="color: #1DA1F2;"></i></a>	
							</p>
						</div>		
				</div>	
			
			</div>
		</footer>
		<script  src="bootstrap/js/bootstrap.min.js"></script>
	</body>
<html>	