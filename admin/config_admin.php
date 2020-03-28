<?php

$conn = new mysqli('localhost','ambosis','pnathsqlidea','hospital_demo');
if($conn->connect_error)
{
    die("Could not connect to the database right now".$conn->connect_error);
}


?>