<!DOCTYPE html> 
<html>
<head>
  <title>Student Registration</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/contentstyle.css">

<script type="text/javascript" src="js.js"></script>

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
<li class="current"><a href="loginn.html">Logins</a></li>
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
           
		  <div class="form_settings">
<a style="font-size:20px;color:white;" href="view_record.php"> View Records</a>
           
  <div class="form">
    <form class="login-form" method="POST" action="StudReg.php">
 <table width="400" border="3" style="text-align:right"> 
     <tr> <th colspan="2" style="font-size:1.5em;text-align: center; height:50px;"> Student's Registration Form</th></tr>
<tr> <td>Student's Name </td>
     <td> <input type="text" placeholder="Enter Name" name="sname" required/></td></tr>
<tr> <td>Student Father's Name </td>
       <td><input type="text" placeholder="Enter Father's Name" name="fname" required/> </td></tr>
<tr> <td>Student's Roll No:  </td>
     <td> <input type="number" placeholder="Enter Roll No:" name="roll" required></td></tr>
     <tr> <td> Select Course: </td>
     <td><select name="course" required> 
         <option>Diploma in Information Technology</option>
         <option>Diploma in Business Management</option>
         <option>Diploma in Web Design & Development</option>
         <option>Short course</option>
         </select>
        </td></tr>
     <tr> <td colspan="2"> <input type="submit" value="Register" name="submit"> </td></tr>
   </table>  
    </form>
  </div>
</div>

          </div><!--close form_settings-->
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
 
  
    <footer>
	 <a href="index.html">Home</a> | <a href="programs.html">Program</a> | <a href="teachers.html">Teachers</a> | <a href="admissions.html">Admissions</a> | <a href="contact.html">Contact</a> <br/><br/>
	    <a href="http://fotogrph.com">Images</a> | Copyright &copy; 2017 Nisha Tanwani
    </footer>

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>  
  </body>
</html>

<?php
// Create connection
$host='localhost';
$user='root';
$pass='';
$db='szabist';

$conn=mysqli_connect($host,$user,$pass,$db);
if($conn) {
echo "Connection successful"; 
}
if(isset($_POST['submit']))
{
echo $name=$_POST['sname'];
echo $father=$_POST['fname'];
echo $rollNo=$_POST['roll'];
echo $course=$_POST['course'];
$query="INSERT INTO student
 (sname, father, rollno,course)
VALUES('$name','$father','$rollNo','$course')";
//$query=mysqli_query($conn,$query);
if(mysqli_query($conn,$query))
{
echo "<script>window.open('view_record.php?Inserted=Record Inserted successfully...!' , '_self') </script> ";
}
    else
    {
        echo "<script>alert('Not inserted') </script>";
    }
}
?>
    