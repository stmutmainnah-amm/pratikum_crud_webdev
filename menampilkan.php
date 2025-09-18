<?php
include "koneksi.php";

$sql = "SELECT * FROM data_mahasiswa";
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

    <?php if (count($mahasiswa) > 0): ?>
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Mhs</th>
                    <th>No Mhs</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Foto</th>
                    <th>Aksi</th> <!-- Tambahan kolom -->
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $row): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['id_mhs']; ?></td>
                        <td><?php echo $row['no_mhs']; ?></td>
                        <td><?php echo $row['nama_mhs']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['jurusan']; ?></td>
                        <td><img src="<?php echo $row['foto']; ?>" width="50"></td>
                        <td>
                            <!-- Tombol Update & Delete -->
                            <a href="update.php?id=<?php echo $row['id_mhs']; ?>">Update</a> | 
                            <a href="delete.php?id=<?php echo $row['id_mhs']; ?>" onclick="return confirm('Yakin mau hapus data ini?');">Delete</a>
                        </td>
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
