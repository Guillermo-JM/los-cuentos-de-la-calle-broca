var count = 1;
var countLove = 0;
var countLike = 0;
var countDislike = 0;
$(document).ready(function() {
    $('#menu').hide();
    $('#button_chapters').click(function() {
        $('#intro').remove();
        $('#menu').show();
    });
    
});
function showChapter(nameChapter) {
    if($('#div-chapter').load('./view/' + nameChapter + '.php')) {
        $('#menu').remove();
    }
}
function counter(type) {
    switch(type) {
        case 'love': {
            countLove += count;
            $('#' + type).text(countLove);
            count = 0;
            break;
        }
        case 'like': {
            countLike += count;
            $('#' + type).text(countLike);
            count = 0;
            break;
        }
        case 'dislike': {
            countDislike += count;
            $('#' + type).text(countDislike);
            count = 0;
            break;
        }
    }
    count++;
}