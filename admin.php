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
		<button type="submit" class="adminLogout">Log Out</button>
	</form>
	
	<!-- Admin section -->
	<div id="center">
		<p>Welcome Admin</p>
		<button id="addStudent">Add Student</button>
		
		<p>Or</p>
		<h1>Add Question</h1>

		<form action="" method="">
			<select name="subject">
			  <option value="java">Java</option>
			  <option value="php">PHP</option>
			  <option value="sql">SQL</option>
			  <option value="android">Android</option>
			</select>
			<br>
			<button type="submit">Go</button>
		</form>
	</div>
	<!-- Admin section ends -->

	<!-- Student form  -->
	<form action="" id="studentForm" method="post">
		<h1>Add Student</h1>
		<input type="text" name="username" placeholder="Username"><br>
		<input type="text" name="fullname" placeholder="Full name"><br>
		<input type="text" name="email" placeholder="Email"><br>
		<input type="text" name="ph" placeholder="Phone no."><br>
		<input type="text" name="address" placeholder="Address"><br>
		<input type="text" name="password" placeholder="Password"><br>
		<input type="text" name="confirm_password" placeholder="Confirm password"><br>
		<button type="submit" name="add">Add</button>
	</form>
	<!-- Student form ends -->

</body>
</html>