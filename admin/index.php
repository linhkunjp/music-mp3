<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>

<body>
    <?php
    include("config/config.php");
    ?>

    <section class="admin-content row ">
        <div class="admin-content-left pt-4">
            <div>
                <div class="header-top-left">
                    <a class="text-center" href="">
                        <h2> Admin </h2>
                    </a>
                </div>
                <?php
                include("modules/menu.php");
                ?>
            </div>
        </div>
        <div class="admin-content-right">
            <?php
            include("modules/main.php");
            ?>

        </div>
    </section>
</body>

</html>