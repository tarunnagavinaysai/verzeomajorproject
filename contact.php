<!--STARTING CONNECTION-->
<?php
include('databaseconnection.php');
?>
<!--ENDING CONNECTION-->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/styleall.css"/>
  <link rel="stylesheet" href="css/csscontact.css"/>
  <link rel="stylesheet" href="css/footerstyle.css"/>
  <link rel="stylesheet" href="css/headerstyle.css"/>

<?php 
include ('reuseheader.php');
?>


<!--START INSERTING DATA IN DATABASE-->
<?php
if(isset($_REQUEST['Send']))
{
if(($_REQUEST['Name']=="")||($_REQUEST['Email']=="")||($_REQUEST['Message']==""))
{
$rsgmsg='<div class="alert alert-warning mt-3"><i class="fa fa-close mr-2"></i>Please fill all the fields!</div>';
}
else
{
$Name=$_REQUEST['Name'];
$Email=$_REQUEST['Email'];
$Message=$_REQUEST['Message'];
$sql="INSERT INTO contactus_tb(Name,Email,Message) VALUES('$Name','$Email','$Message')";
if(mysqli_query($conn,$sql))
{
$rsgmsg='<div class="alert alert-success mt-3 close"><i class="fa fa-check mr-2"></i>Your Message has been Submitted successfully!</div>';
}
}
}
?>
<!--END INSERTING DATA IN DATABASE-->


<br><br><br><br><br>
<div class="container">
<div class="card">
        
<img src="https://images.pexels.com/photos/3356416/pexels-photo-3356416.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
        
<div class="card-header">
<h2>Contact Us</h2>
<div class="card-body">
<form action="" method="POST">

<div class="form-group">
    <i class="fa fa-user" style="color: black;"></i>
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="Name" placeholder="Enter Your Name">
</div>

<div class="form-group">
    <i class="fa fa-envelope" style="color: black;"></i>
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" name="Email" placeholder="Enter Your Email">
    <small class="form-text text-black">We'll never share your email with anyone else.</small>
</div>
            
<div class="form-group">
    <i class="fa fa-comments" style="color: black;"></i>
    <label for="inputComment">Message</label>
    <textarea class="form-control" rows="5" name="Message" placeholder="Enter Your Message"></textarea>
</div>

<button type="submit" class="btn1 disabled" name="Send">SEND</button> 
<?php
if(isset($rsgmsg))
{echo $rsgmsg;}
?>     
</form>
</div>
</div>
    
</div>
</div>
<!--
<div class="container">
    <div class="card"> 
        <div class="card-img-overlay">
          <br>
          <div class="card col-sm-6 mx-auto  special-card text-white animate__animated animate__flipInX">
          
            <div class="card-header">
              <h2>Contact me</h2>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="inputComment">Message</label>
                <textarea class="form-control" rows="5" id="inputComment" placeholder="Message"></textarea>
              </div>
              <a href="" class="button disabled">SEND</a>
            </div>
      </div>
        </div>
      </div>
</div> 
-->
<?php 
include ('reusefooter.php');
?>