<?php

$errors = array();
if (isset($_POST['submit_listing'])) {
    // receive all input values from the form
    $title = $_POST['title'];
    $game = $_POST['game'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $game_condition = $_POST['condition'];
    $console = $_POST['console'];
    $owner = $_POST['owner'];

    $description = $_POST['description'];
    //title	description	location	price	console	sold	picture, need condition and game

    $attachment = $_FILES['image']['name'];
    $picture = "";
    $picture2 = "";
    $picture3 = "";
    $target = "submitted_pictures/";// . basename($picture);



    if((count($_FILES['image']['name'])) == 3) {
        $picture = $_FILES['image']['name'][0];
        $picture2 = $_FILES['image']['name'][1];
        $picture3 = $_FILES['image']['name'][2];
        move_uploaded_file($_FILES["image"]["tmp_name"][0], $target . basename($picture));
        move_uploaded_file($_FILES["image"]["tmp_name"][1], $target . basename($picture2));
        move_uploaded_file($_FILES["image"]["tmp_name"][2], $target . basename($picture3));
        $msg = "Images uploaded successfully";
    } elseif (count($_FILES['image']['name']) == 2) {
        $picture = $_FILES['image']['name'][0];
        $picture2 = $_FILES['image']['name'][1];
        move_uploaded_file($_FILES["image"]["tmp_name"][0], $target . basename($picture));
        move_uploaded_file($_FILES["image"]["tmp_name"][1], $target . basename($picture2));
        $msg = "Images uploaded successfully";
    } elseif (count($_FILES['image']['name']) == 1) {
        $picture = $_FILES['image']['name'][0];
        move_uploaded_file($_FILES["image"]["tmp_name"][0], $target . basename($picture));
        $msg = "Image uploaded successfully";
    } else{
        array_push($errors, "Failed to upload image");
    }




    if (count($errors) == 0) {

        //$password = password_hash($password, PASSWORD_BCRYPT);
        //title	description	location	price	console	sold	picture	game_condition	game'

        $query = "INSERT INTO listing (owner,title, description, location, price, console, picture, picture2, picture3, game_condition, game) 
  			  VALUES(:owner, :title, :description, :location, :price, :console, :picture, :picture2, :picture3, :game_condition, :game)";
        $statement = $db->prepare($query);
        $statement->bindValue(':owner', $owner);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':location', $location);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':console', $console);
        $statement->bindValue(':picture', $picture);
        $statement->bindValue(':picture2', $picture2);
        $statement->bindValue(':picture3', $picture3);
        $statement->bindValue(':game_condition', $game_condition);
        $statement->bindValue(':game', $game);
        $statement->execute();
        $statement->closeCursor();
        $mainpage = "index.php";

        header("Location: " . $mainpage);
    }
}
