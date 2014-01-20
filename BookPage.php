<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tango Bookstore - Book Page</title>
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


    <div id="bookpage">

        <div class="book-page-image" >

        <!-- Book image --> <img alt="Book 1" src="images/books/hitchhiker.jpg" width="100%">
            
            <div class="book-page-addcart" >

        <!-- Book price -->    <div class="book-page-price"> 13,99$ </div>

                <div class="book-page-buy">

                <input type="text" class="form-control input-lg" value="1" style="width: 30%; float: left; margin: 15px 0 0 15px;" />

                <a href="#add">ADD TO CART</a></div>   
                
        </div>

        <p style="margin-top: 20px;">

            <!-- Only for admins --><a href="#adminpagedit">EDIT BOOK</a><br />

            Book Genre: Sci-fi <br />
            ISBN10: <br />
            ISBN13: <br />
            </p>



        </div>

        <div class="book-page-text">
        
            <!-- Book title --><h4>The Hitchhiker's Guide to the Galaxy </h4>
            <!-- Book author --><h6>by <a href="bookcategories.php">Douglas Adams</a></h6> 
            <!-- Book description --><p>Seconds before the Earth is demolished to make way for a galactic freeway, Arthur Dent is plucked off the planet by his friend Ford Prefect, a researcher for the revised edition of The Hitchhiker's Guide to the Galaxy who, for the last fifteen years, has been posing as an out-of-work actor.
Together this dynamic pair begin a journey through space aided by quotes from The Hitchhiker's Guide ("A towel is about the most massively useful thing an interstellar hitchhiker can have") and a galaxy-full of fellow travelers: Zaphod Beeblebrox--the two-headed, three-armed ex-hippie and totally out-to-lunch president of the galaxy; Trillian, Zaphod's girlfriend (formally Tricia McMillan), whom Arthur tried to pick up at a cocktail party once upon a time zone; Marvin, a paranoid, brilliant, and chronically depressed robot; Veet Voojagig, a former graduate student who is obsessed with the disappearance of all the ballpoint pens he bought over the years. 
Where are these pens? Why are we born? Why do we die? Why do we spend so much time between wearing digital watches? For all the answers stick your thumb to the stars. And don't forget to bring a towel!
"[A] WHIMSICAL ODYSSEY...Characters frolic through the galaxy with infectious joy."
--Publishers Weekly</p>

        </div>  


    <div id="featured-books">

        <h7>More books in the category "Sci-fi"</h7>

        <? for($ini=0;$ini<= 3;$ini++) { ?>
        
            <div class="book">
            <a href="#bookpage" class="book-link-overlay">
                
            <div class="book-link-title">
                <h3>Hitchhikers Guide to the Galaxy</h3>
                <p class="book-link-author">Douglas Adams</p>
                <p class="book-link-genre">Sci-fi</p>
            </div>
              </a>   
            <div class="book-link-footer">
                <div class="book-link-buy"><a href="#add">ADD TO CART</a></div>   
                <div class="book-link-price"><h3>13,99$</h3></div>
            </div>

                <div class="book-link-image" style="width:290px;">
  <img alt="Book 1" src="images/books/hitchhiker.jpg" style="position: absolute; top: 0px; left: -25%; display: block; height: auto;"z-index: 1; width="290">

            </div>
        </div>
        <? } ?>

    </div><!-- end CATEGORY featured books -->


    <div id="featured-books">

        <h7>More books from the author </h7>

        <? for($ini=0;$ini<= 3;$ini++) { ?>
        
            <div class="book">
            <a href="#bookpage" class="book-link-overlay">
                
            <div class="book-link-title">
                <h3>Hitchhikers Guide to the Galaxy</h3>
                <p class="book-link-author">Douglas Adams</p>
                <p class="book-link-genre">Sci-fi</p>
            </div>
              </a>   
            <div class="book-link-footer">
                <div class="book-link-buy"><a href="#add">ADD TO CART</a></div>   
                <div class="book-link-price"><h3>13,99$</h3></div>
            </div>

                <div class="book-link-image" style="width:290px;">
  <img alt="Book 1" src="images/books/hitchhiker.jpg" style="position: absolute; top: 0px; left: -25%; display: block; height: auto;"z-index: 1; width="290">
                </div>
        </div>

            <? } ?>

    </div>  <!-- end AUTHOR featured books -->

    </div><!-- end of #bookpage -->
 
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
