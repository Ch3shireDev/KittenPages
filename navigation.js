$(".button").click(function () {
    var value = $(".button").index(this);
    //alert(value);
    if (value == 0) {
        $.ajax({
            method: 'get',
            url: 'posts.php',
            data: {
                //'myString': scriptString,
                'ajax': true
            },
            success: function (data) {
                alert(data);
                //$('#kot').text(data);
            }
        });
    }
});