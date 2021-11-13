<?php  

$a= $_REQUEST['firstname'];
$l= $_REQUEST['lastname'];
$b= $_REQUEST['email'];
$c = $_REQUEST['reg_date'];
$d=  $_REQUEST['username'];
$e=  $_REQUEST['password'];


$conn = mysqli_connect("localhost:3306", "root", "","sems");  

if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "INSERT INTO `participant` (`id`, `firstname`, `lastname`, `email`, `reg_date`, `username`, `password`) VALUES ('','$a','$l','$b','$c','$d','$e');";  
 
echo $sql;
  mysqli_query($conn, $sql); 
    ?>
	<!-- <script type="text/javascript">
				alert('Registration successful');
				window.location="login_reg.html";
		 </script>!>
	<?php

  mysqli_close($conn);
 
 ?>
 