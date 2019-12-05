<?php
/*
This file receives POST parameters for a new item and inserts it into
the database.
 */
include "connect.php";

 //Getting the POST Params 
 $item = filter_input(INPUT_POST, "item", FILTER_SANITIZE_STRING);
 $quantity = filter_input(INPUT_POST,"quantity",FILTER_SANITIZE_NUMBER_INT);

 echo "sdfsdf";
 echo $item;


 if( ($item !== NULL && $item !== "") && ($quantity !== NULL && $quantity !== "")){
     $command = "INSERT into shoppingList (item,quantity) VALUES (?,?)";
     $stmt = $dbh->prepare($command);
     $params = [$item,$quantity];
     $success = $stmt->execute($params);
     echo $success;
 }
?>


 
 
 


 