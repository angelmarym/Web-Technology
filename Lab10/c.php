<?php  
@session_start();

$uname=$_REQUEST['username'];
$password=$_REQUEST['password'];


$conn = mysqli_connect("localhost:3306", "root", "","sems");  
if(!$conn)
{  
  die('Could not connect: '.mysqli_connect_error());  
}  

$sql = "SELECT * FROM participant where username='$uname'";
$result=$conn->query($sql);
mysqli_query($conn, $sql);  
		 while(($row = mysqli_fetch_row($result))!= NULL )
		 {
		 		    $u = $row[5];
				    $p = $row[6];
				 $_SESSION["username"] = $u;
		 }
		 
	if ($uname==$u && $password==$p )
		 {
		 ?>
		 <script type="text/javascript">
				alert('Successfully Login');
				window.location="view_part.php";
		 </script>
		<?php
		 }
		 else
		 {
		 ?>
		 <script type="text/javascript">
				alert('Fail');
				window.location="reg.html";
		
		 </script>
		 <?php

		 }	 
		 
			
mysqli_close($conn); 
?>

