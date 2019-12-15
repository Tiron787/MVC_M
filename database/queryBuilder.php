<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class queryBuilder
{
    public $pdo;

    function __construct()      //dependency injection (???)
    {

        $this->pdo = new PDO("mysql:host=localhost; dbname=base_one", "root", "123");

    }
            //получаем все записи/index.php
    function getAll($table) //task
    {

        $statement = $this->pdo->prepare("SELECT * FROM $table");      //`` NO! ""prepare-внутренний метод PDO
        $statement->execute();                                          //выполнение sql, false || true
        echo "<br>";
        $result = $statement->fetchAll(2);//2-(PDO::FETCH_ASSOC)-Извлекает результирующий ряд в виде асс.массива
        //echo'<pre>',var_dump($result),'</pre>';

        return $result;
    }

    function store($table, $data)   //two parameters name of table and data
    {
        //получаем ключи массива
        $keys = array_keys($data);
        //формируем строку title, content
        $stringOfkeys = implode(',', $keys);
        //формируем метки
        $placeholders = ':' . implode(', :', $keys); //kostili ':'

        $sql = "INSERT INTO $table ($stringOfkeys) VALUES ($placeholders)";
        /*echo'<pre>',var_dump($keys),'</pre>';
        echo'<pre>',var_dump($stringOfkeys, $sql),'</pre>';
        echo'<pre>',var_dump($placeholders),'</pre>';die;*/


        $statement = $this->pdo->prepare($sql);
        /*$statement->bindParam(":title", $_POST['title']);
        $statement->bindParam(":content", $_POST['content']);*/
        $statement->execute($data);

    }

    function getOnetask($table, $id)
    {

        $statement = $this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function updateTask($data)
    {

        $statement = $this->pdo->prepare("UPDATE tasks SET title=:title, content=:content WHERE id=:id");
        $statement->execute($data);

    }

    function delete($table, $id)
    {
        //$sql = 'DELETE FROM $table WHERE id=:id';
        //$pdo = new PDO("mysql:host=localhost; dbname=base_one", "root", "123");
        $statement = $this->pdo->prepare("DELETE FROM $table WHERE id=:id");
        $statement->bindParam(":id", $id);
        $statement->execute();

    }
}
