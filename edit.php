<?php
include 'connection.php';

// Get the ID from URL
$id = $_GET['id'];

// Get current data
$sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_mhs = $_POST['no_mhs'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];

    if (!empty($_FILES['gambar']['name'])) {
        $foto = $_FILES['gambar']['name'];
        $temp = $_FILES['gambar']['tmp_name'];
        $folder = "img/";
        move_uploaded_file($temp, $folder . $foto);
        $sql = "UPDATE mahasiswa SET nama='$nama', no_mhs='$no_mhs', jurusan='$jurusan', email='$email', gambar='$foto' WHERE id='$id'";
    } else {
        $sql = "UPDATE mahasiswa SET nama='$nama', no_mhs='$no_mhs', jurusan='$jurusan', email='$email' WHERE id='$id'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil diubah!');window.location.href='index.php';</script>";
        header("refresh:2;url=index.php");
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <h2>Edit Mahasiswa</h2>

    <button onclick="window.location.href = 'index.php';">Kembali</button><br><br>

    <form action="" method="POST" enctype="multipart/form-data">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>
        NIM: <input type="text" name="no_mhs" value="<?php echo $row['no_mhs']; ?>" required><br><br>
        Jurusan: <input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        Foto Lama: <img src="img/<?php echo $row['gambar']; ?>" width="50" height="50"><br>
        Foto Baru (opsional): <input type="file" name="gambar"><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>

</html>