<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tango Bookstore - Adminpanel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading CSS -->
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

    <div id="content-wrapper">

<div id="adminpage">

<div class="editbooks-navi">
<a href="adminpanel.php">Edit/Add Books</a> • <a href="adminpanel-users.php">Edit/Add Users</a> • <a href="adminpanel-about.php">Edit About Us</a>

</div>

<div class="editbooks">

Add/Edit Book
    
<input type="text" class="form-control" placeholder="Book name" />
<input type="text" class="form-control" placeholder="Book author" />

<select style="margin: 5px 0 0 10px;">
<option value=" ">Book category</option>
  <option value="horror">Horror</option>
  <option value="thriller">Thriller</option>
  <option value="scifi">Sci-fi</option>
  <option value="fantasy">Fantasy</option>
</select>

<textarea rows="4" cols="100" name="comment" form="usrform">
Book description</textarea>
<input type="checkbox" name="featured" value="Featured">Book is featured ★ (Maximum 5 can be featured)

<input type="text" class="form-control" placeholder="Image URL (leave blank for default)" />
<input type="text" class="form-control" placeholder="ISBN10" />
<input type="text" class="form-control" placeholder="ISBN13" />
<input type="text" class="form-control" placeholder="Old price(USD)(optional)" style="width:200px; float:left;" />
<input type="text" class="form-control" placeholder="Price (USD)" style="width:200px;float:left;" />

<button class="btn btn-primary btn-wide" style="float:right; margin: 5px; 0 0 10px;">
  Confirm
</button>

</div>
 

<div class="editbooks-list">

Book list (click to edit)
<ul>
<?
 for ($i=0; $i < 20 ; $i++) { 
    echo " <a href='#edit'><li>Book $i by Author </a> ★ </li> ";
}
?>

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
