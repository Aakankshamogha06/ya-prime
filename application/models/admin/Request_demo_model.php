<?php
class Request_demo_model extends CI_Model
{
    public function request_demo_data_submit($data)
    {
        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'country' => $data['country'],
            'message' => $data['message'],
        ];
        return $this->db->insert('request_demo', $data);
    }

    public function request_demo_view()
    {
        $query = $this->db->get('request_demo');
        return $query->result();
    }

    public function request_demo_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('request_demo');
    }

    public function request_demo_update_data($data)
    {
        $this->db->where('id', $data['id']);
        return $this->db->update('request_demo', $data);
    }

    public function request_demo_edit($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('request_demo');
        return $query->row();
    }
}
?>
