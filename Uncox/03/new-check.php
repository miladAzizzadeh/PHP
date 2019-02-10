<?php
require_once('main.php');

if(!isset($_SESSION['user_id'])){
    header("Location: home-page.php");
    exit();
}
$userId = $_SESSION['user_id'];
if($_POST['title'] == '' || $_POST['description'] == ''){
    $title = "ثبت نا موفق";
    $message = "لطفا عنوان و توضیحات را وارد نمایید". '<a href="new.php">صفحه درج یادداشت جدید</a>';
    require_once("msg-fail.php");
    exit();
}

$title = $_POST['title'];
$description = $_POST['description'];

$db = Db::getInstance();
$db->insert("INSERT INTO x_note (title,description,user_id,isDone) VALUES ('$title','$description','$userId',false)");
header("Location: home-page.php");