<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ajax.css" type="text/css"/>
    <title>ajax Test</title>
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="container">
    <div id="textEditor">
        <input type="text" id="htmlEditor">
    </div>
    <div id="preview">

    </div>
</div>
</body>
</html>
<script>
    $(function () {
        var value = $('#htmlEditor').val();
        $.ajax('feed.php',
            {
                type: 'post',
                data: {
                    keyword: value
                },
                success: function (data) {
                    $('#preview').text(data);
                }
            }
        );
    });
</script>
