<?php
	include("connectDB.php");
	if(isset($_POST['student_id']) && isset($_POST['student_id'])!=""){
		$user=$_POST['student_id'];
		$sql="SELECT * FROM student WHERE student_id = '$user'";
		if(!$result = mysqli_query($con,$sql))
			exit(mysqli_error($con));

		$response = array();
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result))
				$response = $row;
		}
		else{
			$response['status'] = 200;
			$response['message'] = "Data not found.";
		}
		echo json_encode($response);
	}
	else{
		$response['status'] = 200;
		$response['message'] = "Invalid.";
	}
?>