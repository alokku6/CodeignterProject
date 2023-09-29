<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->has_userdata('authenticated')) {
            if ($this->session->userdata('authenticated') == '1') {
                // echo "You are uesr";
            }
        } else {
            $this->session->set_flashdata('status', 'Login first');
            redirect('login');
        }
    }


    function visitor_count()
    {
        return $this->db->count_all('application');
    }

}