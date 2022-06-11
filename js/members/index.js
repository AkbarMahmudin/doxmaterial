$(document).ready(function() {
  // DataTable
  $('.table').DataTable({
    pagingType: 'simple',
    searching: false,
    info: false,
    lengthChange: false,
    oLanguage: {
      oPaginate: {
        sNext: '<span class="pagination-right"><i class="fa-solid fa-angle-right"></i></span>',
        sPrevious: '<span class="pagination-left"><i class="fa-solid fa-angle-left"></i></span>',
      },
    },
    dom: '<"wrapper"flipt>',
    responsive: true,
  });

  $('#table-order_filter input').addClass('form-control').css({
    width: '75%',
    padding: '10px 5px',
  });

  $('#table-order_length select').addClass('form-control').css({
    width: '38%',
    padding: '10px 5px',
  });
});

createChart();
