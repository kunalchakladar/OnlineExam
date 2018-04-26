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

	if (isset($_GET['go'])){
		$subject = $_GET['subject'];
	}
	
	if((include 'dbconnection.php') == TRUE){

	    if (isset($_POST['addQuestion'])) {

	    	$question = $_POST['question'];
	    	$a = $_POST['a'];
	    	$b = $_POST['b'];
	    	$c = $_POST['c'];
	    	$d = $_POST['d'];
	    	$answer = $_POST['answer'];

	    	switch ($subject) {
	    		case 'java':
	    			addQuestion($conn, $subject, $question, $a, $b, $c, $d, $answer);
	    			break;

	    		case 'android':
	    			addQuestion($conn, $subject, $question, $a, $b, $c, $d, $answer);
	    			break;

	    		case 'php':
	    			addQuestion($conn, $subject, $question, $a, $b, $c, $d, $answer);
	    			break;

	    		case 'sql_q':
	    			addQuestion($conn, $subject, $question, $a, $b, $c, $d, $answer);
	    			break;
	    		
	    		default:
	    			# code...
	    			break;
	    	}
	    	
	    }

	  }else{
	    	echo "Database is not able to connect";
	}

	function addQuestion($conn, $subject, $question, $a, $b, $c, $d, $answer)
	{
    	$query = "select * from $subject where question='$question';";
    	$result = mysqli_query($conn, $query);
    	$row = mysqli_num_rows($result);

    	if($row > 0){
    		?>
			<script type="text/javascript">
				alert("Question already exists");
			</script>
    		<?php
    	}else{
    		$query = "insert into $subject(question, a, b, c, d, answer) values('$question', '$a', '$b', '$c', '$d', '$answer');";
    		mysqli_query($conn, $query);
    		?>
			<script type="text/javascript">
				alert("Question added successfully");
			</script>
    		<?php
    	}

	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add | Questions</title>
	<link rel="stylesheet" href="./css/adminStyle.css">
	<link rel="stylesheet" href="./css/questions.css">
</head>
<body>
	<form action="" method="post">
		<button type="submit" name="admin_logout" class="adminLogout">Log Out</button>
	</form>

	<form class="questions" action="" method="post">
		<input class="add_question" type="text" name="question" placeholder="Add question"><br>
		A: <input type="text" name="a">
		B: <input type="text" name="b"><br>
		C: <input type="text" name="c">
		D: <input type="text" name="d"><br>
		<input type="text" name="answer" placeholder="Answer"><br>
		<button type="submit" name="addQuestion">Add</button>
	</form>

</body>
</html>