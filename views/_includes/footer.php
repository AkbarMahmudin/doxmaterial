<script src="../../js/index.js"></script>
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/94fce472e4.js" crossorigin="anonymous"></script>
<!-- Sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Datatables -->
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="../../js/datatable.js"></script>
<!-- Import JS -->

<?php
  if (isset($_SESSION['response'])):
  $status = $_SESSION['response']['status'];
  $message = $_SESSION['response']['message'];
?>
    <script>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });
        
      Toast.fire({
          icon: '<?= $status ?>',
          title: '<?= $message ?>'
      });
    </script>
  <?php
    endif;
    unset($_SESSION['response']);
  ?>
