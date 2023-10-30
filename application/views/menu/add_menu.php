<!DOCTYPE html>
<html>
<head>
    <title>Tambah Menu Baru</title>
</head>
<body>
    <h1>Tambah Menu Baru</h1>
    <form method="post" action="<?php echo base_url('menu/store'); ?>">
        <label for="nama">Nama Menu:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="text" name="harga" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
