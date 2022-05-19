<?php
  include '../../controller/members/getMembers.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
</head>

<body id="body-pd">
  <?php
  // $title = 'Members';
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- start container members -->
    <div class="container">
      <!-- members table -->
      <div class="container_table">
        <table class="table" id="myTable" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Telepon</th>
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>
  
          <tbody>
            <?php foreach($members as $key => $member) : ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td>
                <a href="detail-member.php?id=<?= $member['id']; ?>">
                  <?= $member['nama_lengkap']; ?></td>
                </a>
              <td><?= $member['jenis_kelamin']; ?></td>
              <td><?= $member['telepon']; ?></td>
              <td><?= $member['alamat']; ?></td>
              <td style="text-align: center;">
                <!-- 
                  link edit agar mendapatkan data member berdasarkan id 
                  contoh: edit-member.php?id=MB01
                -->
                <a href="edit-member.php?id=<?= $member['id']; ?>" class="btn btn-secondary">Edit</a>
                <!-- 
                  button / form utk hapus data
                 -->
                <form action="../../controller/members/delete.php" method="post" style="padding: 0; margin: 0; display: inline-block;">
                  <!-- elemen utk menampung nilai id -->
                  <input type="hidden" name="id" value="<?= $member['id'] ?>">
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                <!-- <a href="#" class="btn btn-danger" style="margin: 2px;">Hapus</a> -->
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
  
        <a href="add-member.php" class="btn btn-primary btn-block" style="margin-top: 1rem;">
          <i class="fa-solid fa-plus"></i>  
          Buat Member Baru
        </a>
      </div>
      <!-- end container members -->
    </div>
  </main>
  <!-- End Content Body -->

  <!-- Import JS -->
  <?php
    include '../_includes/footer.php';
  ?>
</body>

</html>