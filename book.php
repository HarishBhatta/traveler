<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="book">
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
    <div class="book-heading" style="background: url(images/book.jpg) no-repeat;">
        <h1>Book now</h1>
    </div>
    <section class="book-container">
        <h1 class="book-container--title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-container--form">
            <div class="flexcontainer">
                <div class="inputbox">
                    <span>name:</span>
                    <input type="name" placeholder="Enter your name" name="name">
                </div>
                <div class="inputbox">
                    <span>email:</span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>
                <div class="inputbox">
                    <span>phone:</span>
                    <input type="number" placeholder="Enter your phone number" name="phone">
                </div>
                <div class="inputbox">
                    <span>address:</span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                <div class="inputbox">
                    <span>Where to:</span>
                    <input type="text" placeholder="Where do you want to visit" name="location">
                </div>
                <div class="inputbox">
                    <span>how many:</span>
                    <input type="number" placeholder="Number of guests" name="guests">
                </div>
                <div class="inputbox">
                    <span>arrivals</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputbox">
                    <span>leaving:</span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
</body>

</html>