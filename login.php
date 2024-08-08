<?php
//if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['submit'])){
    include 'connect.php';

$user= $_POST['username'];
$pass= $_POST['password'];
$query= "select * from 'register' where username='$user'";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
echo $total;
if($total==1){
    //echo "login sucessfully";
    header('location:home.html');
}else{
    echo "login failed";
}
}
?>