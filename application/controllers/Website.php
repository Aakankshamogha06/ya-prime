<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('admin/Blog_detail_model', 'Blog_detail_model');
        $this->load->model('admin/seo_model', 'seo_model');
    }

    public function index()
    {
        $data['seo_view'] = $this->seo_model->seo_view();
        $this->load->view('frontend/include/header',$data);
        $this->load->view('frontend/index',$data);
        $this->load->view('frontend/include/footer');
    }
    
    public function about_us()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/about-us');
        $this->load->view('frontend/include/footer');
    }

    public function blog_detail()
    {
        $data['blog_detail_view'] = $this->Blog_detail_model->blog_detail_data_nm();
        $data['blogs'] = $this->Blog_detail_model->get_recent_blogs( $limit = 3);
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog-detail',$data, $limit);
        $this->load->view('frontend/include/footer');
    }

    public function blog()
    {
        $data['blog_detail_view'] = $this->Blog_detail_model->blog_detail_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog',$data);
        $this->load->view('frontend/include/footer');
    }

    public function broker_setup()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/broker-setup');
        $this->load->view('frontend/include/footer');
    }

    public function career_details()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/career-details');
        $this->load->view('frontend/include/footer');
    }

    public function careers()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/careers');
        $this->load->view('frontend/include/footer');
    }

    public function contact_us()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact-us');
        $this->load->view('frontend/include/footer');
    }

    public function institutional_clients()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/institutional-clients');
        $this->load->view('frontend/include/footer');
    }

    public function liquidity()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/liquidity');
        $this->load->view('frontend/include/footer');
    }

    public function metatrader_support()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/metatrader-support');
        $this->load->view('frontend/include/footer');
    }

    public function our_team()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/our-team');
        $this->load->view('frontend/include/footer');
    }

    public function portfolio_details()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/portfolio-details');
        $this->load->view('frontend/include/footer');
    }

    public function portfolio()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/portfolio');
        $this->load->view('frontend/include/footer');
    }

    public function why_choose_us()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/why-choose-us');
        $this->load->view('frontend/include/footer');
    }
} 