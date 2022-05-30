<?php
    include '../../model/Employees.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    // $outlet_id = $_POST['outlet'];
    
    $newEmployees = createNewEmployees($nama, $username, $password, $role);
    
    if ($newEmployees === true){
       header('location: ../../views/employees/index.php?status=succes');
    }

    // if ($newEmployees === true){
    //     echo "
    //     <>
    //         Swal.fire({
    //             icon: 'succes',
    //             text: 'Pegawai baru berhasil ditambahkan',
    //         });
    //     </script>";
    // }
    
    // if(!isset($nama) || !isset() ){
    //     echo "isi inputan";
    //     exit;
    // }

    // var_dump[];
?>