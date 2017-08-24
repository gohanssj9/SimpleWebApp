<?php
	include("connectDB.php");
	$sql = "SELECT COUNT(student_id) FROM student";
    $rs_result = mysqli_query($con,$sql);
    $row = mysqli_fetch_row($rs_result);
    $total_records = $row[0];
    $total_pages = ceil($total_records / 5);
    $pagLink = "<br/><br/><hr><div class=\"text-center\"><div class=\"pagination\">  <a href='readRecord.php?page=1'>&laquo;</a>";
    for ($i=1; $i<=$total_pages; $i++) {
 	   $active = $i == $page ? 'class="active"' : '';
 	   $pagLink .= "<a $active href='readRecord.php?page=".$i."'>".$i."</a>";
    }
    $i = $i-1;
    echo $pagLink . "<a  href='readRecord.php?page=".$i."'>&raquo;</a></div></div>";
?>