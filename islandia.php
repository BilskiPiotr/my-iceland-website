<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Moja ISLANDIA</title>
	<meta http-equiv="content-type" content="text/html; charset="utf-8" />
	<meta name="moja_islandia" content="width=device-width, initial-scale=1.0" />
	
	<!-- Sylizowanie strony -->
	<link rel="stylesheet" href="css/islandia.css" />
	<link rel="stylesheet" href="css/style.css" />
	

</head>

<?php
	
?>
	
<body id="islandia">

    <div id="content">
		<div id="punkty">
			<div class="pulse1">
				<div class="tlo1" onclick="openModal();currentSlide(1)">Reykajawik</div>
			</div>
			<div class="pulse2">
				<div class="tlo2" onclick="openModal();currentSlide(2)">Hweragerdi</div>
			</div>
			<div class="pulse3">
				<div class="tlo3" onclick="openModal();currentSlide(3)">Þingvellir National Park</div>
			</div>
			<div class="pulse4">
				<div class="tlo4" onclick="openModal();currentSlide(4)">Gulfos Waterfall</div>
			</div>
			<div class="pulse5">
				<div class="tlo5" onclick="openModal();currentSlide(5)">Seljalandsfoss Waterfall</div>
			</div>
			<div class="pulse6">
				<div class="tlo6" onclick="openModal();currentSlide(6)">Skógafoss Waterfall</div>
			</div>
			<div class="pulse7">
				<div class="tlo7" onclick="openModal();currentSlide(7)">Reynisfjara Beach</div>
			</div>
			<div class="pulse8">
				<div class="tlo8" onclick="openModal();currentSlide(9)"></div>
			</div>
			<div class="pulse9">
				<div class="tlo9" onclick="openModal();currentSlide(10)"></div>
			</div>
		</div>
	</div>
	<div class="header">
		<ul class="mine_menu">
			<li><a href="index.php">Logout</a></li>
			<li class="right"><a href="about.php">About</a></li>
		</ul>
	</div>
    <div class="footer">
		<p>Praca zaliczeniowa - <strong>Piotr Bilski</strong> - index 43335</p>
	</div>
	
	
	
	<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">
				
			<div class="mySlides">
				<img src="images/photos/large/1600/1600309a.jpg" style="width:100%" alt="Nature and sunrise">
			</div>
				
			<div class="mySlides">
				<img src="images/photos/large/2000/2000309b.jpg" style="width:100%">
			</div>
			
			<div class="mySlides">
				<img src="images/photos/large/2000/2000309d.jpg" style="width:100%">
			</div>
										
			<div class="mySlides">
				<img src="images/photos/large/2000/2000309f.jpg" style="width:100%">
			</div>
													
			<div class="mySlides">
				<img src="images/photos/large/2000/2000309h.jpg" style="width:100%">
			</div>
		
			<div class="mySlides">
				<img src="images/photos/large/2000/2000409a.jpg" style="width:100%">
			</div>
													
			<div class="mySlides">
				<img src="images/photos/large/2000/2000409b.jpg" style="width:100%">
			</div>
			
			<div class="mySlides">
				<img src="images/photos/large/2000/2000509a.jpg" style="width:100%">
			</div>
			
			<div class="mySlides">
				<img src="images/photos/large/2000/2000509b.jpg" style="width:100%">
			</div>
			
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			<div class="caption-container">
				<p id="caption"></p>
			</div>
			
		</div>
	</div>


	
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
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
  var slides = document.getElementsByClassName("mySlides");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
</script>

<!--
	<div class="content">
	
		<div id="header">
			<div class="logo">
				<a>Moja Islandia</a>
			</div>
		
			<div class="menu">
				<ul class="mine_menu">
					<li><a href="index.php">Logout</a></li>
					<li class="right"><a href="about.php">About</a></li>
				</ul>
			</div>
		</div>
		<div id="duzy">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet nisi arcu, ut fringilla justo. Nulla porta euismod scelerisque. Aliquam erat volutpat. Nullam vitae turpis vitae elit posuere hendrerit. Donec consectetur quam eget nulla gravida in tristique arcu imperdiet. Ut elit massa, ultricies sed tempor non, mollis nec diam. Ut enim nibh, lacinia non interdum ut, rhoncus in lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pretium congue ultrices. Etiam hendrerit molestie sem ut feugiat. Donec ut ipsum nec lacus faucibus ultricies. Nam ullamcorper ornare sem quis scelerisque. Fusce ut tortor id ligula placerat pharetra nec eget elit. Nulla consequat mi est, at cursus ipsum. Nam commodo mauris id sapien vestibulum feugiat consectetur tellus tempus. Nam sed orci quis est vestibulum placerat vel interdum enim. Suspendisse velit neque, feugiat id ornare nec, fermentum et risus. Vestibulum non dui augue, sit amet semper nisi. Nullam rhoncus pretium mi, vitae fermentum mi facilisis sit amet.
		
		<div id="mapa"></div>
		
		</div>
		
		
	

		<div class= "footer">
			<p>Praca zaliczeniowa - <strong>Piotr Bilski</strong> - index 43335</p>
		</div>
	</div>
	-->
	
</body>
</html>

