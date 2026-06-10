<?php
include "koneksi.php";

if(isset($_POST['register'])){

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $cek = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");

    if(mysqli_num_rows($cek) > 0){
        $error = "Username sudah dipakai!";
    } else {
        mysqli_query($conn,"INSERT INTO users(nama,username,password)
        VALUES('$nama','$username','$password')");

        header("Location: login.php");
    }
}
?>

<form method="POST">
    <h2>Register</h2>

    <input type="text" name="nama" placeholder="Nama"><br><br>
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>

    <button name="register">Daftar</button>

    <p style="color:red;">
        <?= $error ?? "" ?>
    </p>
</form>