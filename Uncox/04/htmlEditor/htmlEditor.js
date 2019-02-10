$(function(){
    $('#preview').html($('#htmlEditor').val());
   $('#htmlEditor').on('keyup',function(){
       $('#preview').html($(this).val());
   });
});