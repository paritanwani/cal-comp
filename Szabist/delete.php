<?php
$host='localhost';
$user='root';
$pass='';
$db='szabist';

$conn=mysqli_connect($host,$user,$pass,$db);
if($conn) {
echo "Connection successful"; 
}
$delete=$_GET['del'];
$query="delete from student where rollno='$delete'";
if(mysqli_query($conn,$query))
   { echo "<script>window.open('view_record.php?deleted=record deleted..' , '_self') </script>";
   }
   else
   {
   echo "<script>alert('error') </script>";
   }
?>