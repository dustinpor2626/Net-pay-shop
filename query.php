<?php

session_start();

$_SESSION['true'] = false;

if(isset($_POST['submit']))
{
    
    $conn = mysqli_connect("localhost","root","","net_pay_shop");
    $user = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM login WHERE user_id='$user' AND password='$password'";
    $query = mysqli_query($conn,$sql);
    
   $num = mysqli_num_rows($query);
    
    if($num == 0){
        
        header('Location:login_page.php?login_error--<<register first');
    }
    else
    {
       
        $_SESSION['user'] = $user;
        $_SESSION['true'] = true;
         header('Location:homepage.php?logged_in');
    }
    
    
    
}
else
{
    header('Location:login_page.php');
}