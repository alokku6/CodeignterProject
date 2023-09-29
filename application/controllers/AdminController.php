<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Authentication');
    }
    public function index()
    {
        $data['h']= $this->Authentication->visitor_count();
        $this->load->view('admin/dashboard', $data);
    }


}