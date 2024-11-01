<?php
// Array biasa untuk menyimpan data setiap kolom
$ID = [1, 2, 3, 4, 5, 6, 7];
$Nama = ["Minyak Telon", "Diapers", "Baby Oil", "Shampo Baby", "Bedak", "Baju Bayi", "Jumper"];
$Stok = [20, 25, 15, 20, 15, 20, 25];
$Harga = [31790, 51880, 15780, 20670, 16980, 35500, 52999];
$Jumlah = [];
$total = 0;

// Menghitung jumlah untuk setiap produk dan total keseluruhan
for ($i = 0; $i < count($ID); $i++) {
    $Jumlah[$i] = $Stok[$i] * $Harga[$i];
    $total += $Jumlah[$i];
}

// Tampilkan tabel
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
for ($i = 0; $i < count($ID); $i++) {
    echo "<tr>";
    echo "<td>{$ID[$i]}</td>";
    echo "<td>{$Nama[$i]}</td>";
    echo "<td>{$Stok[$i]}</td>";
    echo "<td>Rp " . number_format($Harga[$i], 0, ',', '.') . "</td>";
    echo "<td>Rp " . number_format($Jumlah[$i], 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "<tr><td colspan='4'><b>Total</b></td><td><b>Rp " . number_format($total, 0, ',', '.') . "</b></td></tr>";
echo "</table>";
?>
