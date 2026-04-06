<?php
require_once "config.php";
//proteksi belum login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Protected</title>
</head>

<body>
    <h1>Halaman Protected</h1>
    <a href="index.php">Index</a>
    <a href="protected.php">Protected</a>
    <a href="logout.php">Logout</a>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus iusto optio, quibusdam at obcaecati dolor in
        voluptatibus quas eius provident perferendis deserunt dolorem. Quos doloremque officia nam aliquam vero culpa
        aspernatur fugiat deleniti asperiores velit ipsam hic adipisci placeat, sunt temporibus debitis voluptates optio
        provident porro molestias eaque ad. Recusandae quisquam vitae hic excepturi praesentium sit necessitatibus
        deserunt! Dolores ipsam dolor assumenda reiciendis nisi nesciunt aspernatur labore minus vitae similique. Ab,
        placeat facere nobis officiis nisi sunt, ducimus et eveniet possimus voluptate odit eos dolorem tenetur expedita
        qui rem. Aut dolores consectetur maxime asperiores deleniti doloribus quidem. Necessitatibus, debitis quasi.</p>

</body>

</html>