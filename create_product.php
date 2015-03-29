<?php
$response = array();
 

    $author = $_POST['author'];
    $reward = $_POST['reward'];
    $short_description = $_POST['short_description'];
    $full_description = $_POST['full_description'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

    require 'db_connect.php';
 
    $db = new DB_CONNECT();
 
	$query = 'SELECT max(authorID) FROM authors';
	$result = mysql_query($query) or die('Request failed: ' . mysql_error());
	$arr = mysql_fetch_array($result);
	$maxID = $arr["0"] + 1;
 
    $result = mysql_query("INSERT INTO marks(authorID, reward, short_description, full_description, longitude, latitude) VALUES('$maxID', '$reward', '$short_description', '$full_description', '$longitude', '$latitude')");
	
    if ($result) {
        $response["success"] = 1;
        $response["message"] = "Product successfully created.";
 
        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred. " . mysql_error();
 
        echo json_encode($response);
    }

	$author = mysql_query("INSERT INTO authors(authorID, authorName) VALUES('$maxID', '$author')");
?>