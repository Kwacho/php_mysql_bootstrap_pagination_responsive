<?php

/* 
    Pagination Class 1.1
    Developed by 'Kwacho', 05/2016
    info@sharemyweb.com     
*/
class Pagination extends MySQLDatabase{
 
//############################# 
//###   DECLARE VARS  ######### 
//#############################
    
    // Current page number
    public $current_page;
    
    // items displayed per page
    public $per_page;
    
    //total number of all items
    public $total_count;
    
    //number of links displayed after current page link
    public $links_after;
    
    //number of links displayed before current page link
    public $links_before;
    
    // Number of pages after a $current_page
    public $min_pages;
    
    // Number of pages before a $current_page
    public $max_pages;
    
    // First page link name
    public $first_link;
    
    // Last page link name
    public $last_link;
    
    // Next page link name
    public $next_link;
    
    // Previous page link name
    public $previous_link;
    
    
//########################################## 
//###   CONSTRUCTOR WITH DEFAULT VALUES  ###  
//##########################################
    
    public function __construct($page=1, $per_page=1, $total_count=0){
        $this->open_connection();
        
        $this->current_page = (int)$page; // current _page
        $this->per_page = (int)$per_page; // 
        $this->total_count = (int)$total_count;
        $this->links_after = 3;
        $this->links_before = 3;
        
        // Button names and custom design
        $this->first_link = '>&laquo&laquo; First';     // <<<< First
        $this->previous_link = '">&laquo; Previous';    // << Previous
        $this->next_link = '">Next &raquo;';            // Next >>
        $this->last_link = '"\">Last &raquo&raquo;';        // Last >>>>
        $this->max_pages=''; 
        $this->min_pages=''; 
    }
    
    // Return current page
    public function getPage($page){
        $this->page = $page;
        return $this->page;
    }
    
    // Return items displayed per page
    public function getPerPage(){
        $this->per_page = 4;
        return $this->per_page;
    }
    
    public function offset(){
        // Assuming 10 items per page:
        // page 1 has an offset of 0    (1-1)*10
        // page 2 has an offset of 20   (2-1)*10
        // in other words, page 2 starts with item 11        
        return ($this->current_page - 1) * $this->per_page;
    }
    
    // Check total pages of items. Total number of items divided 
    // by number of items per page
    public function total_pages(){
        return ceil($this->total_count / $this->per_page);
    }
    
    // Counts all item in databse.
    public function last_item_number(){
        return ceil($this->total_count);
    }
    
    // Previous page = $current_page - 1;
    public function previous_page(){
        return $this->current_page - 1;
    }
    
    // Next page = $current_page + 1;
    public function next_page(){
        return $this->current_page + 1;
    }

    // if previous page is > 1(not = 0) than there is a previous page
    public function has_previous_page(){
        return $this->previous_page() >= 1 ? true : false;
    }
    
    // if next page is not smaller than a total number of pages than there is a next page 
    public function has_next_page(){
        return $this->next_page() <= $this->total_pages() ? true : false;
    }
    
    // return first page link link
    public function getFirstLink(){
        return $this->first_link;
    }
    
    // return previous page link link
    public function getPreviousLink(){
        return $this->previous_link;
    }
    
    // return next page link link
    public function getNextLink(){
        return $this->next_link;
    }
    
    // return last page link link
    public function getLastLink(){
        return $this->last_link;
    }
    
    // Finds requested records of images : DESCENDING order, so the last image added will be displayed as first one
    public function findRecords($per_page, $offset){

        global $database;        
        // Finds records for the page only.
        $sql = "SELECT * FROM images ";
        $sql .= "ORDER BY id DESC ";
        $sql .= "LIMIT {$per_page} ";
        $sql .= "OFFSET {$offset}";
        return ($database->find_by_query($sql)) ? $sql : false;
    }
}

// Instantiate class
$pagination = new Pagination();



?>