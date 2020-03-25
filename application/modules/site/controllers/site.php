<?php 
class site extends Controller
{	
	function site()
	{
		parent::Controller(); 		
		$this->load->model('site_model');	
		$this->load->helper('locdau');	
        $this->load->helper('resize');	
		$this->load->helper('images');	
		$this->load->helper('device');
		//$this->output->enable_profiler(TRUE);	
		//$this->load->library('resize-class');		
	}   	
	function index()
    {    	
		$data['home'] = true;		
		$sql=$this->site_model->gettblwidthid('tbl_meta',1);
		$data['meta_title']=$sql->title;
		$data['meta_key']=$sql->metakeywork;
		$data['meta_des']=$sql->metadesc;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        if(isset($_SESSION['UserInfo']) && (!empty($_SESSION['UserInfo']))){ 
            $data['arrlogin']=$_SESSION['UserInfo'];
            }else{
                $data['arrlogin']='';
            }
            
        $data['tinmoinhat']=$this->site_model->GetTopNew(10);
        $data['congtymoinhat']=$this->site_model->GetTopCompany(10);
        $data['ungviennoibat']=$this->site_model->GetListCandidate("1=1 ",5,'order by u.use_update_time desc');		
		$data['canonical']=base_url();	
		//$data['amp']=site_url('amp');
        $data['provincename']=(isset($_SESSION['provincename']))?$_SESSION['provincename']:'Hà Nội';
        $data['province']=(isset($_SESSION['province']))?$_SESSION['province']:'1';
		$data['robots']= 'index,follow';
        $data['cityselect']=$this->site_model->selectprovince('selectpickersearch','selectpickersearch','Địa điểm')	;	
        $data['content']='content';
        $data['classheader']='';		
        $this->load->view('template',$data);
    } 
    function GetListDistrict()
    {
        $province = $this->input->post('province');
        $result=$this->site_model->ListDistrictByProvince($province);
        if($result != null){
           echo json_encode(array('kq'=>$result)); 
        }else{
            echo json_encode(array('kq'=>''));
        }
        
    } 
    function register()
    {    	
		$data['home'] = true;		
		$sql=$this->site_model->gettblwidthid('tbl_footer',1);
		$data['meta_title']="Đăng ký tài khoản miễn phí tại website vieclam24h.net.vn";//$sql->meta_title;
		$data['meta_key']="Đăng ký tài khoản miễn phí tại website vieclam24h.net.vn";//$sql->meta_key;
		$data['meta_des']="Đăng ký tài khoản miễn phí tại website vieclam24h.net.vn";//$sql->meta_des;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }        	
		$data['canonical']=base_url();	
		$data['robots']= 'index,follow';
        	
        $data['content']='register';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
    }
    function hoanthienhoso()
    {
        $data['home'] = true;		
		$sql=$this->site_model->gettblwidthid('tbl_footer',1);
		$data['meta_title']="Hoàn thiện hồ sơ ứng viên tại vieclam24h.net.vn";//$sql->meta_title;
		$data['meta_key']="Hoàn thiện hồ sơ ứng viên tại website vieclam24h.net.vn";//$sql->meta_key;
		$data['meta_des']="Hoàn thiện hồ sơ ứng viên tại website vieclam24h.net.vn";//$sql->meta_des;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }        	
		$data['canonical']=base_url();	
		$data['robots']= 'index,follow';
        	
        $data['content']='hoanthienhoso';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
    }
    function createjobfree()
    {
        $data['home'] = true;
		$data['meta_title']="Đăng tin tuyển dụng miễn phí tại vieclam24h.net.vn";//$sql->meta_title;
		$data['meta_key']="Đăng tin tuyển dụng miễn phí tại website vieclam24h.net.vn";//$sql->meta_key;
		$data['meta_des']="Đăng tin tuyển dụng miễn phí tại website vieclam24h.net.vn";//$sql->meta_des;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }        	
		$data['canonical']=base_url();	
		$data['robots']= 'index,follow';
        	
        $data['content']='createjobfree';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
    }
    function confirmuser($code,$email,$type){
        $data['home'] = true;	
        //var_dump($code,$email,$type);	
		$sql=$this->site_model->gettblwidthid('tbl_footer',1);
		$data['meta_title']="Xác nhận đăng ký tài khoản vieclam24h.net.vn";//$sql->meta_title;
		$data['meta_key']="Xác nhận đăng ký tài khoản vieclam24h.net.vn";//$sql->meta_key;
		$data['meta_des']="Xác nhận đăng ký tài khoản vieclam24h.net.vn";//$sql->meta_des;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        $result=$this->site_model->getconfirmuser($code,$email,$type);	
        $data['itemconfirm']=$result;
		$data['canonical']=base_url();	
		$data['robots']= 'noindex,nofollow';        	
        $data['content']='confirmuser';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
    }
    function registercandi()
    {
        $hoten=$_POST['hoten'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $city=$_POST['city'];
        $ngaysinh=$_POST['ngaysinh'];
        $gioitinh=$_POST['gioitinh'];
        $honnhan=$_POST['honnhan'];
        $cvtitle=$_POST['cvtitle'];
        $bangcap=$_POST['bangcap'];
        $hinhthuclamviec=$_POST['hinhthuclamviec'];
        $capbac=$_POST['capbac'];
        $noilamvieckhac=$_POST['noilamvieckhac'];
        $nganhnghe=$_POST['nganhnghe'];
        //$extrann=['extrann'];
        $muctieu=$_POST['muctieu'];
        $kynang= preg_split('/[\n\r]+/', $_POST['kynang']);
        $diachi=$_POST['diachi'];
        $mucluong=$_POST['mucluong'];
        $kinhnghiem=$_POST['kinhnghiem'];
        $nganhnghe2=$_POST['nganhnghe2'];
        $nganhnghe1=$_POST['nganhnghe1'];
        // mới thêm
        $district=$_POST['district'];
        $school=$_POST['school'];
        $schooltype=$_POST['schooltype'];
        $xeploaihoctap=$_POST['xeploaihoctap'];
        $languagecandi=$_POST['languagecandi'];
        //var_dump($_POST); $district,$school,$schooltype,$xeploaihoctap,$languagecandi
        $result=['kq'=>false];
        if(intval($nganhnghe1) > 0){
            $extrann[]=$nganhnghe1;
        }
        if(intval($nganhnghe2)>0){
            $extrann[]=$nganhnghe2;
        }
        
        $extrann=join(',',$extrann);
        //var_dump($extrann);die();
        $kq=$this->site_model->RegisterCandi($hoten,$email,$pass,$phone,$city,$ngaysinh,$gioitinh,$honnhan,$cvtitle,$bangcap,$hinhthuclamviec,$capbac,$noilamvieckhac,$nganhnghe,$extrann,$muctieu,$kynang,$diachi,$mucluong,$kinhnghiem,$district,$school,$schooltype,$xeploaihoctap,$languagecandi);
        if($kq['userid']>0){
            $result=['kq'=>true,'msg'=>'Bạn vui lòng kiểm tra email để kích hoạt tài khoản'.strtotime($ngaysinh)];
        }
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    function registercompany()
    {
        $tencongty=$_POST['tencongty'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $pass=$_POST['pass'];
        $website=$_POST['website'];
        $addresscom=$_POST['addresscom'];
        //["tencongty"]=> string(3) "abc" 
        //["phone"]=> string(10) "0913081236" 
        //["email"]=> string(25) "trantronglong87@gmail.com" 
        //["city"]=> string(1) "1" 
        //["pass"]=> string(9) "longtt123" 
        //["website"]=> string(0) "" 
        //["addresscom"]=> string(42) "sá»‘ 41 ngĂµ 179/90 VÄ©nh HÆ°ng HoĂ ng Mai" 
        $kq=$this->site_model->RegisterCompany($tencongty,$phone,$email,$city,$pass,$website,$addresscom);
        if($kq['userid']>0){
            $result=['kq'=>true,'msg'=>'Bạn vui lòng kiểm tra email để kích hoạt tài khoản'];
        }
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }  
    function delcookiephp()
    {
        $result=['kq'=>false];
        if(isset($_COOKIE['jobedu'])){
        unset($_COOKIE['jobedu']);
        unset($_COOKIE['jobexperion']);
        unset($_COOKIE['joblevel']);
        unset($_COOKIE['jobupdate']);
        
        $result=['kq'=>true];
        }
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    } 
    function searchjob()
    {
        $result=['kq'=>false,'data'=>''];
        $findkey=$_POST['findkey'];
        $location=$_POST['location'];
        $nganhnghe=$_POST['nganhnghe'];
        $type=$_POST['type'];
        if(intval($type)<=1){
            if(empty($findkey) && (intval($location)<1) && (intval($nganhnghe)<1)){
                $link=base_url().'tim-viec-lam.html';
                
            }else if(empty($findkey) && ((intval($location)>=1) || (intval($nganhnghe)>=1))){
                $urltt="";
                if(intval($location)>=1){
                    $urltt="-tai-".vn_str_filter(Getcitybyindex($location));
                }
                $urlnn="";
                if(intval($nganhnghe)>=1){
                    $urlnn="-".vn_str_filter(GetCategory($nganhnghe));
                }
                $link=base_url()."viec-lam".$urlnn.$urltt."-c".$nganhnghe."p".$location.".html";
            }else{
                $link=base_url()."tim-viec-lam&keywork=".$findkey."&dd=".$location."&nn=".$nganhnghe;
            }
        }
        $result=['kq'=>true,'data'=>$link];
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    function ResultJobFilter($keywork,$dd,$nn){
         $page=$start_row=$this->uri->segment(2);
        $cookjobedu = $_COOKIE['jobedu'];
        $cookjobexperion = $_COOKIE['jobexperion'];
        $cookjoblevel = $_COOKIE['joblevel'];
        $cookjobupdate = $_COOKIE['jobupdate'];
        $perpage=20;
        if(empty($page)||intval($page)==0){
            $page=0;
        }else{
            $page=intval($page);
        }
		$data['home'] = true;		
		//$sql=$this->site_model->gettblwidthid('tbl_meta',2);
		
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        if($page < 20){
		$data['robots']= 'index,follow';
        }else{
           $data['robots']= 'noindex,follow'; 
        }
        $arrparramnew=['nganhnghe'=>$nn,'keywork'=>$keywork,'diadiem'=>$dd,'type'=>$type];	
        
        // nhà tuyển dụng nổi bật
        //if(!isset($_SESSION['companyforlistjob']) || empty($_SESSION['companyforlistjob'])){
//            
//            $_SESSION['companyforlistjob']=$this->site_model->GetTopCompany(12);
//            $data['congtymoinhat']=$_SESSION['companyforlistjob'];
//        }else{
//            $data['congtymoinhat']=$_SESSION['companyforlistjob'];
//        }
        $result=$this->site_model->GetListJobforfilter($keywork,$cookjobedu,$cookjobexperion,$cookjoblevel,$cookjobupdate,$idnn,$idpro,$page,$perpage);
        $link=base_url()."tim-viec-lam&keywork=".$keywork."&dd=".$dd."&nn=".$nn;
        $txtcrum="";
        if(intval($dd)>0){
            $txtcrum=" tại ".Getcitybyindex($dd);
        }
        $txtcrum1="";
        if(intval($nn)>0){
            $txtcrum1=" ngành nghề ".GetCategory($nn);
        }
        $data['itemjob']=$result['data'];
        $this->load->library('pagination');
        $config['total_rows'] = $result['total'];
		$config['per_page'] = $perpage;
		$config['uri_segment'] =2;
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$config['num_links'] = 4;
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
        $config['base_url']=$link;
		$this->pagination->initialize($config);	
        $data['total']=$result['total'];
        $data['conhan']=$result['total'];
		$data['start_row']= $page;
        $data['pagination']= $this->pagination->create_links();
        $data['congtymoinhat']=$this->site_model->GetTopCompany(12);
        $data['meta_title']="Tìm việc làm ".$keywork.$txtcrum1.$txtcrum;
		$data['meta_key']="Tìm việc làm ".$keywork.$txtcrum1.$txtcrum;
		$data['meta_des']="Tìm việc làm ".$keywork.$txtcrum1.$txtcrum;
        $data['canonical']=$link;	
        if(!isset($_SESSION['expcheck']) || empty($_SESSION['expcheck'])){
            $_SESSION['expcheck']=$this->site_model->GetCountJobByEXP();
            $data['filterexp']=$_SESSION['expcheck'];
            }
            else{
              $data['filterexp']=$_SESSION['expcheck'];  
            }
        //Loc bang cap
        if(!isset($_SESSION['educheck']) || empty($_SESSION['educheck'])){
            $_SESSION['educheck']=$this->site_model->GetCountJobbyEdu();
            $data['filteredu']=$_SESSION['educheck'];
            }
            else{
              $data['filteredu']=$_SESSION['educheck'];  
            }
        //lọc cấp bậc
        if(!isset($_SESSION['levelcheck']) || empty($_SESSION['levelcheck'])){
            $_SESSION['levelcheck']=$this->site_model->GetCountJobByLevel();
            $data['filterlevel']=$_SESSION['levelcheck'];
            }
            else{
              $data['filterlevel']=$_SESSION['levelcheck'];  
            }
        // loc tinh thanh
        //unset($_SESSION['citycheck']);
        if(!isset($_SESSION['citycheck']) || empty($_SESSION['citycheck'])){
            $_SESSION['citycheck']=$this->site_model->GetCountJobByProvince(4,$nn,$dd,$keywork);
            $data['city']=$_SESSION['citycheck'];
        }else{
            if($keywork != $arrparram['keywork']){
                $_SESSION['citycheck']=$this->site_model->GetCountJobByProvince(4,$nn,$dd,$keywork);
            }
            $data['city']=$_SESSION['citycheck'];
        }
        //unset($_SESSION['categorycheck']);
        //loc danh mục
        if(!isset($_SESSION['categorycheck']) || empty($_SESSION['categorycheck'])){
            $_SESSION['categorycheck']=$this->site_model->GetCounJobByCategory(4,$nn,$dd,$keywork);
            $data['category']=$_SESSION['categorycheck'];
        }else{
            if($keywork != $arrparram['keywork']){
                $_SESSION['categorycheck']=$this->site_model->GetCounJobByCategory(4,$nn,$dd,$keywork);
                }
            $data['category']=$_SESSION['categorycheck'];
        }
        $arrparram=['nganhnghe'=>$nn,'keywork'=>$keywork,'diadiem'=>$dd,'type'=>$type];	
        $data['params']=$arrparram;
        $data['content']='resultjobfilter';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
    }
    function ListJobByFilter($aliasnn,$aliaspro,$idnn,$idpro)
    {    
        $page=$start_row=$this->uri->segment(2);
        $cookjobedu = $_COOKIE['jobedu'];
        $cookjobexperion = $_COOKIE['jobexperion'];
        $cookjoblevel = $_COOKIE['joblevel'];
        $cookjobupdate = $_COOKIE['jobupdate'];
        $perpage=20;
        if(empty($page)||intval($page)==0){
            $page=0;
        }else{
            $page=intval($page);
        }
		$data['home'] = true;		
		$sql=$this->site_model->gettblwidthid('tbl_meta',2);
		$metatitle=$sql->title;
		$metakeywork=$sql->metakeywork;
		$metadec=$sql->metadesc;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        
        $data['querystring']=$aliasnn."-".$aliaspro."-".$idnn."-".intval($idpro).'=='.$page."---".$cookjobedu;
        if((intval($idpro)<1) && (intval($idnn)<1))	{
            $link=base_url().'tim-viec-lam.html';
            $data['textcrum']="Tin tuyển dụng";
        }else{
            $urltt="";
            $txtcrum="";
            $txtcrum1="";
                if(intval($idpro)>=1){
                    $urltt="-tai-".vn_str_filter(Getcitybyindex($idpro));
                    $txtcrum=" tại ".Getcitybyindex($idpro);
                }
                $urlnn="";
                if(intval($idnn)>=1){
                    $urlnn="-".vn_str_filter(GetCategory($idnn));
                    $txtcrum1=GetCategory($idnn);
                }
                $link=base_url()."viec-lam".$urlnn.$urltt."-c".$idnn."p".$idpro.".html";
                $data['textcrum']="Việc làm ".$txtcrum1.$txtcrum;
                $metatitle="Tìm việc làm".$txtcrum1.$txtcrum;
		          $metakeywork="Tìm việc làm".$txtcrum1.$txtcrum;
		          $metadec="Tìm việc làm".$txtcrum1.$txtcrum;
        }	
        $data['meta_title']=$metatitle;
		$data['meta_key']=$metakeywork;
		$data['meta_des']=$metadec;
		$data['canonical']=$link;	
        $result=$this->site_model->GetListJobbyCatAndProvince($cookjobedu,$cookjobexperion,$cookjoblevel,$cookjobupdate,$idnn,$idpro,$page,$perpage);
        $total=$result['total'];
        $data['checkpro']=intval($idpro);
        $data['checkcat']=intval($idnn);
        // nhà tuyển dụng nổi bật
        if(!isset($_SESSION['companyforlistjob']) || empty($_SESSION['companyforlistjob'])){
            
            $_SESSION['companyforlistjob']=$this->site_model->GetTopCompany(12);
            $data['congtymoinhat']=$_SESSION['companyforlistjob'];
        }else{
            $data['congtymoinhat']=$_SESSION['companyforlistjob'];
        }
        //Loc bang cap
        if(!isset($_SESSION['educheck']) || empty($_SESSION['educheck'])){
            $_SESSION['educheck']=$this->site_model->GetCountJobbyEdu();
            $data['filteredu']=$_SESSION['educheck'];
            }
            else{
              $data['filteredu']=$_SESSION['educheck'];  
            }
        // lọc kinh nghiệm
        if(!isset($_SESSION['expcheck']) || empty($_SESSION['expcheck'])){
            $_SESSION['expcheck']=$this->site_model->GetCountJobByEXP();
            $data['filterexp']=$_SESSION['expcheck'];
            }
            else{
              $data['filterexp']=$_SESSION['expcheck'];  
            }
        //lọc cấp bậc
        if(!isset($_SESSION['levelcheck']) || empty($_SESSION['levelcheck'])){
            $_SESSION['levelcheck']=$this->site_model->GetCountJobByLevel();
            $data['filterlevel']=$_SESSION['levelcheck'];
            }
            else{
              $data['filterlevel']=$_SESSION['levelcheck'];  
            }
        // loc tinh thanh
        //if(!isset($_SESSION['citycheck']) || empty($_SESSION['citycheck'])){
//            $_SESSION['citycheck']=$this->site_model->GetCountJobByProvince(1,$idnn,$idpro,'');
//            $data['city']=$_SESSION['citycheck'];
//        }else{
//            $data['city']=$_SESSION['citycheck'];
//        }
$data['city']=$this->site_model->GetCountJobByProvince(1,$idnn,$idpro,'');
        //unset($_SESSION['categorycheck']);
        //loc danh mục
        //if(!isset($_SESSION['categorycheck']) || empty($_SESSION['categorycheck'])){
//            $_SESSION['categorycheck']=$this->site_model->GetCounJobByCategory(1,$idnn,$idpro,'');
//            $data['category']=$_SESSION['categorycheck'];
//        }else{
//            $data['category']=$_SESSION['categorycheck'];
//        }
$data['category']=$this->site_model->GetCounJobByCategory(1,$idnn,$idpro,'');
        $data['itemjob']=$result['data'];
        $this->load->library('pagination');
        $config['total_rows'] = $total->sobanghi;
		$config['per_page'] = $perpage;
		$config['uri_segment'] =2;
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$config['num_links'] = 4;
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
        $config['base_url']=$link;
		$this->pagination->initialize($config);	
        $data['total']=$total->sobanghi;
        $data['conhan']=$total->tinconhan;
		$data['start_row']= $page;
        $data['pagination']= $this->pagination->create_links();
		//$data['amp']=site_url('amp');
        if($page < 20){
		$data['robots']= 'index,follow';
        }else{
           $data['robots']= 'noindex,follow'; 
        }
        	
        $data['content']='ListJobByFilter';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
    } 
    function searchcompany()
    {
        $result=['kq'=>false,'data'=>''];
        $findkey=$_POST['findkey'];
        
        if($findkey != ''){
            $link=base_url()."danh-sach-nha-tuyen-dung/keywork=".$findkey."&c=0&n=0&type=1";
            $result=['kq'=>true,'data'=>$link];
        }
        
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    function ListCompanyByFilter($keywork,$c,$n,$type)
    {    	
        $page=$start_row=$this->uri->segment(3);
        $perpage=20;
        if(empty($page)||intval($page)==0){
            $page=0;
        }else{
            $page=intval($page);
        }
		$data['home'] = true;	
        if(!isset($c)){
            $c=0;
        }
        if(!isset($keywork)){
            $keywork='';
        }
        if(!isset($n)){
            $n=0;
        }
        if(!isset($type)){
            $type=1;
        }
        if($type > 4 || $n> 100 || $c>100){
            redirect(site_url());
        }else{	
		$sql=$this->site_model->gettblwidthid('tbl_meta',3);
		$data['meta_title']=$sql->title;
		$data['meta_key']=$sql->metakeywork;
		$data['meta_des']=$sql->metadesc;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        $arrparramnew=['cate'=>$c,'keywork'=>$keywork,'nganhnghe'=>$n,'type'=>$type];
        //unset($_SESSION['companycatcheck']);
        if(!isset($_SESSION['companycatcheck']) || empty($_SESSION['companycatcheck'])){
            $_SESSION['companycatcheck']=$this->site_model->GetCityByCompany($n,$keywork,$type);
            $data['category']=$_SESSION['companycatcheck'];
        }else{
            if($arrparramnew['nganhnghe']!=$arrparram['nganhnghe']){
                $_SESSION['companycatcheck']=$this->site_model->GetCityByCompany($n,$keywork,$type);
            }
            $data['category']=$_SESSION['companycatcheck'];
        }
        //unset($_SESSION['companycitycheck']);
        if(!isset($_SESSION['companycitycheck']) || empty($_SESSION['companycitycheck'])){            
            $_SESSION['companycitycheck']=$this->site_model->GetCatByCompany($c,$keywork,$type);
            $data['ccity']=$_SESSION['companycitycheck'];
        }else{
            if($arrparramnew['cate']!=$arrparram['cate']){
                $_SESSION['companycitycheck']=$this->site_model->GetCatByCompany($c,$keywork,$type);
            }
            $data['ccity']=$_SESSION['companycitycheck'];
        }	
        $arrparram=['cate'=>$c,'keywork'=>$keywork,'nganhnghe'=>$n,'type'=>$type];
        $data['fillabc']=$this->site_model->GetFilterABCByType($c,$n,1);
        $result=$this->site_model->GetLisCompanyByFillter($keywork,$n,$c,$type,$page,$perpage);
        //var_dump($result);die();
        
        if(!isset($_SESSION['tinnbcompany']) || empty($_SESSION['tinnbcompany'])){
            $_SESSION['tinnbcompany']=$this->site_model->GetTopNew(7);
            $data['tinmoinhat']=$_SESSION['tinnbcompany'];
        }else{
             $data['tinmoinhat']=$_SESSION['tinnbcompany'];
        }
        if(!isset($_SESSION['uvnbcompany']) || empty($_SESSION['uvnbcompany'])){
            $_SESSION['uvnbcompany']=$this->site_model->GetListCandidate("1=1 ",7,'order by u.use_update_time desc');
            $data['ungviennoibat']=$_SESSION['uvnbcompany'];
        }else{
             $data['ungviennoibat']=$_SESSION['uvnbcompany'];
        }
        $link=base_url()."danh-sach-nha-tuyen-dung/keywork=".$keywork."&c=".$c."&n=".$n."&type=".$type;		
        $data['itemcom']=$result['data'];
        $this->load->library('pagination');
        $data['totalrow']=$result['total'];
        $config['total_rows'] = $result['total'];
		$config['per_page'] = $perpage;
		$config['uri_segment'] =2;
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$config['num_links'] = 4;
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
        $config['base_url']=$link;
		$this->pagination->initialize($config);	
        $data['total']=$total->sobanghi;
        $data['conhan']=$total->tinconhan;
		$data['start_row']= $page;
        $data['pagination']= $this->pagination->create_links();
        $data['params']=$arrparram;	
		$data['canonical']=$link;
		//$data['amp']=site_url('amp');
        $data['provincename']=(isset($_SESSION['provincename']))?$_SESSION['provincename']:'Hà Nội';
        $data['province']=(isset($_SESSION['province']))?$_SESSION['province']:'1';
		if($page < 20){
		$data['robots']= 'index,follow';
        }else{
           $data['robots']= 'noindex,follow'; 
        }
        $data['cityselect']=$this->site_model->selectprovince('selectpickersearch','selectpickersearch','Địa điểm')	;	
        $data['content']='listcompanybyfilter';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
        }
    }
    function searchcongty()
    {
        $result=['kq'=>false,'data'=>''];
        $findkey=$_POST['findkey'];
        
        if($findkey != ''){
            $link=base_url()."cong-ty&keywork=".$findkey;
            $result=['kq'=>true,'data'=>$link];
        }else{
            $link=base_url()."cong-ty";
            $result=['kq'=>true,'data'=>$link];
        }
        
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    function chitietcongty($alias,$id)
    {
        $jobinfo=$this->site_model->chitietcongty($id)	;
        if($jobinfo != ""){
        $data['home'] = true;
		$data['meta_title']=$jobinfo->name;
		$data['meta_key']=$jobinfo->name;
		$data['meta_des']=$jobinfo->name;        
        $data['itemcom']=$jobinfo;	
        $data['morejob']=$this->site_model->caccongtykhac($jobinfo->id);
        $data['tinmoinhat']=$this->site_model->GetTopNew(6);
        $data['ungviennoibat']=$this->site_model->GetListCandidate("1=1 ",7,'order by u.use_update_time desc');	
		$data['canonical']=base_url().$jobinfo->alias."-dn".$jobinfo->id.".html";	
		//$data['amp']=site_url('amp');
        
		$data['robots']= 'index,follow';	
        $data['content']='chitietcongty';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
        }else{
            redirect(site_url());
        }
    }
    function hosocongty($keywork)
    {
        //var_dump($k);die();        
        $c=0;$n=0;$type=0;
        $page=$start_row=$this->uri->segment(1);
        $perpage=21;
        if(empty($page)||intval($page)==0){
            $page=0;
        }else{
            $page=intval($page);
        }
		$data['home'] = true;	
        if(!isset($c)){
            $c=0;
        }
        if(!isset($keywork)){
            $keywork='';
        }
        if(!isset($n)){
            $n=0;
        }
        if(!isset($type)){
            $type=1;
        }
        if($type > 4 || $n> 100 || $c>100){
            redirect(site_url());
        }else{	
		$sql=$this->site_model->gettblwidthid('tbl_meta',3);
		$data['meta_title']=$sql->title;
		$data['meta_key']=$sql->metakeywork;
		$data['meta_des']=$sql->metadesc;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        $arrparramnew=['cate'=>$c,'keywork'=>$keywork,'nganhnghe'=>$n,'type'=>$type];
        //unset($_SESSION['companycatcheck']);
        	
        $arrparram=['cate'=>$c,'keywork'=>$keywork,'nganhnghe'=>$n,'type'=>$type];
        
        $result=$this->site_model->DanhSachCongTy($keywork,$page,$perpage);
        //var_dump($result);die();
        
        if(!isset($_SESSION['tinnbcompany']) || empty($_SESSION['tinnbcompany'])){
            $_SESSION['tinnbcompany']=$this->site_model->GetTopNew(7);
            $data['tinmoinhat']=$_SESSION['tinnbcompany'];
        }else{
             $data['tinmoinhat']=$_SESSION['tinnbcompany'];
        }
        if(!isset($_SESSION['uvnbcompany']) || empty($_SESSION['uvnbcompany'])){
            $_SESSION['uvnbcompany']=$this->site_model->GetListCandidate("1=1 ",7,'order by u.use_update_time desc');
            $data['ungviennoibat']=$_SESSION['uvnbcompany'];
        }else{
             $data['ungviennoibat']=$_SESSION['uvnbcompany'];
        }
        $link=base_url()."cong-ty";
        if(!empty($keywork)){
            $link=base_url()."cong-ty"."&keywork=".$keywork;
        }		
        $data['itemcom']=$result['data'];
        $this->load->library('pagination');
        $data['totalrow']=$result['total'];
        $config['total_rows'] = $result['total'];
		$config['per_page'] = $perpage;
		$config['uri_segment'] =2;
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$config['num_links'] = 4;
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
        $config['base_url']=$link;
		$this->pagination->initialize($config);	
        $data['total']=$total->sobanghi;
        $data['conhan']=$total->tinconhan;
		$data['start_row']= $page;
        $data['pagination']= $this->pagination->create_links();
        $data['params']=$arrparram;	
		$data['canonical']=base_url()."cong-ty";
		//$data['amp']=site_url('amp');
        $data['provincename']=(isset($_SESSION['provincename']))?$_SESSION['provincename']:'Hà Nội';
        $data['province']=(isset($_SESSION['province']))?$_SESSION['province']:'1';
		if($page <= 21){
		$data['robots']= 'index,follow';
        }else{
           $data['robots']= 'noindex,follow'; 
        }
        $data['cityselect']=$this->site_model->selectprovince('selectpickersearch','selectpickersearch','Địa điểm')	;	
        $data['content']='hosocongty';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
        }
    }
    function searchcandi()
    {
        $result=['kq'=>false,'data'=>''];
        $findkey=$_POST['findkey'];
        $location=$_POST['location'];
        $nganhnghe=$_POST['nganhnghe'];
        //$type=$_POST['type'];
        //if(intval($type)<=1){
            if(empty($findkey) && (intval($location)>= 0) && (intval($nganhnghe)>=0)){
                $urltt="";
                if(intval($location)>=1){
                    $urltt="-tai-".vn_str_filter(Getcitybyindex($location));
                }else{
                    $urltt="-chua-cap-nhat";
                }
                $urlnn="";
                if(intval($nganhnghe)>=1){
                    $urlnn="-".vn_str_filter(GetCategory($nganhnghe));
                }
                $link=base_url()."ung-vien".$urlnn.$urltt."-u".$nganhnghe."s".$location.".html";
            }else if($findkey != ''){
                $link=base_url()."tim-ung-vien&keywork=".$findkey."&dd=".$location."&nn=".$nganhnghe;
            }
        //}
        $result=['kq'=>true,'data'=>$link];
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    function ResultSearchCandi($keywork,$dd,$nn){
        $page=$start_row=$this->uri->segment(2);
        $perpage=20;
        if(empty($page)||intval($page)==0){
            $page=0;
        }else{
            $page=intval($page);
        }
         $candiexp = '';if(isset($_COOKIE['candiexp']) && !empty($_COOKIE['candiexp'])){$candiexp=$_COOKIE['candiexp'];};
        $candisalary ='';if(isset($_COOKIE['candisalary']) && !empty($_COOKIE['candisalary'])){$candisalary=$_COOKIE['candisalary'];} ;
        $data['home'] = true;		
		$sql=$this->site_model->gettblwidthid('tbl_meta',4);
		$data['meta_title']=$sql->title;
		$data['meta_key']=$sql->metakeywork;
		$data['meta_des']=$sql->metadesc;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        //unset($_SESSION['candicityresult']);
        //unset($_SESSION['candinnresult']);
         //if(!isset($_SESSION['candicityresult']) || empty($_SESSION['candicityresult'])){
//            $_SESSION['candicityresult']=$this->site_model->GetCountCandiByCity($keywork,$nn,3);
//            $data['category']=$_SESSION['candicityresult'];
//        }else{
//            $data['category']=$_SESSION['candicityresult'];
//        }
//         if(!isset($_SESSION['candinnresult']) || empty($_SESSION['candinnresult'])){
//            $_SESSION['candinnresult']=$this->site_model->GetCountCandiByCategory($keywork,$dd,3);
//            $data['nganhnghe']=$_SESSION['candinnresult'];
//        }else{
//            $data['nganhnghe']=$_SESSION['candinnresult'];
//        }
        $data['category']=$this->site_model->GetCountCandiByCity($keywork,$nn,3);
        $data['nganhnghe']=$this->site_model->GetCountCandiByCategory($keywork,$dd,3);
        $link=base_url()."tim-ung-vien&keywork=".$keywork."&dd=".intval($dd)."&nn=".intval($nn);
        $result=$this->site_model->FindCandiBySearch($keywork,$nn,$dd,$candisalary,$candiexp,$page,$perpage);	
        $data['itemcandi']=$result['data'];
        $this->load->library('pagination');
        $data['totalrow']=$result['total'];
        $config['total_rows'] = $result['total'];
		$config['per_page'] = $perpage;
		$config['uri_segment'] =2;
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$config['num_links'] = 4;
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
        $config['base_url']=$link;
		$this->pagination->initialize($config);	
        $data['pagination']= $this->pagination->create_links();
		$data['canonical']=$link;
        $data['candiabc']=$this->site_model->GetFilterABCBycandi($dd,$idnn,1);
        $data['candisalary']=$this->site_model->GetSalaryByCandi();	
        $data['candiexp']=$this->site_model->GetExpbyCandi();
        $arrparams=['tinhthanh'=>$dd,'danhmuc'=>$nn,'keywork'=>$keywork];
        $data['params']=$arrparams;
        $data['content']='resultsearchcandi';
        $data['classheader']='inner-page';	
        	
        $this->load->view('template',$data);
    }
    function ListCandidatebyfilter($aliasnn,$aliasstate,$idnn,$idpro)
    {
        $page=$start_row=$this->uri->segment(2);
        $perpage=20;
        if(empty($page)||intval($page)==0){
            $page=0;
        }else{
            $page=intval($page);
        }
        $keywork='';
        $candiexp = '';
        if(isset($_COOKIE['candiexp']) && !empty($_COOKIE['candiexp'])){$candiexp=$_COOKIE['candiexp'];};
        $candisalary ='';
        if(isset($_COOKIE['candisalary']) && !empty($_COOKIE['candisalary'])){$candisalary=$_COOKIE['candisalary'];} ;
   	    $data['home'] = true;		
		$sql=$this->site_model->gettblwidthid('tbl_meta',4);
		$metatitle=$sql->title;
		$metakeywork=$sql->metakeywork;
		$metades=$sql->metadesc;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        
        //unset($_SESSION['candinncheck']);
        //unset($_SESSION['candicitycheck']);
         //if(!isset($_SESSION['candicitycheck']) || empty($_SESSION['candicitycheck'])){
//            $_SESSION['candicitycheck']=$this->site_model->GetCountCandiByCity($keywork,$idnn,1);
//            $data['category']=$_SESSION['candicitycheck'];
//        }else{
//            $data['category']=$_SESSION['candicitycheck'];
//        }
$data['category']=$this->site_model->GetCountCandiByCity($keywork,$idnn,1);
         //if(!isset($_SESSION['candinncheck']) || empty($_SESSION['candinncheck'])){
//            $_SESSION['candinncheck']=$this->site_model->GetCountCandiByCategory($keywork,$idpro,1);
//            $data['nganhnghe']=$_SESSION['candinncheck'];
//        }else{
//            $data['nganhnghe']=$_SESSION['candinncheck'];
//        }
$data['nganhnghe']=$this->site_model->GetCountCandiByCategory($keywork,$idpro,1);
        $result=$this->site_model->FindCandiBySearch($keywork,$idnn,$idpro,$candisalary,$candiexp,$page,$perpage);	
        $data['itemcandi']=$result['data'];
        
        $data['candisalary']=$this->site_model->GetSalaryByCandi();	
        $data['candiexp']=$this->site_model->GetExpbyCandi();
        $data['candiabc']=$this->site_model->GetFilterABCBycandi($idpro,$idnn,1);
        $arrparams=['tinhthanh'=>$idpro,'danhmuc'=>$idnn];
        $data['params']=$arrparams;
        if(!isset($idpro) && !isset($idnn))	{
            $link=base_url().'nguoi-tim-viec.html';
            $data['textcrum']="Người tìm việc";
        }else{
            $urltt="";
            $textcrum1="";
            $textcrum="";
                if(intval($idpro)>=1){
                    $urltt="-tai-".vn_str_filter(Getcitybyindex($idpro));
                    $textcrum=" tại ".Getcitybyindex($idpro);
                }else{
                    $urltt="-chua-cap-nhat";
                    $textcrum=" chưa cập nhật nơi làm việc";
                }
                $urlnn="";
                if(intval($idnn)>=1){
                    $urlnn="-".vn_str_filter(GetCategory($idnn));
                    $textcrum1=GetCategory($idnn);
                }
                $link=base_url()."ung-vien".$urlnn.$urltt."-u".intval($idnn)."s".intval($idpro).".html";
                $data['textcrum']="Ứng viên ".$textcrum1.$textcrum;
                $metatitle="Tìm ứng viên ".$textcrum1.$textcrum;
		      $metakeywork="Tìm ứng viên ".$textcrum1.$textcrum;
		      $metades="Tìm ứng viên ".$textcrum1.$textcrum;
        }
        $data['meta_title']=$metatitle;
		$data['meta_key']=$metakeywork;
		$data['meta_des']=$metades;	
        $this->load->library('pagination');
        $data['totalrow']=$result['total'];
        $config['total_rows'] = $result['total'];
		$config['per_page'] = $perpage;
		$config['uri_segment'] =2;
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$config['num_links'] = 4;
		$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
		$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
        $config['base_url']=$link;
		$this->pagination->initialize($config);	
        $data['pagination']= $this->pagination->create_links();
		$data['canonical']=$link;	
		//$data['amp']=site_url('amp');
        if($page < 20){
          $data['robots']= 'index,follow';  
        }else{
            $data['robots']= 'noindex,follow';
        }
			
        $data['content']='listcandidatebyfilter';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
    }   
    function DetailJob($alias,$id)
    {
        $jobinfo=$this->site_model->detailjobbyid($id)	;
        if($jobinfo != ""){
        $data['home'] = true;
		$data['meta_title']=$jobinfo->meta_title;
		$data['meta_key']=$jobinfo->meta_keywork;
		$data['meta_des']=$jobinfo->meta_desc;        
        $data['itemjob']=$jobinfo;	
        $data['morejob']=$this->site_model->GetRelativeJobdetail($jobinfo->new_cat_id,$jobinfo->new_id);
        $data['tinmoinhat']=$this->site_model->GetTopNew(7);
        $data['ungviennoibat']=$this->site_model->GetListCandidate("1=1 ",7,'order by u.use_update_time desc');	
		$data['canonical']=base_url().vn_str_filter($jobinfo->new_title)."-job".$jobinfo->new_id.".html";	
		//$data['amp']=site_url('amp');
        
		$data['robots']= 'index,follow';	
        $data['content']='detailjob';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
        }else{
            redirect(site_url());
        }
    }
    function DetailCompany($alias,$id)
    {
        $cominfo=$this->site_model->GetDetailCompanyByID($id);
        if($cominfo !=""){
        $data['home'] = true;		
		$sql=$this->site_model->gettblwidthid('tbl_footer',1);
		$data['meta_title']=$cominfo->usc_company;//$sql->meta_title;
		$data['meta_key']=$cominfo->usc_company;//$sql->meta_key;
		$data['meta_des']=$cominfo->usc_company;//$sql->meta_des;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        $data['itemcom']=$cominfo;		
        $data['morejob']=$this->site_model->GetMoreJobByCompany($cominfo->usc_id);
        $data['tinmoinhat']=$this->site_model->GetTopNew(7);
        $data['ungviennoibat']=$this->site_model->GetListCandidate("1=1 ",7,'order by u.use_update_time desc');	
		$data['canonical']=base_url().vn_str_filter($cominfo->usc_company)."-ntd".$cominfo->usc_id.".html";	
		//$data['amp']=site_url('amp');
        $data['provincename']=(isset($_SESSION['provincename']))?$_SESSION['provincename']:'Hà Nội';
        $data['province']=(isset($_SESSION['province']))?$_SESSION['province']:'1';
		$data['robots']= 'index,follow';
        $data['cityselect']=$this->site_model->selectprovince('selectpickersearch','selectpickersearch','Địa điểm')	;	
        $data['content']='detailcompany';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
        }else{
            redirect(site_url());
        }
    }
    function DetailCandidate($alias,$id)
    {
        $userinfo=$this->site_model->getcandidatebyID(intval($id));
        if($userinfo !=""){
        $data['home'] = true;		
		$sql=$this->site_model->gettblwidthid('tbl_footer',1);
		$data['meta_title']=$userinfo->use_first_name."vieclam24h.net.vn";//$sql->meta_title;
		$data['meta_key']=$userinfo->use_first_name."vieclam24h.net.vn";//$sql->meta_key;
		$data['meta_des']=$userinfo->use_first_name."vieclam24h.net.vn";//$sql->meta_des;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        	
		$data['canonical']=base_url()."ung-vien/".vn_str_filter($userinfo->use_first_name)."-uv".$userinfo->use_id.".html";	
		//$data['amp']=site_url('amp');
        $data['userinfo']=$userinfo;
		$data['robots']= 'index,follow';	
        $data['content']='detailcandidate';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
        }else{
            redirect(site_url());
        }
        
    }
	function show_news($alias,$id)
    {		
        $data['id']=$id;
        $data['classheader']='headerul';
        if(is_numeric($id)){
        	$query=$this->db->query('SELECT * FROM tbl_baiviet WHERE status=1 AND id='.$id);    
            
        }else{
        	redirect(site_url());
        }
        
        $data['tinmoinhat']=$this->site_model->GetTopNew(10);
        $data['ungviennoibat']=$this->site_model->GetListCandidate("1=1 ",5,'order by u.use_update_time desc');	
		if($query->num_rows()>0){			
			$data['item']= $query->row();
            $cat=$this->site_model->gettblwidthid('tbl_chuyenmuc',$data['item']->cid) ;   			
			if($data['item']->alias!=$alias){
				redirect(site_url($data['item']->alias.'-b'.$id.'.html'));
			}
			if($data['item']->meta_title!=''){
				$data['meta_title']=$data['item']->meta_title;
				$data['meta_key']=$data['item']->meta_key;
				$data['meta_des']=$data['item']->meta_des;
			}else{
				$data['meta_title']=$data['item']->title;
				$data['meta_key']=$data['item']->title;
				$data['meta_des']=$data['item']->title;
			}
            $data['cat']=$cat;
			$data['canonical']=site_url($data['item']->alias.'-b'.$data['item']->id.'.html');
			$data['robots']= 'noindex,nofollow';
			$data['content']='news';		
			$this->load->view('template',$data); 
		}else{
			redirect(site_url());
		}
    }	   
	
	function show_cat_sub($alias,$id)
    {						
		$start_row=$this->uri->segment(2);		
		$per_page=10;
		if(is_numeric($start_row))
		{
			$start_row=$start_row;
		}
		else
		{
			$start_row=0;
		}
		$query=$this->site_model->gettbl_limited('tbl_baiviet',$id,'','');
		//$cat=$this->memcached_library->get('key_cat_'.$id);
         $query1=$this->db->query('SELECT * FROM tbl_chuyenmuc WHERE status=1 AND id='.$id);
		$cat=$query1->row();
        $data['tinmoinhat']=$this->site_model->GetTopNew(10);
        $data['ungviennoibat']=$this->site_model->GetListCandidate("1=1 ",5,'order by u.use_update_time desc');	
		$total_rows = $query->num_rows();
		$this->load->library('pagination');		
		$config['base_url'] = site_url($cat->alias."-".$id.".html");
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page;
		$config['uri_segment'] =2;
		$config['next_link'] = '>';
		$config['prev_link'] = '<';
		$config['num_links'] = 4;
		$config['first_link'] = '<<';
		$config['last_link'] = '>>';
		$this->pagination->initialize($config);		
		$data['cid']=$id;
		$data['item']=$cat;
		if($cat->meta_title!=''){
			$data['meta_title']=$cat->meta_title;
			$data['meta_key']=$cat->meta_key;
			$data['meta_des']=$cat->meta_des;
		}else{
			$data['meta_title']=$cat->name;
			$data['meta_key']=$cat->name;
			$data['meta_des']=$cat->name;
		}
		$data['total']=$total_rows;
		$data['start_row']= $start_row;
		$data['query']=$this->site_model->gettbl_limited('tbl_baiviet',$id,$start_row,$per_page);
		$data['pagination']= $this->pagination->create_links();
		$data['canonical']=$config['base_url'];
		$data['robots']= 'noindex,nofollow';
        $data['classheader']='inner-page';	
		$data['content']='category_sub';
		$this->load->view('template',$data);
    }
   
    		
    
	function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->CharSet = "UTF-8";
        $mail->SMTPSecure = 'tls';                
        $mail->Host = 'smtp.gmail.com';         
        $mail->Port = 587;                         
        $mail->Username = GUSER;  
        $mail->Password = GPWD;           
        $mail->SetFrom($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $message = 'Gởi mail bị lỗi: '.$mail->ErrorInfo; 
            return false;
        } 
        else 
        {
            $message = 'Thư của bạn đã được gởi đi ';
            return true;
        }
    } 
    function login()
    {
         $data['home'] = true;		
		$sql=$this->site_model->gettblwidthid('tbl_footer',1);
		$data['meta_title']=$sql->meta_title;
		$data['meta_key']=$sql->meta_key;
		$data['meta_des']=$sql->meta_des;
        if(!empty($sql->name)){
            $data['metah1']=$sql->name;
        }else{
            $data['metah1']='SO SÁNH LƯƠNG CỦA BẠN TRƯỚC KHI NHẢY VIỆC!';
        }
        		
		$data['canonical']=base_url();	
		//$data['amp']=site_url('amp');
        $data['provincename']=(isset($_SESSION['provincename']))?$_SESSION['provincename']:'Hà Nội';
        $data['province']=(isset($_SESSION['province']))?$_SESSION['province']:'1';
		$data['robots']= 'index,follow';
        $data['cityselect']=$this->site_model->selectprovince('selectpickersearch','selectpickersearch','Địa điểm')	;	
        $data['content']='login';
        $data['classheader']='inner-page';		
        $this->load->view('template',$data);
    }
    function loginuser()
    {
        $password = $this->input->post('password');
        $username = $this->input->post('username');
        $nhatuyendung = $this->input->post('typelogin');
        //var_dump($password,$username,$nhatuyendung);die();
        
        if(intval($nhatuyendung) > 0){
            $type=1;
            $result=$this->site_model->getlogincompany($username,$password);
        }else{
            $type=0;
        //var_dump($username,$password);die;
        //var_dump($username,$_POST);die();
            $result=$this->site_model->getlogin($username,$password);
        }
        //var_dump($result);die();
        //echo $result;
        if($result !=""){
            
            $ip = time();
            //$result=json_decode($result,true);
            //var_dump($result->UserId);die();
            $token = $this->site_model->create_token($result->use_id,$ip,$type);
            
            $profileData = array("UserId" => $result->use_id,
                                 "UserName" => $result->use_email,
                                 "EmailAddress" => $result->use_email,
                                 "FullName" => $result->use_first_name,                                 
                                 "TokentKey" => $token,
                                 "Type"=>$type);
                                 $_SESSION['UserInfo'] = $profileData;
            $data=array('kq'=>true,'msg'=>'dang nhap thanh cong');
           // return json_encode();
        }else{
            $data=array('kq'=>false,'msg'=>'dang nhap ko thanh cong');
            //return json_encode(array('kq'=>false,'msg'=>'dang nhap ko thanh cong'));
        }
        //return json_encode($data);
        echo json_encode($data);
    }
    function logout(){
        $arrtg=$_SESSION['UserInfo'];
        $tg=$this->site_model->deltokenbyuserid($arrtg['UserId']);
        $data=['kq'=>true];
        unset($_SESSION['UserInfo']);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }
    function EmailRegisterNofity()
    {
        $findkey = $this->input->post('findkey');
        $data=$this->site_model->EmailNofity($findkey);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }    
}
?>
