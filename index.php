<?php
    session_start();
    if(isset($_SESSION['isAdmin'])){
        header("Location: admin.php");
        exit();
    }

    if((include 'dbconnection.php') == TRUE){

        if (isset($_POST['admin_login'])) {

            session_start();

            $username = $_POST['admin_username'];
            $password = $_POST['admin_password'];

            $_SESSION['isAdmin'] = "true";

            $query = "select * from admin where username='$username' AND
                        password='$password';";
            $result = mysqli_query($conn, $query);
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    header("Location: admin.php");
                }
            }
            else{
                ?>
                
                <script type="text/javascript">
                    alert("Wrong username or password");
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
                <form name="admin" id="adminForm" action="" onsubmit="return validateForm()" method="post">
                    <input type="text" name="admin_username" placeholder="Username">
                    <input type="password" name="admin_password" placeholder="Password">
                    <button type="submit" name="admin_login">Login</button>
                </form>
            </div>
    		<!-- Admin panel ends -->
		</div>
	</nav>

	<!-- Student login form -->
    <div class="container">
        <h1>Student Login</h1>
        <form name="student" action="" method="post">
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <!-- Student login form ends -->

    <script type="text/javascript">
        function validateForm() {
            var x = document.forms["admin"]["username"].value;
            if (x == "") {
                alert("Username must be filled out");
                return false;
            }
            var x = document.forms["admin"]["password"].value;
            if (x == "") {
                alert("Password must be filled out");
                return false;
            }
        }
    </script>

</body>
</html>