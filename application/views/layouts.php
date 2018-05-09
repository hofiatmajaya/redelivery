<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?=$title;?> || GMF - Decision Support System</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/gmf.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/pace/pace.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.0/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/parsley/parsley.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/sweetalert/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/toastr/build/toastr.min.css">
    <!-- Morris charts -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/morris.js/morris.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables/fixedColumns.dataTables.min.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.css"> -->

    <!-- Select Picker -->

    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/selectpicker/css/bootstrap-select.css">

    <!-- select2 -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/plugins/combo-check/sumoselect.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/touchspin/jquery.bootstrap-touchspin.css">

    <style media="screen">
        #loadings {
            position: fixed !important;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 9999;
            background: white url('<?= base_url(); ?>assets/image/loading.gif') no-repeat 50% 50%;
            font: 0/0;
            text-shadow: none;
            padding: 1em 1.2em;
            opacity: 1;
        }

        ul.sidebar-menu li {
            font-size: 13px;
        }

        ul.treeview-menu li a {
            font-size: 13px;
        }

        .modal-backdrop.in {
            opacity: 0.1;
        }

        .modal {
            background: rgba(234, 34, 34, 0);
        }
    </style>
    <script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?= base_url(); ?>assets/plugins/combo-check/jquery.sumoselect.js"></script>

    <script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/select2/dist/js/select2.min.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/PACE/pace.min.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?= base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/sweetalert/sweetalert2.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.0/js/dataTables.rowReorder.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" charset="utf-8"></script>
    <script src="<?= base_url(); ?>assets/plugins/parsley/parsley.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/parsley/i18n/id.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/parsley/i18n/id.extra.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/toastr/build/toastr.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url(); ?>assets/dist/js/demo.js"></script>

    <script src="<?= base_url(); ?>assets/plugins/highchart/highcharts.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/highchart/exporting.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>
    <script src="<?= base_url(); ?>assets/dist/js/waiting_modal.js"></script>

    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <script src="<?= base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- jQuery Knob -->
    <script src="<?= base_url(); ?>assets/plugins/knob/jquery.knob.js"></script>
    <!-- icheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/iCheck/all.css">
    <script src="<?= base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/session/jquerysession.js"></script>
    <!-- Select Picker -->
    <script src="<?= base_url(); ?>assets/plugins/selectpicker/js/bootstrap-select.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/touchspin/jquery.bootstrap-touchspin.js"></script>

    <script type="text/javascript">
        function notif(type, msg) {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            switch (type) {
                case "success":
                    toastr.success(msg);
                    break;
                case "error":
                    toastr.error(msg)
                    break;
                case "warning":
                    toastr.warning(msg)
                    break;
                default:
            }
        }

        $(function () {
            wow = new WOW(
                {
                    animateClass: 'animated',
                    offset: 100,
                    callback: function (box) {
                        null;
                    }
                }
            );
            wow.init();
        })
    </script>

</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
    <?php
    $this->load->view("view_structural/head");
    $this->load->view("view_structural/sidebar");
    ?>
    <div class="content-wrapper">
        <?php $this->load->view($content); ?>
    </div>

    <?php
    $this->load->view("view_structural/footer");
    ?>


    <div class="control-sidebar-bg"></div>
</div>


<script>

    var base_url = '<?php echo base_url(); ?>index.php/';

    $(document).ready(function () {
        $('.select2').select2();
        $('#loadings').fadeOut(2000);
        $(".selectpicker").selectpicker();
        $(".bootstrap-select").click(function () {
            $(this).addClass("open");
        });
        $('.dataTableWithScroll').DataTable({
            "scrollY": 200,
            "scrollX": true
        });

        $(".dropdown-toggle").dropdown();
    });

    $(document).ajaxStart(function () {
        Pace.restart()
    });

    $(document).ready(function () {
        var fullname_login = localStorage.getItem("nama");
        var username_login = localStorage.getItem("username");
        var email_login = localStorage.getItem("email");
        var role_login = localStorage.getItem("role");
        var role_id = localStorage.getItem("role_id");
        var status_login = localStorage.getItem("status");
        $(".name_user1, .name_user").html(username_login);
        $(".fullname_user").html(fullname_login);
        $(".rolelogin").html(role_login);
        var url_now = document.URL;
        var menu_now = url_now.replace(base_url, '');


        // if (status_login != "login") {
        //     notif("warning", "Anda belum Login!!!");
        //     window.location.href = base_url + 'login';
        // }

        // if(menu_now!="login"&&status_login=="login"){
        // cek_menu(role_id, menu_now);
        // }
        // $(document).on("click", "#sign_out", function (e) {
        //     localStorage.clear();
        //     window.location.href = base_url + 'login';
        // });


        $('.sidebar-menu').tree()
    });

    function cek_menu(role_id, link) {
        $.ajax({
            url: base_url + 'login/cek_menu',
            method: 'post',
            dataType: 'json',
            data: {
                'role_id': role_id,
                'link': link,
            },
            success: function (data) {
                if (data.status == "0") {
                    window.location.href = base_url + 'error/not_found';
                }
            }
        });
    }

    $('.monthpicker').datepicker({
        todayBtn: "linked",
        format: 'yyyy-mm',
        viewMode: 'months',
        minViewMode: 'months',
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });
</script>
</body>
</html>
