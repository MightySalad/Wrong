<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Wrong PH</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            background: #fff;
            color: #111;
        }

        .page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header */
        .header {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px;
            border-bottom: 1px solid #eee;
        }

        .logo {
            width: 90px;
            height: auto;
        }

        .header-right {
            font-size: 14px;
        }

        .header-right a {
            color: #111;
            text-decoration: none;
            font-weight: bold;
        }

        .header-right a:hover {
            text-decoration: underline;
        }

        /* Login Container */
        .login-container {
            width: 100%;
            max-width: 460px;
            margin: 70px auto;
            padding: 0 25px;
        }

        .login-container h1 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .subtitle {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-bottom: 30px;
        }

        /* Form */
        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        input {
            width: 100%;
            height: 48px;
            padding: 0 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #111;
        }

        /* Forgot Password */
        .forgot-password {
            text-align: right;
            margin-top: -5px;
            margin-bottom: 25px;
        }

        .forgot-password a {
            color: #111;
            font-size: 13px;
            font-weight: bold;
        }

        /* Login Button */
        .login-button {
            width: 100%;
            height: 50px;
            background: #111;
            color: #fff;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .login-button:hover {
            background: #333;
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: #777;
            font-size: 12px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #ddd;
        }

        .divider span {
            padding: 0 15px;
        }

        /* Sign Up */
        .signup-text {
            text-align: center;
            font-size: 14px;
            color: #555;
        }

        .signup-text a {
            color: #111;
            font-weight: bold;
            text-decoration: underline;
        }

        /* Footer */
        footer {
            margin-top: auto;
            background: #111;
            color: #fff;
            text-align: center;
            padding: 25px;
            font-size: 12px;
        }

        @media (max-width: 600px) {
            .header {
                padding: 0 20px;
            }

            .login-container {
                margin-top: 40px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <!-- Header -->
    <header class="header">

        <!-- Logo -->
        <a href="login_page.php">
            <img
                src="Nike Logo.png"
                alt="Nike Logo"
                class="logo"
            >
        </a>

        <!-- Join Us -->
        <div class="header-right">
            Not a member?
            <a href="signup_page.php">
                Join Us
            </a>
        </div>

    </header>


    <!-- Login Form -->
    <main class="login-container">

        <h1>Welcome Back</h1>

        <p class="subtitle">
            Sign in to your Wrong Member account.
        </p>


        <form action="#" method="POST">

            <!-- Email -->
            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input
                    type="email"
                    id="email"
                    placeholder="Email Address"
                    required
                >

            </div>


            <!-- Password -->
            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    placeholder="Password"
                    required
                >

            </div>


            <!-- Forgot Password -->
            <div class="forgot-password">

                <a href="#">
                    Forgot Password?
                </a>

            </div>


            <!-- Login Button -->
            <button
                type="submit"
                class="login-button"
            >
                Sign In
            </button>

        </form>


        <!-- Divider -->
        <div class="divider">
            <span>OR</span>
        </div>


        <!-- Sign Up -->
        <div class="signup-text">

            Not a Wrong Member?

            <a href="signup_page.php">
                Join Us
            </a>

        </div>

    </main>


    <!-- Footer -->
    <footer>

        <p>
            &copy; 2026 Wrong, Inc. All Rights Reserved
        </p>

    </footer>

</div>

</body>
</html>