<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/mobile.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <script src="//code.jquery.com/jquery.min.js"></script>

    <title>Gamebox</title>
</head>

<body>

    <header>
        <div id="nav-placeholder"></div>
        <!-- Will remove after we start php -->

        <script>
            $.get("navbar.php", function(data) {
                $("#nav-placeholder").replaceWith(data);
            });
        </script>
    </header>

    <div class="container mt-5">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-6">Results for Pokemon</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae
                    voluptatibus, natus
                    architecto asperiores
                    a.
                </p>
            </div>

        </div>

        <div class="form-group">
            Sort By:
            <select class="custom-select sort_option" name="sort_option">
                <option value=""></option>
                <option value="lowest">Price (Lowest First)</option>
                <option value="highest">Price (Highest First)</option>
                <option value="newest">Newest Listing</option>
                <option value="oldest">Oldest Listing</option>
            </select>
        </div>
        <div class="listings">
            <div class="card mb-5 listing">
                <div class="card-header">
                    <span>Pokemon Sword</span>
                    <h6 class="date">12/01/2019</h6>
                </div>
                <div class="row p-3">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <img class="listing_img" src="./images/place_holder/sword.jpg">
                    </div>
                    <div class="col-sm-6 col-md-8 col-lg-9 col-xl-10">
                        <div class="card-body">
                            <h5 class="card-title">Pokemon Sword in Mint Condition</h5>
                            <h6 class="price">$40</h6>

                            <p class="card-text">New Copy of Pokemon Sword, has not been opened. Will ship to any
                                location
                                in the US</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-5 listing">
                <div class="card-header">
                    <span>Pokemon Sword</span>
                    <h6 class="date">12/01/2020</h6>
                </div>
                <div class="row p-3">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <img class="listing_img" src="./images/place_holder/sword.jpg">
                    </div>
                    <div class="col-sm-6 col-md-8 col-lg-9 col-xl-10">
                        <div class="card-body">
                            <h5 class="card-title">Pokemon Sword in Mint Condition</h5>
                            <h6 class="price">$50</h6>
                            <p class="card-text">New Copy of Pokemon Sword, has not been opened. Will ship to any
                                location
                                in the US</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-5 listing">
                <div class="card-header">
                    <span>Pokemon Sword</span>
                    <h6 class="date">12/01/2023</h6>
                </div>
                <div class="row p-3">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <img class="listing_img" src="./images/place_holder/sword.jpg">
                    </div>
                    <div class="col-sm-6 col-md-8 col-lg-9 col-xl-10">
                        <div class="card-body">
                            <h5 class="card-title">Pokemon Sword in Mint Condition</h5>
                            <h6 class="price">$65.50</h6>
                            <p class="card-text">New Copy of Pokemon Sword, has not been opened. Will ship to any
                                location
                                in the US</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="./scripts/listings.js"></script>
</body>

</html>