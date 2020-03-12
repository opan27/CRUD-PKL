<?php
    require 'functions.php';
    
$id = $_GET['id'];

//query data mahasiswa berdasarkan idnya
$hasil = query("SELECT * FROM table_barang WHERE id_barang = $id")[0];

    //cek apakah tombol submit udah ditekan atau belum?
    if( isset($_POST["submit"]) ){
       
        //cek apakah data berhasil diubah atau tidak
           if( ubah($_POST) > 0){
               //pakai alert javascript
               echo "
                    <script>
                        alert('data berhasil diubah!');
                        document.location.href = 'edit.php';
                    </script>
               ";
           } else{
               echo "
                    <script>
                        alert('data gagal diubah!');
                        document.location.href = 'edit.php';
                    </script>
               ";
           }
    }
    
?>
 <form action="" method="post">
 <input type="hidden" name="id_barang" value="<?= $hasil["id_barang"]; ?>">

          <label>Nama Barang</label>
    <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?=$hasil['nama_barang'];?>">
    <label> Id Kategori</label>
    <input type="number" name="id_kategori" id="id_kategori" class="form-control" value="<?=$hasil['id_kategori'];?>">
    <label> ID Unit</label>
    <input type="number" name="id_unit" id="id_unit" class="form-control" value="<?=$hasil['id_unit'];?>">
    <label>Harga Barang</label>
    <input type="number" name="harga_barang" id="harga_barang" class="form-control" value="<?=$hasil['harga_barang'];?>">
    <label>Stok Barang</label>
    <input type="text" name="stok_barang" id="stok_barang" class="form-control" value="<?=$hasil['stok_barang'];?>">

    <button type="submit" class="btn btn-outline-primary mt-3" name="submit">Submit</button>
    
  </form>