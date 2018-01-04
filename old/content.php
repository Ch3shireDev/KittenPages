
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="getpost.js"></script>

<?php
    $result = mysqli_query($link, "select count(*) from posts");
    $r = mysqli_fetch_all($result);

    $num = $r[0][0];
    
    if($num==null)return;
?>

<script type="text/javascript" src="getpost.js"></script>
<script type="text/javascript">var N = <?php echo $num;?>;</script>
<script type="text/javascript" src="content.js"></script>

