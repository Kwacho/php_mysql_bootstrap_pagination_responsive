<?php
    require_once("header.php");
?>
<body>
<?php

    // Require database
    require_once("database.php");
    // Require pagination class
    require_once("pagination.php");
    
    // Sets the current page for Pagination - Get hte page from $_GET global variable
    $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

    // Create new instance of Pagination class with arguments: current page, items per pages and count all items
    $pagination = new Pagination($pagination->getPage($page), $pagination->getPerPage(), $database->num_rows());

    // Find all images according to pagination criterias- items displayed per page and offset
    $images = $database->find_by_query($pagination->findRecords($pagination->getPerPage($page), $pagination->offset()));
 ?>
    
    <div class='row' style='margin: auto; text-align:center;'>
        <div class="span9">
             <a href='http://www.sharemyweb.com' target="_blank"><img class="img-responsive" style='width:400px; margin:0 auto;' alt="ShareMyweb_Logo" src="http://sharemyweb.com/wp-content/uploads/2016/01/Demo_site_logo.png"></a>
        </div>
        <h2 style='text-align:center;'>PHP, MySQL Responsive Pagination</h2>
    <hr>
    </div>
    
    <!-- Display images-->
    <div class='container' style='width:auto; text-align:center;'>
    <?php 
        // foreach image.... display image
        foreach($images as $image){
            echo "<img clas='img display_images' src='images/{$image['image_name']}' alt='{$image['image_desc']}'><br />";          
        }
    ?>
    </div>
    
<?php 
    //Display Pagination
    require_once("paginationView.php");
    // Display footer
    require_once("footer.php");
?>

    
