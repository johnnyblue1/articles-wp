$(function(){
    $(':radio').click(function() {
        $('#' + $(this).attr('class')).fadeIn().siblings('div').hide();
    })
    .filter(':checked').click();
});