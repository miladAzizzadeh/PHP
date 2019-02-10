<?php
ini_set('display_errors',true);
require_once('main.php');

$email = $_POST['email'];
$pass1 = $_POST['password1'];
$pass2 = $_POST['password2'];
$fullName = $_POST['fullName'];
$nickName = $_POST['nickName'];
$time = getDateTime();

if($email == ""){
    $title = "registerFail";
    $message = "لطفا ایمیل خود را وارد کنید " . '<a href="register.php">صفحه ثبت نام</a>';
    require_once("msg-fail.php");
    exit();
}
$db = Db::getInstance();
$record = $db->query("SELECT * FROM x_user WHERE email='$email'");
if($record != null){
    $title = "registerFail";
    $message = "شما قبلا ثبت نام کرده اید " . '<a href="index.php">صفحه ورود</a>';
    require_once("msg-fail.php");
    exit();
}
if($pass1 == "" || $pass2 == ""){
    $title = "registerFail";
    $message = "برای خود یک پسورد انتخاب کنید " . '<a href="register.php">صفحه ثبت نام</a>';
    require_once("msg-fail.php");
    exit();
}
if(strlen($pass1)<3 || strlen($pass2)<3){
    $title = "registerFail";
    $message = "پسورد شما به اندازه کافی قوی نیست " . '<a href="register.php">صفحه ثبت نام</a>';
    require_once("msg-fail.php");
    exit();
}
if($pass1 != $pass2){
    $title = "registerFail";
    $message = "پسورد ها مشابه هم نیستند در وارد کردن پسوردها دقت کنید " . '<a href="register.php">صفحه ثبت نام</a>';
    require_once("msg-fail.php");
    exit();
}
if($fullName == ""){
    $title = "registerFail";
    $message = "لطفا نام خود را وارد نمایید " . '<a href="register.php">صفحه ثبت نام</a>';
    require_once("msg-fail.php");
    exit();
}
$hashedPassword = encriptPassword($pass1);
$db->insert("INSERT INTO x_user (email,password,fullname,nickname,registerTime,lastVisitTime) VALUES ('$email','$hashedPassword','$fullName','$nickName','$time','$time')");
$title = "registerSuccess";
$message = "شما با موفقیت ثبت نام شدید " . '<a href="index.php">وارد شدن</a>';
require_once("msg-success.php");
exit();