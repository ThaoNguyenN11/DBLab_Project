<?php
include_once ("../../init.php");
function getAllProduct ()
{
    global $db;
    $query = sqlsrv_query($db,"SELECT * FROM  product ");
    while( $products=  sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)){
        $product['name'] = $products['name'];
        $product['color'] = $products['color'];
        $product['size']  = $products['size'];
        $product['image'] = $products['image'];
        $productAll[] = $product;
    }
//    $products['color']=  sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)['color'];
    return $productAll;
}

function getAllShirt(){
    global $db;
    $query = sqlsrv_query($db,"SELECT * FROM  product where type LIKE '%shirt%'");
    while( $products=  sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)){
        $product['name'] = $products['name'];
        $product['color'] = $products['color'];
        $product['size']  = $products['size'];
        $product['price'] = $products['price'];
        $product['image'] = $products['image'];
        $productAllShirk[] = $product;
    }
    return $productAllShirk;
}





