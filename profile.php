<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - Wrong PH</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f7f7f7;
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

            background: #fff;

            border-bottom: 1px solid #eee;

            position: sticky;
            top: 0;

            z-index: 100;
        }


        .brand {
            display: flex;
            align-items: center;

            text-decoration: none;
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
            color: #111;

            text-decoration: none;

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
            color: #111;

            text-decoration: none;

            font-size: 14px;
            font-weight: bold;
        }


        .profile-button {
            background: #111;

            color: #fff !important;

            padding: 11px 20px;

            border-radius: 25px;
        }


        .profile-button:hover {
            background: #333;
        }


        /* =========================
           PAGE
        ========================= */

        .profile-page {
            max-width: 1200px;

            margin: 0 auto;

            padding: 60px 30px 80px;
        }


        /* =========================
           PROFILE HEADER
        ========================= */

        .profile-header {
            background: #fff;

            padding: 45px;

            border-radius: 12px;

            display: flex;
            align-items: center;

            gap: 30px;

            margin-bottom: 30px;

            border: 1px solid #eee;
        }


        .profile-picture {
            width: 120px;
            height: 120px;

            border-radius: 50%;

            background: #111;

            color: #fff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 42px;
            font-weight: 900;

            flex-shrink: 0;
        }


        .profile-info {
            flex: 1;
        }


        .profile-info h1 {
            font-size: 34px;

            margin-bottom: 8px;

            font-weight: 900;
        }


        .profile-info p {
            color: #666;

            font-size: 14px;

            margin-bottom: 6px;
        }


        .member-since {
            color: #999 !important;

            font-size: 12px !important;

            margin-top: 12px;
        }


        .edit-profile {
            display: inline-block;

            padding: 13px 24px;

            background: #111;

            color: #fff;

            text-decoration: none;

            border-radius: 25px;

            font-size: 13px;

            font-weight: bold;

            transition: 0.2s;
        }


        .edit-profile:hover {
            background: #333;

            transform: translateY(-2px);
        }


        /* =========================
           CONTENT GRID
        ========================= */

        .profile-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 30px;
        }


        .profile-card {
            background: #fff;

            border: 1px solid #eee;

            border-radius: 12px;

            padding: 35px;
        }


        .profile-card h2 {
            font-size: 20px;

            margin-bottom: 25px;

            font-weight: 900;
        }


        /* =========================
           PERSONAL INFORMATION
        ========================= */

        .information-row {
            display: flex;

            justify-content: space-between;

            gap: 20px;

            padding: 16px 0;

            border-bottom: 1px solid #eee;
        }


        .information-row:last-child {
            border-bottom: none;
        }


        .information-label {
            color: #777;

            font-size: 13px;
        }


        .information-value {
            font-size: 14px;

            font-weight: bold;

            text-align: right;
        }


        /* =========================
           ORDER CARD
        ========================= */

        .order {
            padding: 18px 0;

            border-bottom: 1px solid #eee;
        }


        .order:last-child {
            border-bottom: none;
        }


        .order-top {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 8px;
        }


        .order-number {
            font-size: 14px;

            font-weight: bold;
        }


        .order-status {
            font-size: 11px;

            font-weight: bold;

            background: #e8f5e9;

            color: #2e7d32;

            padding: 6px 10px;

            border-radius: 20px;
        }


        .order p {
            color: #777;

            font-size: 13px;

            line-height: 1.5;
        }


        /* =========================
           QUICK LINKS
        ========================= */

        .quick-links {
            margin-top: 30px;
        }


        .quick-link {
            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 18px 0;

            border-bottom: 1px solid #eee;

            color: #111;

            text-decoration: none;

            font-size: 14px;

            font-weight: bold;
        }


        .quick-link:last-child {
            border-bottom: none;
        }


        .quick-link span:last-child {
            font-size: 20px;
        }


        .quick-link:hover {
            padding-left: 5px;
        }


        /* =========================
           LOGOUT
        ========================= */

        .logout-section {
            margin-top: 30px;

            text-align: center;
        }


        .logout-button {
            display: inline-block;

            padding: 14px 30px;

            border: 1px solid #111;

            border-radius: 25px;

            color: #111;

            text-decoration: none;

            font-size: 13px;

            font-weight: bold;

            transition: 0.2s;
        }


        .logout-button:hover {
            background: #111;

            color: #fff;
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


        footer a:hover {
            text-decoration: underline;
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


            .profile-page {
                padding: 40px 20px 60px;
            }


            .profile-grid {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 600px) {

            header {
                height: 70px;
            }


            .brand-logo {
                width: 85px;
            }


            .header-actions a:not(.profile-button) {
                display: none;
            }


            .profile-header {
                padding: 30px 20px;

                flex-direction: column;

                text-align: center;
            }


            .profile-picture {
                width: 100px;
                height: 100px;

                font-size: 36px;
            }


            .profile-info h1 {
                font-size: 28px;
            }


            .profile-card {
                padding: 25px 20px;
            }


            .information-row {
                flex-direction: column;

                gap: 5px;
            }


            .information-value {
                text-align: left;
            }


            .order-top {
                align-items: flex-start;

                gap: 10px;
            }


            footer {
                padding: 25px;

                flex-direction: column;

                gap: 15px;

                text-align: center;
            }


            footer a {
                margin: 0 8px;
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

        <a href="index.php">
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

        <a href="index.php">
            Home
        </a>

        <a
            href="profile.php"
            class="profile-button"
        >
            Profile
        </a>

    </div>

</header>



<!-- =========================
     PROFILE PAGE
========================= -->

<main class="profile-page">


    <!-- PROFILE HEADER -->

    <section class="profile-header">


        <div class="profile-picture">
            JD
        </div>


        <div class="profile-info">

            <h1>
                John Doe
            </h1>

            <p>
                john.doe@email.com
            </p>

            <p>
                Philippines
            </p>

            <p class="member-since">
                Wrong Member since 2026
            </p>

        </div>


        <a
            href="edit_profile.php"
            class="edit-profile"
        >
            EDIT PROFILE
        </a>

    </section>



    <!-- PROFILE CONTENT -->

    <section class="profile-grid">


        <!-- PERSONAL INFORMATION -->

        <div class="profile-card">

            <h2>
                Personal Information
            </h2>


            <div class="information-row">

                <span class="information-label">
                    Full Name
                </span>

                <span class="information-value">
                    John Doe
                </span>

            </div>


            <div class="information-row">

                <span class="information-label">
                    Email
                </span>

                <span class="information-value">
                    john.doe@email.com
                </span>

            </div>


            <div class="information-row">

                <span class="information-label">
                    Phone
                </span>

                <span class="information-value">
                    +63 912 345 6789
                </span>

            </div>


            <div class="information-row">

                <span class="information-label">
                    Location
                </span>

                <span class="information-value">
                    Philippines
                </span>

            </div>


            <div class="information-row">

                <span class="information-label">
                    Member Since
                </span>

                <span class="information-value">
                    August 2026
                </span>

            </div>

        </div>



        <!-- RECENT ORDERS -->

        <div class="profile-card">

            <h2>
                Recent Orders
            </h2>


            <div class="order">

                <div class="order-top">

                    <span class="order-number">
                        Order #WRG-00125
                    </span>

                    <span class="order-status">
                        DELIVERED
                    </span>

                </div>

                <p>
                    Wrong Air Runner &nbsp;·&nbsp;
                    ₱4,995
                </p>

                <p>
                    August 18, 2026
                </p>

            </div>


            <div class="order">

                <div class="order-top">

                    <span class="order-number">
                        Order #WRG-00118
                    </span>

                    <span class="order-status">
                        DELIVERED
                    </span>

                </div>

                <p>
                    Wrong Essential Hoodie &nbsp;·&nbsp;
                    ₱2,495
                </p>

                <p>
                    August 10, 2026
                </p>

            </div>


            <div class="order">

                <div class="order-top">

                    <span class="order-number">
                        Order #WRG-00104
                    </span>

                    <span class="order-status">
                        DELIVERED
                    </span>

                </div>

                <p>
                    Wrong Everyday Shorts &nbsp;·&nbsp;
                    ₱1,795
                </p>

                <p>
                    August 2, 2026
                </p>

            </div>


            <div class="quick-links">

                <a href="#" class="quick-link">

                    <span>
                        View All Orders
                    </span>

                    <span>
                        →
                    </span>

                </a>


                <a href="#" class="quick-link">

                    <span>
                        Address Book
                    </span>

                    <span>
                        →
                    </span>

                </a>


                <a href="#" class="quick-link">

                    <span>
                        Payment Methods
                    </span>

                    <span>
                        →
                    </span>

                </a>

            </div>

        </div>

    </section>



    <!-- LOGOUT -->

    <div class="logout-section">

        <a
            href="logout.php"
            class="logout-button"
        >
            LOG OUT
        </a>

    </div>

</main>



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


</body>

</html>
