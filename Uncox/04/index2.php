<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
<span class="colored red">sample 1</span>
<span class="colored blue">sample 2</span>
<span class="colored green">sample 3</span>
<span class="colored red">sample 4</span>
<span class="colored blue">sample 5</span>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div>test</div>
<div id="comment">

</div>
<br>
<span style="cursor: pointer;background-color: dodgerblue;color: #FFF;padding: 10px;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;" id="addComment">Add Comment</span>
<div id="sticky" style="position:absolute;">My name is sirish</div>
</body>
</html>
<script>
    $(function () {
        $('.red').each(function () {
            $(this).css('color', '#F00');
        });
        $('.green').each(function () {
            $(this).css('color', 'rgb(0,255,0)');
        });
        $('.blue').each(function () {
            $(this).css('color', '#00F');
        });
        $('.colored').each(function () {
            if ($(this).css('color') === 'rgb(0,0,255)') {
                console.log($(this).css('background-color', '#000'));
            }
        });
        $('span').css('padding', '10px');
        $('.colored').on('mouseover', function () {
            $(this).data('oldColor', $(this).css('background-color'));
            $(this).css('background-color', '#FF0');
        });
        $('.colored').on('mouseout', function () {
            var oldColor = $(this).data('oldColor');
            $(this).css('background-color', oldColor);
        });
        $('#addComment').on('click',function(){
            var div = $('<div style="line-height: 30px;"></div>');
            var removeBtn = $('<span style="cursor: pointer;background-color: dodgerblue;color: #FFF;padding: 5px;border-radius: 5px;">Remove </span>');
            var commentBody = $('<span>This is a comment</span>');
            removeBtn.on('click',function(){
                alert('comment Removed!');
            });
            div.append(removeBtn);
            div.append(commentBody);
            $('#comment').append(div);
        });
        $(window).on('scroll',function(){
           var top = $(window).scrollTop();
           $('#sticky').animate({
               top: top+'px'
           },10);
        });
    });
</script>