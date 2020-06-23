<?php

session_start();

if($_SESSION['true'] == true)
    
{ 

?>

<html>
<head>
    <link rel="stylesheet" href="nps.css">
    
    
      <script src='jquery-3.3.1/jquery-3.3.1.js'></script>  
    <script type="text/javascript">
    
    $(document).ready(function(){
        
        
       $("#add_button ").click(function(){
                  var custom = $(this).data("custom");
           $('#quantity_content').load('add_remove_button.php?img_id='+custom+'&&action=1');
          }) ;
        
       
        
       $("#remove_button ").click(function(){
               var custom = $(this).data("custom");
           $('#quantity_content').load('add_remove_button.php?img_id='+custom+'&&action=0');
         }) ;
        
 
        
            $('button').click(function(){
                
               setTimeout(function(){
                  
                   location.reload();
                   
               },100); 
                
            });
        
    });
    
    
    </script>
    
    
    
    </head>
    <body>

        
            <div id="top_div">
            <div id="nps_img">
                <img src="images/nps.png" height="100%" width="170px">
             <input type="text" id="search_box">
            </div>
            
              <img src="images/LoginIconAppl.png" id="login_img">
                <a href="cart.php"><img src="images/cart.png" id="cart_img"></a>
            <a href="homepage.php"> <img src="images/homenew.png" id="home_img"></a>
            <input type="button" id="search_button" value="search">

              <div style="height:50%;background-color:aliceblue;display:inline-block;width:100%;border-radius:0px 0px 8px 5px">
            <ul>
                 <b><li><a href="groceries.php">groceries</a></li>
                    <li><a href="fashion.php">fashion</a></li>
                    <li><a href="foods.php">foods</a></li>
                    <li><a href="packed_food.php">packed food</a></li>
                    <li><a href="books.php">books</a>
                     
                     
                     
                     </li></b>
                  </ul></div>

        </div><br><br><div id="table_content">
        
        <?php
        $user_id = $_SESSION['user'];
    
        $conn = mysqli_connect("localhost","root","","net_pay_shop");
     
        $sql = "SELECT * FROM cart WHERE user_id='$user_id'";
        $query = mysqli_query($conn,$sql);
        
        while($row = mysqli_fetch_assoc($query))
        {
            
            $img_address = $row['img_address'];
            $total_price = $row['quantity'] * $row['price'];
            ?>
        
    
        <table border="2px solid black" cellspacing="5px" cellpadding="40px" style="margin:20px">
        <tr>
            
            <td rowspan="3"><img src="<?php echo $row['img_address']; ?>" width="100px" height="100px"></td>
            <td width="500px" align="center"><b> <?php echo $row['product_name']; ?></b></td>
            <td rowspan="2" width="100px"><b>price <?php echo $row['price']; ?></b></td>
            <td width="100px" rowspan="2" align="center">TOTAL PRICE<br><br><b>Rs <?php echo $total_price ; ?></b><br><br><form action="product_remove.php?img_add=<?php  echo $img_address;  ?>" method="POST"><input type="submit" style="background-color:yellow;border-radius:10px;height:30px;width:80px" value="remove"></form></td>
          
            </tr>
        
        <tr>
        
         <td align="center"><b>quantity</b>
            
             <b style="font-size:20px;padding-top:3px">
                 <div id="quantity">
                     <div id="remove">
     
                <button id="remove_button" data-custom="<?php echo $img_address ; ?>" style="height:100%;width:100%;border-radius:50%">--</button>        
                     </div>
                     <div id="add">
                         <button id="add_button" data-custom="<?php echo $img_address ; ?>" style="height:100%;width:100%;border-radius:50%">++</button>
                     
                     </div>
                     <div id="quantity_content">
                         
                         <?php  echo $row['quantity']; ?>
                     </div></div></b>
            
            </td>
          
        </tr>
        
         </table><hr>
    
        <?php
            
        }
}
        else
{
    header('Location:login_page.php?login_first');
}
        
        ?>
        </div>
        
        
        