<?php
    include '../../model/Employees.php';
    include '../../helpers/upload-image.php';

	session_start();

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $outlet_id = $_POST['outlet'];
    $response;

    if (!isset($_FILES['gambar']) || !$_FILES['gambar']) {
		echo "Input gambar kosong";
		return;
	}

	$file = $_FILES['gambar']; // ambil nilai inputan file
	/* 
		panggil func upload
		param1: global variable $_FILES
		param2: nama folder
	**/
	$gambar = upload($file, 'employees');

	switch ($gambar) {
		case 0:
		  $response = [
			'status' => 'error',
			'message' => 'Pilih gambar terlebih dahulu!'
		  ];
		  break;
		case -1:
		  $response = [
			'status' => 'error',
			'message' => 'Ekstensi file tidak valid!'
		  ];
		  break;
		case -2:
		  $response = [
			'status' => 'error',
			'message' => 'Ukuran file terlalu besar!'
		  ];
		  break;
		default:
		  $response = [
			'status' => 'success',
			'message' => 'file berhasil ditambahkan'
		  ];
		  break;
	}

    $newEmployees = createNewEmployees($nama, $username, $password, $role, $gambar);
	
    if ($newEmployees === true){
		$response = [
			'status' => 'success',
			'message' => 'Pegawai baru berhasil ditambahkan'
		];
	}
	
	$_SESSION['response'] = $response;
	header('location: ../../views/employees/index.php');
    

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