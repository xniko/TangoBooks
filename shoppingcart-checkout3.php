<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tango Bookstore - Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/tango.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

<script type="text/javascript" src="jquery.js"></script>  
  
<!-- jQuery to apply actions to the link -->  
<script type="text/javascript">// <![CDATA[ 
$(document).ready(function(){ 
    $("#login-link").click(function(){ 
        $(".login-form").slideToggle(200); 
    }) 
}) 

// New Books Hover
$(document).ready(function(){ 
    $("#new-books li").hover(function() {
        $(this).toggleClass("book-hover");
    })
}) 

$(document).ready(function(){ 
    $("#top-books li").hover(function() {
        $(this).toggleClass("book-hover");
    })
}) 

$(document).ready(function(){ 
    $("#search-books li").hover(function() {
        $(this).toggleClass("book-hover");
    })
}) 


// Sidebar Hover
$(document).ready(function(){ 
    $(".subitems li").hover(function() {
        $(this).toggleClass("subitems-hover");
    })
}) 

<!-- jQuery to apply actions to the ESC key --> 
$(document).keydown(function(e) { 
    if (e.keyCode == 27) { 
        $("#login-panel").hide(0); 
    } 
}); 
// ]]>  
</script> 


  </head>
  <body>


<?php include 'header.php'; ?>

    <div class="container">
 
     
    <?php include 'banner.php'; ?>

    <?php include 'navigation.php'; ?> 

    <div id="content-wrapper">


<?php include 'sidebar.php'; ?>
     

<div id="main-content-wrapper">


   

<h5>Success! Thanks for your order. Here's your info again.</h5>

    
        <div id="checkout">


Your items:
    <ol>

        <!-- Print search results -->
        <? for($ini=0;$ini<= 5;$ini++) { ?>
       <li class="">


                  <p>

                            <strong>Hitchhikers Guide to the Galaxy</strong> 13,99$
                  </p>



              </li>

        <? } ?>

    </ol>
    <strong>Total 99,99$</strong> + Shipping 9,99$



        </div>






  

    <div class="checkout-form">

    Your Shipping Information
            
    <ul>
        <li>
            Name
        </li>
        <li>
            Address 1, Address 2, ZIP, City, Country
        </li>
         <li>
            Phone number
        </li>
         <li>
            Payment type
        </li>

    </ul>

<button class="btn btn-primary">Return to Front Page</button>
</div>






<div class="progress-container">
Step 1: Shopping > Step 2: Checkout > <strong>Step 3: Review</strong>

<div class="progress">

<div class="progress-bar" style="width: 100%;"></div>

</div>

You will receive your books shortly. Please allow 1-12 days for shipment.

</div>


    

        

</div>


 
        
 
</div><!-- end #content-wrapper -->
 
    <div id="footer">
       <p>© 2014 Tango Bookstore. All rights reserved. All trademarks are property of their respective owners.
VAT included in all prices where applicable.</p>
    </div><!-- end #footer -->



    </div>
    <!-- /.container -->




    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
  </body>
</html>
