<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
       
        
    }

    public function index()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/index');
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
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog-detail');
        $this->load->view('frontend/include/footer');
    }

    public function blog()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog');
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