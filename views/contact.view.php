<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Travigo - Travel for everyone</title>
    <link rel="icon" href="./img/world.png" />
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
    <div class="contact-container">
        <h2>Contact Us</h2>
        <p>
            We're here to help and answer any question you <br />
            might have.We look forward to hearing from you
        </p>
        <div class="contact">
            <h3>Sent your request</h3>
            <form>
                <div class="input-row">
                    <div class="input-group">
                        <label>Name</label>
                        <input class="contact-input" type="text" placeholder="Enter Your Name" />
                    </div>
                    <div class="input-group">
                        <label>Phone</label>
                        <input class="contact-input" type="text" placeholder="+1 212 212 2022" />
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label>Email</label>
                        <input class="contact-input" type="text" placeholder="account@test.com" />
                    </div>
                    <div class="input-group">
                        <label>Subject</label>
                        <input class="contact-input" type="text" placeholder="your raeson" />
                    </div>
                </div>
                <label>Message</label>
                <textarea rows="5" placeholder="Enter Your Message"></textarea>
                <button class="contact" type="submit">SEND</button>
            </form>
        </div>
    </div>
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