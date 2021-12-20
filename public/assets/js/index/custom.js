$(document).ready(function(){

    console.log('Entryyy');

    $('.copyCode').click(function(e) {
        var url = $(e.currentTarget).children().attr('data-url');
        $(e.currentTarget).attr('title', 'URL Copiada');
        $(e.currentTarget).attr('data-bs-original-title', 'URL Copiada');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(url).select();
        document.execCommand("copy");
        $temp.remove();
    });
});
