<?php
require_once('main.php');

if($_POST['email'] == '' || $_POST['password'] == ''){
    $title = _log_in_fail;
    $message = _enter_email . '<a href="index.php">' ._log_in_page.'</a>';
    require_once("msg-fail.php");
    exit();
}

$email = $_POST['email'];
$pass = $_POST['password'];

$db = Db::getInstance();
$record = $db->first("SELECT * FROM x_user WHERE email='$email'");
if ($record == null) {
    $title = _log_in_fail;
    $message = _not_register . '<a href="register.php">'._btn_register.'</a>';
    require_once("msg-fail.php");
    exit();
} else {
    $hashedPassword = encriptPassword($pass);
    if ($hashedPassword == $record['password']) {
        $_SESSION['email'] = $record['email'];
        $_SESSION['user_id'] = $record['user_id'];
        $_SESSION['fullName'] = $record['fullname'];
        $title = _title_log_in_success;
        $message = _log_in_success;
        require_once("msg-success.php");
        exit();
    } else {
        $title = _log_in_fail;
        $message = _wrong_password . '<a href="index.php">' ._log_in_page.'</a>';
        require_once("msg-fail.php");
        exit();
    }
}
