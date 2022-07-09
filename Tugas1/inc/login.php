<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "<h3 style=color:black>Username atau Password anda tidak sesuai !<h3>";
    }
}
?>

<body>
    <form action="cek_login.php" method="post">
    <div><label>Username:</label>
        <input type=" text" name="username" required></div>
    <div><label>Password:</label>
        <input type="password" name="password" required></div>
    <div><input type="submit" value="Login" class="tombol"></div>
        
    </form>
</body>

</html>