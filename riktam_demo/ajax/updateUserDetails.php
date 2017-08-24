<?php
	include("connectDB.php");
	if(isset($_POST)){
		$student_id = $_POST['student_id'];
		$student_name = $_POST['student_name'];
		$student_age = $_POST['student_age'];
		$student_college = $_POST['student_college'];
		$student_dept = $_POST['student_dept'];

		$dummy = "SELECT student_id FROM student WHERE student_id = '$student_id'";
		$res = mysqli_query($con,$dummy);

		/*if($res){
			echo "<script>
				(function(){
					alert('$msg');
				})
				();
				</script>";
		} */
		$sql = "UPDATE student SET student_id = '$student_id',student_name='$student_name',student_age='$student_age',student_college='$student_college',student_dept='$student_dept' WHERE student_id = '$student_id'";
		if(!$result = mysqli_query($con,$sql))
				exit(mysqli_error($con));
	}
?>