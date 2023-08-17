  <?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<style>
  
	body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;

}
.social{
	padding: 10px;
	color: yellow;
  

}

.column {
  float: left;
  width: 33.3%;
	font-family:Berlin Sans FB;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}
.contact{
	color:red;                                                                                             
}

.about-section {
  padding: 65px;
  text-align: center;
  background-color: #B7CEEC;
  color: green;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px;
  color: #87353A;
  background-color: #7FFFD4;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color:;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}</style>

<head>
	<title>CONTACT</title>
</head>
<body>
	<div class="about-section">
  <h1>Contact Our Creators</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="akash.jpeg" alt="AKASH" style="width:25%">
      <div class="container">
        <h2>AKASH KUMAR</h2>
        <p class="title">Founder</p>
        <p >Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>akash7050366@gmail.com</p>
       
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="adi.jpeg" alt="ADITYA" style="width:25%">
      <div class="container">
        <h2>ADITYA RAJ</h2>
        <p class="title">Founder</p>

        <p>Hii I am a website designer.</p>
        <p class="contact">Contact Details
        	<br>
         E-Mail Address:- adiraj2910@gmail.com
         <br>
        Phone No- 620****195</p>
      <P>  <button class="button" 
    onclick="window.location.href = 'https://mail.google.com/mail/';">
        EMAIL
    </button>
<button class="button"> <a href="https://www.facebook.com/Adisinhha ">facebook</button>
</P>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>