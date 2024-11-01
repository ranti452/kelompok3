<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
    <style>
        .receipt-box {
            border: 2px solid #333;
            width: 300px;
            padding: 20px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        .receipt-box h2 {
            text-align: center;
            margin: 0;
        }
        .line {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
        }
        .total, .discount, .final-total {
            font-weight: bold;
        }
        .line-title {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
            border-top: 1px solid #333;
            padding-top: 5px;
        }
    </style>
</head>
<body>

<div class="receipt-box">
    <h2>Struk Pembelian</h2>
    <div class="line"><span>Tanggal Transaksi</span><span>: 1 november 2024</span></div>
    <div class="line-title">Produk</div>

    <?php
    // Daftar harga produk
    $products = [
        'Diapers' => 20000,
        'Baju Bayi' => 15000,
        'Minyak Telon' => 12000,
        'Bedak' => 10000,
        'Shampo' => 8000
    ];

    // Jumlah barang yang dibeli
    $quantities = [
        'Diapers' => 10,
        'Baju Bayi' => 17,
        'Minyak Telon' => 12,
        'Bedak' => 4,
        'Shampo' => 7
    ];

    // Menghitung total harga
    $total = 0;
    foreach ($products as $product => $price) {
        $subtotal = $price * $quantities[$product];
        $total += $subtotal;
        echo "<div class='line'><span>$product ({$quantities[$product]} x " . number_format($price, 0, ',', '.') . ")</span><span>: Rp " . number_format($subtotal, 0, ',', '.') . "</span></div>";
    }

    // Menghitung diskon
    $discount = 0;
    if ($total >= 350000) {
        $discount = 0.20 * $total;
    } elseif ($total >= 200000) {
        $discount = 0.15 * $total;
    }

    $totalAfterDiscount = $total - $discount;
    ?>

    <div class="line-title">Total</div>
    <div class="line total"><span>Total</span><span>: Rp <?php echo number_format($total, 0, ',', '.'); ?></span></div>
    <div class="line discount"><span>Diskon</span><span>: Rp <?php echo number_format($discount, 0, ',', '.'); ?></span></div>
    <div class="line final-total"><span>Total Pembayaran</span><span>: Rp <?php echo number_format($totalAfterDiscount, 0, ',', '.'); ?></span></div>
</div>

</body>
</html>
