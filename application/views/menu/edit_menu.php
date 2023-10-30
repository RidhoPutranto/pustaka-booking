<!DOCTYPE html>
<html>
<head>
    <title>Edit Menu</title>
</head>
<body>
    <h1>Edit Menu</h1>
    <form method="post" action="<?php echo base_url('menu/update/'.$menu->id); ?>">
        <label for="nama">Nama Menu:</label>
        <input type="text" name="nama" value="<?php echo $menu->nama; ?>" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="text" name="harga" value="<?php echo $menu->harga; ?>" required>
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
