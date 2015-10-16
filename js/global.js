$(document).ready(function() {

    // page min-height
    var sidebar = $('#sidebar'),
        content = $('#content'),
        pageHeight = $(window).height() - $('header').outerHeight() - $('footer').outerHeight(),
        contentHeight = content.outerHeight(),
        bodyWidth = $('body').outerWidth();
        content.css("min-height", pageHeight);
        if(contentHeight > pageHeight){
            sidebar.css("min-height", contentHeight);
        } else {
            sidebar.css("min-height", pageHeight);
        }
        if(bodyWidth < 767){
            sidebar.css("min-height", 0);
        }

    $(window).resize(function(){
        var windowHeight = $(window).height(),
            windowWidth = $(window).width(),
            headerHeight = $('header').outerHeight(),
            footerHeight = $('footer').outerHeight(),
            pageHeight = windowHeight - headerHeight - footerHeight,
            contentHeight = content.outerHeight();

        content.css("min-height", pageHeight);
        sidebar.css("min-height", contentHeight);

        if(windowWidth < 768){
            sidebar.css("min-height", "0");
        }
    });

    // show random quote
    var quotes = $('.quote');
    quotes.hide();

    var qlen = quotes.length; //document.write( random(qlen-1) );
    $( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)

    function random(number) {
        return Math.floor( Math.random()*(number+1) );
    }
});