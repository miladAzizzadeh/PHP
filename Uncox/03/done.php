<?php
require_once('main.php');
if(!isset($_SESSION['user_id'])){
    header("Location: home-page.php");
    exit();
}
$userId = $_SESSION['user_id'];
$id = $_GET['id'];
$db = Db::getInstance();
$db->modify("UPDATE x_note SET isDone=NOT isDone WHERE note_id=$id AND user_id=$userId");
header("Location: home-page.php");
