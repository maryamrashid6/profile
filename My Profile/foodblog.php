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
background:#E0E1E0;
opacity: 1;

}

#articles{
  height: 80%;
float: left;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-right: 10px;
  padding-left: 37px;
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

.top-left1{
  color: white;
  position: absolute;
  left: 9%;
  top: 22%;

}

.top-left2{
  color: white;
  position: absolute;
  left: 54%;
  top: 22%;
}
.top-left3{
  color: white;
  position: absolute;
  left: 9%;
  top: 105%;
}
.top-left4{
  color: white;
  position: absolute;
  left: 54%;
  top: 105%;
}

.top-left5{
  color: white;
  position: absolute;
  left: 9%;
  top: 191%;
}
.top-left6{
  color: white;
  position: absolute;
  left: 54%;
  top: 191%;
}

#panel1 {
  padding: 20px;
  display: none;
  position: absolute;
  left: 7%;
  top: 25%;
width: 343px;

}
#panel2 {
  padding: 20px;
  display: none;
  position: absolute;
  left: 52%;
  top: 25%;
width: 310px;

}
#panel3 {
  padding: 20px;
  display: none;
  position: absolute;
  left: 7%;
  top: 108%;
width: 343px;

}
#panel4 {
  padding: 20px;
  display: none;
  position: absolute;
  left: 52%;
  top: 108%;
width: 300px;

}

#panel5 {
  padding: 20px;
  display: none;
  position: absolute;
  left: 7%;
  top: 192%;
width: 343px;

}
#panel6 {
  padding: 20px;
  display: none;
  position: absolute;
  left: 52%;
  top: 192%;
width: 300px;

}


