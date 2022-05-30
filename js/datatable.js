// DataTable
$(document).ready(function () {
  $('#myTable').DataTable({
    pagingType: 'simple',
    oLanguage: {
      oPaginate: {
        sNext:
        '<span class="pagination-right"><i class="fa-solid fa-angle-right"></i></span>',
        sPrevious:
        '<span class="pagination-left"><i class="fa-solid fa-angle-left"></i></span>',
      },
    },
    dom: '<"wrapper"flipt>',
    responsive: true,
  });

  $('#myTable_filter input').addClass('form-control').css({
    width: '75%',
    padding: '10px 5px',
  });

  $('#myTable_length select').addClass('form-control').css({
    width: '38%',
    padding: '10px 5px',
  });
});
