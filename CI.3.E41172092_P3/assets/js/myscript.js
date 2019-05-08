// datatable
$(function(){
  'use strict';

  $('#datatable1').DataTable({
    responsive: true,
    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_ items/page',
    }
  });

  // Select2
  $('.select2 .dataTables_length select').select2({ minimumResultsForSearch: Infinity });

});

//seraching datatable
$(function(){
  'use strict'

  $('.form-layout .form-control').on('focusin', function(){
    $(this).closest('.form-group').addClass('form-group-active');
  });

  $('.form-layout .form-control').on('focusout', function(){
    $(this).closest('.form-group').removeClass('form-group-active');
  });

  // Select2
  $('.select2').select2({
    minimumResultsForSearch: Infinity
  });

  $('#select2-a, #select2-b').select2({
    minimumResultsForSearch: Infinity
  });

  $('#select2-a').on('select2:opening', function (e) {
    $(this).closest('.form-group').addClass('form-group-active');
  });

  $('#select2-a').on('select2:closing', function (e) {
    $(this).closest('.form-group').removeClass('form-group-active');
  });

});


//tombol-delete
$('.tombol-delete').on('click', function(e) {
  e.preventDefault()
  const href  = $(this).attr('href');

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Delete data!'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    })
});

//modalEdit
$(function(){

  // showing modal with effect
  $('.modal-effect').on('click', function(e){
    e.preventDefault();
    var effect = $(this).attr('data-effect');
    $('#modalEdit').addClass(effect);
  });

  // hide modal with effect
  $('#modalEdit').on('hidden.bs.modal', function (e) {
    $(this).removeClass (function (index, className) {
        return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
    });
  });
});

//modalDetail

$(function(){

  // showing modal with effect
  $('.modal-effect').on('click', function(e){
    e.preventDefault();
    var effect = $(this).attr('data-effect');
    $('#modalDetail').addClass(effect);
  });

  // hide modal with effect
  $('#modalDetail').on('hidden.bs.modal', function (e) {
    $(this).removeClass (function (index, className) {
        return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
    });
  });
});
