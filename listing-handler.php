<?php

$errors = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // receive all input values from the form
    $title = $_POST['title'];
    $game = strtolower($_POST['game']);
    $location = $_POST['location'];
    $price = $_POST['price'];
    $game_condition = $_POST['condition'];
    $console = $_POST['console'];
    $owner = $_POST['owner'];

    $description = $_POST['description'];
    //title	description	location	price	console	sold	picture, need condition and game

    $picture = $_FILES['image']['name'];
    $target = "submitted_pictures/" . basename($picture);


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        array_push($errors, "Failed to upload image");
    }


    if (count($errors) == 0) {

        $query = "INSERT INTO listing (owner,title, description, location, price, console, picture, game_condition, game) 
  			  VALUES(:owner, :title, :description, :location, :price, :console, :picture, :game_condition, :game)";
        $statement = $db->prepare($query);
        $statement->bindValue(':owner', $owner);
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
        $mainpage = "index.php";

        header("Location: " . $mainpage);
    }
}
