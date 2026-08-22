<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us - Wrong PH</title>

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

        /* Signup Container */
        .signup-container {
            width: 100%;
            max-width: 460px;
            margin: 45px auto;
            padding: 0 25px;
        }

        .signup-container h1 {
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

        input,
        select {
            width: 100%;
            height: 48px;
            padding: 0 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
        }

        input:focus,
        select:focus {
            border-color: #111;
        }

        .name-row {
            display: flex;
            gap: 12px;
        }

        .name-row .form-group {
            width: 50%;
        }

        /* Checkbox */
        .checkbox-container {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 20px 0;
            font-size: 13px;
            line-height: 1.5;
            color: #555;
        }

        .checkbox-container input {
            width: 18px;
            height: 18px;
            margin-top: 2px;
        }

        .checkbox-container label {
            font-weight: normal;
            margin: 0;
        }

        .checkbox-container a {
            color: #111;
            font-weight: bold;
        }

        /* Button */
        .join-button {
            width: 100%;
            height: 50px;
            background: #111;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .join-button:hover {
            background: #333;
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

            .signup-container {
                margin-top: 30px;
            }

            .name-row {
                flex-direction: column;
                gap: 0;
            }

            .name-row .form-group {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <!-- Header -->
    <header class="header">

        <a href="signup_page.html">
            <img src="Nike Logo.png" alt="Nike Logo" class="logo">
        </a>

        <div class="header-right">
            Already a member?
            <a href="login_page.html">Sign In</a>
        </div>

    </header>


    <!-- Sign Up Form -->
    <main class="signup-container">

        <h1>Join Us</h1>

        <p class="subtitle">
            Create your Wrong Member account and unlock<br>
            access to Wrong products and experiences.
        </p>


        <form action="#" method="POST">

            <!-- Name -->
            <div class="name-row">

                <div class="form-group">
                    <label for="firstName">First Name</label>

                    <input
                        type="text"
                        id="firstName"
                        placeholder="First Name"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="lastName">Last Name</label>

                    <input
                        type="text"
                        id="lastName"
                        placeholder="Last Name"
                        required
                    >
                </div>

            </div>


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


            <!-- Date of Birth -->
            <div class="form-group">

                <label for="birthday">
                    Date of Birth
                </label>

                <input
                    type="date"
                    id="birthday"
                    required
                >

            </div>


            <!-- Country -->
            <div class="form-group">

                <label for="country">
                    Country / Region
                </label>

                <select id="country">

                    <option value="PH">
                        Philippines
                    </option>

                    <option value="US">
                        United States
                    </option>

                    <option value="JP">
                        Japan
                    </option>

                    <option value="SG">
                        Singapore
                    </option>

                    <option value="ID">
                        Indonesia
                    </option>

                </select>

            </div>


            <!-- Agreement -->
            <div class="checkbox-container">

                <input
                    type="checkbox"
                    id="agreement"
                    required
                >

                <label for="agreement">

                    I agree to the
                    <a href="#">Terms of Use</a>
                    and
                    <a href="#">Privacy Policy</a>.

                </label>

            </div>


            <!-- Submit Button -->
            <button
                type="submit"
                class="join-button"
            >
                Join Us
            </button>

        </form>

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