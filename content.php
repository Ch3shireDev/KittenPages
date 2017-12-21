<p id="demo">A Paragraph.</p>

<script src="script.js"></script>

<?php

$content = file_get_contents('http://loripsum.net/api');
for ($i = 1; $i <= 10; $i++) {
    $j = 2*$i;
    ?>
    <div class = "section">


        <div class = "baloon">
            <header>
                <p class="head">Sidebar</p>
            </header>
            <p>
                <?php
                echo "$content\n";
                ?>
            </p>
        </div>

    </div>

    <?php
}
?>