<?php
require_once "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?= $_SESSION['error'] ?></p>
    <?php endif; ?>
    <form action="ceklogin.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Login</button>
    </form>
    <?php unset($_SESSION['error']); ?>

</body>

</html>