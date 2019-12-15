<?php
//CRUD
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'database/queryBuilder.php';
require 'components/auth.php'; /////test git
//auth
//register()//login()
////logout()
////currentuser()
////check..
////imageManager
////upload($image)
////delere($path)
//$db = new queryBuilder();
//$auth = new auth($db);                                      //insert  class queryBuilder in constructor auth
//$auth->register('user2@exemle', 'Zorg1234');  //+$username/call class register


$tasks = $db->getAll("tasks");//от сюда управляем из какой таблицы хотим достать all! return заносит в $tasks - $result !!!
//exit;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          rel="stylesheet">
    <title></title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All tasks</h1>
            <a href="create.html" class="btn btn-success"> Add task</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= $task['id']; ?></td>               <!--=======-->
                        <td><?= $task['title']; ?></td>
                        <td>
                            <a href="show_.php?id=<?= $task['id']; ?>" class="btn btn-warning">show</a>
                            <a class="btn btn-info" href="Edit.php?id=<?= $task['id']; ?>">edit</a>
                            <a onclick="return confirm('are you sure?')" class="btn btn-danger"
                               href="delete.php?id=<?= $task['id']; ?>">delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
