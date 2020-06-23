<?php

session_start();

if($_SESSION['true'] == true)
{
?>


<html><head><link rel="stylesheet" href="nps.css">
    
    <script src='jquery-3.3.1/jquery-3.3.1.js'></script>
    
    <script type="text/javascript">
        
        $(document).ready(function(){
            
            
            $('#groceries_img img').click(function(){
                
               var img_add = $(this).attr("src");
                
                window.location.href = "send_product_desc.php?var="+img_add ;
                
                
            

            });
            
            
            setInterval(function(){
                        
                        $('#flip_id').toggleClass('add_flip');
                        
                        
                        },2000);
            
        });
        
    </script>
    
    </head>
    
    <body>
        
        <div id="top_div">
            <div id="nps_img">
                <img src="images/nps.png" height="100%" width="170px">
             <input type="text" id="search_box">
            </div>
            
            <a href="logout.php"> <img src="images/LoginIconAppl.png" id="login_img"></a>
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

        </div>
        <div id="front_img_outer" style="width:100%;overflow:hidden">
        <div id="front_img"><img src="images/PicsArt_03-21-05.06.59.jpg" >
                            <img src="images/PicsArt_03-21-05.17.31.jpg" >
                            <img src="images/PicsArt_03-21-05.21.03.jpg" >
                            <img src="images/PicsArt_03-21-05.24.21.jpg" >
        
        </div>
        </div>
            <div id="groceries" style="margin-top:100px">
                <div style="height:100%;width:250px;display:inline-block;margin-left:50px">
                
                    <p style="padding-top:45px"><b style="font-size:30px;padding:100 65"> Groceries</b></p><hr>
                    <p style="padding-left:56px;font-size:18">Beauty and Hygiene</p>
                
                
                </div>
                
                <div id="groceries_img">
                    <img src="images/lifebouy.jpg" height="95%" width="24%">
                            <img src="images/lux_velvet.jpg" height="95%" width="24%" onclick="product_desc.php" id="flip_id">

                            <img src="images/risa_blue.jpg" height="95%" width="24%" >

                            <img src="images/santoor.jpg" height="95%" width="24%" >
                </div>
            </div>
            
                        <div id="groceries">
                            <div style="height:100%;width:250px;display:inline-block;margin-left:50px">
                                        <p style="padding-top:45px"><b style="font-size:30px;padding:100 85"> Foods</b></p><hr>
                    <p style="padding-left:85px;font-size:18">Fast Foods</p>
                            
                            </div>
                <div id="groceries_img">
            <img src="images/ckicken_chilly.jpg" height="95%" width="24%">
                            <img src="images/chicken_curry.jpg" height="95%" width="24%" >

                            <img src="images/chicken_kassa.jpg" height="95%" width="24%" >

                            <img src="images/ckicken_lolly.jpg" height="95%" width="24%" >
                </div>
            </div>
            
                        <div id="groceries">
                            <div style="height:100%;width:250px;display:inline-block;margin-left:50px">
                                        <p style="padding-top:45px"><b style="font-size:30px;padding:100 75"> Fashions</b></p><hr>
                    <p style="padding-left:84px;font-size:18">Accessories</p>
                            
                            </div>
                <div id="groceries_img">
            <img src="images/casioG346.jpg" height="95%" width="24%">
                            <img src="images/dior_sunglass.jpg" height="95%" width="24%" >

                            <img src="images/rado_man_watch.jpg" height="95%" width="24%" >

                            <img src="images/ray-ban_round.jpg" height="95%" width="24%" >
                </div>
            </div>
            
                        <div id="groceries">
                            <div style="height:100%;width:250px;display:inline-block;margin-left:50px">
                                        <p style="padding-top:45px"><b style="font-size:30px;padding:100 59"> Packaged <br> <p style="padding-left:20px">Foods</p></b></p><hr>
                    <p style="padding-left:50px;font-size:18">Snacks & Namkeen</p>
                            
                            </div>
                <div id="groceries_img">
            <img src="images/brisk_farm.jpg" height="95%" width="24%">
                            <img src="images/britania.jpg" height="95%" width="24%" >

                            <img src="images/goodday.jpg" height="95%" width="24%" >

                            <img src="images/sunfeast.jpg" height="95%" width="24%" >
                </div>
            </div>
            
        
                                <div id="groceries">
                            <div style="height:100%;width:250px;display:inline-block;margin-left:50px">
                                        <p style="padding-top:45px"><b style="font-size:30px;padding:100 75"> Books</b></p><hr>
                    <p style="padding-left:56px;font-size:18">Novels & courses</p>
                            
                            </div>
                <div id="groceries_img">
            <img src="images/Beginning+PHP+and+MySQL.png" height="95%" width="24%">
                            <img src="images/javaservlet.png" height="95%" width="24%" >

                            <img src="images/programming_ruby.jpg" height="95%" width="24%" >

                            <img src="images/gray%20hat%20hacking_thumb%5B1%5D.png" height="95%" width="24%" >
                </div>
            </div>
        
        
        
        
        <div id="test_div"></div>
            
    
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
    </body>
</html>

<?php
    
}
else
{
    header('Location:login_page.php?-->error-->loginfirst');
}

?>




















