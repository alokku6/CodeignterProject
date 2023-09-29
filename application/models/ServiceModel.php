<?php

class ServiceModel extends CI_Model
{
    public function InserService($data)
    {
        return $this->db->insert('service', $data);
    }

    public function getServiceItems()
    {
        $query = $this->db->get("service");
        return $query->result();
    }

    public function find_item($id)
    {
        return $this->db->get_where('service', array('id' => $id))->row();
    }

    public function update_item($id)
    {
        $data = array(
            'service' => $this->input->post('service'),
        );
        if ($id == 0) {
            return $this->db->insert('service', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('service', $data);
        }
    }

    public function delete_item($id)
    {
        return $this->db->delete('service', array('id' => $id));
    }
}