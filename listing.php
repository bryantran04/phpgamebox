<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('cdn.php'); ?>

    <title>Gamebox</title>
</head>

<body>

    <header>
        <div id="nav-placeholder"></div>
        <!-- Will remove after we start php -->
        <?php include 'connect-db.php'; ?>
        <?php include 'navbar.php'; ?>
        <?php
        try {
            $listing_id = $_GET['listing'];
            $query = "SELECT * FROM listing WHERE id='$listing_id' LIMIT 1";
            $statement = $db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closecursor();

            if (count($result) > 0) {
                $title = $result[0]["title"];
                $condition = $result[0]["game_condition"];
                $picture = $result[0]["picture"];
                $description = $result[0]["description"];
                $owner = $result[0]["owner"];
                $game = $result[0]["game"];
                $console = $result[0]["console"];
                $location = $result[0]["location"];
                $price = $result[0]["price"];
                $date_posted = $result[0]["dateposted"];
            } else {
                echo "<h1>Listing Not found<h1>";
            }
        } catch (Exception $e) {
            echo "<h1>" . $e . "</h1>";
        }




        ?>
    </header>

    <div class="container mt-5">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="col-md-auto">
                    <!--<img class="post_img" src="./images/place_holder/sword.jpg"> -->
                    <h1 class="card-title"><?php echo $title ?></h1>
                </div>


                <div class="row p-3">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <img class="listing_img" src="submitted_pictures/<?php echo ($picture) ?>">
                    </div>
                    <div class=" col-sm-6 col-md-8 col-lg-9 col-xl-10" style="border:1px solid gray">
                        <div class="card-body">
                            <h5 class="card-text">Seller: <a href="profile.php?username=<?php echo $owner ?>"><?php echo $owner ?></a></h5>
                            <h5 class="card-text">Game: <?php echo ucwords($game) ?></h5>
                            <h5 class="card-text">Console: <?php echo ucwords($console) ?></h5>
                            <h5 class="card-text">Condition: <?php echo ucwords($condition) ?></h5>
                            <h5 class="price">Price: $<?php echo $price ?></h5>
                            <h5 class="card-text">Location: <?php echo ucwords($location) ?></h5>
                            <h5 class="card-text">Description: <?php echo $description ?></h5>
                            <h6 class="date">Date Submitted: <?php echo $date_posted ?></h6>
                            <a href="#" class="btn btn-primary" onclick="error_click()" id="buybtn">Buy Now</a>
                            <br />
                            <span class="card-text" id="error" style="color:red"></span>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
            </div>

            <div class="row">
                <div class="col-sm-8 m-auto">
                    <!-- SLIDER WITH INDICATORS -->
                    <div id="slider3" class="carousel slide mb-5" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#slider3" data-slide-to="0"></li>
                            <li data-target="#slider3" data-slide-to="1"></li>
                            <li data-target="#slider3" data-slide-to="2"></li>
                            <li data-target="#slider3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="post_img" src="./images/place_holder/sword.jpg" alt="First Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="post_img" src="./images/place_holder/sword_art.jpeg" alt="Second Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="post_img" src="./images/place_holder/sword_battle.jpg" alt="Third Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="post_img" src="./images/place_holder/sword_battle2.jpg" alt="Fourth Slide">
                            </div>
                        </div>

                        <!-- CONTROLS -->
                        <a href="#slider3" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>

                        <a href="#slider3" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('scripts.php'); ?>
    <script src="./scripts/listing_page.js"></script>
</body>

</html>