<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <blockquote>
        <a href="index.php"><img src="assets/images/icon.png"></a>
        <?php if (isset($_SESSION['id'])): ?>
        <form class="hf" action="logout.php"><input class="hi" type="submit" name="submitButton" value="Logout"></form>
        <form class="hf" action="edituser.php"><input class="hi" type="submit" name="submitButton" value="Edit Profile"></form>
        <?php else: ?>
        <form class="hf" action="Register.php"><input class="hi" type="submit" name="submitButton" value="Register"></form>
        <form class="hf" action="login.php"><input class="hi" type="submit" name="submitButton" value="Login"></form>
        <?php endif; ?>
    </blockquote>
</header>