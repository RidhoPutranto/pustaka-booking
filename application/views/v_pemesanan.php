<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pemesanan Nasi Goreng Setan</title>
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

        .form-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 10px;
        }

        label {
            flex: 1;
            margin-right: 10px;
            text-align: right;
        }

        input[type="text"],
        input[type="number"] {
            flex: 2;
            width: 100%;
            padding: 5px;
        }

        select {
            flex: 2;
            width: 100%;
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #ff0808;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <section>
        <h1>Halaman Pemesanan Nasi Goreng Setan</h1><br>
        <form action="<?php echo base_url('web/simpan_pesanan'); ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama Pelanggan:</label>
                <input type="text" id="nama" name="nama" size="20" required>
            </div>

            <div class="form-group">
                <label for="menu">Menu yang Dipesan:</label>
                <select id="menu" name="menu" required>
                    <option value="Nasi Goreng Setan" name="menu1">Nasi Goreng Setan</option>
                    <option value="Nasi Goreng Setan Special" name="menu2">Nasi Goreng Setan Special</option>
                    <option value="Nasi Goreng Setan Bogel" name="menu2">Nasi Goreng Setan Bogel</option>
                    <option value="Nasi Goreng Setan Lontong" name="menu2">Nasi Goreng Setan Lontong</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah_pesanan">Jumlah yang Dipesan:</label>
                <input type="number" id="jumlah_pesanan" name="jumlah_pesanan" min="1" required>
            </div><br>

            <input type="submit" value="Pesan">
        </form>
    </section>
</body>
</html>
