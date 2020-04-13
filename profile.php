<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('cdn.php'); ?>
    <title>User</title>
</head>

<body>
    <div id="nav-placeholder"></div>
    <!-- Will remove after we start php -->
    <?php include 'connect-db.php'; ?>
    <?php include 'navbar.php'; ?>

    </header>

</body>

<?php
try {
    $username = $_GET['username'];

    $user_check_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
    $statement = $db->prepare($user_check_query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closecursor();

    if (count($result) > 0) {
        $username = $result[0]["username"];
        $fullname = $result[0]["firstname"] . " " . $result[0]["lastname"];
        $picture = "./submitted_pictures/" . $result[0]["picture"];
        $description = $result[0]["description"];
    } else {
        echo "<h1>Page Not found<h1>";
    }
} catch (Exception $e) {
}

?>

<div class="container content mt-5">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar position-fixed">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-picture">
                    <img src="<?php echo $picture ?>" class="profile-picture" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?php echo ucwords($fullname); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <h1>test</h1>

                <?php echo $description ?>
            </div>
        </div>
    </div>
</div>

</html>