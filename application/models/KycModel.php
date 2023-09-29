<?php

class KycModel extends CI_Model
{
    public function get_itemCRUD()
    {
        // if (!empty($this->input->get("search"))) {
        //     $this->db->like('id', $this->input->get("search"));
        //     $this->db->or_like('applicant_no', $this->input->get("search"));
        // }
        // $query = $this->db->get("application");
        // return $query->result();
        $this->db->select('*')
            ->from('service')
            ->order_by('id', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            return $query->result();
        }

        return false;
    }


    public function KycInsert($data)
    {
        return $this->db->insert('application', $data);
    }


    public function getItems()
    {
        $query = $this->db->get("application");
        return $query->result();
    }

    public function getKyc($id)
    {
        return $this->db->get_where('application', array('id' => $id))->row();
    }

    public function update_item($id)
    {

        $data = array(
            'applicant_no' => $this->input->post('applicant_no'),
            'doa' => $this->input->post('doa'),
            'applicant_name' => $this->input->post('applicant_name'),
            'father_spouse' => $this->input->post('father_spouse'),
            'gender' => $this->input->post('gender'),
            'status' => $this->input->post('status'),
            'nation' => $this->input->post('nation'),
            'other_nation' => $this->input->post('other_nation'),
            'dob' => $this->input->post('dob'),
            'email' => $this->input->post('email'),
            'adhar_card' => $this->input->post('adhar_card'),
            'pan_card' => $this->input->post('pan_card'),
            'address' => $this->input->post('address'),
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


        );
        if ($id == 0) {
            return $this->db->insert('application', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('application', $data);
        }
    }





















    public function delete_item($id)
    {
        return $this->db->delete('application', array('id' => $id));
    }
}
