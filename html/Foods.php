<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="/images/Logo Restaurant.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="http://localhost:8000/#">Home</a>
                    </li>
                    <li>
                        <a href="http://localhost:8000/Foods.php">Menu</a>
                    </li>
                    <li>
                        <a href="http://localhost:8000/Login Page.php">Login</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    

    
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    

    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Chicke Hawain Pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Hawain Pizza</h4>
                    <p class="food-price">$13.50</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, Pineapple, Mushrooms, Onions and Bacon.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="/images/Smokey Burger.png" alt="Smokey Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Smokey Burger</h4>
                    <p class="food-price">$6.50</p>
                    <p class="food-detail">
                        Made with Bun, Beef Patty, Cheese, Lettuce, Tomato, Onion.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="/images/Nice Burger.jpg" alt="Nice Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Nice Burger</h4>
                    <p class="food-price">$7.00</p>
                    <p class="food-detail">
                        Made with Bun, Beef Patty, Bacon, Cheese, Lettuce, Tomato, Onion and Ketchup.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="/images/Pizza-con-pepperoni.webp" alt="Pepperoni Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Pepperoni Pizza</h4>
                    <p class="food-price">$12.00</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Cheese, Oregano, and Pepperoni.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="/images/margherita-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Margherita Pizza</h4>
                    <p class="food-price">$10.00</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Basil leaves, Fresh mozzarella cheese and San Marzano tomatoes.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="/images/Steamed momo.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Steam Momo</h4>
                    <p class="food-price">$8.50</p>
                    <p class="food-detail">
                        Made with Chicken, Onion, Garlic, Soya Sauce and Black Pepper Powder.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    


    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    


    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Nikola</a></p>
        </div>
    </section>
    

</body>
</html>