<?php
$a = "PHP";
$condition = true;
$b = $condition ? 'Its true' : 'Not true';
$c = ["Red", "Blue"];
$d = [
    ['name' => 'PHP', 'message' => 'Php is good'],
    ['name' => 'PHP', 'message' => 'Php is great'],
    ['name' => 'JS', 'message' => 'Js is good'],
];

$e = array_filter($d, function ($each) {
    return $each['name'] != 'JS';
});

require("./views/index.view.php");
