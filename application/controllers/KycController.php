<?php
defined('BASEPATH') or exit('No direct script access allowed');


class KycController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('KycModel');
    }
    public function index()
    {
        $data['data'] = $this->KycModel->get_itemCRUD();
        $this->load->view('admin/kycApplication', $data);
    }




    public function create()
    {
        $config = [
            'upload_path' => "assets/application-img/",
            'allowed_types' => "jpg|png|jpeg|gif",
            'max_size' => "1024000",
            // file size , here it is 1 MB(1024 Kb)
        ];
        $this->load->library('upload', $config);
        $this->form_validation->set_rules('applicant_no', 'Applicant No', 'required');
        $this->form_validation->set_rules('product', 'Product Name', 'required');
        $this->form_validation->set_rules('doa', 'Date of Application', 'required');
        $this->form_validation->set_rules('applicant_name', 'Applicant Name', 'required');
        $this->form_validation->set_rules('father_spouse', 'Father Spouse Name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('status', 'Marital Status', 'required');
        $this->form_validation->set_rules('nation', 'Nationality', 'required');
        $this->form_validation->set_rules('other_nation', 'Nationality');
        $this->form_validation->set_rules('mobile', 'Mobile No', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
        $this->form_validation->set_rules('email', 'Email Id', 'required');
        $this->form_validation->set_rules('adhar_card', 'Adhar Card', 'required');
        $this->form_validation->set_rules('pan_card', 'Pan Card', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('applicant_no', 'Applicant No', 'required');
        $this->form_validation->set_rules('sec_applicant', 'Name of Applicant', 'required');
        $this->form_validation->set_rules('sec_adhar', 'Adhar Card Number', 'required');
        $this->form_validation->set_rules('sec_pan', 'Pan Card Number', 'required');
        $this->form_validation->set_rules('sec_address', 'Address', 'required');
        $this->form_validation->set_rules('thr_applicant', 'Name of Applicant', 'required');
        $this->form_validation->set_rules('thr_adhar', 'Adhar Card Number', 'required');
        $this->form_validation->set_rules('thr_pan', 'Pan Card Number', 'required');
        $this->form_validation->set_rules('thr_address', 'Address', 'required');
        $this->form_validation->set_rules('received_name', 'Received Name', 'required');
        $this->form_validation->set_rules('allotment', 'Allotment', 'required');
        $this->form_validation->set_rules('plan', 'Plan', 'required');
        $this->form_validation->set_rules('option', 'Option', 'required');
        $this->form_validation->set_rules('cheque', 'Cheque', 'required');
        $this->form_validation->set_rules('dated', 'Dated', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('bank_branch', 'Bank Or Branch', 'required');
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('branch_name', 'Branch Name', 'required');
        $this->form_validation->set_rules('city', 'Bank city', 'required');
        $this->form_validation->set_rules('account', 'Account Number', 'required');
        $this->form_validation->set_rules('code', 'IFSC Code', 'required');
        $this->form_validation->set_rules('acc_type', 'Type Of Account', 'required');
        $this->form_validation->set_rules('first_nominee', 'First Nominee Name');
        $this->form_validation->set_rules('first_address', 'First Address');
        $this->form_validation->set_rules('first_share', 'First Share');
        $this->form_validation->set_rules('second_nominee', 'Second Nominee Name');
        $this->form_validation->set_rules('second_address', 'Second Address');
        $this->form_validation->set_rules('second_share', 'Second Share');
        $this->form_validation->set_rules('third_nominee', 'Third Nominee Name');
        $this->form_validation->set_rules('third_address', 'Third Address');
        $this->form_validation->set_rules('third_share', 'Third Share');
        $this->form_validation->set_rules('four_nominee', 'Four Nominee Name');
        $this->form_validation->set_rules('four_address', 'Four Address');
        $this->form_validation->set_rules('four_share', 'Four Share');
        $this->form_validation->set_rules('agree', 'Checked', 'required');


        if ($this->form_validation->run() && $this->upload->do_upload('image')) {

            function random_password($length = 8)
            {
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+=-<>?/,.';
                $password = str_shuffle($alphabet);
                return substr($password, 0, $length);
            }
            $password = random_password(10);
            $img = $this->upload->data();
            $image = $img['file_name'];
            $data = array(
                'applicant_no' => $this->input->post('applicant_no'),
                'product' => $this->input->post('product'),
                'password' => $password,
                'doa' => $this->input->post('doa'),
                'applicant_name' => $this->input->post('applicant_name'),
                'father_spouse' => $this->input->post('father_spouse'),
                'gender' => $this->input->post('gender'),
                'status' => $this->input->post('status'),
                'nation' => $this->input->post('nation'),
                'other_nation' => $this->input->post('other_nation'),
                'mobile' => $this->input->post('mobile'),
                'dob' => $this->input->post('dob'),
                'email' => $this->input->post('email'),
                'adhar_card' => $this->input->post('adhar_card'),
                'pan_card' => $this->input->post('pan_card'),
                'address' => $this->input->post('address'),
                'image' => $image,
                'sec_applicant' => $this->input->post('sec_applicant'),
                'sec_adhar' => $this->input->post('sec_adhar'),
                'sec_pan' => $this->input->post('sec_pan'),
                'sec_address' => $this->input->post('sec_address'),
                'thr_applicant' => $this->input->post('thr_applicant'),
                'thr_adhar' => $this->input->post('thr_adhar'),
                'thr_pan' => $this->input->post('thr_pan'),
                'thr_address' => $this->input->post('thr_address'),
                'received_name' => $this->input->post('received_name'),
                'allotment' => $this->input->post('allotment'),
                'plan' => $this->input->post('plan'),
                'option' => $this->input->post('option'),
                'cheque' => $this->input->post('cheque'),
                'dated' => $this->input->post('dated'),
                'amount' => $this->input->post('amount'),
                'bank_branch' => $this->input->post('bank_branch'),
                'bank_name' => $this->input->post('bank_name'),
                'branch_name' => $this->input->post('branch_name'),
                'city' => $this->input->post('city'),
                'account' => $this->input->post('account'),
                'code' => $this->input->post('code'),
                'acc_type' => $this->input->post('acc_type'),
                'first_nominee' => $this->input->post('first_nominee'),
                'first_address' => $this->input->post('first_address'),
                'first_share' => $this->input->post('first_share'),
                'second_nominee' => $this->input->post('second_nominee'),
                'second_address' => $this->input->post('second_address'),
                'second_share' => $this->input->post('second_share'),
                'third_nominee' => $this->input->post('third_nominee'),
                'third_address' => $this->input->post('third_address'),
                'third_share' => $this->input->post('third_share'),
                'four_nominee' => $this->input->post('four_nominee'),
                'four_address' => $this->input->post('four_address'),
                'four_share' => $this->input->post('four_share'),
                'agree' => $this->input->post('agree'),


            );
            $applicant = new KycModel;
            $result = $applicant->KycInsert($data);

            if ($result) {
                $this->session->set_flashdata('success', 'You are Successfully Create KYC Application');
                redirect('KycFrom');
            } else {
                $this->session->set_flashdata('status', 'Something Went Wrong! Please Try agin');
                redirect('KycFrom');
            }
        } else {
            $this->index();
        }
    }



    public function uploadSign()
    {
        $config = [
            'upload_path' => "assets/application-sign/",
            'allowed_types' => "jpg|png|jpeg",
            'max_size' => "1024000",
            // file size , here it is 1 MB(1024 Kb)
        ];
        $this->load->library('upload', $config);
        $this->form_validation->set_rules('applicant_no', 'Applicant No', 'required');



        if ($this->form_validation->run() && $this->upload->do_upload('sign')) {
            $img = $this->upload->data();
            $image = $img['file_name'];
            $data = array(
                'applicant_no' => $this->input->post('applicant_no'),

                'sign' => $image,
            );
            $res = new KycModel;
            $result = $res->signInsert($data);

            if ($result) {
                $this->session->set_flashdata('success', 'You are Successfully Upload Signature');
                redirect('KycFrom');
            } else {
                $this->session->set_flashdata('status', 'Something Went Wrong! Please Try agin');
                redirect('KycFrom');
            }
        } else {
            $this->index();
        }
    }


    public function show()
    {
        $data['data'] = $this->KycModel->getItems();
        $this->load->view('admin/viewApplication', $data);
    }

    public function edit($id)
    {
        $item = $this->KycModel->getKyc($id);
        $this->load->view('admin/editApplication', array('item' => $item));
    }

    public function update($id)
    {
        $this->form_validation->set_rules('applicant_no', 'Applicant No', 'required');
        $this->form_validation->set_rules('doa', 'Date of Application', 'required');
        $this->form_validation->set_rules('applicant_name', 'Applicant Name', 'required');
        $this->form_validation->set_rules('father_spouse', 'Father Spouse Name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('status', 'Marital Status', 'required');
        $this->form_validation->set_rules('nation', 'Nationality', 'required');
        $this->form_validation->set_rules('other_nation', 'Nationality');
        $this->form_validation->set_rules('mobile', 'Mobile No', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
        $this->form_validation->set_rules('email', 'Email Id', 'required');
        $this->form_validation->set_rules('adhar_card', 'Adhar Card', 'required');
        $this->form_validation->set_rules('pan_card', 'Pan Card', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('sec_applicant', 'Name of Applicant', 'required');
        $this->form_validation->set_rules('sec_adhar', 'Adhar Card Number', 'required');
        $this->form_validation->set_rules('sec_pan', 'Pan Card Number', 'required');
        $this->form_validation->set_rules('sec_address', 'Address', 'required');
        $this->form_validation->set_rules('thr_applicant', 'Name of Applicant', 'required');
        $this->form_validation->set_rules('thr_adhar', 'Adhar Card Number', 'required');
        $this->form_validation->set_rules('thr_pan', 'Pan Card Number', 'required');
        $this->form_validation->set_rules('thr_address', 'Address', 'required');
        $this->form_validation->set_rules('received_name', 'Received Name', 'required');
        $this->form_validation->set_rules('allotment', 'Allotment', 'required');
        $this->form_validation->set_rules('plan', 'Plan', 'required');
        $this->form_validation->set_rules('option', 'Option', 'required');
        $this->form_validation->set_rules('cheque', 'Cheque', 'required');
        $this->form_validation->set_rules('dated', 'Dated', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('bank_branch', 'Bank Or Branch', 'required');
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('branch_name', 'Branch Name', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('account', 'Account No.', 'required');
        $this->form_validation->set_rules('code', 'IFSC Code', 'required');
        $this->form_validation->set_rules('acc_type', 'Account Type', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect('editApplication/' . $id);
        } else {
            $this->KycModel->update_item($id);
            $this->session->set_flashdata('success', 'Your Service Successfully Updated Application');
            redirect('viewApplication');
        }
    }





    public function delete($id)
    {
        $this->KycModel->delete_item($id);
        $this->session->set_flashdata('success', 'Your Application Successfully Deleted');
        redirect('viewApplication');
    }
}
