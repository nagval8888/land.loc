$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    $('#example1').DataTable();
    $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
    });

    //*** Ckeditor
    var editor = CKEDITOR.replace( 'editor1',{
        filebrowserBrowseUrl : '/elfinder/ckeditor'
    } );
    //CKEDITOR.replace('editor1');
});