<!DOCTYPE html>
<html lang="en">
<head>

     <title>Sports Event Management System</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="reg.html">
              <i class="fad fa-running"></i>
              Sports Event Management System
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../index.html" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll">How</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact/index.html"class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="pcw/login_reg.html" class="nav-link contact">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 100%; /* IE10 */
  flex: 100%;
}

.col-50 {
  -ms-flex: 100%; /* IE10 */
  flex: 100%;
}

.col-75 {
  -ms-flex: 100%; /* IE10 */
  flex: 100%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #0000FF;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
    <head>
        <title>Login and Registration</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
<?php  

 
$conn = mysqli_connect("localhost:3306", "root", "","sems");  
if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM participant";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <html>
 <body>
 <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #FFFFFF;
  color: #0066CC;
}
</style>


 <script src='https://code.jquery.com/jquery-3.5.1.min.js'>
        
        </script>

        <script>
            $('.message a').click(function(){
                $('form').animate({height:"toggle", opacity: "toggle"},"slow");

            })
        </script>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
<?php  

$m= $_REQUEST['id'];
$conn = mysqli_connect("localhost:3306", "root", "","sems");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM participant where id = $m";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <form  action="update.php" method="get">
 
 <table width='200' border='1'>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><th>Firstname</th><th>Lastname</th><th>Email</th><th>Register Date</th><th>Username</th></tr><tr><td><input type = 'text' name = 'firstname' value='$row[firstname]'></td><td><input type = 'text' name = 'lastname' value='$row[lastname]'></td><td><input type = 'text' name = 'email' value='$row[email]'></td><td><input type = 'text' name = 'reg_date' value='$row[reg_date]'></td><td><input type = 'text' name = 'username' value='$row[username]'></td></tr>";
	
  } 
 ?>
 <input type="hidden" name="pid" value="<?php echo $m;?>" />
 
 </table><br />
<center> <input type="submit" value="submit"></center>
 </form>
 <?php
mysqli_close($conn);  
?>  

</body>
</html>