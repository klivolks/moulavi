<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="/js/custom.min.js"></script>
<script src="/assets/plugins/sparkline/jquery.sparkline.min.js"></script>

<!--morris JavaScript -->
<script src="/assets/plugins/raphael/raphael-min.js"></script>
<script src="/assets/plugins/morrisjs/morris.min.js"></script>
<!-- Chart JS -->
<script src="/js/dashboard1.js"></script>
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="/assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<script src="/assets/plugins/wizard/jquery.steps.min.js"></script>
<script src="/assets/plugins/wizard/jquery.validate.min.js"></script>
<script src="/assets/plugins/wizard/steps.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            });
            });
            
//-----View Model page----//
$(document).ready(function() {
    $(document).on('click', '#getPackageview', function(e) {
        e.preventDefault();
        var uid = $(this).data('id');
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $.ajax({
                url: '/app/tour-packages/view/',
                type: 'POST',
                data: 'id=' + uid,
                dataType: 'html'
            })
            .done(function(data) {
                $('#dynamic-content').html('');
                $('#dynamic-content').html(data); // load response
            })
            .fail(function() {
                $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            });
    });
});
        </script>
</body>
</html>