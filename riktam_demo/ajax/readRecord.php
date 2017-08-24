<?php
	include('connectDB.php');
	$data = '<table id="escalation" class="table table=bordered table-striped">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Age</th>
				<th>College</th>
				<th>Department</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>';
	
	$limit = 5;
    if(isset($_GET['page'])){ $page  = $_GET['page']; }
    else { $page=1; }
    $start_from = ($page-1) * $limit;
    $query = "SELECT * FROM student ORDER BY student_id ASC LIMIT $start_from, $limit";
	#$query = "SELECT * FROM student";

	if(!$result = mysqli_query($con,$query))
		exit(mysqli_error($con));

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			$data .= '<tr>
						<td>'.$row['student_id'].'</td>
						<td>'.$row['student_name'].'</td>
						<td>'.$row['student_age'].'</td>
						<td>'.$row['student_college'].'</td>
						<td>'.$row['student_dept'].'</td>
						<td>
							<button onclick="GetUserDetails('.$row['student_id'].')" class="btn btn-primary btn-lg">Edit</button></td>
							<td>
								<button onclick = "DeleteUser('.$row['student_id'].')" class="btn btn-danger btn-lg">Delete</button></td>
						</tr>';
		}
	}
	else 
		$data .='<tr><td colspan="6">Records not found!</td></tr>';

	$data .= '</table>';
	echo $data;


	$sql = "SELECT COUNT(student_id) FROM student";
	$rs_result = mysqli_query($con,$sql);
    $row = mysqli_fetch_row($rs_result);
    $total_records = $row[0];
    $total_pages = ceil($total_records / 5);
    $pagLink = '<br/><br/><hr><div class="text-center"><div class="pagination"><a href="index.php?page=1">&laquo;</a>';
    for ($i=1; $i<=$total_pages; $i++) {
        $active = $i == $page ? 'class="active"' : '';
                   $pagLink .= "<a $active href='index.php?page=".$i."'>".$i."</a>";
    }
    $i = $i-1;
    echo $pagLink . "<a  href='index.php?page=".$i."'>&raquo;</a></div></div>";

?>