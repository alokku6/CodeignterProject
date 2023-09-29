<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">



<head>

    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">



        <?php include('inc/topbar.php'); ?>
        <!-- ========== App Menu ========== -->
        <?php include('inc/sidebar.php'); ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Create Project</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                        <li class="breadcrumb-item active">Create Project</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 ">
                            <div class="card">

                                <div class="card-body">
                                    <?php if ($this->session->flashdata('success')):
                                        ?>
                                        <div class="alert alert-success alert-dismissible alert-outline fade show"
                                            role="alert">
                                            <?= $this->session->flashdata('success'); ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata('status')):
                                        ?>
                                        <div class="alert alert-success alert-dismissible alert-outline fade show"
                                            role="alert">
                                            <?= $this->session->flashdata('status'); ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <form action="service" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label" for="project-title-input">Service</label>
                                            <input type="text" name="service" class="form-control"
                                                placeholder="Enter Service">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="project-title-input">Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="text-start mb-4">
                                            <button type="submit" class="btn btn-success w-lg">Create</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>


                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Basic Datatables</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example"
                                        class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                        style="width:100%">
                                        <thead>
                                            <tr>

                                                <th data-ordering="false">SR No.</th>
                                                <th>Image</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($data as $item) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $item->id; ?>
                                                    </td>
                                                    <td>
                                                        <img src="assets/upload/<?php echo $item->image; ?>" alt=""
                                                            width="100px">
                                                    </td>
                                                    <td>
                                                        <?php echo $item->service; ?>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li><a href="<?php echo base_url('serviceEdit/' . $item->id) ?>"
                                                                        class="dropdown-item edit-item-btn"><i
                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Update</a></li>
                                                                <li><a href="" class="dropdown-item"><i
                                                                            class="ri-upload-2-fill align-bottom me-2 text-muted"></i>
                                                                        Update Image</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo base_url('serviceDelete/' . $item->id) ?>"
                                                                        onClick="return confirm('Are you sure you want to delete this service ?');"
                                                                        class="dropdown-item remove-item-btn">
                                                                        <i
                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                </div>

            </div>
            <?php include('inc/footer.php'); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 05:34:01 GMT -->

</html>