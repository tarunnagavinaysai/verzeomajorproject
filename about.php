<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/headerstyle.css">
<link rel="stylesheet" href="css/footerstyle.css">
    
    <!---G Font ----->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!----Font Awesome--->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!----Javascript--->
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 3,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });

        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });

        $('#reload').bind('click', function () {
          newOptions = eval("(" + $('#newoptions').val() + ")");
          carousel.reload(newOptions);
          return false;
        });

      });
    </script>
    
    
<!----- CSS Panel--->
<style>
.leftbox 
{
padding:4%;
margin:5%;
}
.rightbox
{     
justify-content: center;
align-items: center;
margin:5%;      
}
    
.headimg:hover
{
box-shadow: 5px 10px #444;
transition: 0.4s ease-in;
}
    
.abox:hover
{
box-shadow: 5px 10px  #FDEDEC;
transition: 0.5s ease-in;
}
    
#carousel
{
height:350px;
position:relative;
margin:10px;
clear:both;
overflow:hidden;
background:#ffffff;
}
      
#carousel img 
{
visibility:hidden;
cursor:pointer;
width:40%;
height:90%;
}
      
body
{
background-color:#fff;
}
</style>

<?php
include('reuseheader.php');
?>
</head>
<body>

<section class="about-section" id="about">

<div class="container pt-5 mb-4">
<div class="row pt-5">
        
<div class="col-sm-4">
<div id = "leftbox">
<img  src="image/about.jpg" alt="about" height="350" width="450" style="background-repeat: no-repeat; background-position: center; background-size: cover; margin-top:7em; border:1px solid #111; border-radius: 30%;" class="headimg">
</div>
</div>
        
<div class="col-sm-6 p-4 offset-sm-2 mt-5 shadow-lg">
<div id = "rightbox">
   <h1 style="font-size:40px;font-weight:bold;" class="text-center">About Us</h1>
   <p style="font-size:1rem;">I am an interior Designer  in New York, specializing in User  Design. We build clean, interiors which comply with the latest  standards.  Design is my life. Without it, my world would be black and white.
   I am a creative. I can never seem to stop creating anything. I am drawn to color and the beauty around me. I have always been drawn to art and design. Growing up I was constantly in my sketch book or having some kind of craft happening on the dining room table</p>
   <p style="font-size:1rem;">I am a hard working individual with a great attention to detail. I enjoy new and challenging projects that push me to learn more in the great field of interior design. Throughout college, I have gained great time managment skills that allow me to work on multiple projects at once.</p>
</div>
</div>
    
</div>
</div>
	
<div class="container mt-5 p-3 abox" style="background: rgb(158, 158, 158); border-radius: 20px;">
<h3 class="text-center"><strong>WHO ARE WE?</strong></h3>
<p style="font-size:1.1rem; font-weight:400;" class="text-center pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi rerum nostrum molestias repudiandae quidem delectus reprehenderit dolor officiis obcaecati distinctio magnam aspernatur, nihil, quos quod dolorum quo culpa ad eaque!.</p>
</div>


<div class="jumbotron bg-white mt-5">
<div class="container">
<div class="row">

<div class="col-lg-6">
    <img src="image/1.jpg" class="img-fluid"  style="width:500px;height:400px;">
</div>

<div class="col-lg-6">
<div class="container-fluid">
    <div class="row">
        <div>
          <h3 style="color:#34495E; border-bottom:2px solid #008489; font-weight:bold;" class="text-center">THE STUDIO</h3>
          <p class="p-1 text-center" style="font-size: 15px; font-weight: 400;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores aperiam neque saepe vel laborum! Magnam ullam at consectetur, quisquam officiis!</p>
        </div>
    </div>
    <div class="row">
     <div>
          <h3 style="color:#34495E; border-bottom:2px solid #008489; font-weight:bold;" class="text-center">HOW WE WORK</h3>
          <p class="p-1 text-center" style="font-size: 15px; font-weight: 400;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim odit repellendus natus quidem, minima impedit unde dolorum, autem nostrum eveniet.</p>
     </div>
    </div>
</div>   
</div>

</div>
</div>
</div>


<h1 style="margin-left:40%; margin-right:41.5%; font-size:38px; color:#34495E;
border-bottom:2px solid #008489; padding:13px 0;">Previous Works</h1>
<div id="carousel" >
      <a href=""><img src="image/6.jpg" id="item-1" /></a>
      <a href=""><img src="image/2.jpg" id="item-2" /></a>
      <a href=""><img src="image/3.jpg" id="item-3" /></a>
      <a href=""><img src="image/4.jpg" id="item-4" /></a>
      <a href=""><img src="image/5.jpg" id="item-5" /></a>
      <a href=""><img src="image/10.jpg" id="item-6" /></a>
      <a href=""><img src="image/7.jpg" id="item-7" /></a>
      <a href=""><img src="image/8.jpg" id="item-8" /></a>
      <a href=""><img src="image/9.jpg" id="item-9" /></a>
</div>
<p style="font-size:20px;">
   <a style="text-decoration:none; padding:13.5%;" href="#" id="prev">Prev</a> 
   <a style="text-decoration:none;padding:13.5%;" href="#" id="reload">Reload Images</a>
   <a style="text-decoration:none;padding:13.5%;" href="#" id="next">Next</a>
</p>
    
</section>
</body>
<div style="margin-top:8%;">
<?php
include('reusefooter.php');
?>
</div>
    
</html>