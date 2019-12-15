<?php


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
    <div class="row">
        <div class="col-md-12">
            <h1>Edit task</h1>
            <form action="update.php?id=<?= $task['id']; ?>" method="post">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="<?= $task['title']; ?>">
                </div>
                <div class="form-group">
                    <textarea name="Content" class="form-control"><?= $task['content']; ?></textarea>
                </div>
                <div class="form-grope">
                    <button class="btn btn-warning" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>