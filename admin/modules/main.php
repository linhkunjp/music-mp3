<div class="clear"></div>
<div class="main">
    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';

    }
    if ($tam == 'qlmusic' && $query == 'them') {
        include("modules/qlmusic/add.php");
        include("modules/qlmusic/list.php");

    } elseif ($tam == 'qlmusic' && $query == 'sua') {
        include("modules/qlmusic/edit.php");

    } else {
        include("modules/qlmusic/list.php");
    }

    ?>
</div>