$(function(){
    var words = ['hello','how are you','alarm','abort','axe','plus','processor','cat','car','cow','row','accessor'];
    $('#search').on('keyup',function(){
        var value = $('#search').val();
        var matches = [];
        words.forEach(function(item){
            if(item.indexOf(value) > -1){
                matches.push(item);
            }
        });
        var html = "";
        matches.forEach(function(item){
            html += item + "<br>";
        });
        $('#preview').html(html);
    });
});