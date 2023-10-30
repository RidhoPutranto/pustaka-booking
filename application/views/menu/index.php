<!DOCTYPE html>
<html>
<head>
    <title>Data Menu</title>
</head>
<body>
    <h1>Data Menu Nasi Goreng Delivery</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($menus as $menu) { ?>
            <tr>
                <td><?php echo $menu->id; ?></td>
                <td><?php echo $menu->nama; ?></td>
                <td><?php echo $menu->harga; ?></td>
                <td>
                    <a href="<?php echo base_url('menu/edit/'.$menu->id); ?>">Edit</a>
                    <a href="<?php echo base_url('menu/delete/'.$menu->id); ?>">Hapus</a>
                    <a href="<?php echo base_url('menu/create'); ?>">Tambah Menu Baru</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
