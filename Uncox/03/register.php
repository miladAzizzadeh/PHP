<?php
require_once('main.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    global $config;
    if ($config['lang'] == 'fa') {
        echo "<link rel=\"stylesheet\" href=\"style-fa.css\" type=\"text/css\" />";
    } else {
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
                echo "ثبت نام";
            }
            else{
                echo "Register";
            }
        ?>
    </title>
</head>
<body>
<div class="container">
    <div class="tac">
        <img src="image/notes2.png" alt="notes" width="250" class="mt50">
        <form action="register-check.php" method="post" class="mt20">
            <input type="text" placeholder="<?= _ph_email ?>" name="email">
            <br>
            <input type="password" placeholder="<?= _ph_password ?>" class="mt20" name="password1">
            <br>
            <input type="password" placeholder="<?= _confirm_password ?>" class="mt20" name="password2">
            <br>
            <input type="text" placeholder="<?= _full_name ?>" class="mt20" name="fullName">
            <br>
            <input type="text" placeholder="<?= _nick_name ?>" class="mt20" name="nickName">
            <input type="submit" value="<?= _btn_register ?>">
            <a href="index.php"><?=_log_in_page?></a>
        </form>
    </div>
</div>
</body>
</html>