<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tango Bookstore - Search Results</title>
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


<div id="search-big">

<div class="form-group">

    <input type="text" class="form-control input-hg" placeholder="Search" />
    <span class="input-icon fui-search"></span>

        <div class="search-big-checkboxes">
            <p>Search by...</p>

        <label class="radio" style="float:left;  ">
            <input type="radio" name="group1" value="1" data-toggle="radio" checked>
        Any
        </label>

        <label class="radio" style="float:left;  left: 10px; ">
            <input type="radio" name="group1" value="1" data-toggle="radio">
        Title
        </label>

        <label class="radio" style="float: left;  left: 20px;">
            <input type="radio" name="group1" value="2" data-toggle="radio">
        Author
        </label>

        </div>
    </div>
</div>


    <div id="search-books">

        <h7>9 books found with the search "Galaxy"</h7>

    <ul>

        <!-- Print search results -->
        <? for($ini=0;$ini<= 5;$ini++) { ?>


        <a href="#bookpage" >
              <li class="">
                <div class="todo-icon fui-user">
                    
            <img alt="Book 1" src="images/books/hitchhiker.jpg" style="position: absolute; top: 0px; left: 0px; display: block; height: 100%;"z-index: 1; width="auto">

                </div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    <strong>Hitchhikers Guide to the Galaxy</strong>
                  </h4>
                  Douglas Adams <br />
                  Sci-Fi
        </a> 
                  <div class="price"><strong class="old-price">16,99$</strong> <strong>13,99$</strong>
                  <br />
                  <a href="#addcart" class="addcart">+ ADD TO CART</a>
                  </div>


                </div>
              </li>

        <? } ?>

    </ul>



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
