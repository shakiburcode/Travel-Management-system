
<?php
	$db = mysqli_connect("localhost", "root", "", "travel");

	if (!$db) {
		die("Database not connected");
	} else {
		echo "Database connected" . "<br>";
	}
   
	$student_id = $_POST['firstName'];
	$student_name = $_POST['password'];


	$sql = "INSERT INTO `login` (`id`, `firstName`, `password`) VALUES (Null,$student_id, '$student_name')";

	if (mysqli_query($db, $sql)) {
		echo "Information Added";
	} else {
		echo "There is an error" . mysqli_error($db);
	}


	?>

