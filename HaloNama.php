php
<?php
// Memeriksa apakah parameter 'nama' ada di URL
if (isset($_GET['nama'])) {
    // Mengambil nilai parameter 'nama' dan mencegah XSS
    $nama = htmlspecialchars($_GET['nama']);
    // Menampilkan salam
    echo "Halo, $nama!";
} else {
    // Jika parameter 'nama' tidak ada
    echo "Silakan masukkan nama Anda di parameter URL.";
}
?>