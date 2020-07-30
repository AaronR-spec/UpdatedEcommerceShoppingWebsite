<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Example</title>  
<link href="login_and_registration.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="dkit_container">
    <?php
    include_once 'header.php';
    set_header("DkIT", "User Login", false);
    ?>

<main>
    <?php
    /* Show error message for any user input errors if this form was previously submitted */
    if (isset($_SESSION["error_message"]))
    {
        echo "<div class='error_message'><p>" . $_SESSION["error_message"] . "<br>Please input data again.</p></div>";
        unset($_SESSION["error_message"]);
    }
    ?>

<form action="login_transaction.php" method="post">
<label for="email">Email: </label>
<input type="email" id = "email" name = "email" placeholder = "Enter your email" required autofocus><br>

<label for="password">Password: </label>
<input type="password" id = "password" name = "password" placeholder = "Enter your password" required><br>

<input type="submit" value="Login"><br>
</form>

<br><a href="forgot_password.php">Forgot password</a>
<br><a href="register_new_user.php">Register as a new user</a>
</main>

<?php
include_once 'footer.php';
?>
</div> <!-- dkit_container -->
</body>
</html>