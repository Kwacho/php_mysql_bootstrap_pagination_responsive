<?php 

/*
    PAGINATION LINKS / BUTTONS DISPLAY
*/

/** Defines number of pages before & after current page /active 
    For example if $pagination->links_after is set to 3, only 3 pages after current page will be available....
    You can change it if Pagination class if you wish
*/
$min = max($page - $pagination->links_before, 1); // there are no pages < 1
$max = min($page + $pagination->links_after, $pagination->total_pages());

echo "<div class='pagination' id='paginationHolder'>
        <div class='bs-example' id='paginationNav'>
            <ul class='pagination paginationList'>";

    if($pagination->total_pages() > 1) {
        
        /*##############################################
        ###          FIRST PAGE LINK / BUTTON        ###
        ##############################################*/
        if($pagination->has_previous_page()){
            echo "<li><a class='pagination_links controLinks' id='first_link' href=index.php?page=1";
        } else {
            echo "<li><a class='pagination_links controLinks disabledLink' id='first_link' disabled ";
        }
            echo $pagination->getFirstLink() ."</a></li> ";
        
        
        /*##############################################
        ###       PREVIOUS PAGE LINK / BUTTON        ###
        ##############################################*/  
        
       if($pagination->has_previous_page()){
        echo "<li><a class='pagination_links controLinks' id='previous_link' href=\"index.php?page=";
        } else {
           echo "<li><a class='pagination_links controLinks disabledLink' id='previous_link' disabled";
        }
        echo $pagination->previous_page();
        echo $pagination->getPreviousLink() ."</a></li> ";
        
        
        
        /*##############################################
        ###            ALL PAGES LINKS               ###
        ##############################################*/
        for($i = $min; $i <= $max; ++$i) {

                echo "<li><a";
if( $i==$page ? $idStyleName='selected' : $idStyleName='regularLink');
                    echo " class='pagination_links' id='{$idStyleName}' href=\"index.php?page={$i}\">{$i}</a></li> ";
        }
        
        /*##############################################
        ###          NEXT PAGE LINK / BUTTON         ###
        ##############################################*/
        if($pagination->has_next_page()){
            
            echo "<li><a class='pagination_links controLinks' id='next_link' href=\"index.php?page="; 
            
        } else {  
            echo "<li><a class='pagination_links controLinks disabledLink' id='next_link' disabled "; 
        }   
            echo $pagination->next_page();
            echo $pagination->getNextLink() ."</a></li> ";
        
        
        /*##############################################
        ###          LAST PAGE LINK / BUTTON         ###
        ##############################################*/
        if($pagination->has_next_page()){
            echo "<li><a class='pagination_links controLinks' id='last_link' href=\"index.php?page=";
        }else{
            echo "<li><a class='pagination_links controLinks disabledLink' id='last_link' disabled";
            }
            echo $pagination->total_pages();
            echo $pagination->getLastLink() ."</a></li> ";      
    }

echo "
        </ul>
    </div>
</div>";

?>