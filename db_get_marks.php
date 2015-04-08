<?php

require 'db_connect.php';
 
$db = new DB_CONNECT();
 

$marks = mysql_query("select * from (marks INNER JOIN authors USING(authorID))") or die(mysql_error());

if (mysql_num_rows($marks) > 0) {
    $response["marks"] = array();
 
    while ($row = mysql_fetch_array($marks)) {
        $product = array();
        $product["latitude"] = $row["latitude"];
        $product["longitude"] = $row["longitude"];
        $product["reward"] = $row["reward"];
        $product["short_description"] = $row["short_description"];
        $product["full_description"] = $row["full_description"];
        $product["authorName"] = $row["authorName"];
 
        array_push($response["marks"], $product);
    }
    $response["success"] = 1;
 
    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "No products found";
 
    echo json_encode($response);
}

?>