<?php

    /*
    ##  Get Categories Function v1.0
    ##  Get All Cats From DB
    */
    function getCats(){
        global $con;
        $stmt = $con->prepare("SELECT * FROM categories ORDER BY Ordering ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /*
    ##  Get Categories Function v1.0
    ##  Get All Cats From DB
    */
    function getProducts(){
        global $con;
        $stmt = $con->prepare("SELECT * FROM products ORDER BY ID ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /*========================================
    ##
    ##  Echo Paths Of Files
    ##
    */#=======================================
    function echoPath($path, $file, $cssRealTime = false){
        if($cssRealTime == false){
            return $path . $file;
        }else{
            return $path . $file . "?v=" . time();
        }
    }