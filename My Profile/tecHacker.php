<!DOCTYPE html>
<html>
<head><title>Blog</title>
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
 padding: 15px 25px;
 padding-top: 0px;
 height: 90%;
 width: 63%;
 margin-bottom: 20px;
 position: absolute;
 left: 11.5%;
 top: 25px;
background:#E0E1E0;
 /*background: #F99589;*/
 overflow-y: scroll;
  display:none;
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

img:hover{
  border: solid 2px #6BA894;
  transform: scale(1.05);
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

img{
  transition-duration: 0.25s;
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
   text-align: left;
   margin:auto;
padding: 15px 0px;
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
    transition: ease-in-out 0.25s;
}
.menu a:hover{
  background: black;
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




.fontawesome:hover{
	color: blue;
}

.fontawesome:hover{
	color: blue;
}


#title{
position: fixed;
width: 62%;
background: #E0E1E0;
opacity: 1;

}


#articles{
  height: 80%;

  padding: 10px;
}

#blog1{
margin-top: 5px;
  float:left;
 width: 48.5%;


  padding: 3px;
}
#blog2{
  margin-top: 5px;
    float:left;
   width: 48.5%;


    padding: 3px;
}
#blog3{
  margin-top: 5px;
    float:right;
   width: 48.5%;


    padding: 3px;
}
#blog4{
  margin-top: 5px;
    float:left;
   width: 48.5%;


    padding: 3px;
}


#articles a {

    text-decoration: none;
    width: 100%;
    color: white;

    padding: 0px;

    background: white;


}
p{
  font-size: 18px;
}

</style>

<body id="s1">

<div id="one">
  <div class="menu">

		<a href="tecHacker.php" style="padding-left:27px;"> TecHacker </a><br><br>
		<a href="foodblog.php" style="padding-left:34px;"> FoodBlog </a><br><br>
    <a href="Portfolio.php" style="padding-left:59px;"> Home </a><br><br>

	</div>

  <div id="box">
<div id="title"><h2>Working as a Content Writer for TecHacker.net</h2>
<p>Check out some of my best Articles and Blogs.</p></div>
<br>
<br>
<br>
<br>
<br>
<div id="articles">
  <div id="blog1">
    <a href="http://www.techacker.net/disney-natures-penguins-to-be-released-on-earth-day-2019/"><img title="Disney Nature’s “Penguins” to be released on Earth Day 2019 " src="blog1.jpg"/></a>
  </div>
  <div id="blog2">
  <a href="http://www.techacker.net/game-of-thrones-sits-on-the-iron-throne-of-television/"> <img title="Game of Thrones sits on the Iron Throne of Television" src="blog4.jpg"/></a>
  </div>

  <div id="blog3">
    <a href="http://www.techacker.net/apple-tv-plus-now-introducing-original-tv-shows-and-movies/ "><img title="Apple TV Plus: Now Introducing Original TV Shows and Movies " src="blog3.jpg"/></a>
  </div>

  <div id="blog4">
    <a href="http://www.techacker.net/the-harry-potter-franchise-goes-downhill-with-the-release-of-crimes-of-grindelwald/"><img title="The Harry Potter Franchise goes downhill with the release of “Crimes of Grindelwald"src="blog2.jpg"/></a>
  </div>

</div>
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
