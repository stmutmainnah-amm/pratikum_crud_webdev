<?php 
class Mahasiswa {
    public $id, $no_mhs, $nama, $jurusan, $email, $foto;

    // Konstruktor
    public function __construct($id, $no_mhs, $nama, $jurusan, $email, $foto)
    {
        $this->id      = $id;
        $this->no_mhs  = $no_mhs;
        $this->nama    = $nama;
        $this->jurusan = $jurusan;
        $this->email   = $email;
        $this->foto    = $foto;
    }

    public function showdata()
    {
        echo "ID: " . $this->id . "<br>";
        echo "No Mhs: " . $this->no_mhs . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Foto: <img src='" . $this->foto . "' alt='img' width='100'><br>";
    }
}

// class turunan mahasiswa khusus yang dapat beasiswa
class MahasiswaBeasiswa extends Mahasiswa {
    public $ipk, $jenisBeasiswa;

    public function __construct($id, $no_mhs, $nama, $jurusan, $email, $foto, $ipk, $jenisBeasiswa) {
        parent::__construct($id, $no_mhs, $nama, $jurusan, $email, $foto);
        $this->ipk = $ipk;
        $this->jenisBeasiswa = $jenisBeasiswa;
    }

    // override showdata
    public function showdata() {
        parent::showdata();
        echo "IPK: " . $this->ipk . "<br>";
        echo "Beasiswa: " . $this->jenisBeasiswa . "<br><br>";
    }
}

class Kelas {
    public Mahasiswa $mahasiswa;
    public $ruangKelas;

    // Konstruktor
    public function __construct($ruangKelas, Mahasiswa $mahasiswa) {
        $this->ruangKelas = $ruangKelas;
        $this->mahasiswa = $mahasiswa;
    }

    public function tampilkanKelas() {
        echo "Ruang Kelas: " . $this->ruangKelas . "<br>";
        echo "Mahasiswa:<br>";
        $this->mahasiswa->showdata();
        echo "<hr>";
    }
}

// objek dari class Mahasiswa biasa
$mhs1 = new Mahasiswa(1, "22001", "Siti Mutmainnah", "Informatika", "stmutmainnah@gmail.com", "M.jpg");

// objek dari class MahasiswaBeasiswa
$mhs2 = new MahasiswaBeasiswa(2, "22021", "Rachel", "Manajemen", "rachel@gmail.com", "Y.jpg", 3.9, "Beasiswa Unggulan");

$kelas1 = new Kelas("Ruang 101", $mhs1);
$kelas2 = new Kelas("Ruang 102", $mhs2);

// tampilkan data
$kelas1->tampilkanKelas();
$kelas2->tampilkanKelas();
?>
