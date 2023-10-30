<!DOCTYPE html>
<html>
<head>
    <title>Form Menu</title>
</head>
<body>
    <h1>Form Menu Nasi Goreng Delivery</h1>
    <form method="post" action="<?php echo base_url('menu/store'); ?>">
        <input type="text" name="nama" placeholder="Nama Menu">
        <input type="text" name="harga" placeholder="Harga">
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
