<?php

function upload($file, $dir) {
  $filename = $file['name'];
  $fileSize = $file['size'];
  $fileTmp = $file['tmp_name'];
  
  $random = rand();
  $ekstensi = array('png','jpg','jpeg');
  $ext = pathinfo($filename, PATHINFO_EXTENSION);

  // cek gambar kosong
  if ($file['error'] === 4) return 0;

  // cek ekstensi file
  if (!in_array(strtolower($ext), $ekstensi)) return -1;

  // cek file size
  if ($fileSize > 2000000) return -2;

  // cek direktori
  if (!is_dir("../../img/$dir")) {
    mkdir("../../img/$dir");
  }
  
  $filename = $random . '_' .$filename;
  move_uploaded_file($fileTmp, "../../img/$dir/" .$filename);

  return $filename;
}
