<?php
$produk = [
    [
        "nama" => "Kampas Rem",
    "kategori" => "Sparepart",
    "harga" => 350000,
    "stok" => 20,
    "gambar" => "kampas-rem.jpg",

    ],
    [
    "nama" => "Oli Mobil",
    "kategori" => "Perawatan",
    "harga" => 150000,
    "stok" => 30,
    "gambar" => "oli.jpg",

    ],
    [
    "nama" => "Aki Mobil",
    "kategori" => "Kelistrikan",
    "harga" => 400000,
    "stok" => 20,
    "gambar" => "aki.jpg",

    ],
    [
    "nama" => "Busi",
    "kategori" => "Mesin",
    "harga" => 100000,
    "stok" => 20,
    "gambar" => "busi.jpg",

    ],
    [
    "nama" => "Filter Oil",
    "kategori" => "Sparepart",
    "harga" => 350000,
    "stok" => 20,
    "gambar" => "filter-oil.jpg",

    ],
    [
    "nama" => "Lampu Mobil",
    "kategori" => "Sparepart",
    "harga" => 400000,
    "stok" => 20,
    "gambar" => "lampu.jpg",

    ]
   

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICA SPORTS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ICA SPORTS</h1>
    <p>Tempat Terbaik Membeli Sparepart Orisinil dan Aksesoris Mobil</p>
    <h2>Daftar Produk</h2>
    <div class="produk">
        <?php foreach ($produk as $item) { ?>
            <div class="card">
                <img src="<?php echo $item["gambar"]; ?>"
                    alt="<?php echo $item["nama"]; ?>">
                <h3><?php echo $item["nama"]; ?></h3>
                <p>Kategori: <?php echo $item["kategori"]; ?></p>
                <p>Harga: <?php echo $item["harga"]; ?></p>
                <p>Stok: <?php echo $item["stok"]; ?></p>

                <?php if ($item["stok"] > 0) { ?>
                    <p class="tersedia">Tersedia</p>
                    <button >Beli Sekarang</button>
               <?php } else {  ?>

                <p class="habis">Stok Habis</p>
                <button disabled>Stok Habis</button>

            <?php } ?>
    </div>

       <?php } ?>
    </div>
</body>
</html>