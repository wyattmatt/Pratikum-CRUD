<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_mhs = $_POST['no_mhs'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];

    $foto = $_FILES['gambar']['name'];
    $temp = $_FILES['gambar']['tmp_name'];

    $folder = "img/";

    if (move_uploaded_file($temp, $folder . $foto)) {
        $sql = "INSERT INTO mahasiswa (nama, no_mhs, jurusan, email, gambar) VALUES ('$nama', '$no_mhs', '$jurusan', '$email', '$foto')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data berhasil ditambahkan!');window.location.href='index.php';</script>";
            header("refresh:2;url=index.php");
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    } else {
        echo "<script>alert('Gagal upload gambar!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h2>Tambah Mahasiswa</h2>

    <button onclick="window.location.href = 'index.php';">Kembali</button><br><br>

    <form action="tambah.php" method="POST" enctype="multipart/form-data">
        Nama: <input type="text" name="nama" required><br><br>
        NIM: <input type="text" name="no_mhs" required><br><br>
        Jurusan: <input type="text" name="jurusan" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Foto: <input type="file" name="gambar" required><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>

</html>