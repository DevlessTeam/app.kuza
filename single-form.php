<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuza App</title>

    <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
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
                                <h4 class="page-title">Some Form Title  </h4> <span class="m-l-2">(http://kuzaforms.com/x7a8dad)</span>
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
                        <div class="col-xs-12 col-md-4 col-md-offset-1">
                            <div class="card-box">

                                <h4 class="header-title m-t-0 m-b-20">Form Details</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control prod-quant" placeholder="Enter form title">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="" rows="3" placeholder="Enter Form Description"></textarea>
                                </div>
                            </div>
                            <div class="card-box">

                                <h4 class="header-title m-t-0 m-b-20">Form Image</h4>

                                <div class="text-xs-center">
                                    <img src="http://placehold.it/400x280" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="card-box">

                                <h4 class="header-title m-t-0 m-b-20">Order Status</h4>
                                <p class="text-muted m-b-20 font-13">Add status for the orders you recieve... Eg. Pending, Processed, Delivered</p>
                                <div class="tags-default">
                                    <input type="text" value="Pending, Processed, Delivered" data-role="tagsinput" placeholder="add status"/>
                                </div>
                            </div>
                            <div class="card-box">

                                <h4 class="header-title m-t-0 m-b-20">Product List</h4>

                                <div class="products-wrap">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th width="18%">Price</th>
                                                <th class="fitcell text-xs-center"><button type="button" class="btn btn-success btn-sm removeRow">+</button></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i < 3; $i++) { ?>
                                            <tr>
                                                <td><input type="text" class="form-control prod-quant" placeholder="Enter product name"></td>
                                                <td><input type="text" class="form-control" placeholder="20.30"></td>
                                                <td class="fitcell"><button type="button" class="btn btn-danger removeRow btn-sm mr-t-3">x</button></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="#" class="btn btn-success addRow">+ Add Product</a>
                                </div>
                            </div>
                            <div class="text-xs-center">
                                <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Update Form</a>
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
    <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script src="assets/js/custom.js"></script>

</body>
</html>