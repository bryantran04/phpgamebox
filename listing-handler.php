<?php

session_start();
$errors = array();
echo "<p>Hello</p>";
var_dump($GLOBALS);
if (isset($_POST['submit_listing'])) {
    // receive all input values from the form
    $title = $_POST['title'];
    $game = $_POST['game'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $game_condition = $_POST['condition'];
    $console = $_POST['console'];
    $description = $_POST['description'];
    //title	description	location	price	console	sold	picture, need condition and game

    $picture = $_FILES['photo']['name'];
    $target = "submitted_pictures/" . basename($picture);

    echo "<p>Test2</p>";

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        array_push($errors, "Failed to upload image");
    }


    if (count($errors) == 0) {

        //$password = password_hash($password, PASSWORD_BCRYPT);
        //title	description	location	price	console	sold	picture	game_condition	game'

        $title = "This is a test";
        $description = "Test";
        $location = "Test";
        $price = 0.99;
        $console = "PS4";
        $picture = "TestPath";
        $game_condition = "New";
        $game = "Test";

        echo var_dump($title)."<br>";

        $query = "INSERT INTO listing (title, description, location, price, console, picture, game_condition, game) 
  			  VALUES(:title, :description, :location, :price, :console, :picture, :game_condition, :game)";
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':location', $location);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':console', $console);
        $statement->bindValue(':picture', $picture);
        $statement->bindValue(':game_condition', $game_condition);
        $statement->bindValue(':game', $game);
        $statement->execute();
        $statement->closeCursor();
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        $mainpage = "index.php";

        header("Location: " . $mainpage);
    }
}
