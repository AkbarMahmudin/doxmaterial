<?php
include dirname(__DIR__) . '/config/db.php';


function getKodeBarang(){
    $query = "SELECT MAX(id) as kodeBarangTerbesar FROM barang";

    $result = mysqli_query($GLOBALS['DB'], $query);

    $data = mysqli_fetch_assoc($result);

    $kodeBarang = $data['kodeBarangTerbesar'];

    // mengambil angka (index) dari data terbesar
    $urutan = (int) substr($kodeBarang, 2, 2);
    $urutan++;

    // sprintf untuk membuat string karakter sesuai keinginan
    $huruf = "BR";
    $kodeBarang = $huruf . sprintf("%02s", $urutan);

    return $kodeBarang;
}


function store($id,$nama,$harga,$gambar,$temporary){
    $random = rand();

    $ekstensi = array('png','jpg','jpeg','JPG');

    $ext = pathinfo($gambar, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi)) {   
        return false;
    }   
    else {     
        $filename = $random . '_' .$gambar ;
        move_uploaded_file($temporary, '../../views/barang/gambar/' .$filename);
        $query = "INSERT INTO barang VALUES ('$id','$nama','$harga','$filename')";
        mysqli_query($GLOBALS['DB'], $query);
    
        return true;
        }
    }

    
function view(){
    $query = "SELECT * FROM barang ORDER BY id ASC";
    $result = mysqli_query($GLOBALS['DB'], $query);
    
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row; 
    }

    return $data;
}
?>