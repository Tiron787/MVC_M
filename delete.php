<?php
//echo'<pre>',var_dump($_GET),'</pre>';
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'database/queryBuilder.php';

$db = new queryBuilder;

$id = $_GET['id'];

print_r($_GET);

$db->delete("tasks",$id);
header('Location: ./index.php');

?>


