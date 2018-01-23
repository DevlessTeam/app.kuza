<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuza App</title>

    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]--><!-- Modernizr js -->
    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">
    <div id="wrapper"> <!-- Begin page -->
        <?php include('top-bar.php'); ?>
        <?php include('left-sidebar.php'); ?>

        <div class="content-page">
            <div class="content"><!-- Start content -->
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Kuza Forms</h4>
                                <ol class="breadcrumb p-0">
                                    <li><a href="#">Kuza App</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Starter Page</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0">Generated Forms</h4>
                                <p class="text-muted font-13 m-b-10">
                                    Your awesome text goes here.Your awesome text goes here.
                                </p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Form Title</th>
                                            <th>Shareable Link</th>
                                            <th class="text-xs-center">Orders</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i=1; $i < 8; $i++) { ?>
                                        <tr>
                                            <th scope="row"><?= $i ?></th>
                                            <td>Esse modi vel omnis rem dolor</td>
                                            <td class="fitcell">http://kuzaforms.com/doughman?link_id=5a5cbea213313</td>
                                            <td class="text-xs-center">35</td>
                                            <td class="fitcell">
                                                <a href="#" class="btn btn-sm waves-effect waves-light btn-success" title="View Company"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm waves-effect waves-light btn-primary" title="Edit Company"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-sm waves-effect waves-light btn-purple"> <i class="fa fa-share-alt"></i> </a>
                                                <a href="#" class="btn btn-sm waves-effect waves-light btn-danger"> <i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <div class="text-xs-center">
                                    <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">New Form</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- content -->
        </div><!-- End content-page -->

        <footer class="footer text-right">
            2018 © Kuza App.
        </footer>
    </div><!-- END wrapper -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script src="assets/js/custom.js"></script>

</body>
</html>