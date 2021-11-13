<?php  

$r = $_REQUEST['firstname'];
$l = $_REQUEST['lastname'];
$e = $_REQUEST['email'];
$d = $_REQUEST['reg_date'];
$u = $_REQUEST['username'];
$m = $_REQUEST['pid'];


$conn = mysqli_connect("localhost:3306", "root", "","sems");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
 
  $sql = "update participant set firstname = '$r',lastname = '$l',email = '$e',reg_date = '$d' ,username = '$u' where id = $m";  ?>
<script type="text/javascript">
				alert('Data Updated Successfully');
				window.location="view_part.php";
		 </script>
		 <?php
 mysqli_query($conn, $sql);  
 
mysqli_close($conn);  
?>  