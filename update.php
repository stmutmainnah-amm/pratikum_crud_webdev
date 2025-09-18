<?php
include "koneksi.php";

// --- Ambil ID dari URL ---
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// --- Ambil data mahasiswa sesuai ID ---
$query = "SELECT * FROM data_mahasiswa WHERE id_mhs = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

// kalau data tidak ada, redirect ke index
if (!$data) {
    echo "<script>alert('Data tidak ditemukan'); window.location='menampilkan.php';</script>";
    exit;
}

// --- Proses update data ---
if (isset($_POST['update'])) {
    $no_mhs  = $_POST['no_mhs'];
    $nama    = $_POST['nama_mhs'];
    $email   = $_POST['email'];
    $jurusan = $_POST['jurusan'];

    // cek upload foto baru
    if (!empty($_FILES['foto']['name'])) {
        $foto = basename($_FILES['foto']['name']);
        $tmp  = $_FILES['foto']['tmp_name'];
        move_uploaded_file($tmp, "img/" . $foto);
    } else {
        $foto = $data['foto']; // pakai foto lama
    }

    // query update
    $update = "UPDATE data_mahasiswa SET 
                no_mhs='$no_mhs', 
                nama_mhs='$nama', 
                email='$email', 
                jurusan='$jurusan', 
                foto='$foto'
                WHERE id_mhs=$id";

    if (mysqli_query($conn, $update)) {
        echo "<script>alert('Data berhasil diperbarui'); window.location='menampilkan.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!-- Form Update -->
<h2>Update Data Mahasiswa</h2>
<form method="POST" enctype="multipart/form-data">
    No Mahasiswa: <br>
    <input type="text" name="no_mhs" value="<?= $data['no_mhs'] ?>"><br><br>

    Nama: <br>
    <input type="text" name="nama_mhs" value="<?= $data['nama_mhs'] ?>"><br><br>

    Email: <br>
    <input type="email" name="email" value="<?= $data['email'] ?>"><br><br>

    Jurusan: <br>
    <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br><br>

    Foto: <br>
    <input type="file" name="foto"><br>
    <img src="img/<?= $data['foto'] ?>" width="100"><br><br>

    <button type="submit" name="update">Simpan Perubahan</button>
</form>
