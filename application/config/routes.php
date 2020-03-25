<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/
$route['default_controller'] = "site/site";
$route['logout'] = "site/logout";
//$route['/login']="site/loginuser";(/:num)?
$route['tim-viec-lam.html(/:num)?']="site/ListJobByFilter";
$route['viec-lam-(:any)-(:any)-c(:num)p(:num).html(/:num)?']="site/ListJobByFilter/$1/$2/$3/$4";
$route['tim-viec-lam&keywork=(:any)?&dd=(:num)&nn=(:num)(/:num)?']="site/resultjobfilter/$1/$2/$3";
//viec-lam-kiem-toan-ke-toan-tai-ha-noi-c1p1.html
$route['danh-sach-nha-tuyen-dung/keywork=(:any)?&c=(:num)&n=(:num)&type=(:num)(/:num)?']="site/ListCompanyByFilter/$1/$2/$3/$4";
$route['dang-tin-tuyen-dung.html']="site/createjobfree";
//nha tuyen dung&
$route['nguoi-tim-viec.html(/:num)?']="site/ListCandidatebyfilter";
$route['ung-vien-(:any)-(:any)-u(:num)s(:num).html(/:num)?']="site/ListCandidatebyfilter/$1/$2/$3/$4";
$route['tim-ung-vien&keywork=(:any)?&dd=(:num)&nn=(:num)(/:num)?']="site/ResultSearchCandi/$1/$2/$3";
$route['(:any)-job(:num).html']="site/detailjob/$1/$2";
$route['hoan-thien-ho-so.html']="site/hoanthienhoso";
//http://localhost/timviec1/cong-ty-tnhh-xd-hqkt-hung-thinh-viet-ntd84309.html
//http://localhost/timviec1/nhan-vien-phoi-mau-job360415.html
$route['(:any)-ntd(:num).html']="site/DetailCompany/$1/$2";
$route['(:any)-dn(:num).html']="site/chitietcongty/$1/$2";
$route['ung-vien/(:any)-uv(:num).html']="site/DetailCandidate/$1/$2";
$route['dang-nhap']="site/login";
$route['cong-ty(/:num)?']="site/hosocongty";
$route['cong-ty&keywork=(:any)?(/:num)?']="site/hosocongty/$1";
$route['dang-ky']="site/register";
$route['kichhoattaikhoan&c=(:any)&u=(:any)&t=(:num)']="site/confirmuser/$1/$2/$3";
$route['/']="site/index";
$route['(:any)-(:num).html(/:num)?']="site/show_cat_sub/$1/$2";
$route['(:any)-b(:num).html'] = 'site/show_news/$1/$2';	
/* End of file routes.php */
/* Location: ./system/application/config/routes.php */