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

    // $username = $_POST['username'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $confirmpassword = $_POST['confirmpassword'];
    // $firstname = $_POST['firstname'];
    // $lastname = $_POST['lastname'];
    $picture = $_FILES['photo']['name'];
    $target = "submitted_pictures/" . basename($picture);


    // if (empty($username)) {
    //     array_push($errors, "Username is required");
    // }
    // if (empty($email)) {
    //     array_push($errors, "Email is required");
    // }
    // if (empty($password)) {
    //     array_push($errors, "Password is required");
    // }
    // if ($password != $confirmpassword) {
    //     array_push($errors, "The two passwords do not match");
    // }
    echo "<p>Test2</p>";

    // $user_check_query = "SELECT * FROM listing WHERE username='$username' OR email='$email' LIMIT 1";
    // $statement = $db->prepare($user_check_query);
    // $statement->execute();
    // $result = $statement->fetchAll();
    // $statement->closecursor();


    // if (count($result) > 0) {
    //     if ($result[0]['username'] === $username) {
    //         array_push($errors, "Username already exists");
    //     }

    //     if ($result[0]['email'] === $email) {
    //         array_push($errors, "email already exists");
    //     }
    // }

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


// if (isset($_POST['login'])) {
//     // receive all input values from the form
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $password = password_hash($password, PASSWORD_BCRYPT);

//     if (empty($username)) {
//         array_push($errors, "Username is required");
//     }
//     if (empty($password)) {
//         array_push($errors, "Password is required");
//     }



//     $user_check_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";

//     $statement = $db->prepare($user_check_query);
//     $statement->execute();
//     $result = $statement->fetchAll();
//     $statement->closecursor();


//     if (count($result) > 0) {
//         if (password_verify($_POST['password'], $result[0]['password'])) {
//             $_SESSION['username'] = $username;
//             $_SESSION['success'] = "You are now logged in";
//             $mainpage = "index.php";

//             header("Location: " . $mainpage);
//             exit();
//         }
//     }



//     if (count($errors) == 0) {
//         array_push($errors, "Username or Password is incorrect");
//     }

