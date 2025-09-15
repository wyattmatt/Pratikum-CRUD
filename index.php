<?php
include 'connection.php';

$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);

$mahasiswa = [];
if ($result) {
    $mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <button onclick="window.location.href = 'tambah.php';">Tambah Mahasiswa</button><br><br>

    <?php if (count($mahasiswa) > 0): ?>
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $row): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['no_mhs']; ?></td>
                        <td><?php echo $row['jurusan']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td> <img src="img/<?php echo $row['gambar']; ?>" width="50" height="50"></td>
                        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="hapus.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Tidak ada data mahasiswa.</p>
    <?php endif; ?>
</body>

</html>