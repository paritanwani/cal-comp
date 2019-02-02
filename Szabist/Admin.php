<!DOCTYPE html> 
<html>
<head>
  <title>Admin Login</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/contentstyle.css">
<script type="text/javascript" src="/js.js"></script>
</head>

<body>
  <div id="main">
    <header>
	  <div id="banner">
	    <div id="welcome">
	     <h3 style="font-family:Elephant;">SZABIST ZABTech <span>iTVe</span></h3>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h3><img width="170px" height="60px" src="images/images.jpg"></h3>
	    </div><!--close welcome_slogan-->			
	  </div><!--close banner-->
    </header>

	<nav>
	  <div id="menubar">
        <ul id="nav">
<li ><a href="index.php">Home</a></li>
<li><a href="programs.html">Programs</a></li>
<li><a href="teachers.html">Teachers</a></li>
<li><a href="admissions.html">Admissions</a></li>
<li ><a href="contact.html">Contact Us</a></li>
<li class="current"><a href="loginn.html">Login</a></li>
        </ul>
      </div><!--close menubar-->	
	</nav>
    
	<div id="site_content">		

      <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="900" height="250" src="images/contact.jpg"/></li>
          <li><img width="900" height="250" src="images/contact1.jpg" /></li>
          <li><img width="900" height="250" src="images/contact2.jpg" /></li>
        </ul> 
	  </div>
	
	  <div id="content">
        <div class="content_item">
       
  <div class="form">
<p style="color:white;font-size:2em;"> Admin Panel</p>
    <form class="login-form" method="POST">
    
      <input type="text" placeholder="username" name="uname"/>
      <input type="password" placeholder="password" name="pass"/>
 <input type="submit" name="Login" value="Login">
   
    </form>
  </div>
</div>

		</div><!--close content_item-->
      </div><!--close content-->   
 	
  </div><!--close main-->
  
    <footer>
	 <a href="index.html">Home</a> | <a href="programs.html">Program</a> | <a href="teachers.html">Teachers</a> | <a href="admissions.html">Admissions</a> | <a href="contact.html">Contact</a> <br/><br/>
	  Copyright &copy; 2017 Nisha Tanwani
    </footer>

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>  
  
</body>
</html>
<?php

$host='localhost';
$user='root';
$pass='';
$db='szabist';

$con=mysqli_connect($host,$user,$pass,$db);
if($con) {
echo "Connection successful"; 
}
if(isset($_POST['Login']))
{
$name=$_POST['uname'];
$password=$_POST['pass'];
$query="select * from account where name='$name' AND password='$password'";
$run=mysqli_query($con,$query);
if(mysqli_num_rows($run)==1)
{
echo "<script>window.open('view_record.php?Logged=logged in successfully...!' , '_self') </script> ";
}
    else
    {
        echo "<script>alert('Username or Password incorrect') </script>";
    }
} 
?>