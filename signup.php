<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('cdn.php'); ?>

    <title>Document</title>
</head>
<?php include('connect-db.php'); ?>
<?php include('navbar.php'); ?>
<link rel="stylesheet" href="styles/signup.css">


<body>
    <?php include('form-handler.php') ?>
    <?php include('errors.php'); ?>
    <?php echo getcwd(); ?>

    <main class="my-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <!-- <form name="my-form" onsubmit="return validform()" action="form-handler.php" method="post"> -->
                            <form name="my-form" onsubmit="" action="" method="post" enctype="multipart/form-data">



                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="form-control" name="username" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="confirmpassword" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="confirmpassword" class="form-control" name="confirmpassword" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="firstname" class="col-md-4 col-form-label text-md-right">First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="firstname" class="form-control" name="firstname" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lastnamee" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="lastname" class="form-control" name="lastname" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description of User</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" id="description" name="description" rows="3" value=""></textarea>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <input type="hidden" name="size" value="1000000">
                                    <label for="picture" class="col-md-4 col-form-label text-md-right">Profile Picture</label>
                                    <div class="col-md-6">
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>


                                <div class="col-md-6 offset-md-4">
                                    <button name="register" type=" submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>


</body>

</html>