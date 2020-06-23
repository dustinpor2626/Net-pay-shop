<html>
<head>
   <link rel="stylesheet" href="nps.css">
    
    <script src='jquery-3.3.1/jquery-3.3.1.js'></script>
    
    <script type="text/javascript"> 
        
        $(document).ready(function(){
            
            $('table img').click(function(){
                
               var img_add =$(this).attr("src");
                
                     window.location.href = "send_product_desc.php?var="+img_add ;
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
        <center>
<table cellspacing="140px">
        <tr>
    <th><img src="images/books/c++.png" ></th>
            <th><img src="images/books/ccnp_edtion1.png"></th>
                <th><img src="images/books/hacking-wireless-exposed.jpg"></th>
            
    </tr>
    <tr>
        <th><img src="images/books/html&css.jpg"></th>
            <th><img src="images/books/programming_ruby.jpg"></th>
                <th><img src="images/books/python.jpg"></th>
            
    </tr>
    
        <tr>
            <th><img src="images/books/swift.png"></th>
            <th><img src="images/books/webuser_online.jpg"></th>
    
            
    </tr>
        
        
        
            </table></center>
    </body>
