<?php
require_once('main.php');
$isgust = !isset($_SESSION['email']);
if (!$isgust) {
    $user_id = $_SESSION['user_id'];
    $db = Db::getInstance();
    $records = $db->query("SELECT * FROM x_note WHERE user_id=$user_id");
} else {
    $records = null;
}
?>
<!doctype html>
<html lang="en" dir="rtl">
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
        if ($config['lang'] == 'fa') {
            echo "خانه";
        } else {
            echo "Home";
        }
        ?>
    </title>
</head>
<body>
<div class="homeHeader">
    <?php if (!$isgust) { ?>
        <span><?= $_SESSION['email'] . _log_in_welcome ?></span>
        <a href="logout.php" class="btn"><?= _log_out ?></a>
    <?php } else { ?>
        <span><?= _gust . _log_in_welcome ?></span>
        <a href="index.php" class="btn"><?= _log_in ?></a>
    <?php } ?>
</div>
<div class="homeContent mt50">
    <?php
    if (!$isgust && $records != null) {?>
        <ul class="mr50 flex-container bold">
            <li>انجام</li>
            <li>حذف</li>
            <li style="text-align: right;">عنوان</li>
            <li style="text-align: right;">توضیحات</li>
            <li>زمان موقوع</li>
        </ul>
        <?php foreach ($records as $record) {
            if($record['isDone']){
                $doneClass = "done";
            }
            else{
                $doneClass = "pending";
            }
            ?>
            <ul class="mr50 flex-container <?=$doneClass?>">
                <li><a href="done.php?id=<?=$record['note_id']?>">done</a></li>
                <li><a href="remove.php?id=<?=$record['note_id']?>">remove</a></li>
                <li><?= $record['title'] ?></li>
                <li><?= $record['description'] ?></li>
                <li><?= $record['eventTime'] ?></li>
            </ul>
            <?php
        } echo "<a href='new' class='newEvent'>درج یادداشت جدید</a>";
    } else if (!$isgust && $records == null) { ?>
        <span class="tac block mt50 lf">شما هیچ یادداشتی ندارید</span>
        <a href='new.php' class='newEvent'>درج یادداشت جدید</a>
    <?php
    } else {
        ?>
        <span class="tac block mt50 lf">برای استفاده کامل از سیستم باید وارد شوید یا <a href="register.php"
                                                                                        style="display:inline-block;width: initial;color: #2b78c2;">ثبت نام</a> کنید</span>
    <? } ?>
</div>
</body>
</html>