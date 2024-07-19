<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_detail extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'form', 'cookie', 'security']);
        $this->load->library(['pagination', 'session', 'email', 'form_validation', 'encryption', 'upload']);
        $this->load->model('admin/Blog_detail_model', 'Blog_detail_model');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_blog_detail()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/blog_detail/add_blog_detail';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function blog_detail_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->input->post()) {
                $data = $this->input->post();
                $config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('blog_image')) {
                    $uploadData = $this->upload->data();
                    $blog_image = $uploadData['file_name'];
                    if ($this->Blog_detail_model->blog_detail_data_submit($data, $blog_image)) {
                        redirect("admin/blog_detail/blog_detail_view");
                    } else {
                        $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
                    }
                } else {
                    $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> ' . $this->upload->display_errors() . '</div>';
                }
                $this->load->view('admin/blog_detail/add_blog_detail', $data);
            }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function blog_detail_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['blog_detail_view'] = $this->Blog_detail_model->blog_detail_view();
            $data['view'] = 'admin/blog_detail/view_blog_detail';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function blog_detail_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_blog_detail'] = $this->Blog_detail_model->blog_detail_edit($id);
            $data['view'] = 'admin/blog_detail/edit_blog_detail';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function blog_detail_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->input->post()) {
                $data = $this->input->post();
                $config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('blog_image')) {
                    $uploadData = $this->upload->data();
                    $blog_image = $uploadData['file_name'];
                } else {
                    $blog_image = $data['existing_blog_image']; // Use existing image if upload fails
                }

                if ($this->Blog_detail_model->blog_detail_update_data($data, $blog_image)) {
                    redirect("admin/blog_detail/blog_detail_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
                }
                $this->load->view('admin/blog_detail/edit_blog_detail', $data);
            }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function blog_detail_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->Blog_detail_model->blog_detail_delete($id)) {
                redirect("admin/blog_detail/blog_detail_view");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
