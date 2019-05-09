<!DOCTYPE html>
<html>
<head><title>About Me</title>
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
@font-face{
  font-family: myfont3;
  src:url('myfont3.ttf');
}

/* width */
::-webkit-scrollbar {
  width: 8px;

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

 #s1:hover{
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

 #box{
 padding: 10px 25px;
 height: 90%;
 width: 30%;
 margin-bottom: 20px;
 position: absolute;
 left: 11.5%;
 top: 25px;
background:#E0E1E0;
 /*background: #F99589;*/
 overflow-y: scroll;
 display: none;
}

#box2{
float: right;
padding: 10px 19px;
height: 90%;
width: 30%;
margin-bottom: 20px;
position: absolute;
left: 46%;
top: 25px;
background:#E0E1E0;
/*background: #F99589;*/
 overflow-y: scroll;
  display: none;
}

.menu{
  padding: 14px;
  height: 90%;
  width: 10%;
  position: absolute;
	right: 10%;
	top: 22px;
text-align: center;
}


 h1{

   line-height: 80px;
   font-weight: 100;
   font-family: myfont2;

   color: black;
   font-size:37px;
   text-align: center;
   margin:auto;

padding: 5px 5px;
   margin-top: 20px;
 }
 h2{
	 border-bottom: solid 0.5px grey;
font-family: myfont3;

   color: black;
   font-size:15px;
   text-align: center;
   margin:auto;
padding: 5px 0px;
 }
a{
font-family: myfont3;
  text-decoration: none;
  width: 100%;
  color: white;
  font-size: 12px;
  padding: 10px;
  padding-bottom: 7px;
  background: #6BA894;
  height: 100%;
  border: black solid 0.05px;
	text-align: left;
	border-radius: 2px;
  transition-duration: 0.25s;
}
.menu a:hover{
  background: black;
  
}

img{
border-radius: 200px;
border: 1.5px solid #6BA894;
}
em{
	color: #6BA894;
}
.fontawesome{
	color: black;
	font-size:15px;
	text-align: center;
	margin:auto;
background:  #E0E1E0;
}
p{
	/*font-family: myfont3;*/

	color: black;
	font-size:19px;
	text-align: center;
	margin:auto;
padding: 5px 8px;
background:  #6BA894;
border-radius: 5px;

}
#box2 h1{
	text-align: left;
	padding-left: 15px;
	font-size: 25px;
	padding-top: 0px;
	padding-bottom: 0px;
	border-bottom: 0.5px solid grey;
}

 .simpletext{

	color: black;
	font-size:20px;
	text-align: left;
	margin:auto;
	text-align: left;
padding: 0px 8px;
background: #E0E1E0;
border: 0.5px solid #6BA894;;
padding: 10px;
border-radius: 0px;

}

.simpletext:hover{
  transform: scale(1.05);
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.fontawesome:hover{
	color: blue;
}


.Education{
 font-family: myfont3;
 color: black;
 font-size:15px;
 text-align: left;
 margin:auto;
border-left: solid #6BA894 1.5px;
padding: 0px 10px;
background: #E0E1E0;
border-radius: 2px;
}

.fontawesome:hover{
	color: blue;
}

.meee{
  transform: scale(1.06);
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);

}

</style>

<body id="s1">

<div id="one">
  <div class="menu">

		<a href="practice.php" style="padding-left:35px;"> AboutMe </a><br><br>
		<a href="resume.php" style="padding-left:42px;"> Resume </a><br><br>
		<a href="skills.php" style="padding-left:63px;"> Skills </a><br><br>
    <a href="Portfolio.php" style="padding-left:59px;"> Home </a><br><br>

	</div>

  <div id="box">

    <h1><img class="meee" width="260px" height="260px" src="me2.jpg"/><br>Hi! I'm <em>Maryam Rashid.</em></h1>
    <h2> Web Developer & Designer  </h2>
		<br><br>
		<p>An Undergrad BS Computer Science student currently studying at National University of Science and Technology Islamabad.</p>
<br>




  </div>


  <div id="box2">
<h1><em>About Me </em></h1>
<br><p class="about me">Website Designer and Front End Developer from Islamabad, Pakistan</p>
<br><p class="simpletext">      "I enjoy taking complex problems and turning them
into simple and beautiful interface designs. I also love the logic
and structure of coding and always strive to write elegant and efficient code, whether it be HTML, CSS or jQuery."
</p>
<br><p class="simpletext">     "When I'm not coding or pushing pixels, you'll find me in the gym or on the court shooting some goals."</p>
  </div>
	<script>
  $(document).ready(function(){


    $("#box").fadeIn(1500);
    $("#box2").fadeIn(1500);


  });

	</script>
</div>
</body>
</html>
