<?php
@session_start();

$orderedProductIDs = $_SESSION["orderedProductIDs"];
$orderedProductQtys = $_SESSION["orderedProductQtys"];

$i = 0;
while ($i < sizeof($orderedProductIDs)) {
    $orderedProductID = $orderedProductIDs[$i];
    $orderedProductQty = $orderedProductQtys[$i];
    $productName = getProductNameByProductID($orderedProductID);
    $price = getProductPriceByProductID($orderedProductID);
    echo "<p>Name: $productName Qty: $orderedProductQty Unit Price: $price
         Price: .($price*$orderedProductQty.</p>";
    $i++;
}

function insertProductToOrdered($orderid,$productID, $qty){
    $conn =createDatabaseConnection();
    $sql= "INSERT INTO 'OrderedProduct(orderedProductID, ordered)'
    
    
    
    
    
    
    
    /
    
    
    
    
    
    
}
    
    
    $orderid=createanorder($Userid,$Shippingaddress,$datetime);   
    $i = 0;
    while ($i < sizeof($orderedProduct