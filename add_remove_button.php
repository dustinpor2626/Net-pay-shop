<?php

session_start();

if($_SESSION['true'] == true)
{
    
        $conn = mysqli_connect("localhost","root","","net_pay_shop");
     
 
    $img_add = $_GET['img_id'];
    $action = $_GET['action'];
    $user = $_SESSION['user'];


       $sql3 = "SELECT * FROM cart WHERE img_address='$img_add' AND user_id='$user'";
        $query3 = mysqli_query($conn,$sql3);
    $rows = mysqli_fetch_assoc($query3);
    $quantity = $rows['quantity'];
    
    
    if($action == 1)
    {
        $sql = "UPDATE cart SET quantity=quantity+1 WHERE img_address='$img_add' AND user_id='$user'";
        $query = mysqli_query($conn,$sql);
        echo $rows['quantity'];
    
    }
else if($action == 0 && $quantity>1)
{

        $sql2 = "UPDATE cart SET quantity=quantity-1 WHERE img_address='$img_add' AND user_id='$user'";
        $query2 = mysqli_query($conn,$sql2);
        echo $rows['quantity'];
    
}else
        {
    header('Location:cart.php?error-->>');
}
    
   
    
    
}
else{
    
    header('Location:login_page.php?error-->>');
}
    
    
