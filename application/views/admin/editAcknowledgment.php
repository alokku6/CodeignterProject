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
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico'); ?>">

    <!-- jsvectormap css -->
    <link href="<?= base_url('assets/libs/jsvectormap/css/jsvectormap.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="<?= base_url('assets/libs/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="<?= base_url('assets/js/layout.js'); ?>');?>"></script>
    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= base_url('assets/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">



        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index-2.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url('assets/images/logo-sm.png'); ?>" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index-2.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>

                        </li> <!-- end Dashboard Menu -->



                        <!-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li> -->


                        <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Master Entry</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="service" class="nav-link" data-key="t-analytics">
                                    Add Service </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                            </li>

                        </ul>
                    </div>
                </li> -->



                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">KYC
                                From</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarKYC" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-user-2-line"></i> <span data-key="t-dashboards">Manage KYC</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarKYC">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="../KycFrom" class="nav-link" data-key="t-analytics">
                                            Application </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../viewApplication" class="nav-link" data-key="t-crm"> View
                                            Application</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
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
                                <h4 class="mb-sm-0">Update Acknowledgment</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">View Application</a>
                                        </li>
                                        <li class="breadcrumb-item active">Update Acknowledgment</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row align-items-center justify-content-center">
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">

                                    <h4 class="mb-sm-0">Applicant Acknowledgment</h4>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <form
                                                action="<?php echo base_url('updateAcknowledgment/' . $item->applicant_no); ?>"
                                                method="post">
                                                <div class="row g-2">

                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="oldpasswordInput" class="form-label">Received
                                                                From MR./MRS. Ms</label>
                                                            <input type="hidden" name="applicant_no"
                                                                value="<?php echo $item->applicant_no; ?>">
                                                            <input type="text" class="form-control" name="received_name"
                                                                placeholder="Received From MR./MRS. Ms"
                                                                value="<?php echo $item->received_name; ?>" />
                                                            <span class="text-danger">
                                                                <?php echo form_error('received_name'); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="newpasswordInput" class="form-label">An
                                                                Application For Allotment
                                                                Scheme</label>
                                                            <input type="text" class="form-control" name="allotment"
                                                                placeholder="Enter An Applicantion For Allotment Scheme"
                                                                value="<?php echo $item->allotment; ?>" />
                                                            <span class="text-danger">
                                                                <?php echo form_error('allotment'); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="" class="form-label">Plan</label>
                                                            <input type="text" class="form-control" name="plan"
                                                                placeholder="Plan" value="<?php echo $item->plan; ?>" />
                                                            <span class="text-danger">
                                                                <?php echo form_error('plan'); ?>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="" class="form-label">Option</label>
                                                            <input type="text" class="form-control" name="option"
                                                                placeholder="Option"
                                                                value="<?php echo $item->option; ?>" />
                                                            <span class="text-danger">
                                                                <?php echo form_error('option'); ?>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="confirmpasswordInput" class="form-label">Vide
                                                                Cheque No.</label>
                                                            <input type="text" class="form-control" name="cheque"
                                                                placeholder="Cheque No."
                                                                value="<?php echo $item->cheque; ?>" />
                                                            <span class="text-danger">
                                                                <?php echo form_error('cheque'); ?>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="" class="form-label">Dated</label>
                                                            <input type="date" class="form-control" name="dated"
                                                                value="<?php echo $item->dated; ?>" />
                                                            <span class="text-danger">
                                                                <?php echo form_error('dated'); ?>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="confirmpasswordInput" class="form-label">Amount
                                                                (RS)</label>
                                                            <input type="text" class="form-control" name="amount"
                                                                placeholder="Amount (Rs.)"
                                                                value="<?php echo $item->amount; ?>" />
                                                            <span class="text-danger">
                                                                <?php echo form_error('amount'); ?>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="" class="form-label">Drawn on bank and
                                                                branch</label>
                                                            <input type="text" class="form-control" name="bank_branch"
                                                                placeholder="Drawn on bank and branch"
                                                                value="<?php echo $item->bank_branch; ?>" />
                                                            <span class="text-danger">
                                                                <?php echo form_error('bank_branch'); ?>
                                                            </span>
                                                        </div>

                                                    </div>

                                                    <div class="mb-4 col-md-12">
                                                        <div class="text-start">
                                                            <button type="submit" class="btn btn-success">
                                                                Update
                                                            </button>
                                                            <a href="../viewApplication" class="btn btn-danger">Back</a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>

                                    </div>
                                    <!--end tab-pane-->
                                </div>
                            </div>


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
        <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('assets/libs/simplebar/simplebar.min.js'); ?>"></script>
        <script src="<?= base_url('assets/libs/node-waves/waves.min.js'); ?>"></script>
        <script src="<?= base_url('assets/libs/feather-icons/feather.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/pages/plugins/lord-icon-2.1.0.js'); ?>"></script>
        <script src="<?= base_url('assets/js/plugins.js'); ?>"></script>

        <!-- apexcharts -->
        <script src="<?= base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Vector map-->
        <script src="<?= base_url('assets/libs/jsvectormap/js/jsvectormap.min.js'); ?>"></script>
        <script src="<?= base_url('assets/libs/jsvectormap/maps/world-merc.js'); ?>"></script>

        <!--Swiper slider js-->
        <script src="<?= base_url('assets/libs/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Dashboard init -->
        <script src="<?= base_url('assets/js/pages/dashboard-ecommerce.init.js'); ?>"></script>

        <!-- App js -->
        <script src="<?= base_url('assets/js/app.js'); ?>"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2023 05:34:01 GMT -->

</html>