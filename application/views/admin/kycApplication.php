<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">



<head>

  <meta charset="utf-8" />
  <title>Dashboard | KYC Application</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- jsvectormap css -->
  <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

  <!--Swiper slider css-->
  <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
        <div class="container-fluid">
          <!-- start page title -->
          <div class="row">
            <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Create KYC Application</h4>

                <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Manage KYC</a></li>
                    <li class="breadcrumb-item active">Create KYC Application</li>
                  </ol>
                </div>

              </div>
            </div>
          </div>
          <!-- end page title -->

          <!-- <div class="row">
            <?php if ($this->session->flashdata('success')) :
            ?>
              <div id="sa-success">
                <strong>
                  <?= $this->session->flashdata('success'); ?>
                </strong>
              </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('status')) :
            ?>
              <div class="alert alert-warning alert-solid" role="alert">
                <strong>
                  <?= $this->session->flashdata('status'); ?>
                </strong>
              </div>
            <?php endif; ?> -->

          <!--end col-->
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
                <form action="<?= base_url('kycApplication'); ?>" method="post" enctype="multipart/form-data">
                  <div class="tab-content">
                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <label for="">Choose Product</label>
                          <select name="product" class="form-control">
                            <option value=""> -- Select Product -- </option>
                            <?php foreach ($data as $item) : ?>
                              <option name="" value="<?php echo $item->service; ?>">
                                <?php echo $item->service; ?>
                              </option>
                            <?php endforeach; ?>
                          </select>
                          <span class="text-danger">
                            <?php echo form_error('product'); ?>
                          </span>
                        </div>
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="firstnameInput" class="form-label">Application No.</label>
                            <input type="text" class="form-control" name="applicant_no" placeholder="Enter Application No" />
                            <span class="text-danger">
                              <?php echo form_error('applicant_no'); ?>
                            </span>
                          </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="lastnameInput" class="form-label">Date</label>
                            <input type="date" class="form-control" name="doa" />
                            <span class="text-danger">
                              <?php echo form_error('doa'); ?>
                            </span>
                          </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="phonenumberInput" class="form-label">Name Of Applicant</label>
                            <input type="text" class="form-control" name="applicant_name" placeholder="Enter Applicant Name" />
                            <span class="text-danger">
                              <?php echo form_error('applicant_name'); ?>
                            </span>
                          </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="emailInput" class="form-label">Father' Name/Spouse Name</label>
                            <input type="text" class="form-control" name="father_spouse" placeholder="Father' Name/Spouse Name " />
                            <span class="text-danger">
                              <?php echo form_error('father_spouse'); ?>
                            </span>
                          </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                          <div class="mb-3">
                            <label for="JoiningdatInput" class="form-label">Gender</label>
                            <input type="radio" name="gender" value="Male" /> Male
                            <input type="radio" name="gender" value="Female" /> Female
                            <input type="radio" name="gender" value="Other"> Other
                          </div>
                          <span class="text-danger">
                            <?php echo form_error('gender'); ?>
                          </span>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                          <div class="mb-3">
                            <label for="skillsInput" class="form-label">Marital Status</label>
                            <input type="radio" name="status" value="Single" /> Single
                            <input type="radio" name="status" value="Married" /> Married
                            <input type="radio" name="status" value="Other" /> Other
                          </div>
                          <span class="text-danger">
                            <?php echo form_error('status'); ?>
                          </span>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                          <div class="mb-3">
                            <label for="designationInput" class="form-label">Nationality</label>
                            <input type="radio" name="nation" value="Other" /> Indian
                            <input type="radio" name="nation" value="Other" /> Other
                            <input type="text" name="other_nation" class="form-control" placeholder="if you Chooose Other Write Country Name" />
                          </div>
                          <span class="text-danger">
                            <?php echo form_error('nation'); ?>
                          </span>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="designationInput" class="form-label">Date Of Birth</label>
                            <input type="date" name="dob" class="form-control" />
                          </div>
                          <span class="text-danger">
                            <?php echo form_error('dob'); ?>
                          </span>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="designationInput" class="form-label">Mobile No.</label>
                            <input type="tel" name="mobile" class="form-control" placeholder="+91-XXXXXXXX" />
                          </div>
                          <span class="text-danger">
                            <?php echo form_error('mobile'); ?>
                          </span>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="designationInput" class="form-label">Email ID</label>
                            <input type="email" name="email" class="form-control" placeholder="+91-XXXXXXXX" />
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
                                <input type="text" name="adhar_card" class="form-control" placeholder="Adhar Card Number" />
                                <span class="text-danger">
                                  <?php echo form_error('adhar_card'); ?>
                                </span>
                              </div>

                              <div class="col-md-6">
                                <label for="designationInput" class="form-label">Pan Card</label>
                                <input type="text" name="pan_card" class="form-control" placeholder="Pan Card Number" />
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
                            <textarea class="form-control" name="address" placeholder="Enter your full Address" rows="3"></textarea>
                            <span class="text-danger">
                              <?php echo form_error('address'); ?>
                            </span>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="mb-3 pb-2">
                            <label for="" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" name="image" />
                            <span class="text-danger">
                              <?php echo form_error('image'); ?>
                            </span>
                          </div>
                        </div>
                        <!--end col-->


                        <!--end col-->
                      </div>

                      <!--end row-->
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="secondHolder" role="tabpanel">

                      <div class="row g-2">
                        <div class="col-md-12 mb-3">
                          <label for="" class="form-label">Name Of The Applicant</label>
                          <input type="text" class="form-control" name="sec_applicant" placeholder="Enter Name of Applicant">
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
                              <input type="text" class="form-control" name="sec_adhar" placeholder="Adhar Card Number">
                              <span class="text-danger">
                                <?php echo form_error('sec_adhar'); ?>
                              </span>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="" class="form-label">Pan Card</label>
                              <input type="text" class="form-control" name="sec_pan" placeholder="Pan Card Number">
                              <span class="text-danger">
                                <?php echo form_error('sec_pan'); ?>
                              </span>
                            </div>
                          </div>
                        </div>
                        <!--end col-->
                        <div class="mb-3 pb-2">
                          <label for="exampleFormControlTextarea" class="form-label">Address</label>
                          <textarea class="form-control" name="sec_address" placeholder="Enter your full Address" rows="3"></textarea>
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
                          <input type="text" class="form-control" name="thr_applicant" placeholder="Enter Name Of Applicant">
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
                              <input type="text" class="form-control" name="thr_adhar" placeholder="Adhar Card Number">
                              <span class="text-danger">
                                <?php echo form_error('thr_adhar'); ?>
                              </span>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="" class="form-label">Pan Card</label>
                              <input type="text" class="form-control" name="thr_pan" placeholder="Pan Card Number">
                              <span class="text-danger">
                                <?php echo form_error('thr_pan'); ?>
                              </span>
                            </div>
                          </div>
                        </div>
                        <!--end col-->
                        <div class="mb-3 pb-2">
                          <label for="exampleFormControlTextarea" class="form-label">Address</label>
                          <textarea class="form-control" name="thr_address" placeholder="Enter your full Address" rows="3"></textarea>
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
                            <input type="text" class="form-control" name="received_name" placeholder="Received From MR./MRS. Ms" />
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
                            <input type="text" class="form-control" name="allotment" placeholder="Enter An Applicantion For Allotment Scheme" />
                            <span class="text-danger">
                              <?php echo form_error('allotment'); ?>
                            </span>
                          </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                          <div>
                            <label for="" class="form-label">Plan</label>
                            <input type="text" class="form-control" name="plan" placeholder="Plan" />
                            <span class="text-danger">
                              <?php echo form_error('plan'); ?>
                            </span>
                          </div>

                        </div>
                        <div class="col-lg-6">
                          <div>
                            <label for="" class="form-label">Option</label>
                            <input type="text" class="form-control" name="option" placeholder="Option" />
                            <span class="text-danger">
                              <?php echo form_error('option'); ?>
                            </span>
                          </div>

                        </div>
                        <div class="col-lg-6">
                          <div>
                            <label for="confirmpasswordInput" class="form-label">Vide Cheque No.</label>
                            <input type="text" class="form-control" name="cheque" placeholder="Cheque No." />
                            <span class="text-danger">
                              <?php echo form_error('cheque'); ?>
                            </span>
                          </div>

                        </div>
                        <div class="col-lg-6">
                          <div>
                            <label for="" class="form-label">Dated</label>
                            <input type="date" class="form-control" name="dated" />
                            <span class="text-danger">
                              <?php echo form_error('dated'); ?>
                            </span>
                          </div>

                        </div>
                        <div class="col-lg-6">
                          <div>
                            <label for="confirmpasswordInput" class="form-label">Amount (RS)</label>
                            <input type="text" class="form-control" name="amount" placeholder="Amount (Rs.)" />
                            <span class="text-danger">
                              <?php echo form_error('amount'); ?>
                            </span>
                          </div>

                        </div>
                        <div class="col-lg-12">
                          <div>
                            <label for="" class="form-label">Drawn on bank and branch</label>
                            <input type="text" class="form-control" name="bank_branch" placeholder="Drawn on bank and branch" />
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
                                <input type="text" name="bank_name" class="form-control" placeholder="Bank Name" />
                                <span class="text-danger">
                                  <?php echo form_error('bank_name'); ?>
                                </span>
                              </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="companyName" class="form-label">Branch</label>
                                <input type="text" name="branch_name" class="form-control" placeholder="Branch" />
                                <span class="text-danger">
                                  <?php echo form_error('branch_name'); ?>
                                </span>
                              </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="experienceYear" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" placeholder="Branch" />
                                <span class="text-danger">
                                  <?php echo form_error('city'); ?>
                                </span>

                              </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="jobDescription" class="form-label">Account Number</label>
                                <input type="text" name="account" class="form-control" placeholder="Account Number">
                                <span class="text-danger">
                                  <?php echo form_error('account'); ?>
                                </span>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="jobDescription" class="form-label">IFSC Code</label>
                                <input type="text" name="code" class="form-control" placeholder="IFSC Code">
                                <span class="text-danger">
                                  <?php echo form_error('code'); ?>
                                </span>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="jobDescription" class="form-label">Account type</label>
                                <input type="text" name="acc_type" class="form-control" placeholder="Account type">
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
                              <input type="text" name="first_nominee" class="form-control" placeholder="1st Nominee Name" />
                              <span class="text-danger">
                                <?php echo form_error('first_nominee'); ?>
                              </span>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <label for="companyName" class="form-label">Address</label>
                              <input type="text" name="first_address" class="form-control" placeholder="Address" />
                              <span class="text-danger">
                                <?php echo form_error('first_address'); ?>
                              </span>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <label for="experienceYear" class="form-label">%Share</label>
                              <input type="text" name="first_share" class="form-control" placeholder="Share" />
                              <span class="text-danger">
                                <?php echo form_error('first_share'); ?>
                              </span>

                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="mb-3">

                              <input type="text" name="second_nominee" class="form-control" placeholder="2nd Nominee Name" />
                              <span class="text-danger">
                                <?php echo form_error('second_nominee'); ?>
                              </span>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <input type="text" name="second_address" class="form-control" placeholder="Address" />
                              <span class="text-danger">
                                <?php echo form_error('second_address'); ?>
                              </span>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <input type="text" name="second_share" class="form-control" placeholder="Share" />
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

                              <input type="text" name="third_nominee" class="form-control" placeholder="3rd Nominee Name" />
                              <span class="text-danger">
                                <?php echo form_error('third_nominee'); ?>
                              </span>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <input type="text" name="third_address" class="form-control" placeholder="Address" />
                              <span class="text-danger">
                                <?php echo form_error('third_address'); ?>
                              </span>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <input type="text" name="third_share" class="form-control" placeholder="Share" />
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

                              <input type="text" name="four_nominee" class="form-control" placeholder="4th Nominee Name" />
                              <span class="text-danger">
                                <?php echo form_error('four_nominee'); ?>
                              </span>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <input type="text" name="four_address" class="form-control" placeholder="Address" />
                              <span class="text-danger">
                                <?php echo form_error('four_address'); ?>
                              </span>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <input type="text" name="four_share" class="form-control" placeholder="Share" />
                              <span class="text-danger">
                                <?php echo form_error('four_share'); ?>
                              </span>
                            </div>
                          </div>
                          <!--end col-->
                        </div>
                      </div>
                      <!--end row-->
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="declaration" role="tabpanel">
                      <div class="row">
                        <p class="text-muted">
                          <input type="checkbox" name="agree" value="agree" checked />
                          I have read all the above points and all the provided information are valid and as per my
                          knowledge.
                        </p>
                        <span class="text-danger">
                          <?php echo form_error('agree'); ?>
                        </span>
                        <div class="col-lg-12">
                          <div class="hstack gap-2">
                            <button type="submit" class="btn btn-success">
                              submit
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!--end tab-pane-->
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!-- container-fluid -->
  </div>
  <!-- End Page-content -->

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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!--Swiper slider js-->
  <!-- <script src="assets/libs/swiper/swiper-bundle.min.js"></script> -->
  <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
  <script>
    $(document).ready(function() {

      <?php if ($this->session->flashdata('success')) :
      ?>
        Swal.fire({
          html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0"><?= $this->session->flashdata('success'); ?></p></div></div>',
          showCancelButton: !0,
          showConfirmButton: !1,
          cancelButtonClass: 'btn btn-primary w-xs mb-1',
          cancelButtonText: 'Done',
          buttonsStyling: !1,
          showCloseButton: !0
        })
      <?php endif; ?>
    });
    $(document).ready(function() {

      <?php if ($this->session->flashdata('status')) :
      ?>
        Swal.fire({
          html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Oops...!</h4><p class="text-muted mx-4 mb-0"><?= $this->session->flashdata('status'); ?></p></div></div>',
          showCancelButton: !0,
          showConfirmButton: !1,
          cancelButtonClass: 'btn btn-primary w-xs mb-1',
          cancelButtonText: 'Dismiss',
          buttonsStyling: !1,
          showCloseButton: !0
        })
      <?php endif; ?>
    });
  </script>


  <!-- Dashboard init -->
  <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

  <!-- App js -->
  <script src="assets/js/app.js"></script>
</body>



</html>