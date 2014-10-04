$(document).ready(function() {
    var start = $('#time-line-start');
    var end = $('#time-line-end');
    var offset = end.offset()['top'] - start.offset()['top'] - 10;

    start.css('padding-bottom', offset);
});
