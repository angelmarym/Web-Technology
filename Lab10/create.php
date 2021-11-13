<?php  



$conn = mysqli_connect("localhost:3306", "root", "","SEMS");  

if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "CREATE TABLE participant (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date VARCHAR(30),
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL

)";  

$sql1 = "CREATE TABLE event (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
e_name VARCHAR(30) NOT NULL,
time VARCHAR(30) NOT NULL,
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
location VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL

)";
 
 echo $sql;
 echo $sql1;
  mysqli_query($conn, $sql); 
  mysqli_query($conn, $sql1);

  mysqli_close($conn);
 
 
 ?>
 