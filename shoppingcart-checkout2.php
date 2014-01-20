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


   

<h5>Checkout</h5>

    
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

    Your Visa Billing Information
            
            <input type="text" class="form-control" placeholder="Card number" />

        Expiration date and security code
            <select style="width: 100px;">
    <option>Year</option>
    <? for ($i=2014; $i < 2028 ; $i++) { 
      echo "<option value=".$i."> $i </option>";  
    } ?>
    
</select>

<select style="width: 100px; margin-right: 5px;">
    <option>Month</option>
    <option value="0">Unknown</option>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">Nobember</option>
    <option value="12">December</option>
</select>

<input type="text" class="form-control" placeholder="Code" style="width:100px;" />


        Billing Address
            <input type="text" class="form-control" placeholder="Name" />
            <input type="text" class="form-control" placeholder="Billing Address 1" />
            <input type="text" class="form-control" placeholder="Billing Address 2" />
            <input type="text" class="form-control" placeholder="City" />
            <input type="text" class="form-control" placeholder="ZIP Code" style="width:150px; float:left;" />

            <?php include 'selectcountry.php'; ?>

<input type="text" class="form-control" placeholder="Phone number (optional)" />

<button class="btn btn-primary btn-wide">
  Continue
</button>


    <br />
   <p> PayPal transactions are authorized through the PayPal web site. Click the button below to open a new web browser window to initiate the transaction.</p>

<button class="btn btn-primary btn-wide">
  Begin PayPal Purchase
</button>

<br />
   <p> Bank Transfer payments will be sent when we've received payment for (99,99$) from your account.
    Please check the following for payment information:</p>

    <ul>
    <li>
        Bank Name:
    </li>
    <li>
        Name:  
    </li>
    <li>
        Bank Account:  
    </li>
    <li>
        Country:   
    </li>
</ul>

<button class="btn btn-primary btn-wide">
Review Payment
</button>




</div>






<div class="progress-container">
Step 1: Shopping > <strong>Step 2: Checkout</strong> > Step 3: Review

<div class="progress">

<div class="progress-bar" style="width: 60%;"></div>

</div>

</div>


    

        

</div>


 
        
 
</div><!-- end #content-wrapper -->
 
    <?php include 'footer.php'; ?>



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
