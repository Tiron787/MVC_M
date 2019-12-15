<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//echo'<pre>',var_dump($_GET,$_POST),'</pre>';die;

require 'database/queryBuilder.php';
$db = new queryBuilder();
$data = [
    "id" => $_GET['id'],                    //  !!!
    "title" => $_POST['title'],
    "content" => $_POST['Content']
];
$db->updateTask($data);
header('Location: ./index.php');exit; //local folder