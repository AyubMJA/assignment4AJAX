<?php
/*
This file gets the entire table from the database,
sorted alphabetically, creates an array of item objects,
and outputs an  JSON encoding of this array
*/

include "connect.php";
include "listItem.php";

$command = "SELECT item, quantity FROM shoppingList ORDER BY item ASC";
$stmt = $dbh->prepare($command);
$success = $stmt->execute();

$iList = [];
while($row = $stmt->fetch()){
    $item = new ListItem($row["item"], $row["quantity"]);
    array_push($iList,$item);
}

echo json_encode($iList);



