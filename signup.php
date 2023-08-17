<?php
  include 'header.php';
?>
<html>
<title>Register</title>

<body>
	

  <form method="POST" action="<?php echo SITEURL . 'action/Asign.php'; ?> "  align="center">

<div class ="signup">    
<h3 align="center"> Registor/Sign Up</h3>

<input type="text" name="name"  placeholder="NAME"><br><br>


 <input type="text" name="contect"  placeholder="Contect No"><br><br>

 <input type="text" name="email"  placeholder="Email id" required="required">
 <br>
 <br>
 <input type="text" name="pswrd" placeholder="Create new password" required="required"><br>
 <br>
 <input type="text" name="pswrd" placeholder="Confirm password" required="required"><br>
 <br>
 <button type="text" name="submitbtn" style= "color: whitesmoke;  background-color:#6ea2f5; border-color: #6ea2f5;">submit</button>
</div>
</form>

<style>
    .signup {
width: 30% ;
 background-color: #f1f1f1;
 opacity: .9;
    
  padding: 20px ;

}
</style>
</body>
</html>