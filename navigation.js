$(".button").click(function () {
    $(window).off();
    var value = $(".button").index(this);
    if (value == 0) {
        $.getScript("./posts/browse.js", function () { browse(); });
    }
    else if (value == 1) {
        $(".content").html("xyz");
        //$.ajax({
        //    method: 'get',
        //    url: 'posts.php',
        //    data: {
        //        'mode': 'publish'
        //    },
        //    success: function (data) {
        //        alert("yyy");
        //    }
        //});
    }
});