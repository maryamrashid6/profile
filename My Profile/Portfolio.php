<!DOCTYPE html>
<html>
<head><title>Profile </title>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script DEFER SRC="http://use.fontawesome.com/releases/v5.0.7/js/all.js">
  </script> </head>
<style>
@font-face{
  font-family: myfont;
  src:url('OrdinaryBrush.ttf');
}
@font-face{
  font-family: myfont2;
  src:url('Allcan.otf');
}

/* width */
::-webkit-scrollbar {
  width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #E0E1E0;/* #f1f1f1;*/
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

#s1{
 background: url(background7.jpg) no-repeat;
 background-size: cover;
 background-attachment: fixed;
 width:100%;
 height:100%;
 overflow: hidden;
justify-content: center;
 align-items: center;
	 transition:all 2s ease-in-out;
 }

 #s1:hover{
	 background: url(background2.jpg) no-repeat;
	 background-size: cover;
	 background-attachment: fixed;
	 width:100%;
	 height:100%;
	 overflow: hidden;
	justify-content: center;
	 align-items: center;
	 transition:all 2s ease-in-out;
 }

#two{
	widht: 100%;
	height: 100%;
	text-align: center;
	display: none;
}
h3{
	font-family: myfont2;
	font-size: 60px;
	margin: auto;

color:white;
margin:10px 20px;
padding: 20px;
width: 400px;
text-transform: uppercase;
position: absolute;
left: 31%;
top: 5%;
text-align: center;

transform: scale(1.06);
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
#two p{
	font-family: myfont2;
	font-size: 20px;
	margin: auto;

color:white;
margin:10px 20px;
padding: 20px;
width: 400px;
text-transform: uppercase;
position: absolute;
left: 31%;
top: 27.5%;
text-align: center;


}
ul{
	display: inline;
	list-style: none;
	justify-content-center;
align-items-center;
display: flex;
}

a{
  text-decoration: none;
  color: white;
  font-size: 17px;
  padding: 10px;
}
a:hover{
	color: #C7CECC;


}

#one{
	position: absolute;
	right: 4%;
	top: 3%;
}

#three{
	position: absolute;
	left: 3%;
	top: 3%;
}

.dropbtn {

  color: white;

  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
	font-size: 14px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}



</style>

<body id="s1">
	<div id="one">
		<ul>
			<div class="dropdown">
			<li class="dropbtn" ><a href="practice.php" >Portfolio </a></li>
			<div class="dropdown-content">
				<a href="practice.php">About Me</a>
				<a href="resume.php">Resume</a>
				<a href="skills.php">Skills</a>
			</div>
		</div>
			<div class="dropdown">
			<li class="dropbtn" ><a  href="tecHacker.php" >Blog </a></li>
				<div class="dropdown-content">
    			<a href="tecHacker.php">TecHacker</a>
    			<a href="foodblog.php">Food Blog</a>
  			</div>
			</div>
			<li><a href="contactprofile.php" >Contact </a></li>
		</ul>
	</div>
<div id="two">
<h3>Maryam Rashid</h3>
<p>Web Developer</p>
</div>

<div id="three">
	<p class="fontawesome"><a class="fontawesome" href="https://www.instagram.com/maryamrashid6/?hl=en"><i class="fab fa-instagram"></i></a>
	<a class="fontawesome" href="https://www.facebook.com/maryam.rashid.9279807"><i class="fab fa-facebook-square"></i></a>
	<a class="fontawesome" href="#"><i class="fab fa-twitter"></i></a></p>
</div>
<script>

$(document).ready(function(){


	$("#two").fadeIn(2000);



});



</script>
</body>
</html>
