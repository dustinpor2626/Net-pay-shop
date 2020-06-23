<?php

session_start();

if($_SESSION['true'] == true)
{
    
      $conn = mysqli_connect("localhost","root","","net_pay_shop");
       $user_id = $_SESSION['user'];
        $img_add = $_SESSION['img_add'];

        $sql4 = "SELECT * FROM cart WHERE user_id='$user_id' AND img_address='$img_add'";
    $query4 = mysqli_query($conn,$sql4);
    $num = mysqli_num_rows($query4);
    
    
    
    
    if($num == 0)
    {
      

        $sql = "SELECT * FROM product_desc WHERE img_add='$img_add'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($query);

        $product_name = $row['name'];
        $price = $row['price'];

      
        $sql2 = "INSERT INTO cart(user_id,product_name,price,img_address,quantity) VALUES('$user_id','$product_name','$price','$img_add','1')";
        $query2 = mysqli_query($conn,$sql2);

header('Location:cart.php');
        
           }
      else{

    $sql3 = "UPDATE cart SET quantity=quantity+1  WHERE user_id='$user_id' AND img_address='$img_add'";
        $query3 = mysqli_query($conn,$sql3);
        
        header('Location:cart.php');
    
    }
 
    
    
    
    
    
    
}
else{
    
    header('Location:login_page.php?register_first');
}

?>