<?php $urlweb= current_url();
?>
 <header class="navbar-fixed-top affix-top" data-spy="affix" data-offset-top="60">
    <div style="max-width:1230px;margin:0 auto;">
      <!-- MAIN NAVIGATION STARTS -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="images/logo.png" alt="muathe24h.net.vn"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav text-center">
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Ứng viên <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url() ?>tim-viec-lam.html">Tin tuyển dụng</a></li>
                  <li><a href="<?php echo base_url() ?>hoan-thien-ho-so.html">Hoàn thiện hồ sơ</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Nhà tuyển dụng <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() ?>danh-sach-nha-tuyen-dung/keywork=&c=0&n=0&type=1">Danh sách nhà tuyển dụng</a></li>
                  <li><a href="<?php echo base_url() ?>nguoi-tim-viec.html">Hồ sơ ứng viên miễn phí</a></li>
                  <li><a href="<?php echo base_url() ?>dang-tin-tuyen-dung.html">Đăng tin tuyển dụng miễn phí</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url() ?>cong-ty">Hồ sơ doanh nghiệp</a></li>
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Tin tức <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url() ?>cau-hoi-tuyen-dung-3.html">Câu hỏi tuyển dụng</a></li>
                  <li><a href="<?php echo base_url() ?>tin-luong-2.html">Tin lương</a></li>
                </ul>
              </li>
              
              <?php if($arrlogin != ''){ 
                ?>
                <li class="sign-in pull-right dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" >
                  <small class="hidden-sm">Tài khoản</small>
                  <span class="hidden-sm"><?php echo $arrlogin['FullName'] ?></span> 
                  <i class="fa fa-user"></i></a>
                  <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url()."ung-vien/".vn_str_filter($arrlogin['FullName'])."-uv".$arrlogin['UserId'].".html" ?>">Thông tin tài khoản</a></li>
                  <li><a href="javascript:void(0);" id="btnlogout">Thoát</a></li>
                </ul>
              </li>
              <?php } else{?>
              <li class="sign-in pull-right">
                <a href="<?php echo base_url()?>dang-ky">
                  <small class="hidden-sm">Tài khoản</small>
                  <span class="hidden-sm">Đăng ký</span> 
                  <i class="fa fa-user-plus"></i></a>
              </li>
              <li class="sign-in pull-right">
                <a href="<?php echo base_url()?>dang-nhap">
                  <small class="hidden-sm">Tài khoản</small>
                  <span class="hidden-sm">Đăng nhập</span> 
                  <i class="fa fa-user"></i></a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
      </div>
      <!-- MAIN NAVIGATION ENDS -->
    </header>
