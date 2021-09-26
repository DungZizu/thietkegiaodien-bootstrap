<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodMenu</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <section class="header-fluid">
        <div class="container-fluid ">
            <div class="row align-items-start">
                <div class="col">
                    <img src="imgs/logo.png" alt="">
                </div>
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid text-right">
                            
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link text-danger" aria-current="page" href="http://localhost/Project1/Html/">Home</a>
                               
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-danger" href="http://localhost/Project1/Html/Categories.php">Categories</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-danger" href="#">Foods</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-danger" href="#">Contact</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </nav>
                </div>
         
            </div>
        </div>
    </section>
    <section class="Search-fluid">
        <div class="container">
            <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search-box">
                <div class="input-group form-container">
                    <input type="text" name="Search" class="form-control search-input" placeholder="Search for food.." autofocus="autofocus" autocomplete="off" >
                    <span class="input-group-btn">
                        <button class="btn btn-search bg-danger">Search</button>

                    </span>
                </div>
            </div>
        </div>
        
    </section>
    
    

    
    <div class="container-fluid bg-secondary">
        <p class="text-center">Food Menu</p>
        <div class="row g-2">
            <div class="col-6 rounded">
                <div class="p-3 border bg-light clearfix">
                    <img src="imgs/mon4.jpg" class="rounded float-start" style="height: 100%;width:33%" alt="Mon1">
                    <p class="text-center">Dumplings Specials</p>
                    <p class="text-center">$5.00</p>
                    <p class="text-center">Chicken Dumpling with herb from Mountain</p>
                    <a type="button" class="btn btn-danger" href="http://localhost/Project1/Html/OrderMomo.php">Order Now</a>
                </div>
            </div>
            <div class="col-6 rounded">
                <div class="p-3 border bg-light clearfix">
                    <img src="imgs/mon6.jpg" class="rounded float-start" style="height: 100%;width:33%" alt="mon2">
                    <p class="text-center">Best Bergur</p>
                    <p class="text-center">$4.00</p>
                    <p class="text-center">Bergur with Ham,Pineapple and lots of Chesee</p>
                    <a type="button" class="btn btn-danger" href="http://localhost/Project1/Html/OrderBurger.php">Order Now</a>
                </div>
            </div>
            <div class="col-6 rounded">
                <div class="p-3 border bg-light clearfix">
                    <img src="imgs/mon4.jpg" class="rounded float-start" style="height: 100%;width:33%" alt="mon3">
                    <p class="text-center">Sadeko Momo</p>
                    <p class="text-center">$6.00</p>
                    <p class="text-center">Best Spicy MoMo for winter</p>

                    <a type="button" class="btn btn-danger" href="http://localhost/Project1/Html/OrderSadelko.php">Order Now</a>
                </div>
            </div>
            <div class="col-6 rounded">
                <div class="p-3 border bg-light clearfix">
                    <img src="imgs/mon1.jpg" class="rounded float-start" style="height: 100%;width:33%" alt="mon4">
                    <p class="text-center">Mixed Pizza</p>
                    <p class="text-center">$10.00</p>
                    <p class="text-center">Pizza with chicken Ham,Buff,Mushrooom and Vegetables</p>
                    <a type="button" class="btn btn-danger" href="http://localhost/Project1/Html/OrderPizza.php">Order Now</a>
                    
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="icon text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
            
    </div>
    <div class="container-fluid text-center">
        <footer>
            <p>All rights reserved.Designed by <a href="#" class="link-danger">CSE485</a></p>
            

        </footer>
    </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>  