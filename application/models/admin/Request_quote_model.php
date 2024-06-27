<?php
class Request_quote_model extends CI_Model
{
    public function request_quote_data_submit($data)
    {
        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'country' => $data['country'],
            'areyoua' => $data['areyoua'],
            'products' => $data['products'],
            'qoute' => $data['qoute'],
            'message' => $data['message'],
        ];
        return $this->db->insert('request_quote', $data);
    }

    public function request_quote_view()
    {
        $query = $this->db->get('request_quote');
        return $query->result();
    }

    public function request_quote_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('request_quote');
    }

    public function request_quote_update_data($data)
    {
        $this->db->where('id', $data['id']);
        return $this->db->update('request_quote', $data);
    }

    public function request_quote_edit($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('request_quote');
        return $query->row();
    }
}
?>
