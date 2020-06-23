<?php

session_start();

if(isset($_GET['var']))
{
    
    $img_add = $_GET['var'];
    $_SESSION['img_add'] = $img_add;
    
    header('Location:product_desc.php');
    
}