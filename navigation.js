$(".button").click(function () {
    $(window).off();

    var name = $(this).attr('name');

    if (name == "browse") {
        $.getScript("./posts/browse.js", function () { browse(); });
    }
    else if(name == "publish") {
        $.getScript("./posts/publish.js", function () { publish(); });
    }
});