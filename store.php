<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'database/queryBuilder.php';	//connect query

$db = new queryBuilder;					//new class $db


$data = [
	"title" => $_POST['title'],
	"content" => $_POST['content'] 
];





$db->store("tasks", $data);					//



 header('Location: ./index.php'); 		//local folder
 exit;



