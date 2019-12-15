<?php

/*phpinfo();
print_r(
  PDO::getAvailableDrivers()
);*/

require 'database/queryBuilder.php';
$db = new queryBuilder();
$id = $_GET['id'];
$task = $db->getOnetask("tasks", $id);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet">
    <!-- Optional theme -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          rel="stylesheet">
    <title>Title</title>
</head>
<body>
<div class="container">
    <div class="row" align=”right”>
        <div class="col-md-12">
            <h1><?= $task['title']; ?></h1>
            <p>
                <?= $task['content']; ?>
            </p>
                <div align="right">
             <a   href="https://en.wikipedia.org/wiki/History_of_Cyprus">Wiki</a>        
                    
                </div>               <!--/-->
            <a class="btn btn-primary" href="index.php" role="button">Back to all Tasks</a>  
                
        </div>
    </div>
</div>
</body>
</html>
