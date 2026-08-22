<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wrong PH - Just Do It Wrong</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #fff;
            color: #111;
        }

        /* =========================
           HEADER
        ========================= */

        header {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 50px;

            border-bottom: 1px solid #eee;

            background: #fff;

            position: relative;
            z-index: 10;
        }

        .brand {
            display: flex;
            align-items: center;

            text-decoration: none;

            color: #111;
        }

        .brand-logo {
            width: 100px;
            height: auto;
            display: block;
        }

        .navigation {
            display: flex;
            gap: 35px;
        }

        .navigation a {
            text-decoration: none;
            color: #111;
            font-size: 14px;
            font-weight: bold;
        }

        .navigation a:hover {
            text-decoration: underline;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-actions a {
            text-decoration: none;
            color: #111;
            font-size: 14px;
            font-weight: bold;
        }

        .header-actions .join-button {
            background: #111;
            color: #fff;

            padding: 11px 20px;

            border-radius: 25px;
        }

        .header-actions .join-button:hover {
            background: #333;
        }


        /* =========================
           HERO SLIDESHOW
        ========================= */

        .hero {
            position: relative;

            width: 100%;
            height: calc(100vh - 80px);

            min-height: 550px;

            overflow: hidden;

            background: #111;
        }

        .slide {
            position: absolute;

            width: 100%;
            height: 100%;

            opacity: 0;

            transition: opacity 0.7s ease;

            pointer-events: none;
        }

        .slide.active {
            opacity: 1;
            pointer-events: auto;
        }

        .slide img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;
        }

        /* Dark overlay */

        .slide::after {
            content: "";

            position: absolute;

            inset: 0;

            background: rgba(0, 0, 0, 0.28);
        }


        /* =========================
           HERO CONTENT
        ========================= */

        .hero-content {
            position: absolute;

            z-index: 3;

            left: 8%;
            bottom: 13%;

            color: #fff;

            max-width: 600px;
        }

        .hero-content h1 {
            font-size: clamp(45px, 7vw, 90px);

            line-height: 0.9;

            font-weight: 900;

            letter-spacing: -4px;

            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 18px;

            line-height: 1.5;

            margin-bottom: 30px;

            max-width: 500px;
        }

        .shop-button {
            display: inline-block;

            background: #fff;

            color: #111;

            text-decoration: none;

            padding: 16px 30px;

            border-radius: 30px;

            font-size: 14px;

            font-weight: bold;

            transition: 0.2s;
        }

        .shop-button:hover {
            background: #ddd;

            transform: translateY(-2px);
        }


        /* =========================
           SLIDER ARROWS
        ========================= */

        .slider-button {
            position: absolute;

            z-index: 5;

            top: 50%;

            transform: translateY(-50%);

            width: 50px;
            height: 50px;

            border-radius: 50%;

            border: none;

            background: rgba(255, 255, 255, 0.9);

            color: #111;

            font-size: 22px;

            cursor: pointer;

            display: flex;

            align-items: center;

            justify-content: center;

            transition: 0.2s;
        }

        .slider-button:hover {
            background: #fff;

            transform: translateY(-50%) scale(1.05);
        }

        .previous {
            left: 25px;
        }

        .next {
            right: 25px;
        }


        /* =========================
           SLIDER DOTS
        ========================= */

        .slider-dots {
            position: absolute;

            z-index: 5;

            bottom: 35px;

            left: 50%;

            transform: translateX(-50%);

            display: flex;

            gap: 8px;
        }

        .dot {
            width: 9px;
            height: 9px;

            border-radius: 50%;

            border: none;

            background: rgba(255,255,255,0.5);

            cursor: pointer;
        }

        .dot.active {
            background: #fff;
        }


        /* =========================
           FEATURE SECTION
        ========================= */

        .features {
            padding: 70px 50px;

            text-align: center;
        }

        .features h2 {
            font-size: 32px;

            margin-bottom: 15px;
        }

        .features p {
            color: #666;

            font-size: 15px;

            max-width: 600px;

            margin: 0 auto 40px;
        }

        .feature-grid {
            max-width: 1100px;

            margin: auto;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .feature-card {
            padding: 35px 25px;

            background: #f7f7f7;

            border-radius: 8px;
        }

        .feature-card h3 {
            margin-bottom: 10px;

            font-size: 18px;
        }

        .feature-card p {
            margin: 0;

            font-size: 13px;

            line-height: 1.5;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #111;

            color: #fff;

            padding: 30px 50px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            font-size: 12px;
        }

        footer a {
            color: #fff;

            text-decoration: none;

            margin-left: 20px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            header {
                padding: 0 25px;
            }

            .navigation {
                display: none;
            }

            .hero-content {
                left: 7%;
                right: 7%;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 600px) {

            header {
                height: 70px;
            }

            .header-actions a:not(.join-button) {
                display: none;
            }

            .hero {
                height: calc(100vh - 70px);

                min-height: 600px;
            }

            .hero-content {
                bottom: 15%;
            }

            .hero-content h1 {
                font-size: 55px;

                letter-spacing: -3px;
            }

            .hero-content p {
                font-size: 15px;
            }

            .slider-button {
                width: 42px;
                height: 42px;
            }

            .previous {
                left: 12px;
            }

            .next {
                right: 12px;
            }

            .features {
                padding: 50px 25px;
            }

            footer {
                padding: 25px;

                flex-direction: column;

                gap: 15px;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     HEADER
========================= -->

<header>

    <a href="index.php" class="brand">

    <img
        src="Nike Logo.png"
        alt="Wrong Logo"
        class="brand-logo"
    >
    </a>


    <nav class="navigation">

        <a href="#new">
            New & Featured
        </a>

        <a href="#men">
            Men
        </a>

        <a href="#women">
            Women
        </a>

        <a href="#kids">
            Kids
        </a>

        <a href="#sale">
            Sale
        </a>

    </nav>


    <div class="header-actions">

        <a href="login_page.php">
            Sign In
        </a>

        <a
            href="signup_page.php"
            class="join-button"
        >
            Join Us
        </a>

    </div>

</header>



<!-- =========================
     HERO SLIDESHOW
========================= -->

<section class="hero">


    <!-- SLIDE 1 -->

    <div class="slide active">

        <img
            src="slide1.jpg"
            alt="Wrong Collection"
        >

        <div class="hero-content">

            <h1>
                MOVE<br>
                YOUR WAY.
            </h1>

            <p>
                Discover the latest Wrong collection
                designed for movement, comfort,
                and everyday performance.
            </p>

            <a
                href="#shop"
                class="shop-button"
            >
                SHOP WITH US NOW
            </a>

        </div>

    </div>


    <!-- SLIDE 2 -->

    <div class="slide">

        <img
            src="slide2.jpg"
            alt="Wrong Sports Collection"
        >

        <div class="hero-content">

            <h1>
                BUILT<br>
                TO MOVE.
            </h1>

            <p>
                Performance-inspired styles
                made for wherever your day takes you.
            </p>

            <a
                href="#shop"
                class="shop-button"
            >
                SHOP WITH US NOW
            </a>

        </div>

    </div>


    <!-- SLIDE 3 -->

    <div class="slide">

        <img
            src="slide3.jpg"
            alt="Wrong Running Collection"
        >

        <div class="hero-content">

            <h1>
                RUN<br>
                YOUR WAY.
            </h1>

            <p>
                Find your pace with Wrong running
                essentials designed for every stride.
            </p>

            <a
                href="#shop"
                class="shop-button"
            >
                SHOP WITH US NOW
            </a>

        </div>

    </div>


    <!-- SLIDE 4 -->

    <div class="slide">

        <img
            src="slide4.jpg"
            alt="Wrong Lifestyle Collection"
        >

        <div class="hero-content">

            <h1>
                EVERYDAY<br>
                ENERGY.
            </h1>

            <p>
                Everyday essentials with a
                performance-driven attitude.
            </p>

            <a
                href="#shop"
                class="shop-button"
            >
                SHOP WITH US NOW
            </a>

        </div>

    </div>


    <!-- SLIDE 5 -->

    <div class="slide">

        <img
            src="slide5.jpg"
            alt="Wrong New Collection"
        >

        <div class="hero-content">

            <h1>
                DO IT<br>
                WRONG.
            </h1>

            <p>
                Don't follow the ordinary.
                Create your own way forward.
            </p>

            <a
                href="#shop"
                class="shop-button"
            >
                SHOP WITH US NOW
            </a>

        </div>

    </div>


    <!-- PREVIOUS -->

    <button
        class="slider-button previous"
        onclick="changeSlide(-1)"
        aria-label="Previous slide"
    >
        &#10094;
    </button>


    <!-- NEXT -->

    <button
        class="slider-button next"
        onclick="changeSlide(1)"
        aria-label="Next slide"
    >
        &#10095;
    </button>


    <!-- DOTS -->

    <div class="slider-dots">

        <button
            class="dot active"
            onclick="currentSlide(0)"
        ></button>

        <button
            class="dot"
            onclick="currentSlide(1)"
        ></button>

        <button
            class="dot"
            onclick="currentSlide(2)"
        ></button>

        <button
            class="dot"
            onclick="currentSlide(3)"
        ></button>

        <button
            class="dot"
            onclick="currentSlide(4)"
        ></button>

    </div>

</section>



<!-- =========================
     FEATURES
========================= -->

<section class="features" id="shop">

    <h2>
        WRONG, BUT RIGHT FOR YOU.
    </h2>

    <p>
        Explore our collection of footwear,
        apparel, and everyday essentials.
    </p>


    <div class="feature-grid">

        <div class="feature-card">

            <h3>
                Footwear
            </h3>

            <p>
                Discover styles designed
                to keep you moving.
            </p>

        </div>


        <div class="feature-card">

            <h3>
                Apparel
            </h3>

            <p>
                Comfortable performance
                clothing for every day.
            </p>

        </div>


        <div class="feature-card">

            <h3>
                Accessories
            </h3>

            <p>
                Complete your look with
                Wrong essentials.
            </p>

        </div>

    </div>

</section>



<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>
        &copy; 2026 Wrong, Inc. All Rights Reserved
    </p>

    <div>

        <a href="#">
            Privacy
        </a>

        <a href="#">
            Terms
        </a>

        <a href="#">
            Contact
        </a>

    </div>

</footer>



<!-- =========================
     SLIDESHOW JAVASCRIPT
========================= -->

<script>

    let slideIndex = 0;

    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");


    function showSlide(index) {

        if (index >= slides.length) {
            slideIndex = 0;
        }

        if (index < 0) {
            slideIndex = slides.length - 1;
        }


        slides.forEach((slide) => {

            slide.classList.remove("active");

        });


        dots.forEach((dot) => {

            dot.classList.remove("active");

        });


        slides[slideIndex].classList.add("active");

        dots[slideIndex].classList.add("active");

    }


    function changeSlide(direction) {

        slideIndex += direction;

        showSlide(slideIndex);

    }


    function currentSlide(index) {

        slideIndex = index;

        showSlide(slideIndex);

    }


    /* Automatic slideshow */

    setInterval(() => {

        slideIndex++;

        showSlide(slideIndex);

    }, 5000);

</script>


</body>

</html>