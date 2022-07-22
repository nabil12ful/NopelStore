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

    /*========================================
    ##
    ##  Validate input Of Forms
    ##
    */#=======================================
    function validate($input, $nameOfSession, $labelOfInput, $min, $max, $errs, bool $saveInputValue = true){
        $len = strlen($input);
        if(!$len == 0){
            if($len <= $min){
                $msg = "$labelOfInput most be More than $min chars.";
                $_SESSION["$nameOfSession"] = $msg;
                $errs[] = $msg;
            }
            if($len >= $max){
                $msg = "$labelOfInput most be Less than $max chars.";
                $_SESSION["$nameOfSession"] = $msg;
                $errs[] = $msg;
            }
        }else{
            $_SESSION["$nameOfSession"] = "$labelOfInput most be required.";
            $errs[] = "$labelOfInput most be required.";
        }
        if($saveInputValue == true){
            // unset($_SESSION[$nameOfSession.'Value']);
            $_SESSION[$nameOfSession.'Value'] = $input;
        }
        return $errs[] = $errs;
    }

    ############################################################
    #|                      Check Item Exist                  |#
    #|         This function check Is Item Exist in DB        |#
    #|                           v2.0                         |#
    #| $item     = Like User, Item, Category, Order           |#
    #| $colName  = Name Of Column In Table                    |#
    #| $table    = Name Of Table In Database                  |#
    #| $condition= Like (ID !=) EX: "ID =" Or "Username !="   |#
    #| $valCond  = EX: "1" Like ID || "user" Like Username    |#
    ############################################################
    function checkItem($item, $colName, $table, $condition = NULL, $valCond = NULL){
        global $con;
        if($condition === NULL && $valCond === NULL){
            $stmt = $con->prepare("SELECT $colName FROM $table WHERE $colName = ?");
            $stmt->execute(array($item));
        }else{
            $stmt = $con->prepare("SELECT $colName FROM $table WHERE $colName = ? AND $condition ?");
            $stmt->execute(array($item, $valCond));
        }
        return $stmt->rowCount();
    }


    function resortingArry(array $array){
        $keys = array_keys($array);
        $count = count($array);
        $newArray = [];
        for($i=0; $i < $count; $i++){
            $key = $keys[$i];
            $newArray[] = $array[$key];
        }
        return $newArray;
    }

    function getTotal(array $array){
        $array = resortingArry($array);
        $count = count($array);
        $total = 0;
        for($i=0; $i < $count; $i++){
            $total += ($array[$i]['price'] * $array[$i]['count']);
        }
        return $total;
    }
    