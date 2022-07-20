<?php
define("_FUNCS_", "includes/funcs/");

// includes
include(_FUNCS_ . "func.php");
include('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' && (isset($_GET['item']) && isset($_GET['col']))){
    $item = checkItem(strtolower($_GET['item']), $_GET['col'], 'customers');
    if($item == 1){
        echo "This ". $_GET['col'] ." is exist.";
    }
}
