<?php

function confirm_query($result_set){
    if(!$result_set){
        die("database query failed" . mysqli_error());
    }
}

function get_page_by_id($page_id){
    global $connection;

    $query = "select * FROM pages WHERE id=" . $page_id . " LIMIT 1";
    $result_set = mysqli_query($connection, $query);
    confirm_query($result_set);
    // if no rows returned, fetch array will return false
    if($page = mysqli_fetch_array($result_set)){
        return $page;
    }
    else{
        return NULL;
    }
}

function find_selected_page(){
    global $sel_page;
    if(isset($_GET['page'])){
        $sel_page = get_page_by_id($_GET['page']);
    }
    else{
        $sel_page = NULL;
    }
}

function navigation(){
    global $connection;

    $page_set = mysqli_query($connection, "SELECT * FROM pages");
    if(!$page_set){
        die("database query failed: " . mysqli_error());
    }
    echo "<ul>";
    while($page = mysqli_fetch_array($page_set)){
        echo "<li><a href=\"content.php?page=" . urlencode($page["id"]) . "\">" . $page["Menu_name"] . "</li></li>";
    }
    echo "</ul>";
}

?>