<?php
include_once('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' && is_integer($_GET['id'])){
    $id = $_GET['id'];
    $img = $_GET['img'];
    $price = $_GET['price'];
    $title = $_GET['title'];
    $count = $_GET['count'];
    if(isset($_SESSION['card'])){
        $_SESSION['card']['products'][] = [
            'id'        => $id,
            'title'     => $title,
            'img'       => $img,
            'price'     => $price,
            'count'     => $count
        ];
    }
}