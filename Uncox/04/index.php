<?php
/*$a = 2;
$b = 3;
$string = 'hello';
echo $a . $string;
echo $a . $b;
echo $a + $b;
function test($a,$b,$c = 3){
    return $a + $b + $c;
}
echo test(4,3,4);
*/?><!--
<br>
<script>
        var a = 2;
        var b = 3;
        var string = 'hello';
        document.write(a+string);
        document.write(a+''+b);
        document.write(a+b);
        function test(a,b,c){
            c = c || 3;
            return a + b + c;
        }
        document.write(test(4,3,4));
        console.log("hello");
</script>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jsTest</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
<input type="text" placeholder="type your keyword to Search" style="width:300px;height:30px;" id="search">
<span style="background-color: #AAA;color: #FFF;padding: 10px;border-radius: 3px;display: inline-block;margin: 10px;cursor: pointer;" id="target-btn">click Me</span>
</body>
</html>
<script>
    $(function(){
        var btn = $('#target-btn');
        var input = $('#search');
        input.on('keyup',function(){
           btn.html("<b>hello</b> World!");
        });
    });
</script>