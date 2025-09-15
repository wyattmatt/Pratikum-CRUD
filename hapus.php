<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil dihapus!');window.location.href='index.php';</script>";
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
    <title>Delete Mahasiswa</title>
</head>

<body>
    <h2>Delete Mahasiswa</h2>

    <button onclick="window.location.href = 'index.php';">Kembali</button><br><br>

    <form action="" method="POST">
        Nama: <?php echo $row['nama']; ?><br><br>
        NIM: <?php echo $row['no_mhs']; ?><br><br>
        Jurusan: <?php echo $row['jurusan']; ?><br><br>
        Email: <?php echo $row['email']; ?><br><br>
        Foto: <img src="img/<?php echo $row['gambar']; ?>" width="50" height="50"><br><br>
        <button type="submit" name="submit">Hapus</button>
    </form>
</body>

</html>