<?php

/**
 * @author GallerySoft.info
 * @copyright 2018
 */
$urlweb="http://localhost".$_SERVER['REQUEST_URI'] ;
if($urlweb != $canonical)
{
   header("HTTP/1.1 301 Moved Permanently"); 
   header("Location: $canonical");
   exit();
}

?>
<section class="inner-banner">
      <!-- BANNER STARTS -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="margin-0">Thông tin ứng viên: <?php echo $userinfo->use_first_name ?></h4>
          </div>
        </div>
      </div>
      <!-- BANNER ENDS -->
    </section>
<section class="candidate-profile">
      <div class="container">
        <div class="row">
          <div class="sidebar col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
            <div class="user-intro candidateinfo">
              <img src="images/user-wall-pic.jpg" alt="User profile wall">
              <div class="candidate-info">
                <img src="images/<?php echo $n->use_logo; ?>" alt="<?php echo $n->use_first_name ?>" onerror='this.onerror=null;this.src="images/icon-no-image.png";' class="img-circle">
                <h4><?php echo $userinfo->use_first_name ?></h4>
                <p><?php
                if(empty($userinfo->cv_cate_id)){
                    $catname=0;
                }else{
                    $catname=$userinfo->cv_cate_id;
                }
                 echo GetCategory($catname); ?></p>
                <p><strong>Mức lương:</strong> <?php
                if(empty($userinfo->cv_money_id)){
                    $mucluong=0;
                }else{
                    $mucluong=$userinfo->cv_money_id;
                }
                 echo GetLuong($mucluong); ?></p>
                <p>Lượt xem: <?php echo number_format($userinfo->use_view) ?> | Ngày làm mới: <?php echo date("d/m/Y",$userinfo->cv_money_id); ?></p>
                <ul class="social-links">
                  <li>
                    <a href="javascript:void(0);" class="fa fa-facebook"></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="fa fa-twitter"></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="fa fa-linkedin"></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="social-connect">
              <a href="javascript:void(0);" class="btn btn-special btn-block"><i class="fa fa-download"></i> Lưu hồ sơ</a>
              <a href="javascript:void(0);" class="btn btn-special btn-block"><i class="fa fa-phone"></i> Liên hệ ứng viên</a>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <h6>Thông tin cơ bản</h6>
            <div class="primary-info candidateinfo">
              <div class="row">
                <div class="col-sm-3">
                  <i class="fa fa-user"></i> <?php echo $userinfo->use_first_name ?>
                </div>
                <div class="col-sm-5">
                  <i class="fa fa-envelope"></i>
                  <?php if(isset($_SESSION['UserInfo']) && !empty($_SESSION['UserInfo'])){ 
                    if(empty($userinfo->use_email)){echo ' Chưa cập nhật';}else{echo $userinfo->use_email;}
                    ?>
                        
                  <?php }else{ ?>
                  <span style="color:#ff0000">Đăng nhập để xem</span>
                  <?php } ?>
                </div>
                <div class="col-sm-4">
                  <i class="fa fa-phone"></i>
                  <?php if(isset($_SESSION['UserInfo']) && !empty($_SESSION['UserInfo'])){ 
                    if(empty($userinfo->use_phone)){echo ' Chưa cập nhật';}else{echo $userinfo->use_phone;}
                    ?>
                        
                  <?php }else{ ?>
                  <span style="color:#ff0000">Đăng nhập để xem</span>
                  <?php } ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <i class="fa fa-mars"></i> 
                  <?php if($userinfo->use_gioi_tinh==0){
                    echo"Chưa cập nhật";
                  }else if($userinfo->use_gioi_tinh==1){
                    echo "Nam";
                  }else{
                    echo "Nữ";
                  } ?>
                </div>
                <div class="col-sm-5">
                  <i class="fa fa-map-marker"></i> 
                  <?php 
                    if(empty($userinfo->use_address)){echo ' Chưa cập nhật';}else{echo $userinfo->use_address;}
                    ?>
                </div>
                <div class="col-sm-4">
                  <i class="fa fa-calendar-o"></i> <?php echo date("d/m/Y",$userinfo->use_birth_day); ?>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <h6>Mục tiêu nghề nghiệp</h6>
            <div class="primary-info">
              <p><?php if(empty($userinfo->cv_muctieu)){echo "Mục tiêu nghề nghiệp chưa cập nhật";}else{ echo $userinfo->cv_muctieu ;} ?></p>
            </div>
            <div class="divider"></div>
            <div class="row">
              <div class="col-md-6">
                <h6>Thông tin chung</h6>
                
                <ul class="timeline">
                  <li>
                    <p><b>Học vấn </b>
                    <?php if(intval($userinfo->cv_hocvan)==0){echo "Chưa cập nhật";}else{ echo Geteduhome($userinfo->cv_hocvan);} ?></p>
                  </li>
                  <li>
                    <p><b>Ngành nghề </b>
                    <?php if(intval($userinfo->cv_cate_id)==0){echo "Chưa cập nhật";}else{ echo GetCategory($userinfo->cv_cate_id);} ?></p>
                  </li>
                  <li>
                    <p><b>Nơi làm việc </b>
                    <?php if(intval($userinfo->cv_city_id)==0){echo "Chưa cập nhật";}else{ echo Getcitybyindex($userinfo->cv_city_id);} ?></p>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>Thông tin chung</h6>
                <ul class="timeline">
                  <li>
                    <p><b>Mức lương </b>
                    <?php if(intval($userinfo->cv_money_id)==0){echo "Thỏa thuận";}else{ echo GetLuong($userinfo->cv_money_id);} ?></p></p>
                  </li>
                  <li>
                    <p><b>Kinh nghiệm </b>
                    <?php if(intval($userinfo->cv_exp)==0){echo "Chưa có kinh nghiệm";}else{ echo GetLuong($userinfo->cv_exp);} ?></p></p>
                  </li>
                  <li>
                    <p><b>Cấp bậc </b>
                    <?php if(intval($userinfo->cv_capbac_id)==0){echo "Chưa cập nhật";}else{ echo GetCapBac($userinfo->cv_capbac_id);} ?></p></p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="divider"></div>
            <h6>Kỹ năng bản thân</h6>
            <div class="row">
              <div class="col-md-12">
                <?php if(empty($userinfo->cv_kynang)){echo "Chưa cập nhật";}else{ echo $userinfo->cv_kynang;} ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>