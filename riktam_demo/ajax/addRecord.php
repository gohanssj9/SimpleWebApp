<?php
	include('connectDB.php');
	$id=$_POST['student_id'];
	$name=$_POST['student_name'];
	$age=$_POST['student_age'];
	$college=$_POST['student_college'];
	$dept=$_POST['student_dept'];

	$sql = "INSERT INTO student(student_id,student_name,student_age,student_college,student_dept) VALUES('$id','$name','$age','$college','$dept')";
	if(!$result = mysqli_query($con,$sql))
		exit(mysqli_error($con));
	echo "Record Added!";
?>