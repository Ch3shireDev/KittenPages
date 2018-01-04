
function GetPost(i) {
    $.ajax({
        url: 'getpost.php',
        data: { index: n=i },
        type: 'post',
        success: function (output) {
            $(".content").append(output);
        }
    });
}
