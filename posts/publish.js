function getContent() {
    content = $('.content');
    content.html("");
    $.ajax({
        url: "./posts/publish.php"
    }).done(function (data) {
        content.append(data);
        });

    content.on('click', '.preview', function () {

        title = $('textarea.titlebox').val();
        message = $('textarea.messagebox').val();
        user = "cheshire";

        $.post(
            './posts/preview.php',
            {
                title: title,
                message: message,
                user: user
            },
            function (data) {
                content.prepend(data);
            }
        );
    });

    content.on('click', '.send', function () {

        if (confirm("Are you sure to publish post?")) {

            title = $('textarea.titlebox').val();
            message = $('textarea.messagebox').val();
            userid = "123";
            username = "";
            password = "";

            $.post(
                './posts/send.php',
                {
                    title: title,
                    message: message,
                    userid: userid,
                    username: username,
                    password: password
                },
                function (data) {

                }
            );

            select("browse", "browse");
        }
    });
}