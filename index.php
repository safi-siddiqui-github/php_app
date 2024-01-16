<?php

require('./routes/web.php');

$dsn = "mysql:host=localhost;port=3306;dbname=php_app;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);
$statement = $pdo->prepare("select * from posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($posts);