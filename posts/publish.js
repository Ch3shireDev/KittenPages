function getContent() {
    $('.content').html("");
    $.ajax({
        url: "./posts/publish.php"
    }).done(function (data) {
        $('.content').append(data);
        });
    
}