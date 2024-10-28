<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Tabel Harga Barang</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga (Rp)</th>
        <th>Total Harga (Rp)</th>
    </tr>

    <?php
    // Data barang dalam array multidimensi
    $barang = [
        ["id" => 1, "produk" => "Minyak Telon", "stok" => 20, "harga" => 31790],
        ["id" => 2, "produk" => "Diapers", "stok" => 25, "harga" => 51880],
        ["id" => 3, "produk" => "Baby Oil", "stok" => 15, "harga" => 16780],
        ["id" => 4, "produk" => "Shampo Baby", "stok" => 20, "harga" => 20670],
        ["id" => 5, "produk" => "Bedak", "stok" => 15, "harga" => 15890],
        ["id" => 6, "produk" => "Baju Bayi", "stok" => 20, "harga" => 35500],
        ["id" => 7, "produk" => "Jumper", "stok" => 25, "harga" => 50999],
    ];

    // Mengurutkan array berdasarkan nama produk
    usort($barang, function ($a, $b) {
        return strcmp($a["produk"], $b["produk"]);
    });

    $totalKeseluruhan = 0;

    foreach ($barang as $item) {
        $totalHarga = $item["stok"] * $item["harga"];
        $totalKeseluruhan += $totalHarga;

        echo "<tr>
                <td>{$item['id']}</td>
                <td>{$item['produk']}</td>
                <td>{$item['stok']}</td>
                <td>" . number_format($item['harga'], 0, ',', '.') . "</td>
                <td>" . number_format($totalHarga, 0, ',', '.') . "</td>
              </tr>";
    }
    ?>

    <tr>
        <td colspan="4"><strong>Total</strong></td>
        <td><strong><?php echo number_format($totalKeseluruhan, 0, ',', '.'); ?></strong></td>
    </tr>
</table>

</body>
</html>