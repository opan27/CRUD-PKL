<?php
require 'functions.php';
$result = query("SELECT * FROM table_barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>
    <div class="container">
<table class="table table-hover">
        
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">ID Kategori</th>
                        <th scope="col">Id Unit</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Stok Barang</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($result as $hasil) : ?>
                    <tr>
                        <td><?= $i;?></td>
                      <td>
                      <?= $hasil['nama_barang'];?>
                      </td>  
                       <td><?= $hasil['id_kategori'];?></td>
                    <td><?= $hasil['id_unit'];?></td>
                <td><?= $hasil['harga_barang'];?></td>
                <td><?= $hasil['stok_barang'];?></td>
                <td><a href="edit.php?id=<?= $hasil["id_barang"];?>" class="btn btn-info">Edit</a></td>
                <td><a href="hapus.php?id=<?= $hasil["id_barang"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </div>
            </table>
</body>
</html>