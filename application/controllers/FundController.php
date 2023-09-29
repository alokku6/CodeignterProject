<?php
defined('BASEPATH') or exit('No direct script access allowed');


class FundController extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('form_validation');
    //     $this->load->library('session');
    //     $this->load->model('ServiceModel');

    // }

    public function index()
    {
        // $data['data'] = $this->ServiceModel->getServiceItems();
        $this->load->view('admin/fund');
    }


    // public function serviceCreate()
    // {
    //     $config = [
    //         'upload_path' => "assets/upload/",
    //         'allowed_types' => "jpg|png|jpeg|gif",
    //         'max_size' => "1024000",
    //         // file size , here it is 1 MB(1024 Kb)
    //     ];
    //     $this->load->library('upload', $config);
    //     $this->form_validation->set_rules('service', 'Service', 'required');

    //     if ($this->form_validation->run() && $this->upload->do_upload('image')) {
    //         $img = $this->upload->data();
    //         $image = $img['file_name'];
    //         $data = array(
    //             'service' => $this->input->post('service'),
    //             'image' => $image,
    //         );
    //         $service = new ServiceModel;
    //         $result = $service->InserService($data);

    //         if ($result) {
    //             $this->session->set_flashdata('success', 'You are Successfully Create Service');
    //             redirect('service');
    //         } else {
    //             $this->session->set_flashdata('status', 'Something Went Wrong! Please Try agin');
    //             redirect('service');
    //         }
    //     } else {
    //         $this->index();
    //     }
    // }

    // public function edit($id)
    // {
    //     $item = $this->ServiceModel->find_item($id);
    //     $this->load->view('admin/serviceEdit', array('item' => $item));
    // }

    // public function update($id)
    // {
    //     $this->form_validation->set_rules('service', 'Service', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->session->set_flashdata('errors', validation_errors());
    //         redirect('serviceEdit/' . $id);
    //     } else {
    //         $this->ServiceModel->update_item($id);
    //         $this->session->set_flashdata('success', 'Your Service Successfully Updated');
    //         redirect('service');
    //     }
    // }


    // public function delete($id)
    // {
    //     $this->ServiceModel->delete_item($id);
    //     $this->session->set_flashdata('success', 'Your Service Successfully Deleted');
    //     $this->index();
    // }
}
