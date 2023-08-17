<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Study Adda</title>
  <link rel="icon" type="image/x-icon" href=" Study Adda-logos.jpeg">
	
</head>
<body>
  <div class="logo">
    <img src="Swhite.png" alt="logo"/>
  <h2 style="color: whitesmoke;" >Welcome to Study Adda<br>Place for Study </h2>
<style>
body {

  background-image: url('study.jpg');
  background-size:100%;
}
.logo img{
  float: left;
  width: 120px;
  height: 70px;
  
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 10px;
  border-radius: 10px;
}

.header a {
  float: left;
  color: Black;
  text-align: center;
  padding: 12px;
  font-size: 18px; 
  line-height: 20px;
  border-radius: 4px;
}
 
.time
{
  text-align: right;
}
.header a:hover{
  background-color:dodgerblue;
  color: ;
  transform: translateY(10px);
  opacity: 1;
}
.header a.active{
	background-color: ;
	color: ;
}



</style>

	<div class="header">
  
  <div class="header-right">
    <a class="active " href="index.php">Home</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="signup.php">Sign Up</a>

 <div class="time">
<?php
    date_default_timezone_set("ASIA/KOLKATA");
       echo date('d-m-Y  h:i:s:a'); 
  ?>
</div>
   
  </div>
</div>
<br>
<br>

</body>

</html>
