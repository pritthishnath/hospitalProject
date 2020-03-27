<?php
$connect = new  mysqli("localhost", "root", "", "hospital_demo");
$output = '';
$find = $_POST['search'];
if($connect)
  { echo "Connect done";
    
	$query = "SELECT PID,NAME,ADDRESS,GENDER,PHONE,EMAIL FROM patient_data WHERE NAME LIKE '$find%'";
	echo"$query";
	$result = $connect->query($query) or die("MySQL error: " . $connect->error . "<hr>\nQuery: $query");
if($connect->affected_rows > 0)
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