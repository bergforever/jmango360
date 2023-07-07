<script src="{{asset('backend/assets/js/vendor.js')}}"></script>
<script src="{{asset('backend/assets/js/chart.min.js')}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1"></script>--}}
<script src="{{asset('backend/assets/js/script.js')}}"></script>
{{--data table --}}
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('datatable/js/buttons.print.min.js')}}"></script>
{{--<script>--}}
{{--    $(document).ready( function () {--}}
{{--        $('#myTable').DataTable();--}}
{{--    } );--}}
{{--</script>--}}

<script>
    $(document).ready(function() {
        $('#myTable').DataTable( {

            dom: 'Bfrtip',
            // dom: 'Blfrtip',
            lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10 rows', '25 rows', '50 rows', 'Show all' ]
            ],
            buttons: [
                'pageLength','copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
{{--</script>--}}
<script src="{{asset('plugin/ckeditor2/ckeditor.js')}}"></script>

{{--<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>--}}
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            ckfinder: {
                uploadUrl: '{{route('upload').'?_token='.csrf_token()}}',
            }
        })
        .catch( error => {
            console.error( error );
        } );
</script>
@yield('script')
