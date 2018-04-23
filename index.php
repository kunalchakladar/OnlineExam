<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online | Examination</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	
	<nav class="navbar">
		<div class="wrapper">
    		<ul>
                <div class="dropdown">
                  <li class="dropbtn"><a href="">Exams</a></li>
                  <div class="dropdown-content">
                    <a href="#">Java</a>
                    <a href="#">Android</a>
                    <a href="#">SQL</a>
                    <a href="#">PHP</a>
                  </div>
                </div>
                <li><a href="">About Us</a></li>
    			<li><a href="">Contact Us</a></li>
    		</ul>
    		
    		<!-- Admin panel -->
            <div class="adminPanel">
                <button id="adminLoginButton" class="adminLogin">Admin Login</button>
                <form id="adminForm" action="" method="post">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" name="login">Login</button>
                </form>
            </div>
    		<!-- Admin panel ends -->
		</div>
	</nav>

	<!-- Student login form -->
    <div class="container">
        <h1>Student Login</h1>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <!-- Student login form ends -->

</body>
</html>