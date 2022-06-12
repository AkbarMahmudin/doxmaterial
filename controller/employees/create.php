<?php
	include '../../model/Employees.php';
	include '../../helpers/upload-image.php';

	session_start();

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = hash('sha256', $_POST['password']);
	$role = $_POST['role'];
	$outletId = $role === 'admin' ? null : $_POST['outlet'];
	$file = $_FILES['gambar']; 
	$response;
	
	// Validasi username
	$employee = getEmployeesByUserName($username);
	if ($employee) {
		$_SESSION['response'] = [
			'status' => 'warning',
			'message' => 'Username sudah digunakan'
		];
		header('location: ../../views/employees/add-employees.php');
		return;
	}
	
	// Validasi gambar
	$gambar = upload($file, 'employees');
	switch ($gambar) {
		case 0:
		  $response = [
			'status' => 'warning',
			'message' => 'Pilih gambar terlebih dahulu!'
		  ];
		  break;
		case -1:
		  $response = [
			'status' => 'warning',
			'message' => 'Ekstensi file tidak valid!'
		  ];
		  break;
		case -2:
		  $response = [
			'status' => 'warning',
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

	if ($gambar < 1) {
		$_SESSION['response'] = $response;
		header('location: ../../views/employees/add-employees.php');
		return;
	}

	$newEmployees = createNewEmployees($nama, $username, $password, $role, $outletId, $gambar);
	
	if ($newEmployees === false){
		$response = [
			'status' => 'error',
			'message' => 'Pegawai baru gagal ditambahkan'
		];
		header('location: ../../views/employees/add-employees.php');
	}
	$response = [
		'status' => 'success',
		'message' => 'Pegawai baru berhasil ditambahkan'
	];
	
	$_SESSION['response'] = $response;
	header('location: ../../views/employees/index.php');
?>