<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Travigo - Travel for everyone</title>
    <link rel="icon" href="public/img/world.png" />
    <meta name="description" content="Explore our trips and live The Good Life with Travigo our Tours that make you fall in love with the world." />
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body>
    <!--header--->
    <header>
        <a href="#" class="logo"><span>T</span><span class="purpel">r</span><span>a</span><span class="purpel">v</span><span>i</span><span class="purpel">g</span><span>o</span></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="home">Home</a></li>
            <li><a href="tours">Tours</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact Us</a></li>
        </ul>
    </header>

    <!--Home section--->
    <section class="home" id="home">
        <div class="home-text">
            <h1>
                Travigo <br />
                Travel
            </h1>
            <p>
                Explore our trips and live The Good Life with Travigo <br />
                Tours that make you fall in love with the world.
            </p>
            <a href="#" class="home-btn">Let's go now</a>
        </div>
    </section>

    <!--container--->
    <div class="tour-container">
        <h1>You Love<span>Traveling</span>?</h1>
        <p>We've found the best hotel deals</p>
        <div class="tour">
            <form>
                <div class="input-tour-row">
                    <div class="tour-input">
                        <label>
                            <h3>Wher To</h3>
                        </label>
                        <input class="tour-input" type="text" placeholder="place name" />
                    </div>
                    <div class="tour-input">
                        <label>
                            <h3>How Many</h3>
                        </label>
                        <input class="tour-input" type="text" placeholder="number of guests" />
                    </div>

                    <div class="tour-input">
                        <label>
                            <h3>Arrivals</h3>
                        </label>
                        <input class="tour-input" type="date" />
                    </div>
                    <div class="tour-input">
                        <label>
                            <h3>Leaving</h3>
                        </label>
                        <input class="tour-input" type="date" />
                    </div>
                </div>
                <button class="tours" type="submit">BOOK NOW</button>
            </form>
        </div>
    </div>
    <section class="package" id="package">
        <div class="title">
            <h2>Our Tours</h2>
        </div>
        <div class="package-contentv1">
            <?php
            while ($tours = mysqli_fetch_assoc($sql)) { ?>
                <div class="box">
                    <div class="thum">
                        <img src="public/img/<?= $tours['tour_image'] ?>" alt="paris image" />
                        <h3>$499</h3>
                    </div>
                    <div class="dest-content">
                        <div class="location">
                            <h4><?= $tours['tour_place'] ?></h4>
                            <p><?= $tours['tour_description'] ?></p>
                        </div>
                        <div class="stars">
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                            <a href="#"><i class="bx bxs-star"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!--destination section--->
    <section class="destination" id="destination">
        <div class="title">
            <h2 style="margin-top: 100px;">
                Our Most Popular <br />
                Destination!
            </h2>
        </div>

        <div class="destination-content">
            <div class="col-content">
                <img src="public/img/venice.png" alt="venice iamge" />
                <h5>Venice</h5>
                <p>ITALY</p>
            </div>

            <div class="col-content">
                <img src="public/img/maldive.png" alt="maldive image" />
                <h5>Maldive</h5>
                <p>MALDIVE</p>
            </div>

            <div class="col-content">
                <img src="public/img/img-3.jpg" alt="Machu Picchu image" />
                <h5>Machu Picchu</h5>
                <p>PERU</p>
            </div>

            <div class="col-content">
                <img src="public/img/img-4.jpg" alt="Machu Picchu image" />
                <h5>Machu Picchu</h5>
                <p>PERU</p>
            </div>

            <div class="col-content">
                <img src="public/img/img-5.jpg" alt="Machu Picchu image" />
                <h5>Machu Picchu</h5>
                <p>PERU</p>
            </div>

            <div class="col-content">
                <img src="public/img/img-2.jpg" alt="Machu Picchu image" />
                <h5>Machu Picchu</h5>
                <p>PERU</p>
            </div>
        </div>
    </section>

    <!--Newsletter--->
    <section class="newsletter">
        <div class="news-text">
            <h2>Newsletter</h2>
            <p>
                Subscribe For more HTML, CSS, and <br />
                coding tutorials
            </p>
        </div>

        <div class="send">
            <form>
                <input type="email" placeholder="Write Your Email" required />
                <input type="submit" value="Submit" />
            </form>
        </div>
    </section>

    <!--footer--->
    <section id="contact">
        <div class="footer">
            <div class="main">
                <div class="list">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Tours</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="tours.html">Tour</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href="#">98 West 21th Street</a></li>
                        <li><a href="#">New York NY 10016</a></li>
                        <li><a href="#">+(123)-123-1234</a></li>
                        <li><a href="#">info@travigo.com</a></li>
                        <li><a href="#">+(123)-123-1234</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/YouCodeSchool/"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/youcodeschool/"><i class="bx bxl-instagram-alt"></i></a>
                        <a href="https://twitter.com/YouCode18"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/youcode-maroc/"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="end-text">
            <p>Copyright ©2022 All rights reserved | Travigo</p>
        </div>
    </section>

    <!--link to js--->
    <script type="text/javascript" src="public/js/script.js"></script>
</body>

</html>