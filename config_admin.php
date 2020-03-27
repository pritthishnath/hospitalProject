<?php

$conn = new mysqli('localhost','root','','hospital_demo');
if($conn->connect_error)
{
    die("Could not connect to the database right now".$conn->connect_error);
}


?>