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


<body class="fixed-left settings">
    <div id="wrapper"> <!-- Begin page -->
        <?php include('top-bar.php'); ?>
        <?php include('left-sidebar.php'); ?>

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Settings</h4>
                                <ol class="breadcrumb p-0">
                                    <li>
                                        <a href="#">Uplon</a>
                                    </li>
                                    <li>
                                        <a href="#">Forms</a>
                                    </li>
                                    <li class="active">
                                        Settings
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row m-t-2">
                        <div class="col-xs-12 col-md-6 col-md-offset-3">
                            <div class="card-box">

                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">

                                        <div class="p-20 m-t-2">
                                            <form role="form" data-parsley-validate novalidate>
                                                <div class="form-group row">
                                                    <label for="webSite" class="col-sm-4 form-control-label">Full Name: <span class="text-danger"> *</span></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required parsley-type="Full Name" class="form-control"
                                                        id="webSite" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-4 form-control-label">Company Name: <span class="text-danger"> *</span></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required parsley-type="email" class="form-control" id="inputEmail3" placeholder="Company Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="webSite" class="col-sm-4 form-control-label">Short Name: <span class="text-danger"> *</span></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required parsley-type="Short Name" class="form-control"
                                                        id="webSite" placeholder="Short Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-4 form-control-label">Email: <span class="text-danger"> *</span></label>
                                                    <div class="col-sm-7">
                                                        <input type="email" required parsley-type="email" class="form-control"
                                                        id="inputEmail3" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="hori-pass1" class="col-sm-4 form-control-label">Old Password: <span class="text-danger"> *</span></label>
                                                    <div class="col-sm-7">
                                                        <input id="hori-pass1" type="password" placeholder="Password" required
                                                        class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="hori-pass2" class="col-sm-4 form-control-label">New Password: <span class="text-danger"> *</span></label>
                                                    <div class="col-sm-7">
                                                        <input data-parsley-equalto="#hori-pass1" type="password" required
                                                        placeholder="Password" class="form-control" id="hori-pass2">
                                                    </div>
                                                </div>
                                                <div class="form-group row m-t-2">
                                                    <div class="col-sm-8 col-sm-offset-4">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit Settings
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div><!-- end col-->

                    </div>
                    <!-- end row -->


                </div> <!-- container -->

            </div> <!-- content -->

        </div>

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