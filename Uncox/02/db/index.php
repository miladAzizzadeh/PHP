<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Work on Db</title>
</head>
<body>
<?php
require_once('config.php');
require_once('db.php');

function test1()
{
    $db = Db::getInstance();
    $records = $db->query("SELECT * FROM x_note");
    var_dump($records);
}

function test2()
{
    $db = Db::getInstance();
    $records = $db->query("SELECT * FROM x_note");
    var_dump($records);
}
test1();
test2();
?>
</body>
</html>