<?php

$conn = mysqli_connect("localhost", "root", "", "tugaspkl");
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_array($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambahData($data){
    global $conn;

    $id_barang = htmlspecialchars($data['id_barang']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $id_kategori = htmlspecialchars($data['id_kategori']);
    $id_unit = htmlspecialchars($data['id_unit']);
    $harga_barang = htmlspecialchars($data['harga_barang']);
    $stok_barang = htmlspecialchars($data['stok_barang']);

    $query = "INSERT INTO table_barang
    VALUES('$id_barang','$nama_barang','$id_kategori','$id_unit','$harga_barang','$stok_barang')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
} 

function FindAll(){
    global $conn;

    $query = "SELECT * FROM table_barang";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    $query = "DELETE FROM table_barang WHERE id_barang = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;

    $id = $data["id_barang"];
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $id_kategori = htmlspecialchars($data["id_kategori"]);
    $id_unit = htmlspecialchars($data["id_unit"]);
    $harga_barang = htmlspecialchars($data["harga"]);
    $stok_barang = htmlspecialchars($data["stok_barang"]);

   
   $query ="UPDATE  table_barang SET
                nama_barang = '$nama_barang', 
                id_kategori = '$id_kategori',
                id_unit = '$id_unit',
                harga_barang = '$harga_barang',
                stok_barang = '$stok_barang'
              WHERE id_barang = $id
            ";
   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

?>