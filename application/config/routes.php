<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'website';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'admin/auth';

// ADMIN PANEL
// blog_detail ****************
$route['blog_detail/add_blog_detail'] = 'admin/blog_detail/add_blog_detail';
$route['blog_detail/blog_detail_submit_data'] = 'admin/blog_detail/blog_detail_submit_data';
$route['blog_detail/view_blog_detail']        = 'admin/blog_detail/blog_detail_view';
$route['blog_detail/edit_blog_detail/(:any)'] = 'admin/blog_detail/blog_detail_edit/$1';
$route['blog_detail/blog_detail_update_data'] = 'admin/blog_detail/blog_detail_update_data';
$route['blog_detail/blog_detail_delete/(:any)'] = 'admin/blog_detail/blog_detail_delete/$1';

// blog_category ****************
$route['blog_category/add_blog_category'] = 'admin/blog_category/add_blog_category';
$route['blog_category/blog_category_submit_data'] = 'admin/blog_category/blog_category_submit_data';
$route['blog_category/view_blog_category']        = 'admin/blog_category/blog_category_view';
$route['blog_category/edit_blog_category/(:any)'] = 'admin/blog_category/blog_category_edit/$1';
$route['blog_category/blog_category_update_data'] = 'admin/blog_category/blog_category_update_data';
$route['blog_category/blog_category_delete/(:any)'] = 'admin/blog_category/blog_category_delete/$1';

// seo ****************
$route['seo/add_seo'] = 'admin/seo/add_seo';
$route['seo/seo_submit_data'] = 'admin/seo/seo_submit_data';
$route['seo/view_seo']        = 'admin/seo/seo_view';
$route['seo/edit_seo/(:any)'] = 'admin/seo/seo_edit/$1';
$route['seo/seo_update_data'] = 'admin/seo/seo_update_data';
$route['seo/seo_delete/(:any)'] = 'admin/seo/seo_delete/$1';

// contact_us ****************
$route['contact_us/add_contact_us'] = 'admin/contact_us/add_contact_us';
$route['contact_us/contact_us_submit_data'] = 'admin/contact_us/contact_us_submit_data';
$route['contact_us/view_contact_us']        = 'admin/contact_us/contact_us_view';
$route['contact_us/edit_contact_us/(:any)'] = 'admin/contact_us/contact_us_edit/$1';
$route['contact_us/contact_us_update_data'] = 'admin/contact_us/contact_us_update_data';
$route['contact_us/contact_us_delete/(:any)'] = 'admin/contact_us/contact_us_delete/$1';

// request_demo ****************
$route['request_demo/add_request_demo'] = 'admin/request_demo/add_request_demo';
$route['request_demo/request_demo_submit_data'] = 'admin/request_demo/request_demo_submit_data';
$route['request_demo/view_request_demo']        = 'admin/request_demo/request_demo_view';
$route['request_demo/edit_request_demo/(:any)'] = 'admin/request_demo/request_demo_edit/$1';
$route['request_demo/request_demo_update_data'] = 'admin/request_demo/request_demo_update_data';
$route['request_demo/request_demo_delete/(:any)'] = 'admin/request_demo/request_demo_delete/$1';

// request_quote ****************
$route['request_quote/add_request_quote'] = 'admin/request_quote/add_request_quote';
$route['request_quote/request_quote_submit_data'] = 'admin/request_quote/request_quote_submit_data';
$route['request_quote/view_request_quote']        = 'admin/request_quote/request_quote_view';
$route['request_quote/edit_request_quote/(:any)'] = 'admin/request_quote/request_quote_edit/$1';
$route['request_quote/request_quote_update_data'] = 'admin/request_quote/request_quote_update_data';
$route['request_quote/request_quote_delete/(:any)'] = 'admin/request_quote/request_quote_delete/$1';

// WEBSITE
$route['about-us'] = 'website/about_us';
$route['blog/(:any)'] = 'website/blog_detail/$1';
$route['blog'] = 'website/blog';
$route['metatrader-setup'] = 'website/metatrader_setup';
$route['career-details'] = 'website/career_details';
$route['careers'] = 'website/careers';
$route['contact-us'] = 'website/contact_us';
$route['index'] = 'website/index';
$route['institutional-account'] = 'website/institutional_account';
$route['liquidity'] = 'website/liquidity';
$route['metatrader-support'] = 'website/metatrader_support';
$route['our-team'] = 'website/our_team';
$route['portfolio-details'] = 'website/portfolio_details';
$route['portfolio'] = 'website/portfolio';
$route['why-choose-us'] = 'website/why_choose_us';
$route['disclaimer'] = 'website/disclaimer';
$route['terms-and-conditions'] = 'website/terms_and_conditions';
$route['privacy-policy'] = 'website/privacy_policy';
$route['white-label'] = 'website/white_label';