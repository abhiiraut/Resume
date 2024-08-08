<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="datastore";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn){
    echo "Not Connected";
}