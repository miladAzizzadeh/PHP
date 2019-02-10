<?php
ini_set('display_errors',true);
require_once('main.php');
if(isset($_SESSION['email'])){
    $title = _logged_in;
    $message = _sign_in_already;
    require_once('msg-success.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php
        global $config;
        if($config['lang'] == 'fa'){
            echo "<link rel=\"stylesheet\" href=\"style-fa.css\" type=\"text/css\" />";
        }
        else{
            echo "<link rel=\"stylesheet\" href=\"style-en.css\" type=\"text/css\" />";
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?
            if($config['lang'] == 'fa'){
                echo "صفحه ورود";
            }
            else{
                echo "logIn";
            }
        ?>
    </title>
</head>
<body>
<div class="container">
    <div class="tac">
        <img src="image/notes2.png" alt="notes" width="250" class="mt50">
        <form action="login-check.php" method="post" class="mt20">
            <input type="text" placeholder="<?=_ph_email?>" name="email">
            <input type="password" placeholder="<?=_ph_password?>" class="mt20" name="password">
            <input type="submit" value="<?=ph_btn_sign_in?>">
        </form>
        <a href="register.php"><?=_create_new_account?></a>
    </div>
</div>
</body>
</html>