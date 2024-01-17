<?php

$id = $_GET['id'] ?? null;

$query = "select * from notes";
$params = [];
!$id ? $query = "$query where id = :id" : null;
!$id ? $params[':id'] = $id  : null;

// $notes = $db->query($query, $params);
$notes = $db->query("select * from notes");

require('./views/notes.view.php');