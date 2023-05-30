<?php

require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Account.php");
require_once("includes/classes/Constants.php");

$account = new Account($con);

if (isset($_POST["submitButton"])) {

    $userName = FormSanitizer::sanitizeFormUsername($_POST["userName"]);
    $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);

    $success = $account->login($userName, $password);

    if ($success) {
        $_SESSION["userLoggedIn"] = $userName;

        header("Location: index.php");
    } else {
        echo '<script>alert("Failed")</script>';
    }
}


function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>welcome in Padeso cafee</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <div class="signIn">
        <div class="column">
            <div class="header">
                <img src="assets/img/tea-cup.gif" alt="Site logo" title="Logo">
                <h3>Sign In</h3>
                <span>to continue to Padeso</span>

            </div>

            <form action="" method="POST">
                <?php echo $account->getError(Constants::$loginFailed); ?>
                <input type="text" name="userName" placeholder="UserName" value="<?php getInputValue("userName") ?>" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="submit" name="submitButton" value="SUBMIT">
            </form>

            <a href="register.php" class="signInMessage">Need an Account ? Sign Up here!</a>

        </div>
    </div>

</body>

</html>