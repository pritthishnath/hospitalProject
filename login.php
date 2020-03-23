<?php
 $email = $_POST['uname'];
 $pw = $_POST['pwc'];

$conn = new mysqli('localhost','root','','hospital_demo');
if($conn)
{
	$select = "SELECT PID,NAME,GENDER FROM patient_Data WHERE EMAIL='$email'";
	$result = $conn->query($select); 
	if($result->num_rows > 0)
	{
		echo "<table><tr><th>PID</th><th>Name</th><th>GENDER</th></tr>";
              while($row = $result->fetch_assoc())
              {
            
                echo "<tr><td>" . $row["PID"]. "</td><td>" . $row["NAME"]. " " . $row["GENDER"]. "</td></tr>";
    }
    echo "</table>";
}
	else
	{
		echo "The database is empty";
	}
}





?>
