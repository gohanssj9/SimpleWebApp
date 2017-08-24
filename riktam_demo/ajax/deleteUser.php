<?php
	if(isset($_POST['student_id']) && isset($_POST['student_id'])!=""){
		include("connectDB.php");
		$user = $_POST['student_id'];
		$sql = "DELETE FROM student where student_id = '$user'";
		if(!$result = mysqli_query($con,$sql))
			exit(mysqli_error($con));
	}
?>