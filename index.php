<?php

require('./routes/web.php');
require('./database/mysql.php');
$config = require('./config/dev.config.php');

$id = $_GET['id'];

$db = new Database($config['database']);
// $posts = $db->query("select * from posts");
$posts = $db->query("select * from posts where id = :id", [':id' => $id]);

var_dump($posts);
