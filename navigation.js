$(".button").click(function () {
    $(window).off();
    var value = $(".button").index(this);
    if (value == 0) {
        $.getScript("./posts/browse.js", function () { browse(); });
    }
    else if (value == 1) {
        $.getScript("./posts/publish.js", function () { publish(); });
    }
});