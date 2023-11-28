<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pujasera_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fungsi untuk menambah data barang
if (isset($_POST['tambah_barang'])) {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $satuan = $_POST['satuan'];
    $harga_satuan = $_POST['harga_satuan'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO barang (KodeBarang, NamaBarang, Satuan, HargaSatuan, Stok) 
            VALUES ('$kode_barang', '$nama_barang', '$satuan', '$harga_satuan', '$stok')";

    if ($conn->query($sql) === TRUE) {
        echo "Data barang berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fungsi untuk menambah data kasir
if (isset($_POST['tambah_kasir'])) {
    $kode_kasir = $_POST['kode_kasir'];
    $nama_kasir = $_POST['nama_kasir'];
    $nomor_hp_kasir = $_POST['nomor_hp'];

    $sql = "INSERT INTO kasir (KodeKasir, Nama, HP) 
            VALUES ('$kode_kasir', '$nama_kasir', '$nomor_hp_kasir')";

    if ($conn->query($sql) === TRUE) {
        echo "Data kasir berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fungsi untuk menambah data tenan
if (isset($_POST['tambah_tenan'])) {
    $kode_tenan = $_POST['kode_tenan'];
    $nama_tenan = $_POST['nama_tenan'];
    $nomor_hp_tenan = $_POST['nomor_hp'];

    $sql = "INSERT INTO tenan (KodeTenan, NamaTenan, HP) 
            VALUES ('$kode_tenan', '$nama_tenan', '$nomor_hp_tenan')";

    if ($conn->query($sql) === TRUE) {
        echo "Data tenan berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fungsi untuk menambah transaksi
if (isset($_POST['tambah_transaksi'])) {
    // Proses tambah transaksi
    // ...

    echo "Transaksi berhasil ditambahkan.";
}

// Fungsi untuk menampilkan struk berdasarkan nomor nota
if (isset($_POST['lihat_struk'])) {
    $kode_nota = $_POST['kode_nota'];

    // Proses query untuk mendapatkan struk dari database
    // ...

    // Simulasi hasil struk
    $hasil_struk = "Nota: $kode_nota\nTanggal: 2023-12-01\nBarang: Produk A x 2\nTotal: Rp. 200,000";

    echo $hasil_struk;
}

$conn->close();
?>