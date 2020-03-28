<?php
include "db_config.php";
$output = '';
$find = $_POST['search'];
if($conn)
  { echo "Connect done";
    
	$query = "SELECT PID,NAME,ADDRESS,GENDER,PHONE,EMAIL FROM patient_data WHERE NAME LIKE '$find%'";
	// echo"$query";
	$result = $conn->query($query) or die("MySQL error: " . $conn->error . "<hr>\nQuery: $query");
if($conn->affected_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$output = "
			<tr>
				<td>".$row['NAME']."</td>
				<td>".$row['ADDRESS']."</td>
				<td>".$row['GENDER']."</td>
				<td>".$row['PHONE']."</td>
				<td>".$row['EMAIL']."</td>
			</tr>
		";
		echo $output;
	}
}
else
{
	echo 'Data Not Found';
}
  }
  else{
	  echo "Something went wrong";
  }
?>