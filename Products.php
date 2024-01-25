

<?php session_start(); 


include_once './repository/productRepository.php';
include_once './repository/userRepository.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <head>
        <div class="navbar">
            <div class="logo">
                <h1>SneakPeak</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <a href="HomePage.php">
                        <li>Home</li>
                    </a>
                    <a href="About.php">
                        <li>About</li>
                    </a>
                    <a href="Products.php">
                        <li>Products</li>
                    </a>
                    <a href="News.php">
                        <li>News</li>
                    </a>
                    <a href="ContactUs.php">
                        <li>Contact Us</li>
                    </a>
                    <a href="Sign_up.php">
                        <li><i class="fa-solid fa-user"></i></li>
                    </a>
                </ul>
            </div>
        </div>
    </head>

    <div id="product1">
            <?php if (isset($_SESSION['is_authenticated'])): ?>
         
            <a href="add-product.php">
                Add product
            </a>

          <?php endif; ?>
        <h1>Products</h1>
        <p>Summer Collection</p>
        <div class="pro-container">

        <?php
            $productRepository = new ProductRepository();
            $userRepository = new UserRepository();
            $products = $productRepository->getProducts();

            foreach($products as $product) {
                $user = $userRepository->getUserById($product['user_id']);

                echo '<div class="pro">
                        <img src="img/shoe1.jpg" alt="" />
                        <div class="des">
                            <span>' . $product["brand"] . '</span>
                            <h5>'. $product['name'] .'</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$'.$product['price'].'</h4>
                        </div>

                        <div>Added by: '.$user['name']. ' ' . $user['surname'].'</div>
                    </div>';
            }
        ?>
            <!-- <div class="pro">
                <img src="img/nike4.jpg" alt="" />
                <div class="des">
                    <span>nike</span>
                    <h5>Second Model</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                    <span class="discount">$200</span>
                </div>
            </div>
            <div class="pro">
                <img src="img/nike3.jpg" alt="" />
                <div class="des">
                    <span>nike</span>
                    <h5>Third Model</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$120</h4>
                    <span class="discount">$400</span>
                </div>
            </div>
            <div class="pro">
                <img src="img/nike2.avif" alt="" />
                <div class="des">
                    <span>nike</span>
                    <h5>Fourth Model</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$125</h4>
                    <span class="discount">$130</span>
                </div>
            </div>
            <div class="pro">
                <img src="img/adidas2.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Fifth Model</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$200</h4>
                    <span class="discount">$300</span>
                </div>
            </div>
            <div class="pro">
                <img src="img/adidas.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Sixth Model</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$180</h4>
                    <span class="discount">$200</span>
                </div>
            </div>
            <div class="pro">
                <img src="img/vans.jpg" alt="" />
                <div class="des">
                    <span>vans</span>
                    <h5>Seventh Model</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$220</h4>
                    <span class="discount">$400</span>
                </div>
            </div>
            <div class="pro">
                <img src="img/nike5.jpg" alt="" />
                <div class="des">
                    <span>nike</span>
                    <h5>Eighth Model</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$90</h4>
                    <span class="discount">$100</span>
                </div>
            </div> -->
        </div>
    </div>

    <footer class="footer">
        <h1>SneakPeak</h1>
        <div class="boxHolder">
            <div class="first-box">
                <h4>Contact Us</h4>
                <p><strong>Address:</strong> <span>7 Prospect Hill</span></p>
                <p><strong>Phone:</strong> <span> +44 070 6842 8235</span></p>
                <p><strong>ZIP code:</strong> <span> PL9 9ST</span></p>
                <div class="icon">
                    <ul>
                        <li><i class="fa-brands fa-facebook"></i></li>
                        <li><i class="fa-brands fa-instagram"></i></li>
                        <li><i class="fa-brands fa-linkedin"></i></li>
                    </ul>
                </div>
            </div>

            <div class="second-box">
                <h4>About</h4>
                <p>About Us</p>
                <p>Delivery Information</p>
                <p>Privacy Policy</p>
            </div>

            <div class="third-box">
                <h4>My Account</h4>
                <p>Sign In</p>
                <p>View Cart</p>
                <p>My Website</p>
            </div>
        </div>
    </footer>
</body>

</html>