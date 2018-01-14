function browse() {

    var Index = 0;

    function NextPost() {
        $.post('./posts/show.php',
            { index: Index },
            function (data) {
                $(".content").append(data);
            }
        );
        Index++;
    }

    $('.content').html("");
    for (var i = 0; i < 3; i++) {
        NextPost();
    }

    $(window).scroll(function () {
        
        var body = document.body,
            html = document.documentElement;

        var height = Math.max(body.scrollHeight, body.offsetHeight,
            html.clientHeight, html.scrollHeight, html.offsetHeight);

        var current = html.scrollTop + html.clientHeight;
        
        var str = current + " " + height;

        if (current > height - 500) {
            NextPost();
        }
    });

    $(".admin").click(function () { alert("xxx"); });

}