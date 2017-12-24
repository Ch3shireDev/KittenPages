<?php


if(isset($_POST["message"])){
?>
<div class="section">
    <div class = "baloon">
<?php
    $content = $_POST["message"];
    echo "$content\n";
?>
    </div>
</div>
<?php
}
    ?>

<div class = "section">
    <div class = "baloon">
        <header>
            <p class="head">Admin Panel</p>
        </header>
        <p>Publish new post:</p>
        <div class="input">
            <form>
<textarea id = "NewPost" cols="50" rows="5" placeholder="Enter some text..." name="message"></textarea>
                <div class="button">
                    <input type="submit" value="Send" onclick="" formmethod="post" />
                </div>
            </form>
        </div>
    </div>
</div>