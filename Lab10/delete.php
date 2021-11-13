<?php  

$m= $_REQUEST['id'];
$conn = mysqli_connect("localhost:3306", "root", "","sems");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "DELETE FROM participant where id = $m";  

 mysqli_query($conn, $sql);  
 ?>
<script type="text/javascript">
				alert('Data deleted successfully');
				window.location="view_part.php";
		 </script>
		 <?php
mysqli_close($conn);  

?>  