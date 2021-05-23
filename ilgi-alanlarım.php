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
					<img src="resimler/Burak5.Jpg" class="d-block w-100" alt="Lisede Burak Ortakuz">
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
				<form action="#" class=giris method="POST">
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
			<?php				
				$api_key="RGAPI-dec956bc-7db7-47cb-bb32-ba014319d648";
				$url2='https://tr1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/kmZ1NQ3zS5U7R1av4yOgnM6GD6fv0GWNU5kusG5gk98j-Q?api_key='.$api_key;
				$url ='https://tr1.api.riotgames.com/lol/league/v4/entries/by-summoner/kmZ1NQ3zS5U7R1av4yOgnM6GD6fv0GWNU5kusG5gk98j-Q?api_key=' .$api_key;
				$open = file_get_contents($url);
				$open2 =file_get_contents($url2);
				$ustalık =json_decode($open2,true);
				$bilgiler = json_decode($open, true);

				$sampiyonNumaraları = array("78","202","25","99","40","497","555","412","16","53");
				$sampiyonUstalıkları= array();
				$y =0;
				foreach($ustalık as $key => $championId){
						
					for($i =0; $i<10; $i++ ){
						if($sampiyonNumaraları[$i]== $ustalık[$y]['championId']){
							$sampiyonUstalıkları[$i]=$ustalık[$y]['championPoints'];
							
						}
					}
					$y=$y+1;
				}				
				
			?>
			<article>
				<section class="container">
					<h3>
						Oyunlar
					</h3>
					<p>
						Oyunlarla ilk olarak babam ben daha küçükken aldığı ateri ile tanıştım. O zamanlar mario contra gibi oyunları oynarken ilerleyen zamanlarda 
						evimize alınan bilgisayar ile imkanlarım arttı lakin pek fazla oynamıyordum. Üstelik internetim 4 gb gibi gülünç bir değerle sınırlıydı bu sebeple
						sadece internet üzerinden oynanan oyunları veya usb ile aldığım oyunları oynayabiliyordum.  Ortaokula geldiğimde taşınıp arkadaşlarımı kaybetmem ve yeni ortama 
						hiç ayak uyduramamam beni bilgisayar oyunlarına daha da itti. Yakın çevremizde internet kafe varlığı oyunlara erişimimi ve çeşidini arttırdı. 
						O dönemler metin2 cs.16 gibi oyunları hem evimde hem de internet kafade rekabetçi 
						şekilde oynuyordum. 
					</p>
				</section>
				<section class="container">
					<p>	
						Liseye geldiğimde ise okul arkadaşlarımın sınıfta sürekli bahsettiği League of Legend's oyunu dikkatimi çekti. İnternetimin artık sınırsız olması
						bu tarz denemeler yapmama imkan tanıyordu. Oyunu açarken koyduğum hesap adı "<?php echo $bilgiler[0]['summonerName']; ?>". Arkasında öyle ahım şahım bir hikaye yok. O sıra yeni bulduğum bir isimdi ve
						sinir bozucu 2 şeyin birleşimi olarak yapmıştım. İlk oynadığımda oyun bana zor gelmişti. Yavaş yavaş alışıyordum ama yeterli gelmiyordu. Doğru düzgün oynadığım ilk karakter
						Miss Fortune idi. Lakin yine de istediğim seviyeye yakın bile değildi. O sıralar internet kesilmesi sebebi ile de ceza yemem işleri bitiren nokta olmuştu.
						Oyunu ondan sonra sildim. Yaklaşık 1 yıl sonra youtubede gördüğüm bir içerik ile oyunu oynama isteğim geldi. Hemen indirdim ve oynamaya başladım.
						Bu sefer internette oyun hakkında bir sürü içerik bulmam ve en önemlisi kardeşimin de bu oyuna başlaması beni oyuna iyice bağladı. O günden sonra git gide daha çok merak etmeye başladım.
						Şampiyon tanıtımları, youtubeda oyun videoları, Türkiye ligi ve dünya şampiyonası ve en son çıkan şampiyonun olan Jhin'in bana çok uyması bu durumdaki en önemli etkenlerdi.
						Daha sonra uzun süre Jhin oynadım. <?php echo $sampiyonUstalıkları[1]; ?> kadar ustalık puanına eriştim. Daha sonraları şampiyonun zayıflatılması üzerine çeşitli roller ve şampiyonlar üzerine 
						denemeler yaparak kendime uygun bir şampiyon ararken youtube gördüğüm Poppy karakterine ısınmam nedeni ile onu oynamaya başladım. Şuan <?php echo $sampiyonUstalıkları[0]; ?> ile en yüksek puana 
						sahip karakterim. Uzun süre üst koridorda kendilerini oynadım. Hatta öyle ki Türkiye'de ilk 50 sıralamaya girmiştim. Poppyi bu kadar sevmeme rağmen üst koridor bana zor geliyordu.
						Bu sebeple altın ligine ulaştığım sıralar destek oynama başladım. Rol bana daha uygundu ve bir sürü şampiyonu da sevmiştim. Morgana <?php echo $sampiyonUstalıkları[2]; ?>, Lux <?php echo $sampiyonUstalıkları[3]; ?> 
						, Janna <?php echo $sampiyonUstalıkları[4]; ?>,  Rakan <?php echo $sampiyonUstalıkları[5];?>, Pyke <?php echo $sampiyonUstalıkları[6]; ?>,
						Thresh <?php echo $sampiyonUstalıkları[7]; ?>,Soraka <?php echo $sampiyonUstalıkları[8]; ?>, Blitzcrank <?php echo $sampiyonUstalıkları[9]; ?> gibi şampiyonları oynadım. Üstelik yanında güzel arkadaşlar da edindim. Önceki sezonu platin olarak bitirmeme rağmen 
						bu şuan <?php echo $bilgiler[1]['tier'];echo " "; echo $bilgiler[1]['rank']; ?> ligindeyim. Metanın bana gülmemesi ve derslerime öncelik vermem de bunun etkenlerinden birisi. 
					</p>
				</section>
				<section class="container">
					<p>
						Benim oyun maceram şimdilik bu kadar umarım bu yaz elmas ligine yükselebilirim.
					</p>
				</section>
				
			</article>
		</main>
		
		<footer class="page">
			<div class="container bg-dark p-0 py-3">
				<div class="row col-12 ">
						<div class="col-8 col-md-8  my-auto">
							<p class="footer">
								Burak Ortakuz'un Kişisel Web Sitesi
							</p>
						</div>
						<div class="col-4 col-md-4 ms-auto float-end">
							<p>
								<a href="https://www.facebook.com/burak.ortakuz.1" target="_blank"> <i class="bi bi-facebook  sosyal " style="color:#1877F2;"></i></a>
								<a href="https://www.instagram.com/burakortakuz78/?hl=tr" target="_blank"><i class="bi bi-instagram  sosyal" style="color: #E1306C;"></i></a>
								<a href="https://twitter.com/BurakOrtakuz78" target="_blank"><i class="bi bi-twitter  sosyal" style="color: #1DA1F2;"></i></a>	
							</p>
						</div>		
				</div>	
			
			</div>
		</footer>
		<script  src="bootstrap/js/bootstrap.min.js"></script>
	</body>
<html>	