img:hover{
  transform: scale(1.05);
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

img{
  transition-duration: 0.25s;
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
<div id="title"><h2>Working as a Chef and Food Blogger</h2>
<p>Here are some of the recipies I have tried.</p></div>
<div id="articles">
<br>
<br>
<br>
<br>
<br>
<br>
<img class="donuts" width="400px" height="500px" title="Donuts with sprinkles and white chocolate toppings" src="food1.jpg">
<div class="top-left1"><i class="fas fa-chevron-down"></i></div>
<div id="panel1">Donut with Sprinkles and Choco-Vanilla Toppings stuffed with Cream.
<br><br>Recipe:<br>Heat oil in deep-fryer to 375 degrees F (190 degrees C).<br>
In a large bowl, sift together flour, sugar, salt, baking powder, cinnamon and nutmeg. <br>Mix in butter until crumbly. Stir in milk and egg until smooth. <br>Knead lightly, then turn out onto a lightly floured surface.<br> Roll or pat to 1/4 inch thickness. Cut with a
 doughnut cutter, or use two round biscuit cutters of different sizes.<br>
Carefully drop doughnuts into hot oil, a few at a time.<br> Do not overcrowd pan or oil may overflow.<br> Fry, turning once, for 3 minutes or until golden. Drain on paper towels.
</div>


<img class="burger" width="370px" height="500px" title="Beef and Cheese Burger" src="food2.jpg">
<div class="top-left2"><i class="fas fa-chevron-down"></i></div>
<div id="panel2">Beef and Cheese Burger with Mustard sauce. <br><br>
  Recipe:<br>Sprinkle the ground beef evenly with 1/2 teaspoon salt in a large bowl. Gently form the meat into 4 balls, then lightly press into 4-inch-wide, 1-inch-thick patties. Make a 2-inch-wide indentation in the center of each with your thumb to prevent the burgers from bulging when grilled.
Preheat a grill to high. Season the patties with salt and pepper. Grill, undisturbed, until marked on the bottom, 3 to 5 minutes. Turn and grill until the other side is marked and the patties feel firm, 3 to 5 more minutes; if desired, top each burger with 2 slices cheese during the last 2 minutes of cooking and cover with a disposable aluminum pan to melt.
Serve the patties on the buns; top with lettuce and tomato.

</div>


<img class="cake" width="400px" height="520px" title="Chocolate Cake with strawberry juice" src="food3.jpg">
<div class="top-left3"><i class="fas fa-chevron-down"></i></div>
<div id="panel3"> Chocolate Cake with Strawberry Juice<br><br>
  Cake Recipe:<br>Preheat oven to 350 degrees F (175 degrees C). Grease and flour two nine inch round pans.
In a large bowl, stir together the sugar, flour, cocoa, baking powder, baking soda and salt. Add the eggs, milk, oil and vanilla, mix for 2 minutes on medium speed of mixer. Stir in the boiling water last. Batter will be thin. Pour evenly into the prepared pans.
Bake 30 to 35 minutes in the preheated oven, until the cake tests done with a toothpick. Cool in the pans for 10 minutes, then remove to a wire rack to cool completely.<br><br>
Strawberry Juice Recipe:<br>Place strawberries in a blender; top with 2 tablespoons sugar. Pour 1 cup water over sugared strawberries. Blend until strawberry chunks transform into juice.
Combine strawberry juice, 6 cups water, 1 cup sugar, and lemon juice in a large pitcher; stir until blended. Chill before serving.

</div>



<img class="brownies" width="370px" height="520px" title="Brownies with vanilla icecream" src="food5.jpg">
<div class="top-left4"><i class="fas fa-chevron-down"></i></div>
<div id="panel4">Brownies with vanilla icecream <br><br>
  Recipe:<br>Preheat oven to 350 degrees F (175 degrees C). Grease and flour an 8-inch square pan.
In a large saucepan, melt 1/2 cup butter. Remove from heat, and stir in sugar, eggs, and 1 teaspoon vanilla. Beat in 1/3 cup cocoa, 1/2 cup flour, salt, and baking powder. Spread batter into prepared pan.
Bake in preheated oven for 25 to 30 minutes. Do not overcook.
To Make Frosting: Combine 3 tablespoons softened butter, 3 tablespoons cocoa, honey, 1 teaspoon vanilla extract, and 1 cup confectioners' sugar. Stir until smooth. Frost brownies while they are still warm.

</div>


<img class="stake" width="400px" height="520px" title="Barbeque sauce steak" src="food6.jpg">
<div class="top-left5"><i class="fas fa-chevron-down"></i></div>
<div id="panel5">Barbeque sauce steak <br><br>
  Recipe:<br>Place each steak between two sheets of heavy plastic (or inside a resealable freezer bag) on a solid, level surface. Firmly pound each steak with the smooth side of a meat mallet to a thickness of 1/4-inch. Remove steaks from plastic.
Generously season each steak with salt and ground black pepper. Set aside.
Combine beef broth, barbeque sauce, hot sauce, and black pepper in a bowl. Add chilled butter to broth mixture but do not stir.
Heat oil in a large skillet over high heat until it just begins to smoke, about 1 minute. Place each steak in the pan; sear for 45 to 60 seconds on each side. Remove steaks from skillet and set them aside to rest.
Pour the broth mixture into the skillet and bring to a boil while scraping the browned bits of food off of the bottom of the pan with a wooden spoon. Stir occasionally until butter is melted and incorporated, about 2 minutes.
Spoon broth and butter mixture over steak and serve.
</div>


<img class="pasta" width="370px" height="520px" title="Macaroni pasta" src="food7.jpg">
<div class="top-left6"><i class="fas fa-chevron-down"></i></div>
<div id="panel6">Macaroni Pasta with white sauce<br><br>
  Recipe:<br>Bring a large pot of lightly salted water to a boil. Add the macaroni, and cook until tender, about 8 minutes. Rinse under cold water and drain.
In a large bowl, mix together the mayonnaise, vinegar, sugar, mustard, salt and pepper. Stir in the onion, celery, green pepper, carrot, pimentos and macaroni. Refrigerate for at least 4 hours before serving, but preferably overnight.

</div>


</div>
  </div>
  <script>
  $(document).ready(function(){

      $("#box").fadeIn(1500);
      $("#box2").fadeIn(1500);


  });
  </script>

	<script>
  $(document).ready(function(){
    $(".top-left1").click(function(){
      $("#panel1").slideToggle("slow");
      $(".donuts").fadeTo(1000, 0.25);
    });
    $(".top-left2").click(function(){
      $("#panel2").slideToggle("slow");
      $(".burger").fadeTo(1000, 0.25);
    });
    $(".top-left3").click(function(){
      $("#panel3").slideToggle("slow");
      $(".cake").fadeTo(1000, 0.25);
    });
    $(".top-left4").click(function(){
      $("#panel4").slideToggle("slow");
      $(".brownies").fadeTo(1000, 0.25);
    });
    $(".top-left5").click(function(){
      $("#panel5").slideToggle("slow");
      $(".stake").fadeTo(1000, 0.25);
    });
    $(".top-left6").click(function(){
      $("#panel6").slideToggle("slow");
      $(".pasta").fadeTo(1000, 0.25);
    });
  });
	</script>

</div>
</body>
</html>
