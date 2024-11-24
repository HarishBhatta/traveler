<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section class="header">
        <a href="home.php" class="header-logo">travel.</a>
        <nav class="header-navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <i id="menu-btn" class="fas fa-bars"></i>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="home-slider--slide swiper-slide" style="background: url(./images/image2.jpg) no-repeat;">
                    <div class="home-slider--slide_content">
                        <span>explore, discover</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="home-slider--slide swiper-slide" style="background: url(./images/image3.jpg) no-repeat;">
                    <div class="home-slider--slide_content">
                        <span>explore, discover</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="home-slider--slide swiper-slide" style="background: url(./images/image1.jpg) no-repeat;">
                    <div class="home-slider--slide_content">
                        <span>explore, discover</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="services">
        <h1 class="services-title">Our Services</h1>
        <div class="services-container">
            <div class="services-container--box">
                <img src="./images/adventure.svg" alt="">
                <h3>adventures</h3>
            </div>
            <div class="services-container--box">
                <img src="./images/tour.svg" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="services-container--box">
                <img src="./images/trekking.svg" alt="">
                <h3>trekking</h3>
            </div>
            <div class="services-container--box">
                <img src="./images/fire.svg" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="services-container--box">
                <img src="./images/offroad.svg" alt="">
                <h3>off road</h3>
            </div>
            <div class="services-container--box">
                <img src="./images/camping.svg" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <section class="homeabout">
        <div class="homeabout-image">
            <img src="./images/image3.avif" alt="">
        </div>
        <div class="homeabout-content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis nulla neque laboriosam temporibus incidunt blanditiis hic perspiciatis. Distinctio nisi architecto natus quo, ipsum aut, illo facilis est dolor, deserunt incidunt?</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <section class="homepackage">
        <h1 class="services-title">Our packages</h1>
        <div class="homepackage-container">
            <div class="homepackage-container--box">
                <div class="homepackage-container--box_image">
                    <img src="./images/taj.avif" alt="">
                </div>
                <div class="homepackage-container--box_content">
                    <h3>adventure & tourism</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, consequatur.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="homepackage-container--box">
                <div class="homepackage-container--box_image">
                    <img src="./images/paris.jpg" alt="">
                </div>
                <div class="homepackage-container--box_content">
                    <h3>adventure & tourism</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, consequatur.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="homepackage-container--box">
                <div class="homepackage-container--box_image">
                    <img src="./images/gate.avif" alt="">
                </div>
                <div class="homepackage-container--box_content">
                    <h3>adventure & tourism</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, consequatur.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="homepackage-loadmore">
            <a href="book.php" class="btn">Load More</a>
        </div>
    </section>

    <section class="homeoffer">
        <div class="homeoffer-content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut expedita maiores nulla aliquid, repellendus officia facere doloribus dicta dolore, sint, odit consequatur libero animi? Quae fuga nisi nemo soluta impedit?</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>

    <section class="footer">
        <div class="footer-container">
            <div class="footer-container--box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>
            <div class="footer-container--box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>askquestions</a>
                <a href="#"><i class="fas fa-angle-right"></i>faq</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>
            <div class="footer-container--box">
                <h3>Contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>9851245766</a>
                <a href="#"><i class="fas fa-phone"></i>01-234256</a>
                <a href="#"><i class="fas fa-envelope"></i>bhattaharish10@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Kahtmandu, Nepal</a>
            </div>
            <div class="footer-container--box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>
        </div>
        <div class="footer-credit">Created by <span>Harish Bhatta</span></div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./javascript/script.js"></script>
</body>

</html>