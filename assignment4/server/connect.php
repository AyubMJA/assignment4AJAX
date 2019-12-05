

<?php

try{
    $dbh = new PDO(
        "mysql:host=localhost;dbname=000354446",
        "root",
        "root");
        
}catch(Exception $e){
    die("ERROR: Couldn't connect. {$e-> getMessage()}");
}