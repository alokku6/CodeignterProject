<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">



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
                        <img src="assets/images/logo-sm.png" alt="" height="22">
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
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
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



                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">KYC From</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarKYC" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-user-2-line"></i> <span data-key="t-dashboards">Manage KYC</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarKYC">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="../KycFrom" class="nav-link" data-key="t-analytics">
                                            Application </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../viewApplication" class="nav-link" data-key="t-crm"> View Application</a>
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
                                <h4 class="mb-sm-0">Update KYC Application</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">View Application</a>
                                        </li>
                                        <li class="breadcrumb-item active">Update Application</li>
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
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                <i class="fas fa-home"></i> Application Form
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#secondHolder" role="tab">
                                                <i class="far fa-user"></i> 2nd Holder
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#thirdHolder" role="tab">
                                                <i class="far fa-user"></i> 3nd Holder
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#acknowledgment" role="tab">
                                                <i class="far fa-user"></i> Acknowledgement SLIP
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#bank" role="tab">
                                                <i class="far fa-envelope"></i> Bank Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#nominee" role="tab">
                                                <i class="far fa-envelope"></i> Nominee Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#declaration" role="tab">
                                                <i class="far fa-envelope"></i> Declaration
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <form action="<?php echo base_url('updateApplication/' . $item->id); ?>" method="post">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="firstnameInput" class="form-label">Product</label>
                                                            <input type="text" class="form-control" name="product" placeholder="Enter Application No" value="<?php echo $item->product ?>" />

                                                            <span class="text-danger">
                                                                <?php echo form_error('product'); ?>
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">Application No.</label>
                                                                <input type="text" class="form-control" name="applicant_no" placeholder="Enter Application No" value="<?php echo $item->applicant_no ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('applicant_no'); ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="lastnameInput" class="form-label">Date</label>
                                                                <input type="date" class="form-control" name="doa" value="<?php echo $item->doa ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('doa'); ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="phonenumberInput" class="form-label">Name Of Applicant</label>
                                                                <input type="text" class="form-control" name="applicant_name" placeholder="Enter Applicant Name" value="<?php echo $item->applicant_name ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('applicant_name'); ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Father' Name/Spouse Name</label>
                                                                <input type="text" class="form-control" name="father_spouse" placeholder="Father' Name/Spouse Name " value="<?php echo $item->father_spouse ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('father_spouse'); ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="JoiningdatInput" class="form-label">Gender</label>
                                                                <input type="radio" name="gender" value="Male" <?php if ($item->gender = 'Male') {
                                                                                                                    echo "checked";
                                                                                                                } ?> /> Male
                                                                <input type="radio" name="gender" value="Female" <?php if ($item->gender = 'Female') {
                                                                                                                        echo "checked";
                                                                                                                    } ?> /> Female
                                                                <input type="radio" name="gender" value="Other" <?php if ($item->gender = 'Other') {
                                                                                                                    echo "checked";
                                                                                                                } ?> /> Other
                                                            </div>
                                                            <span class="text-danger">
                                                                <?php echo form_error('gender'); ?>
                                                            </span>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="skillsInput" class="form-label">Marital Status</label>
                                                                <input type="radio" name="status" value="Single" <?php if ($item->status = 'Single') {
                                                                                                                        echo "checked";
                                                                                                                    } ?> /> Single
                                                                <input type="radio" name="status" value="Married" <?php if ($item->status = 'Married') {
                                                                                                                        echo "checked";
                                                                                                                    } ?> /> Married
                                                                <input type="radio" name="status" value="Other" <?php if ($item->status = 'Other') {
                                                                                                                    echo "checked";
                                                                                                                } ?> /> Other
                                                            </div>
                                                            <span class="text-danger">
                                                                <?php echo form_error('status'); ?>
                                                            </span>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="designationInput" class="form-label">Nationality</label>
                                                                <input type="radio" name="nation" value="Indian" <?php if ($item->nation = 'Indian') {
                                                                                                                        echo "checked";
                                                                                                                    } ?> /> Indian
                                                                <input type="radio" name="nation" value="Other" /> Other
                                                                <input type="text" name="other_nation" class="form-control" placeholder="if you Chooose Other Write Country Name" value="<?php echo $item->other_nation ?>" />
                                                            </div>
                                                            <span class="text-danger">
                                                                <?php echo form_error('nation'); ?>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="designationInput" class="form-label">Date Of Birth</label>
                                                                <input type="date" name="dob" class="form-control" value="<?php echo $item->dob ?>" />
                                                            </div>
                                                            <span class="text-danger">
                                                                <?php echo form_error('dob'); ?>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="designationInput" class="form-label">Mobile No.</label>
                                                                <input type="tel" name="mobile" class="form-control" placeholder="+91-XXXXXXXX" value="<?php echo $item->mobile ?>" />
                                                            </div>
                                                            <span class="text-danger">
                                                                <?php echo form_error('mobile'); ?>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="designationInput" class="form-label">Email ID</label>
                                                                <input type="email" name="email" class="form-control" placeholder="+91-XXXXXXXX" value="<?php echo $item->email ?>" />
                                                            </div>
                                                            <span class="text-danger">
                                                                <?php echo form_error('email'); ?>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="designationInput" class="form-label">Proof Of identity</label>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="designationInput" class="form-label">Adhar Card</label>
                                                                        <input type="text" name="adhar_card" class="form-control" placeholder="Adhar Card Number" value="<?php echo $item->adhar_card ?>" />
                                                                        <span class="text-danger">
                                                                            <?php echo form_error('adhar_card'); ?>
                                                                        </span>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label for="designationInput" class="form-label">Pan Card</label>
                                                                        <input type="text" name="pan_card" class="form-control" placeholder="Pan Card Number" value="<?php echo $item->pan_card ?>" />
                                                                        <span class="text-danger">
                                                                            <?php echo form_error('pan_card'); ?>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!--end col-->
                                                        <div class="col-lg-12">
                                                            <div class="mb-3 pb-2">
                                                                <label for="" class="form-label">Address</label>
                                                                <textarea class="form-control" name="address" placeholder="Enter your full Address" rows="3"><?php echo $item->address ?></textarea>
                                                                <span class="text-danger">
                                                                    <?php echo form_error('address'); ?>
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!--end row-->
                                                </div>
                                                <!--end tab-pane-->
                                                <div class="tab-pane" id="secondHolder" role="tabpanel">

                                                    <div class="row g-2">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="" class="form-label">Name Of The Applicant</label>
                                                            <input type="text" class="form-control" name="sec_applicant" placeholder="Enter Name of Applicant" value="<?php echo $item->sec_applicant ?>" />
                                                            <span class="text-danger">
                                                                <?php echo form_error('sec_applicant'); ?>
                                                            </span>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-12">
                                                            <label for="" class="form-label">Proof Of identity</label>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="" class="form-label">Adhar Card</label>
                                                                    <input type="text" class="form-control" name="sec_adhar" placeholder="Adhar Card Number" value="<?php echo $item->sec_adhar ?>">
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('sec_adhar'); ?>
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="" class="form-label">Pan Card</label>
                                                                    <input type="text" class="form-control" name="sec_pan" placeholder="Pan Card Number" value="<?php echo $item->sec_pan ?>">
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('sec_pan'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="mb-3 pb-2">
                                                            <label for="exampleFormControlTextarea" class="form-label">Address</label>
                                                            <textarea class="form-control" name="sec_address" placeholder="Enter your full Address" rows="3"><?php echo $item->sec_address ?></textarea>
                                                            <span class="text-danger">
                                                                <?php echo form_error('sec_address'); ?>
                                                            </span>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="tab-pane" id="thirdHolder" role="tabpanel">

                                                    <div class="row g-2">

                                                        <div class="col-md-12 mb-3">
                                                            <label for="" class="form-label">Name Of The Applicant</label>
                                                            <input type="text" class="form-control" name="thr_applicant" placeholder="Enter Name Of Applicant" value="<?php echo $item->thr_applicant ?>">
                                                            <span class="text-danger">
                                                                <?php echo form_error('thr_applicant'); ?>
                                                            </span>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-12">
                                                            <label for="" class="form-label">Proof Of identity</label>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="" class="form-label">Adhar Card</label>
                                                                    <input type="text" class="form-control" name="thr_adhar" placeholder="Adhar Card Number" value="<?php echo $item->thr_adhar ?>">
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('thr_adhar'); ?>
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="" class="form-label">Pan Card</label>
                                                                    <input type="text" class="form-control" name="thr_pan" placeholder="Pan Card Number" value="<?php echo $item->thr_pan ?>">
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('thr_pan'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="mb-3 pb-2">
                                                            <label for="exampleFormControlTextarea" class="form-label">Address</label>
                                                            <textarea class="form-control" name="thr_address" placeholder="Enter your full Address" rows="3"><?php echo $item->thr_address ?></textarea>
                                                            <span class="text-danger">
                                                                <?php echo form_error('thr_address'); ?>
                                                            </span>
                                                        </div>

                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="tab-pane" id="acknowledgment" role="tabpanel">

                                                    <div class="row g-2">

                                                        <div class="col-lg-12">
                                                            <div>
                                                                <label for="oldpasswordInput" class="form-label">Received From MR./MRS. Ms</label>
                                                                <input type="text" class="form-control" name="received_name" placeholder="Received From MR./MRS. Ms" value="<?php echo $item->received_name ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('received_name'); ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <label for="newpasswordInput" class="form-label">An Application For Allotment
                                                                    Scheme</label>
                                                                <input type="text" class="form-control" name="allotment" placeholder="Enter An Applicantion For Allotment Scheme" value="<?php echo $item->allotment ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('allotment'); ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label for="" class="form-label">Plan</label>
                                                                <input type="text" class="form-control" name="plan" placeholder="Plan" value="<?php echo $item->plan ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('plan'); ?>
                                                                </span>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label for="" class="form-label">Option</label>
                                                                <input type="text" class="form-control" name="option" placeholder="Option" value="<?php echo $item->option ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('option'); ?>
                                                                </span>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label for="confirmpasswordInput" class="form-label">Vide Cheque No.</label>
                                                                <input type="text" class="form-control" name="cheque" placeholder="Cheque No." value="<?php echo $item->cheque ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('cheque'); ?>
                                                                </span>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label for="" class="form-label">Dated</label>
                                                                <input type="date" class="form-control" name="dated" value="<?php echo $item->dated ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('dated'); ?>
                                                                </span>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <label for="confirmpasswordInput" class="form-label">Amount (RS)</label>
                                                                <input type="text" class="form-control" name="amount" placeholder="Amount (Rs.)" value="<?php echo $item->amount ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('amount'); ?>
                                                                </span>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <label for="" class="form-label">Drawn on bank and branch</label>
                                                                <input type="text" class="form-control" name="bank_branch" placeholder="Drawn on bank and branch" value="<?php echo $item->bank_branch ?>" />
                                                                <span class="text-danger">
                                                                    <?php echo form_error('bank_branch'); ?>
                                                                </span>
                                                            </div>

                                                        </div>


                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->

                                                </div>
                                                <!--end tab-pane-->
                                                <div class="tab-pane" id="bank" role="tabpanel">

                                                    <div id="newlink">
                                                        <div id="1">
                                                            <div class="row">

                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label for="jobTitle" class="form-label">Bank Name</label>
                                                                        <input type="text" name="bank_name" class="form-control" placeholder="Bank Name" value="<?php echo $item->bank_name ?>" />
                                                                        <span class="text-danger">
                                                                            <?php echo form_error('bank_name'); ?>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label for="companyName" class="form-label">Branch</label>
                                                                        <input type="text" name="branch_name" class="form-control" placeholder="Branch" value="<?php echo $item->branch_name ?>" />
                                                                        <span class="text-danger">
                                                                            <?php echo form_error('branch_name'); ?>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label for="experienceYear" class="form-label">City</label>
                                                                        <input type="text" name="city" class="form-control" placeholder="Branch" value="<?php echo $item->city ?>" />
                                                                        <span class="text-danger">
                                                                            <?php echo form_error('city'); ?>
                                                                        </span>

                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label for="jobDescription" class="form-label">Account Number</label>
                                                                        <input type="text" name="account" class="form-control" placeholder="Account Number" value="<?php echo $item->account ?>">
                                                                        <span class="text-danger">
                                                                            <?php echo form_error('account'); ?>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label for="jobDescription" class="form-label">IFSC Code</label>
                                                                        <input type="text" name="code" class="form-control" placeholder="IFSC Code" value="<?php echo $item->code ?>">
                                                                        <span class="text-danger">
                                                                            <?php echo form_error('code'); ?>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label for="jobDescription" class="form-label">Account type</label>
                                                                        <input type="text" name="acc_type" class="form-control" placeholder="Account type" value="<?php echo $item->acc_type ?>">
                                                                        <span class="text-danger">
                                                                            <?php echo form_error('acc_type'); ?>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->

                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--  -->
                                                <div class="tab-pane" id="nominee" role="tabpanel">


                                                    <div class="row">

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="jobTitle" class="form-label">Nominee Name</label>
                                                                    <input type="text" name="first_nominee" class="form-control" placeholder="1st Nominee Name" value="<?php echo $item->acc_type ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('first_nominee'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="companyName" class="form-label">Address</label>
                                                                    <input type="text" name="first_address" class="form-control" placeholder="Address" value="<?php echo $item->first_address ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('first_address'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="experienceYear" class="form-label">%Share</label>
                                                                    <input type="text" name="first_share" class="form-control" placeholder="Share" value="<?php echo $item->first_share ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('first_share'); ?>
                                                                    </span>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">

                                                                    <input type="text" name="second_nominee" class="form-control" placeholder="2nd Nominee Name" value="<?php echo $item->second_nominee ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('second_nominee'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <input type="text" name="second_address" class="form-control" placeholder="Address" value="<?php echo $item->second_address ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('second_address'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <input type="text" name="second_share" class="form-control" placeholder="Share" value="<?php echo $item->second_share ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('second_share'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">

                                                                    <input type="text" name="third_nominee" class="form-control" placeholder="3rd Nominee Name" value="<?php echo $item->third_nominee ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('third_nominee'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <input type="text" name="third_address" class="form-control" placeholder="Address" value="<?php echo $item->third_address ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('third_address'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <input type="text" name="third_share" class="form-control" placeholder="Share" value="<?php echo $item->third_share ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('third_share'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">

                                                                    <input type="text" name="four_nominee" class="form-control" placeholder="4th Nominee Name" value="<?php echo $item->four_nominee ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('four_nominee'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <input type="text" name="four_address" class="form-control" placeholder="Address" value="<?php echo $item->four_address ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('four_address'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <input type="text" name="four_share" class="form-control" placeholder="Share" value="<?php echo $item->four_share ?>" />
                                                                    <span class="text-danger">
                                                                        <?php echo form_error('four_share'); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2">
                                                            <button type="submit" class="btn btn-success">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end tab-pane-->

                                            </div>

                                        </form>

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


</html>