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
  <link rel="stylesheet" type="text/css" href="style.css">

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
<!-- <li class="current"><a href="loginn.html">Login</a></li> -->
        </ul>
      </div><!--close menubar-->	
	</nav>
    
	<div id="site_content">		  
	  <div id="content">
        <div class="content_item"> </div>
          <a style="font-size:20px;color:white;" href="StudReg.php"> Insert New Record</a><br>
<a style="font-size:20px;color:white;"href="logout.php"> Logout</a>
<table width="100%" border="3" align="center"> 
    <tr> <th colspan="8" style="font-size:1.5em;text-align: center; height:50px;"> View Student's Record</th></tr> 
          <tr>
    <th> Sr. </th>
    <th> Student Name </th>
    <th> Father Name </th>
    <th> Roll No</th>
    <th> Course Enrolled</th>
    <th> Delete Record </th>
    <!-- <th> Edit Record</th>
    <th> Details </th> -->
    </tr>
<tr >
    <?php
// Create connection
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_close($link);

$host='localhost';
$user='root';
$pass='';
$db='szabist';

$conn=mysqli_connect($host,$user,$pass,$db);
if($conn) {
echo "Connection successful"; 
}
$query="select * from student";
    $run=mysqli_query($conn,$query);
$i=1;
        while($row=mysqli_fetch_array($run))
        {
            $sr=$row[0];
            $name=$row[1];
             $father=$row[2];
            $roll=$row[3];
             $course=$row[4];
    ?>
<td><?php echo $i; $i++; ?> </td> 
<td><?php echo $name; ?> </td> 
<td> <?php echo $father; ?></td> 
<td> <?php echo $roll; ?></td> 
<td><?php echo $course; ?> </td> 
<td>
<a style="color:white;" href='delete.php?del=<?php echo $roll; ?>'>Delete </td> 
<!-- <td>Edit </td>
<td>Details </td>  -->
</tr>
<?php } ?> 
          </table>
               
		</div><!--close content_item-->
      </div><!--close content-->   

  
    <footer>
	 <a href="index.html">Home</a> | <a href="programs.html">Program</a> | <a href="teachers.html">Teachers</a> | <a href="admissions.html">Admissions</a> | <a href="contact.html">Contact</a> <br/><br/>
	     Copyright &copy; 2017 Nisha Tanwani
    </footer>

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>  
  </body>
</html>
