<?php
// Array multidimensi untuk menyimpan data produk
$produk = [
    ["ID" => 1, "Nama" => "Minyak Telon", "Stok" => 20, "Harga" => 31790],
    ["ID" => 2, "Nama" => "Diapers", "Stok" => 25, "Harga" => 51880],
    ["ID" => 3, "Nama" => "Baby Oil", "Stok" => 15, "Harga" => 15780],
    ["ID" => 4, "Nama" => "Shampo Baby", "Stok" => 20, "Harga" => 20670],
    ["ID" => 5, "Nama" => "Bedak", "Stok" => 15, "Harga" => 16980],
    ["ID" => 6, "Nama" => "Baju Bayi", "Stok" => 20, "Harga" => 35500],
    ["ID" => 7, "Nama" => "Jumper", "Stok" => 25, "Harga" => 52999]
];

// Menghitung jumlah untuk setiap produk dan total keseluruhan
$total = 0;
foreach ($produk as &$item) {
    $item["Jumlah"] = $item["Stok"] * $item["Harga"];
    $total += $item["Jumlah"];
}
unset($item); // Menghapus referensi untuk keamanan

// Tampilkan tabel
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
foreach ($produk as $item) {
    echo "<tr>";
    echo "<td>{$item['ID']}</td>";
    echo "<td>{$item['Nama']}</td>";
    echo "<td>{$item['Stok']}</td>";
    echo "<td>Rp " . number_format($item['Harga'], 0, ',', '.') . "</td>";
    echo "<td>Rp " . number_format($item['Jumlah'], 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "<tr><td colspan='4'><b>Total</b></td><td><b>Rp " . number_format($total, 0, ',', '.') . "</b></td></tr>";
echo "</table>";
?>
