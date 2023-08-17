<?php
  include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    username and password
  </title>
</head>
<body> 

<style> 
body {
  background-image: url('study.jpg');
  background-size:100%;
  background-repeat: no-repeat;
}


</style>
<div class ="container">
  <form action=" " method="POST" align="center">
    
      <label for="uname"><b>Username</b>
      </label>
      <input type="text" name="uname"required>
      <br>
      <br>
      <label for="pswrd"><b> Password</b></label>
      <input type="password" name="password"required>
      <br>
      <br>
      <label for="chapsha"><b> Captcha </b></label>
      <input type="chapsha" name="chapsha" maxlength="6" size="4"><button style="color:whitesmoke; background-color:dodgerblue; border-color: dodgerblue;">
      <?php 
        echo rand(1000,9999)
         ?>
         </button>
      <br>
      <br>
      <input type="submit" name="submitbtn" value="Log In" style=" color: whitesmoke;  background-color:#6ea2f5; border-color: #6ea2f5;"> 
      <label> <input type="checkbox" name="remaimber">Remember me always
      </label><br>
  
      <span class="pswrd">Forgot <a href="#">Password?  </a></span><br>
      <br>
             
      <button type="signup" style=" color: whitesmoke; background-color: #a0f56e; border-color:#a0f56e;"><a href="signup.php">Creat New Account
      </button></a>
</div>
<style>
.container {
width: 30% ;
 background-color: #f1f1f1;
 opacity: .9;
    
  padding: 20px ;

}
  
  
</style>
  </form>  

</body>
</html>