<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] === "admin" && $_POST["password"] === "admin123") {
        header("Location: login-2.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login Admin</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label> :
                <input type="username" id="username">
            </li>
            <li>
                <label for="password">Password</label> :
                <input type="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>