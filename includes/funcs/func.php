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