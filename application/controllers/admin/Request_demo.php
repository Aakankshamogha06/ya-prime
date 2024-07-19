<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request_demo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('email');
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('admin/Request_demo_model','Request_demo_model');
        $this->load->helper('security');

        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_request_demo()
    {
        $data['view'] = 'admin/include/request_demo';
        $this->load->view('admin/layout', $data);
    }

    public function request_demo_submit_data()
    {
        if ($this->input->post()) {
            $data = $this->input->post();

            if ($this->Request_demo_model->request_demo_data_submit($data)) {
                redirect(base_url());
            } else {
                $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                $this->load->view('admin/include/request_demo', $data); // Load the form view with error message
            }
        } else {
            $this->add_request_demo(); // Load the form view if no POST data
        }
    }

    public function request_demo_view()
    {
        $data['request_demo_view'] = $this->Request_demo_model->request_demo_view();
        $data['view'] = 'admin/request_demo/view_request_demo';
        $this->load->view('admin/layout', $data);
    }

    public function request_demo_edit($id)
    {
        $id = $this->uri->segment(4);
        $data['view_request_demo'] = $this->Request_demo_model->request_demo_edit($id);
        $data['view'] = 'admin/request_demo/edit_request_demo';
        $this->load->view('admin/layout', $data);
    }

    public function request_demo_update_data()
    {
        if ($this->input->post()) {
            $data = $this->input->post();

            if ($this->Request_demo_model->request_demo_update_data($data)) {
                redirect("admin/request_demo/request_demo_view");
            } else {
                $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                $this->load->view('admin/request_demo/edit_request_demo', $data);
            }
        }
    }

    public function request_demo_delete($id)
    {
        $id = $this->uri->segment(4);

        if ($this->Request_demo_model->request_demo_delete($id)) {
            redirect("admin/request_demo/request_demo_view");
        }
    }
}
?>
