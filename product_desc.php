<?php
session_start();

?>

<html>
<head>
    <link rel="stylesheet" href="nps.css">
    
    </head>
    <bodY>
    
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
                    <li><a href="books.php">books</a></li></b>
                  </ul></div>

        </div><br><br>
    
        
 <?php       
        
          $img_add = $_SESSION['img_add'];
        
        $conn = mysqli_connect("localhost","root","","net_pay_shop");
        $sql = "SELECT * FROM product_desc WHERE img_add='$img_add'";
        $query = mysqli_query($conn,$sql);
        
        $row = mysqli_fetch_assoc($query);
        
        
        
    echo "<div id='img_container' style=''><div id='image'><img src='".$img_add."' height='100%' width='100%'></div></div>
    <div id='content'>
    
   <p> <p1 style='font-size:35px'><b>".$row['name']."</b><hr><p1 style='font-size:20px'>".$row['about']."</p1>
    
    <br><br><br><br><div id='price'><b style='font-size:25px'>Rs ".$row['price']."</b></div>
    <br><br><button  style='background-color:blue;height:30px;width:100px' type='submit'><a href='send_cart.php' style='color:black;text-decoration:none'>add to cart</a></button>
    
    </p>
    
    </div>";
        
    
        
        
        
        
        
     ?>   
        
                <div class="bottom">
        <div style="height:90%;width:25%;display:inline-block">
           <p> <b> Mail Us</b><br><br>
               Net Pay Shop,<br>
               GITA Bhubaneswar,<br>
               Badaraghunathpur,janla,<br>
               Odisha<br>
               Pincode-752054,<br>
               Bhubaneswara, India</p>
            
            
            </div>


                    <div style="height:90%;width:25%;display:inline-block;float:right">
                        <p><b>Contact Us</b>
                            <br><br>7008057603<br>
                            7504476861</p>
            </div>
                                <div style="height:90%;width:25%;display:inline-block;float:right">
                        <p>
                        
                <b>   Email Us</b>
                    <br><br>info@netpayshop.com            
                        
                        </p>
            </div>

                    <div style="height:90%;width:25%;display:inline-block;float:right"></div>

        </div>
    </bodY>
    
</html>

<?php  ?>