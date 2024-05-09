<?php
$hostname="localhost";
$username="root";
$password="";
$database="snapstudy";

$conn = mysqli_connect($hostname, $username, $password,$database);

if(!$conn)
{
    die("COULD NOT CONNECT".mysqli_error());
}
echo "CONNECTION CREATED IS SUCCESFULL WITH DATABASE";


?>