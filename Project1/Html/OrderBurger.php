<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TLU.edu.vn</title>
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
                                <a class="nav-link text-danger" aria-current="page" href="http://localhost/project1/html/">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-danger" href="http://localhost/Project1/Html/Categories.php">Categories</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-danger" href="http://localhost/Project1/Html/FoodMenu.php">Foods</a>
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
    <section class="order-fluid">
        <div class="container-fluid">
            <h2 class="text-center text-danger">Fill this form to confirm your Order</h2>
            <div class="SelectFood-box">
                <div class="food-menu-img">
                    <img src="imgs/mon6.jpg" alt="" style="height: 100%;width:33%">
                </div>

                <div class="food-menu-desc float-right">
                    <h4>Best Burger</h4>
                    <p class="food-price">$4.00</p> 
                    <p>Quantity</p>
                    <form action="">
                        <input class="de-1" type="number" name="quantity" min="1" max="10" >
                    </form>                    
                </div>
            </div>
            
            
        
            
            
                <div class="DeliveryDetails-box">
                    <div class="Fullname">
                        <h4>Fullname</h4>
                        <form action="">
                            <input class="de" type="text" placeholder ="E.g:Nguyen Van Dung">
                        </form>
                    </div>
                    <div class="PhoneNumber">
                        <h4>PhoneNumber</h4>
                        <form action="">
                            <input class="de" type="text" placeholder ="E.g:0878526XXX">
                        </form>
                    </div>
                    <div class="Email">
                        <h4>Email</h4>
                        <form action="">
                            <input class="de" type="text" placeholder ="E.g:tksdung2105@gmail.com">
                        </form>
                    </div>
                    <div class="Address">
                        <h4>Address</h4>
                        <form action="">
                            <textarea class="de" name="" id="" cols="30" rows="10" placeholder="E.g: Hoang Mai"></textarea>
                        </form>
                    </div>
                    <a href="#" class="btn btn-order bg-danger">Confirm Order</a>
             
                </div>

            

        </div>
    </section>
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