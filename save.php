<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$sql ="INSERT INTO `register` (`username`, `email`, `password`, `confirm_password`) VALUES 
('$username', '$email', '$password', '$confirmpassword')";

$result = mysqli_query($conn, $sql);

if($result){

    header('location:login.html');
     //echo "Data inserted sucessfully";
    //alert("Signup Sucessfully");
    
}
else// {
   die(mysqli_error($conn));
}
//}

// $sql="select * from 'register' where username='$username'";
// $result=mysqli_query($conn, $sql);
// if($result){
//     $num=mysqli_num_rows($result);
//     if($num>0){
//         echo "user already exist";
//     }else{
//         $sql ="INSERT INTO `register` (`username`, `email`, `password`, `confirm_password`) VALUES 
//     ('$username', '$email', '$password', '$confirmpassword')";
//     $result = mysqli_query($conn, $sql);

//     if($result){
//     echo "signup sucessfully";
// }
// else
// {
//    die(mysqli_error($conn));
// }
//     }
//     }
// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP PAGE</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body><div class="wraper">
    <div class="reset">
        <button onclick="document.location='index.html'">X</button>
</div> 
    <h1>Sign up</h1>
    <form action="save.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm Password" name="confirmpassword">
            <input type="submit" name="btn" value="Sign Up">
        
    </form>
    
     <div class="term">
    <input type="checkbox" id="checkbox">
    <label for="checkbox">I agree to these<a href="#">Terms and Condition</a></label>
     </div>
     
    
     <div class="member">
        Already a member? <a href="login.html">Login here</a>
     </div>
    
</div>
</body>
</html>