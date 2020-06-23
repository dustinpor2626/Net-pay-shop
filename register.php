<?php

session_start();

    
    $conn = mysqli_connect("localhost","root","","net_pay_shop");
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    
    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($contact)){
        
    $sql = "INSERT INTO login(first_name,last_name,user_id,contact,password) VALUES('$first_name','$last_name','$email','$contact','$password')";
    
     if(mysqli_query($conn,$sql)){
         header('Location:login_page.php?registered-->successful');
     }else 
     {
         echo "error".mysqli_error($conn);
         mysqli_close($conn);
     }
    
    }else
      {
    
        header('Location:login_page.php?register-->error');
    }
    


?>