<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>this is new page.</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()"> &times;</button>
  <a href="#" class="w3-bar-item w3-button">FLOWERS</a>
  <a href="#" class="w3-bar-item w3-button">FISHS</a>
  <a href="#" class="w3-bar-item w3-button">FRUITS</a>
  <a href="#" class="w3-bar-item w3-button">ANIMALS</a>
  <a href="#" class="w3-bar-item w3-button">BIRDS</a>
  <a href="#" class="w3-bar-item w3-button">OTHER</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    	
		<nav>
	<label for="check" class="checkbtn">
		
		</label>
	<label for="contact" class="counter">
	</label>
	<label class="logo"><u>Child</u><span>WS</span></label>
	<ul>
		<li><a href="home.html">HOME</a>

		</li>
		<div class="dropdown">
				<button class="dropbtn">ITEMS
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
		      <a href="#">Flowers</a>
		      <a href="#">Fishs</a>
		      <a href="#">Birds</a>
		      <a href="#">Animals</a>
		      <a href="#">Fruits</a>
		      <a href="#">Rivers</a>
		    </div>
		</div>
		<li><a href="about.html">ABOUT</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Servish</a></li>
		
	</ul>
	
		
</nav>
	
  </div>
</div>



<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "12%";
  document.getElementById("mySidebar").style.width = "15%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>


<div class="one"><h3>THIS IS <span>CHILD</span> WEBSITE.</h3></div>
<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="rose.jpg" alt="Flowers" width="600" height="400">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="fr.jpg" alt="Fruits" width="600" height="400">
  </a>
 
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="fish.jpg" alt="Fishs" width="600" height="400">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="an.jpg" alt="Animals" width="600" height="400">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="bir.jpg" alt="Birds" width="600" height="400">
  </a>
  
</div>
<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="na.jpg" alt="Northern Lights" width="600" height="400">
  </a>
 
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="riv.jpg" alt="Rivers" width="600" height="400">
  </a>
  
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="tree.jpg" alt="Mountains" width="600" height="400">
  </a>
 
</div>
</body>
</html>