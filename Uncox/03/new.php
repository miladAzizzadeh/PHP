<?php
require_once('main.php');
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
            echo "درج یادداشت جدید";
        }
        else{
            echo "new event";
        }
        ?>
    </title>
</head>
<body>
<div class="container">
    <div class="tac">
        <form action="new-check.php" method="post" class="mt50">
            <input type="text" placeholder="عنوان" name="title" style="width: 300px;">
            <br>
            <textarea placeholder="توضیحات" class="mt20" name="description" style="width: 300px;height: 250px;resize: none;"></textarea>
            <input type="submit" value="درج">
            <a href="home-page.php">صفحه خانگی</a>
        </form>
    </div>
</div>
</body>
</html>