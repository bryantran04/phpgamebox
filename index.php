<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'cdn.php'; ?>

    <?php
    session_start();
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
    }
    ?>

    <title>Gamebox</title>
</head>

<body>
    <header>
        <div id="nav-placeholder"></div>
        <!-- Will remove after we start php -->
        <?php include 'connect-db.php'; ?>
        <?php include 'navbar.php'; ?>

    </header>


    <div class="showcase">
        <div class="showcase-content">
            <div class="text">
                <h1>
                    Gamebox
                </h1>
                <p class="lead">
                    Marketplace for Games
                </p>
            </div>
        </div>

        <div>

        </div>


    </div>

    <?php if (isset($_SESSION['username'])) : ?>
        <p>Hello User</p>
    <?php endif ?>



    <?php include('scripts.php'); ?>


</body>

</html>