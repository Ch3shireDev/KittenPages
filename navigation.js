function select(name, section) {
    if (name == section) {
        $(window).off();
        $.getScript("./posts/"+section+".js", function () { getContent(); });
    }
}

select("browse", "browse");

$(".button").click(function () {

    var name = $(this).attr('name');

    select(name, "browse");
    select(name, "publish");
    
});