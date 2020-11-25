<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
        <?=$this->siteTitle('Dashboard');?>
        </title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="../../../public/assets/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../../../public/assets/css/bootoast/bootoast.min.css" >
        <link rel="stylesheet" href="../../../public/assets/css/jquery-confirm.min.css" >
        <link rel="stylesheet" href="../../../public/assets/css/jquery-ui/jquery-ui.min.css" >
        <link rel="stylesheet" href="../../../public/assets/css/jquery-ui/jquery-ui.structure.min.css" >
        <link rel="stylesheet" href="../../../public/assets/css/jquery-ui/jquery-ui.theme.min.css" >
        <link rel="stylesheet" href="../../../public/assets/css/datepicker.css" >
        <link rel="stylesheet" href="../../../public/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/r-2.2.5/datatables.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
        <?=$this->content('head');?>
    </head>
    <body class="sb-nav-fixed" style="">
        <?php if (isset($_SESSION['loggedIn'])): ?>
        <?php include ROOT . 'app/views/components/nav.php';?>
        <?php else: ?>
        <?php endif?>
        <div id="layoutSidenav">
            <?php include ROOT . 'app/views/components/sidebar.php';?>
            <div id="layoutSidenav_content" style="background-color: #F1F2F7;">
                <main>
                    <div class="container-fluid p-2">
                        <?php include ROOT . 'app/views/components/breadcrumbs.php';?>
                        <?=$this->content('body');?>
                    </div>
                </main>
                <?php include ROOT . 'app/views/components/footer.php';?>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../../../public/assets/js/bootstrap.min.js"></script>
        <script src="../../../public/assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../..//public/assets/js/pooper/popper.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
        <script src="../../../public/assets/js/notication/bootstrap-notify.min.js"></script>
        <script src="../../../public/assets/js/jquery.form.min.js"></script>
        <script src="../../../public/assets/js/bootstrap-validate.js"></script>
        <script src="../../../public/assets/js/datepicker.js"></script>
        <script src="../../../public/assets/js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js" crossorigin="anonymous"></script>
        <script src="../../../public/assets/js/datatable.js"></script>
        <script src="../../../public/assets/js/addFormFields.js"></script>
        <script src="../../../public/assets/js/jobStatusUpdate.js"></script>
        <script src="../../../public/assets/js/jquery.validate.min.js"></script>
        <script src="../../../public/assets/js/notify.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/validation/companyCreate.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/validation/candidateCreate.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/validation/jobCreate.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/validation/noteCreate.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/validation/contactCreate.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/validation/recruitment.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/validation/jobStatusUpdate.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/bootstrap/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/bootstrap/responsive.bootstrap.min.js"></script>
        <script type="text/javascript" src="../../../public/assets/js/jquery/jquery-ui.min.js"></script>
        <script>
        $(function () {
        $('[data-toggle="popover"]').popover()
        })
        </script>
        <script  type="text/javascript" charset="utf-8" async defer>
        $(function() {
        var $tabButtonItem = $('#tab-button li'),
        $tabSelect = $('#tab-select'),
        $tabContents = $('.tab-contents'),
        activeClass = 'is-active';
        $tabButtonItem.first().addClass(activeClass);
        $tabContents.not(':first').hide();
        $tabButtonItem.find('a').on('click', function(e) {
        var target = $(this).attr('href');
        $tabButtonItem.removeClass(activeClass);
        $(this).parent().addClass(activeClass);
        $tabSelect.val(target);
        $tabContents.hide();
        $(target).show();
        e.preventDefault();
        });
        $tabSelect.on('change', function() {
        var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');
        $tabButtonItem.removeClass(activeClass);
        $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
        $tabContents.hide();
        $(target).show();
        });
        });
        </script>
        <script type="text/javascript">
            $("#datepicker").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
        </script>
    </body>
</html>