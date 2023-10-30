<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Cetak Pemesanan Nasi Goreng Setan</title>
    <style>
        /* CSS untuk mengatur tampilan */
        section {
            text-align: center;
            border-top: 1px solid #ccc;
            padding: 20px;
        }

        h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .struk {
            border: 1px solid #000;
            padding: 10px;
            margin: 20px auto;
            width: 50%;
        }

        .garis {
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body>
    <section>
        <h1>Halaman Cetak Pemesanan Nasi Goreng Setan</h1>
        <h2>Data Pemesanan Nasi Goreng</h2>
        <div class="struk">
            <p>Data Pemesanan:</p>
            <div class="garis"></div>
            <?php
                if (isset($nama) && isset($menu) && isset($jumlah_pesanan) && isset($harga_menu) && isset($harga_total)) {
                    echo "<p><strong>Nama Pelanggan:</strong> $nama</p>";
                    echo "<p><strong>Jumlah Pesanan:</strong> $jumlah_pesanan</p>";
                    echo "<p><strong>Menu Nasi Goreng yang Dipilih:</strong> $menu</p>";
                    echo "<p><strong>Harga Nasi Goreng yang Dipilih:</strong> Rp $harga_menu</p>";
                    echo "<p><strong>Harga Total:</strong> Rp $harga_total</p>";
                }
            ?>
          <a href="<?php echo base_url().'index.php/web' ?>">Kembali</a>
        </div>
    </section>
</body>
</html>
