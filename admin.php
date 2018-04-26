<?php

	session_start();

	//checking for login or not
	if(!isset($_SESSION['isAdmin'])){
		header("Location: index.php");
		exit();
	}

	//logging out
	if (isset($_POST['admin_logout'])) {
		unset($_SESSION['isAdmin']);
		session_destroy();
		header("Location: index.php");
		exit();
	}

	if((include 'dbconnection.php') == TRUE){

	    if (isset($_POST['add'])) {

	        $username = $_POST['username'];
	        $fullname = $_POST['fullname'];
	        $email = $_POST['email'];
	        $ph = $_POST['ph'];
	        $address = $_POST['address'];
	        $password = $_POST['password'];

	        //checking for existing email, username or phone number
	        $query = "select * from student where username='$username' OR email='$email'
				OR ph='$ph';";

			$result = mysqli_query($conn, $query);
			$row = mysqli_num_rows($result);
			if($row > 0){
				?>
					
					<script type="text/javascript">
						alert("Username or email or phone number has been already registered");
					</script>
				
				<?php
			}else{

			        $query = "insert into student(username, fullname, email, ph, address, password) 
								values('$username', '$fullname', '$email', '$ph', '$address', '$password');";
			        mysqli_query($conn, $query);
			        ?>
				
					<script type="text/javascript">
						alert("Student added successfully");
					</script>
			
			        <?php  

			}	        	     
	        	        
	    }
	}
	else{
	    echo "Database is not able to connect";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin | Page</title>
	<link rel="stylesheet" href="./css/adminStyle.css">
	<script type="text/javascript" src="./js/adminScript.js"></script>
</head>
<body>
	<form action="" method="post">
		<button type="submit" name="admin_logout" class="adminLogout">Log Out</button>
	</form>
	
	<!-- Admin section -->
	<div id="center">
		<p>Welcome Admin</p>
		<button id="addStudent">Add Student</button>
		
		<p>Or</p>
		<h1>Add Question</h1>

		<form action="questions.php" method="get">
			<select name="subject">
			  <option value="java">Java</option>
			  <option value="php">PHP</option>
			  <option value="sql_q">SQL</option>
			  <option value="android">Android</option>
			</select>
			<br>
			<button type="submit" name="go">Go</button>
		</form>
	</div>
	<!-- Admin section ends -->

	<!-- Student form  -->
	<form name="addStudentForm" action="" onsubmit="return validateForm()" id="studentForm" method="post">
		<h1>Add Student</h1>
		<input type="text" name="username" placeholder="Username"><br>
		<input type="text" name="fullname" placeholder="Full name"><br>
		<input type="text" name="email" placeholder="Email"><br>
		<input type="text" name="ph" placeholder="Phone no."><br>
		<input type="text" name="address" placeholder="Address"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="password" name="confirm_password" placeholder="Confirm password"><br>
		<button type="submit" name="add">Add</button>
	</form>
	<!-- Student form ends -->

	<script type="text/javascript">
	    function validateForm() {
	        var x = document.forms["addStudentForm"]["username"].value;
	        if (x == "") {
	            alert("Username must be filled out");
	            return false;
	        }
	        var x = document.forms["addStudentForm"]["fullname"].value;
	        if (x == "") {
	            alert("Fullname must be filled out");
	            return false;
	        }
	        var x = document.forms["addStudentForm"]["email"].value;
	        if (x == "") {
	            alert("Email must be filled out");
	            return false;
	        }
	        var x = document.forms["addStudentForm"]["ph"].value;
	        if (x == "") {
	            alert("Phone no. must be filled out");
	            return false;
	        }
	        var x = document.forms["addStudentForm"]["address"].value;
	        if (x == "") {
	            alert("Address must be filled out");
	            return false;
	        }
	        var x = document.forms["addStudentForm"]["password"].value;
	        if (x == "") {
	            alert("Password must be filled out");
	            return false;
	        }
	        var x = document.forms["addStudentForm"]["confirm_password"].value;
	        if (x == "") {
	            alert("Confirm password must be filled out");
	            return false;
	        }

	        // checking password matching
	        var password = document.forms["addStudentForm"]["password"].value;
	        var confirmPassword = document.forms["addStudentForm"]["confirm_password"].value;

	        if(password != confirmPassword){
	        	alert("Password should match");
	            return false;
	        }

	    }
	</script>

</body>
</html>