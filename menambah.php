<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $no_mhs  = $_POST['no_mhs'];
    $nama    = $_POST['nama_mhs'];
    $email   = $_POST['email'];
    $jurusan = $_POST['jurusan'];

    // cek upload foto
    if ($_FILES['foto']['name'] != "") {
        $foto = "img/" . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
    } else {
        $foto = ""; // kalau kosong
    }

    // query insert
    $sql = "INSERT INTO data_mahasiswa (no_mhs, nama_mhs, email, jurusan, foto) 
            VALUES ('$no_mhs', '$nama', '$email', '$jurusan', '$foto')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href='menampilkan.php';
              </script>";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!-- Form tambah data -->
<h2>Tambah Data Mahasiswa</h2>
<form method="post" enctype="multipart/form-data">
    <label>No. Mhs:</label><br>
    <input type="text" name="no_mhs" required><br><br>

    <label>Nama:</label><br>
    <input type="text" name="nama_mhs" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" required><br><br>

    <label>Foto:</label><br>
    <input type="file" name="foto"><br><br>

    <input type="submit" name="submit" value="Tambah">
</form>

