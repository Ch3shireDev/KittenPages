
for (var i = 0; i < 5; i++) {
    GetPost(i);
}

var i = 6;

document.addEventListener('scroll',
    function () {
        var body = document.body,
            html = document.documentElement;
        var height = Math.max(body.scrollHeight, body.offsetHeight,
            html.clientHeight, html.scrollHeight, html.offsetHeight);
        var current = html.scrollTop;
        if (current + 2000 > height) {
            if (i+1 > N) return;
            GetPost(i++);
        }
    }
);