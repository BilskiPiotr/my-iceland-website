<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Moja ISLANDIA</title>
	<meta http-equiv="content-type" content="text/html; charset="utf-8" />
	<meta name="moja_islandia" content="width=device-width, initial-scale=1.0" />
	
	<!-- Sylizowanie strony -->
	<link rel="stylesheet" href="css/galeria.css" />
	<link rel="stylesheet" href="css/style.css" />
	

</head>

<!-- Wstawić walidację użytkownika - czy jest zalogowany -->
<?php
	
?>
	
<body id="islandia">

	<!-- konstrukcja strony startowej galerii zdjęć -->
    <div id="content">
		<div id="punkty">
			<div class="punkt1 pulse">
				<div class="miniatura1" onclick="openGallery();currentSlide(1)">Reykajawik</div>
			</div>
			<div class="punkt2 pulse">
				<div class="miniatura2" onclick="openGallery();currentSlide(3)">Hweragerdi</div>
			</div>
			<div class="punkt3 pulse">
				<div class="miniatura3" onclick="openGallery();currentSlide(4)">Gulfos Waterfall</div>
			</div>
			<div class="punkt4 pulse">
				<div class="miniatura4" onclick="openGallery();currentSlide(5)">Seljalandsfoss Waterfall</div>
			</div>
			<div class="punkt5 pulse">
				<div class="miniatura5" onclick="openGallery();currentSlide(8)">Dyrhólaey</div>
			</div>
			<div class="punkt6 pulse">
				<div class="miniatura6" onclick="openGallery();currentSlide(11)">Kirkjubæjarklaustur</div>
			</div>
			<div class="punkt7 pulse">
				<div class="miniatura7" onclick="openGallery();currentSlide(12)">Svartifoss</div>
			</div>
			<div class="punkt8 pulse">
				<div class="miniatura8" onclick="openGallery();currentSlide(14)">Jökulsárlón</div>
			</div>
			<div class="punkt9 pulse">
				<div class="miniatura9" onclick="openGallery();currentSlide(17)">Djupivogur</div>
			</div>
			<div class="punkt10 pulse">
				<div class="miniatura10" onclick="openGallery();currentSlide(18)">Sejdisfiordur</div>
			</div>
			<div class="punkt11 pulse">
				<div class="miniatura11" onclick="openGallery();currentSlide(19)">Dettifoss</div>
			</div>
			<div class="punkt12 pulse">
				<div class="miniatura12" onclick="openGallery();currentSlide(20)">Namafjal - Reykjahlid</div>
			</div>
			<div class="punkt13 pulse">
				<div class="miniatura13" onclick="openGallery();currentSlide(24)">Godafoss Waterfall</div>
			</div>
			<div class="punkt14 pulse">
				<div class="miniatura14" onclick="openGallery();currentSlide(25)">Akureyri</div>
			</div>
			<div class="punkt15 pulse">
				<div class="miniatura15" onclick="openGallery();currentSlide(27)">Glaumbaer torf House</div>
			</div>
			<div class="punkt16 pulse">
				<div class="miniatura16" onclick="openGallery();currentSlide(28)">Borgarvirki</div>
			</div>
			<div class="punkt17 pulse">
				<div class="miniatura17" onclick="openGallery();currentSlide(29)">Hraunfossar</div>
			</div>
		</div>
	</div>
	
	<!-- nagłówek -->
	<div class="header">
		<ul class="mine_menu">
			<li><a href="index.php">Logout</a></li>
			<li class="right"><a href="about.php">About</a></li>
		</ul>
	</div>
	
	<!-- stopka -->
    <div class="footer">
		<p>Praca zaliczeniowa - <strong>Piotr Bilski</strong> - index 43335</p>
	</div>
	
	
	<!-- Deklaracja wszystkich możliwych do obejżenia zdjęć -->
	<div id="myGallery" class="gallery">
	
		<!-- przycisk zamykający przegląd zdjęć -->
		<span class="close cursor" onclick="closeGallery()">&times;</span>
		
		<div class="gallery-content">
				
			<div class="myPhoto">
				<img src="images/photos/2000/2000309a.jpg" style="width:100%" alt="">
			</div>
				
			<div class="myPhoto">
				<img src="images/photos/2000/2000309b.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000309c.jpg" style="width:100%" alt="">
			</div>
										
			<div class="myPhoto">
				<img src="images/photos/2000/2000309d.jpg" style="width:100%" alt="">
			</div>
													
			<div class="myPhoto">
				<img src="images/photos/2000/2000409a.jpg" style="width:100%" alt="">
			</div>
		
			<div class="myPhoto">
				<img src="images/photos/2000/2000409b.jpg" style="width:100%" alt="">
			</div>
													
			<div class="myPhoto">
				<img src="images/photos/2000/2000409c.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000409d.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000509a.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000509b.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000509c.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000509d.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000509e.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000509f.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000509g.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000509h.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000609a.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000609b.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000709a.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000709b.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000709c.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000809a.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000809b.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000809c.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000809d.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000809e.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000909a.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/2000909b.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/20001009a.jpg" style="width:100%" alt="">
			</div>
			
			<div class="myPhoto">
				<img src="images/photos/2000/20001109a.jpg" style="width:100%" alt="">
			</div>
			
			<!-- znaki przewijania do przodu i do tyłu -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			<!-- podpis pod zdjęciem wykożystujący znacznik alt="" z każdego elementu img -->
			<div class="caption-container">
				<p id="caption"></p>
			</div>
			
		</div>
	</div>


	
<script>
function openGallery() {
  document.getElementById('myGallery').style.display = "block";
  document.getElementById('punkty').style.display = "none";
}

function closeGallery() {
  document.getElementById('myGallery').style.display = "none";
  document.getElementById('punkty').style.display = "block";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("myPhoto");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
  
  img.onclick = function(){
  gallery.style.display = "block";
  galleryImg.src = this.src;
  captionText.innerHTML = this.alt;
}
}
</script>
	
</body>
</html>

