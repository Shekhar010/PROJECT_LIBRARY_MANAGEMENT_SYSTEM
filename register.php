    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="register.css">
        <title>Register now</title>
    </head>

    <body>
        <!-- header -->
        <header>
            <nav class="navbar">
                <ul>
                    <li>
                        <p><i>E-Library</i></p>
                    </li>
                    <li></i><a href="HOME.php">HOME</a></li>
                    <li><a href="INDEX.php">LOGIN</a></li>
                </ul>
            </nav>
        </header>

        <!-- main -->
        <main>
            <div class="pannel">
                <h1>Registration</h1>
                <hr>
                <form class="register" action="connect.php  " method="post" enctype="multipart/form-data">
                    <!-- class for basic detail -->
                    <br>
                    <label for="firstname">First Name :</label>

                    <input type="text" name="first_name" placeholder="First name">
                    <label for="lastname">Last Name :</label>
                    <input type="text" name="last_name" placeholder="Last name">
                    <br><br>
                    <label for="dob">Date of Birth :</label>
                    <input type="text" name="date_of_birth" placeholder="Birth date">
                    <br><br>

                    <label for="gender">Gender :</label>
                    <br>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" id="male" name="male">
                    &nbsp;
                    <span for="male">Male</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="female" name="female">
                    &nbsp;
                    <span for="female">Female</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="other" name="other">
                    &nbsp;
                    <span for="other">Other</span>
                    <br><br>

                    <!-- class for contact details -->

                    <label for="Mobile">Mobile no. :</label>
                    <input type="text" name="mobile_number" placeholder="Mobile no.">
                    <label for="e-mail">E-mail :</label>
                    <input type="text" name="E-mail" placeholder="E-mail">

                    <!-- class for username and password -->
                    <br><br>
                    <label for="username">Username :</label>
                    <input type="text" name="username" placeholder="Username">
                    <br><br>
                    <label for="password">password :</label>
                    <input type="password" name="password" placeholder="Password">
                    <label for="confirm">Confirm :</label>
                    <input type="password" name="confirm_password" placeholder="Confirm">
                    <br><br>

                    <!-- image upload -->
                    <input type="file" name="image">
                    <br><br>

                    <!-- agree T&M submit-->
                    <input type="checkbox" name="checkbox1">confirm to sign up<br>
                    <input type="checkbox" name="checkbox2">agree to all terms & conditions<br><br>
                    <input type="submit" name="submit">

                </form>
            </div>

        </main>

        <!-- footer-->
        <footer>

        </footer>
    </body>

    </html>

    