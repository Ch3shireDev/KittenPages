
<script type="text/javascript">
    //function fun(value) {
    //    $(".content p").text(value);
    //}

    for (var index = 0; index < 10; index++) {
        $.post('./posts/show.php',
            { index: index },
            function (data) {
                $(".content").append(data);
            }
        );
    }



</script>