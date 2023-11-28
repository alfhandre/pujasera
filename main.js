// main.js

// Fungsi untuk menampilkan struk pada halaman lihat_struk.html
function tampilkanStruk(struk) {
  const hasilStrukDiv = document.getElementById("hasil_struk");
  hasilStrukDiv.innerHTML = `<pre>${struk}</pre>`;
}

// Fungsi untuk menambahkan baris ke dalam tabel transaksi pada halaman tambah_transaksi.html
function tambahkanBarisTabel() {
  const tabel = document.querySelector("table tbody");
  const baris = tabel.insertRow();
  const kolom1 = baris.insertCell(0);
  const kolom2 = baris.insertCell(1);

  kolom1.innerHTML = `<input type="text" name="kode_barang[]" required>`;
  kolom2.innerHTML = `<input type="number" name="jumlah_barang[]" required>`;
}

// Event listener untuk tombol tambah baris pada halaman tambah_transaksi.html
document
  .getElementById("tambah_baris")
  .addEventListener("click", tambahkanBarisTabel);

// Event listener untuk formulir pencarian struk pada halaman lihat_struk.html
document.querySelector("form").addEventListener("submit", function (event) {
  event.preventDefault();

  const kodeNota = document.getElementById("kode_nota").value;

  // Simulasikan pemanggilan API atau AJAX untuk mendapatkan struk dari server
  const strukSimulasi = `Nota: ${kodeNota}\nTanggal: 2023-12-01\nBarang: Produk A x 2\nTotal: Rp. 200,000\n`;

  tampilkanStruk(strukSimulasi);
});
