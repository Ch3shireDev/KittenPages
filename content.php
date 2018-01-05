<?php

?>

<p id="kot">Text to change.</p>

<?php
include "posts.php";
?>

<script type="text/javascript">
    function fun(value) {
        $(".content p").text(value);
    }
</script>