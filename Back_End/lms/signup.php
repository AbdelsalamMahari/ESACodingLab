<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/Logo1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css"/>
    <title>Sign up</title>
</head>
<body>

<?php
include 'header.php';
?>

    <div class="container-su">
        <div class="part1-su">
            <div class="inputs-signup">
                <h1>Sign up</h1>
                <form action="signup_action.php" method="POST">
                    <input type="text" name="firstname" required placeholder="Firstname" class="case"><br><br>
                    <input type="text" name="lastname" required placeholder="Lastname"class="case"><br><br>
                    <input type="date" name="date" required placeholder="Date of birth"class="case"><br><br>
                    <input type="email" name="email" required placeholder="Email"class="case"><br><br>
                    <input type="password" name="password" required placeholder="Password"class="case"><br><br>
                    <input type="password" name="confirmpassword" required placeholder="Confirm Password"class="case"><br><br>
                    <div class="button-su">
                    <button type="submit" class="submit-su">Create Account</button>
                </div>
                </form>
            </div>
        </div>
        <div class="part2-su">
            <img  src="images/signup.webp">
        </div>

    </div>

    <?php
include 'footer.php';
?>

</body>

</html>