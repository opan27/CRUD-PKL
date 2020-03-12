<?php 
    require 'functions.php';

    $result = query("DELETE FROM table_barang WHERE id_barang = $id")[0];
   
    if( hapus($result) > 0) {
        echo "
             <script>
                alert('data berhasil dihapus!');
                document.location.href = 'hapus.php';
            </script>
        ";
        } else{
            echo "
            <script>
                alert('data gagal dihapus!');
                document.location.href = 'hapus.php';
            </script>
        ";
     }
    
?>