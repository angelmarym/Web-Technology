<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body> 
      <?php
		session_start();

		require 'connect.php';
	  
         // define variables and set to empty values
         $nameErr = $ageErr = $genderErr = "";
         $name = $age = $gender = $add = $course = "";
		 
		 $id = 0;
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
			 
				if (empty($_POST["name"])) {
				   $nameErr = "Name is required";
				}else {
				   $name = test_input($_POST["name"]);
				}
				
				if (empty($_POST["age"])) {
				   $ageErr = "Age is required";
				}else {
				   $age = test_input($_POST["age"]);
				   $ag = (int)$age;
				}
				
				if (empty($_POST["add"])) {
				   $add = "";
				}else {
				   $add = test_input($_POST["add"]);
				}
				
				if (empty($_POST["gender"])) {
				   $genderErr = "Gender is required";
				}else {
				   $gender = test_input($_POST["gender"]);
				}
				
				if (empty($_POST["course"])) {
				   $courseErr = "You must select 1";
				}else {
				   $course = $_POST["course"];    
				}
				
				 
				$query = "SELECT stu_id FROM stuinfo ORDER BY stu_id DESC LIMIT 1";
				$result = mysqli_query($con,$query);
				
				if($result >= 0 ) {
					
					$id = (int)$result;
					$sid = $id + 1;
					echo "<h2>Student id is $sid</h2>";
					
					$query = "INSERT INTO stuinfo (stu_id, stu_name, age, gender, course, address) VALUES ('$sid', '$name', '$ag', '$gender', '$course', '$add')";
					$res = mysqli_query($con,$query);
					
					if($res) {
					  echo "<h2>Student details are registered</h2>";
					  exit;

					} else {

					  die("Could not insert");

					}

				} else {

				  die("Could not get student id");

				}
				
				
				
			}
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
		
		
		
		 
      ?>
        
      <h2>Student registration</h2>
      
      <p><span class = "error">* required field.</span></p>
      
      <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Age:</td>
               <td><input type = "text" name = "age">
                  <span class = "error">* <?php echo $ageErr;?></span>
               </td>
            </tr>
          
            <tr>
               <td>Address:</td>
               <td> <textarea name = "add" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
				  <input type = "radio" name = "gender" value = "male">Other
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Course:</td>
               <td>
                  <select name = "course">
                     <option value = "MCS">MCS</option>
                     <option value = "MCA">MCA</option>
                     <option value = "MDS">MDS</option>
                     <option value = "MDS">MSc</option>
                  </select>
               </td>
            </tr>
          
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
            
         </table>
      </form>
   </body>
</html>