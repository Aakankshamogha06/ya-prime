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
        $data['captcha'] = $this->generate_captcha();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact-us',$data);
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
   public function check_captcha($str)
{
    $user_input = strtolower($str);
    $captcha_code = strtolower($this->session->userdata('captcha_code'));

    if ($user_input === $captcha_code) {
        return TRUE;
    } else {
        $this->form_validation->set_message('check_captcha', 'The CAPTCHA code entered is incorrect.');
        return FALSE;
    }
}


    private function generate_captcha()
    {

        $captcha_code = substr(md5(uniqid(mt_rand(), true)), 0, 5);

        $this->session->set_userdata('captcha_code', $captcha_code);

        $data['captcha']['image'] = $this->create_captcha_image($captcha_code);

        return $data['captcha'];


    }

    private function create_captcha_image($captcha_code)
    {

        $img_width = 282;
        $img_height = 37;
        $font_size = 22;
        $image = imagecreatetruecolor($img_width, $img_height);
        $background_color = imagecolorallocate($image, 249, 195, 17);
        $text_color = imagecolorallocate($image, 1, 1, 1);
        imagefill($image, 0, 0, $background_color);
        imagestring($image, 5, 10, 8, $captcha_code, $text_color);
        ob_start();
        imagepng($image);
        $image_data = ob_get_clean();
        imagedestroy($image);
        $base64_image = 'data:image/png;base64,' . base64_encode($image_data);
        return $base64_image;
    }
} 