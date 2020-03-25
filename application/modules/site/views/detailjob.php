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
<section class="inner-banner padding-bottom-0">
      <!-- BANNER STARTS -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- JOB SEARCH FORM STARTS -->
            <div class="form-inline" >
              <div class="form-group keyword">
                <input class="form-control" id="findkeyjob" placeholder="Nhập từ khóa" type="text">
              </div>
              
              <div class="form-group keyword hidden-xs">
                <select id="index_nganhnghe" class="city_ab">
                        <option data-tokens="0" value="0">Ngành nghề</option> 
                                    <option data-tokens="1" value="1">Kế toán - Kiểm toán</option> 
                                                                        <option data-tokens="2" value="2">Hành chính - Văn phòng</option> 
                                                                        <option data-tokens="3" value="3">Sinh viên làm thêm</option> 
                                                                        <option data-tokens="4" value="4">Xây dựng</option> 
                                                                        <option data-tokens="5" value="5">Điện - Điện tử</option> 
                                                                        <option data-tokens="6" value="6">Làm bán thời gian</option> 
                                                                        <option data-tokens="7" value="7">Vận tải - Lái xe</option> 
                                                                        <option data-tokens="8" value="8">Khách sạn - Nhà hàng</option> 
                                                                        <option data-tokens="9" value="9">Nhân viên kinh doanh</option> 
                                                                        <option data-tokens="10" value="10">Việc làm bán hàng</option> 
                                                                        <option data-tokens="11" value="11">Cơ khí - Chế tạo</option> 
                                                                        <option data-tokens="12" value="12">Lao động phổ thông</option> 
                                                                        <option data-tokens="13" value="13">IT phần mềm</option> 
                                                                        <option data-tokens="14" value="14">Marketing-PR</option> 
                                                                        <option data-tokens="17" value="17">Giáo dục-Đào tạo</option> 
                                                                        <option data-tokens="18" value="18">Kỹ thuật</option> 
                                                                        <option data-tokens="19" value="19">Y tế-Dược</option> 
                                                                        <option data-tokens="20" value="20">Quản trị kinh doanh</option> 
                                                                        <option data-tokens="21" value="21">Dịch vụ</option> 
                                                                        <option data-tokens="22" value="22">Biên-Phiên dịch</option> 
                                                                        <option data-tokens="23" value="23">Dệt may - Da giày</option> 
                                                                        <option data-tokens="24" value="24">Kiến trúc - Tk nội thất</option> 
                                                                        <option data-tokens="25" value="25">Xuất,nhập khẩu</option> 
                                                                        <option data-tokens="26" value="26">IT Phần cứng-mạng</option> 
                                                                        <option data-tokens="27" value="27">Nhân sự</option> 
                                                                        <option data-tokens="28" value="28">Thiết kế - Mỹ thuật</option> 
                                                                        <option data-tokens="29" value="29">Tư vấn</option> 
                                                                        <option data-tokens="30" value="30">Bảo vệ</option> 
                                                                        <option data-tokens="31" value="31">Ô tô - xe máy</option> 
                                                                        <option data-tokens="32" value="32">Thư ký-Trợ lý</option> 
                                                                        <option data-tokens="33" value="33">KD bất động sản</option> 
                                                                        <option data-tokens="34" value="34">Du lịch</option> 
                                                                        <option data-tokens="35" value="35">Báo chí-Truyền hình</option> 
                                                                        <option data-tokens="36" value="36">Thực phẩm-Đồ uống</option> 
                                                                        <option data-tokens="37" value="37">Ngành nghề khác</option> 
                                                                        <option data-tokens="38" value="38">Vật tư-Thiết bị</option> 
                                                                        <option data-tokens="39" value="39">Thiết kế web</option> 
                                                                        <option data-tokens="40" value="40">In ấn - Xuất bản</option> 
                                                                        <option data-tokens="41" value="41">Nông-Lâm-Ngư-Nghiệp</option> 
                                                                        <option data-tokens="42" value="42">Thương mại điện tử</option> 
                                                                        <option data-tokens="43" value="43">Nhập liệu</option> 
                                                                        <option data-tokens="44" value="44">Việc làm thêm tại nhà</option> 
                                                                        <option data-tokens="45" value="45">Chăm sóc khách hàng</option> 
                                                                        <option data-tokens="46" value="46">Sinh viên mới tốt nghiệp -
 Thực tập</option> 
                                                                        <option data-tokens="47" value="47">Kỹ thuật ứng dụng</option> 
                                                                        <option data-tokens="48" value="48">Bưu chính viễn thông</option> 
                                                                        <option data-tokens="49" value="49">Dầu khí -
 Địa chất</option> 
                                                                        <option data-tokens="50" value="50">Giao thông vận tải -
 Thủy lợi - Cầu đường</option> 
                                                                        <option data-tokens="51" value="51">Khu chế xuất - Khu công nghiệp</option> 
                                                                        <option data-tokens="52" value="52">Làm đẹp -
 Thể lực -
 Spa</option> 
                                                                        <option data-tokens="53" value="53">Luật - Pháp lý</option> 
                                                                        <option data-tokens="54" value="54">Môi trường - Xử lý chất thải</option> 
                                                                        <option data-tokens="55" value="55">Mỹ phẩm -
 Thời trang -
 Trang sức</option> 
                                                                        <option data-tokens="56" value="56">Ngân hàng - Chứng khoán - Đầu tư</option> 
                                                                        <option data-tokens="57" value="57">Nghệ thuật - Điện ảnh</option> 
                                                                        <option data-tokens="58" value="58">Phát triển thị trường</option> 
                                                                        <option data-tokens="59" value="59">Phục vụ -
 Tạp vụ -
 Giúp việc</option> 
                                                                        <option data-tokens="60" value="60">Quan hệ đối ngoại</option> 
                                                                        <option data-tokens="61" value="61">Quản lý điều hành</option> 
                                                                        <option data-tokens="62" value="62">Sản xuất -
 Vận hành sản xuất</option> 
                                                                        <option data-tokens="63" value="63">Thẩm định - Giám thẩm định - Quản lý chất lượng</option> 
                                                                        <option data-tokens="64" value="64">Thể dục -
 Thể thao</option> 
                                                                        <option data-tokens="65" value="65">Hóa học -
 Sinh học</option> 
                                                                        <option data-tokens="66" value="66">Bảo hiểm</option> 
                                                                        <option data-tokens="67" value="67">Freelancer</option> 
                                                                        <option data-tokens="68" value="68">Công chức - Viên chức </option>              
                     </select>
              </div>
              <div class="form-group keyword hidden-xs">
                <select id="index_dia_diem" class="city_ab">                        
                        <option data-tokens="0" value="0">Tỉnh thành</option>
                                                                        <option data-tokens="1" value="1">Hà Nội</option> 
                                                                        <option data-tokens="45" value="45">Hồ Chí Minh</option> 
                                                                        <option data-tokens="49" value="49">An Giang</option> 
                                                                        <option data-tokens="47" value="47">Bà Rịa Vũng Tàu</option> 
                                                                        <option data-tokens="3" value="3">Bắc Giang</option> 
                                                                        <option data-tokens="4" value="4">Bắc Kạn</option> 
                                                                        <option data-tokens="50" value="50">Bạc Liêu</option> 
                                                                        <option data-tokens="5" value="5">Bắc Ninh</option> 
                                                                        <option data-tokens="52" value="52">Bến Tre</option> 
                                                                        <option data-tokens="46" value="46">Bình Dương</option> 
                                                                        <option data-tokens="51" value="51">Bình Phước</option> 
                                                                        <option data-tokens="31" value="31">Bình Thuận</option> 
                                                                        <option data-tokens="30" value="30">Bình Định</option> 
                                                                        <option data-tokens="53" value="53">Cà Mau</option> 
                                                                        <option data-tokens="48" value="48">Cần Thơ</option> 
                                                                        <option data-tokens="6" value="6">Cao Bằng</option> 
                                                                        <option data-tokens="34" value="34">Gia Lai</option> 
                                                                        <option data-tokens="10" value="10">Hà Giang</option> 
                                                                        <option data-tokens="11" value="11">Hà Nam</option> 
                                                                        <option data-tokens="35" value="35">Hà Tĩnh</option> 
                                                                        <option data-tokens="9" value="9">Hải Dương</option> 
                                                                        <option data-tokens="2" value="2">Hải Phòng</option> 
                                                                        <option data-tokens="56" value="56">Hậu Giang</option> 
                                                                        <option data-tokens="8" value="8">Hòa Bình</option> 
                                                                        <option data-tokens="12" value="12">Hưng Yên</option> 
                                                                        <option data-tokens="28" value="28">Khánh Hòa</option> 
                                                                        <option data-tokens="57" value="57">Kiên Giang</option> 
                                                                        <option data-tokens="36" value="36">Kon Tum</option> 
                                                                        <option data-tokens="14" value="14">Lai Châu</option> 
                                                                        <option data-tokens="29" value="29">Lâm Đồng</option> 
                                                                        <option data-tokens="15" value="15">Lạng Sơn</option> 
                                                                        <option data-tokens="13" value="13">Lào Cai</option> 
                                                                        <option data-tokens="58" value="58">Long An</option> 
                                                                        <option data-tokens="17" value="17">Nam Định</option> 
                                                                        <option data-tokens="37" value="37">Nghệ An</option> 
                                                                        <option data-tokens="16" value="16">Ninh Bình</option> 
                                                                        <option data-tokens="38" value="38">Ninh Thuận</option> 
                                                                        <option data-tokens="18" value="18">Phú Thọ</option> 
                                                                        <option data-tokens="39" value="39">Phú Yên</option> 
                                                                        <option data-tokens="40" value="40">Quảng Bình</option> 
                                                                        <option data-tokens="41" value="41">Quảng Nam</option> 
                                                                        <option data-tokens="42" value="42">Quảng Ngãi</option> 
                                                                        <option data-tokens="19" value="19">Quảng Ninh</option> 
                                                                        <option data-tokens="43" value="43">Quảng Trị</option> 
                                                                        <option data-tokens="59" value="59">Sóc Trăng</option> 
                                                                        <option data-tokens="20" value="20">Sơn La</option> 
                                                                        <option data-tokens="61" value="61">Tây Ninh</option> 
                                                                        <option data-tokens="21" value="21">Thái Bình</option> 
                                                                        <option data-tokens="22" value="22">Thái Nguyên</option> 
                                                                        <option data-tokens="44" value="44">Thanh Hóa</option> 
                                                                        <option data-tokens="27" value="27">Thừa Thiên Huế</option> 
                                                                        <option data-tokens="60" value="60">Tiền Giang</option> 
                                                                        <option data-tokens="62" value="62">Trà Vinh</option> 
                                                                        <option data-tokens="23" value="23">Tuyên Quang</option> 
                                                                        <option data-tokens="63" value="63">Vĩnh Long</option> 
                                                                        <option data-tokens="24" value="24">Vĩnh Phúc</option> 
                                                                        <option data-tokens="25" value="25">Yên Bái</option> 
                                                                        <option data-tokens="26" value="26">Đà Nẵng</option> 
                                                                        <option data-tokens="32" value="32">Đắk Lắk</option> 
                                                                        <option data-tokens="33" value="33">Đắk Nông</option> 
                                                                        <option data-tokens="7" value="7">Điện Biên</option> 
                                                                        <option data-tokens="55" value="55">Đồng Nai</option> 
                                                                        <option data-tokens="54" value="54">Đồng Tháp</option>                      
                     </select>
              </div>
              <div class="input-group">
                <i class="fa fa-search"></i>
                <button name="submit" class="timvieclam" type="button">Tìm</button>
              </div>
            </div>
            <!-- JOB SEARCH FORM ENDS -->
          </div>
        </div>
        <div class="position-intro">
          <div class="row">
            <div class="col-md-2">
              <a href="javascript:void(0);"><img src="<?= gethumbnail(geturlimageAvatar($itemjob->usc_create_time).$itemjob->usc_logo,$itemjob->usc_logo,$itemjob->usc_create_time,155,155,85) ?>" alt="<?php echo $itemjob->usc_company ?>" onerror='this.onerror=null;this.src="images/no-image.png";'></a>
            </div>
            <div class="col-md-10">
              <div class="company-info">
                <h1><?php echo $itemjob->new_title ?> 
                    
                </h1>
                <p><i class="fa fa-building"></i> <a target="_blank" href="<?php echo base_url()."".vn_str_filter($itemjob->usc_company)."-ntd".$itemjob->new_user_id.".html"; ?>"><?php echo $itemjob->usc_company ?></a></p>
                <div class="job-icons">
                  <span><i class="fa fa-briefcase"></i> <?php echo Geteduhome($itemjob->new_bang_cap) ?></span>
                  <span><i class="fa fa-map-marker"></i> <?php echo Getcitybyindex($itemjob->new_city) ?></span>
                  <span><i class="fa fa-usd"></i> <?php echo GetLuong($itemjob->new_money) ?> / tháng</span>
                  <span class="full-time"><?php echo GetTypeJob($itemjob->new_hinh_thuc) ?></span>
                </div>
                <div class="btn-group">
                  <a href="javascript:void(0);" class="btn btn-primary">Nộp đơn</a>
                  <a href="" class="btn btn-secondary">Lưu công việc</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- BANNER ENDS -->
    </section>
<section class="position-details">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h5>Thông tin chi tiết <!--<a href="javascript:void(0);" class="pull-right">Gửi mail các công việc tương tự</a>--></h5>
            <h6>Tóm tắt công việc</h6>
            <div class="well">
                <div class="col-md-6">
                    <p ><strong >Kinh nghiệm:</strong> <?php echo Getexp($itemjob->new_exp) ?></p>
                    <p ><strong >Yêu cầu bằng cấp:</strong> <?php echo Getedu($itemjob->new_bang_cap) ?></p>
                    <p ><strong >Số lượng cần tuyển:</strong> <?php echo $itemjob->new_so_luong ?></p>
                </div>
                <div class="col-md-6">
                    <p ><strong >Hình thức làm việc:</strong> <?php echo GetTypeJob($itemjob->new_hinh_thuc) ?></p>
                    <p ><strong >Chức vụ:</strong> <?php echo GetCapBac($itemjob->new_cap_bac) ?></p>
                    <p ><strong >Yêu cầu giới tính:</strong> <?php if(empty($itemjob->new_gioi_tinh)){echo "Không yêu cầu";}else{ echo $itemjob->new_gioi_tinh;} ?></p>
                </div>
                <div class="col-md-12">
                    <p ><strong>Ngành nghề:</strong></p>
                    <div class="keywords-wrap">
                        <?php
                        
                            $arr=explode(',',$itemjob->new_cat_id);
                            for($i=0;$i< count($arr);$i++){
                                echo "<a href='javascript:void(0);' class='label label-simple'>".GetCategory(intval($arr))."</a>";
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <h6>Mô tả công việc</h6>
            <div class="label-group divdecsctription">
            <?php if(empty($itemjob->new_mota)){echo "Nội dung chưa cập nhật";}else{ echo $itemjob->new_mota;} ?>
            </div>
            <h6>Yêu cầu kỹ năng</h6>
            <div class="label-group divdecsctription">
              <?php if(empty($itemjob->new_yeucau)){echo "Nội dung chưa cập nhật";}else{ echo $itemjob->new_yeucau;} ?>
              
            </div>
            <h6>Quyền lợi được hưởng</h6>
            <div class="label-group divdecsctription">
               <?php if(empty($itemjob->new_quyenloi)){echo "Nội dung chưa cập nhật";}else{ echo $itemjob->new_quyenloi;} ?>
            </div>
            <h6>Hồ sơ bao gồm</h6>
            <div class="label-group divdecsctription">
              <?php if(empty($itemjob->new_ho_so)){echo "Nội dung chưa cập nhật";}else{ echo $itemjob->new_ho_so;} ?>
            </div>
            <div class="position-footer">
              <div class="btn-group">
                <a href="javascript:void(0);" class="btn btn-secondary">Nộp đơn</a>
                <a href="javascript:void(0);" class="btn btn-inverse">Lưu công việc</a>
              </div>
            </div>
            <div class="similar-jobs-section job-list">
              <h5>Công việc tương tự <a href="javascript:void(0);" class="pull-right">Xem tất cả</a></h5>
              <div class="row">
                <?php
                $tg=0;
                if(!empty($morejob)){
                    foreach($morejob as $n){
                        
                            echo '<div class="col-md-6">';
                        
                        ?>
                        <div class="list-view">
                            <div class="list-info">
                              <h4><a target="_blank" href="<?php echo base_url()."".vn_str_filter($n->new_title)."-job".$n->new_id.".html"; ?>"><?php echo $n->new_title ?></a></h4>
                              <p><i class="fa fa-building"></i> <a target="_blank" href="<?php echo base_url()."".vn_str_filter($n->usc_company)."-ntd".$n->new_user_id.".html"; ?>"><?php echo $n->usc_company ?></a></p>
                              <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> <?php echo Geteduhome($n->new_bang_cap) ?></span>
                                <span><i class="fa fa-map-marker"></i> <?php echo Getcitybyindex($n->new_city) ?></span>
                                 <?php if($n->new_hinh_thuc > 0 && $n->new_hinh_thuc < 3){ ?>
                                  <span class="full-time"><?php echo GetTypeJob($n->new_hinh_thuc) ?></span>
                                  <?php }else if($n->new_hinh_thuc >= 3 && $n->new_hinh_thuc < 5) { ?>
                                  <span class="part-time"><?php echo GetTypeJob($n->new_hinh_thuc) ?></span>
                                  <?php }else{ ?>
                                  <span class="freelance-time"><?php echo GetTypeJob($n->new_hinh_thuc)?></span>
                                  <?php } ?>
                              </div>
                              <p><i class="fa fa-dollar"></i> <?php echo GetLuong($n->new_money) ?> / tháng</p>
                            </div>
                          </div>
                        <?php 
                            echo '</div>';
                        
                    }
                }
                 ?>
              </div>
            </div>
          </div>
          <div class="sidebar col-md-3">
            <div class="user-intro companyinfo">
              <img src="images/user-wall-pic.jpg" alt="User profile wall">
              <div class="candidate-info">
                <img src="<?= gethumbnail(geturlimageAvatar($itemjob->usc_create_time).$itemjob->usc_logo,$itemjob->usc_logo,$itemjob->usc_create_time,155,155,85) ?>" alt="<?php echo $itemjob->usc_company ?>" onerror='this.onerror=null;this.src="images/no-image.png";' class="img-circle">
                <h4><a target="_blank" href="<?php echo base_url()."".vn_str_filter($itemjob->new_title)."-ntd".$itemjob->new_user_id.".html"; ?>"><?php echo $itemjob->usc_company ?></a></h4>
                <p><i class="fa fa-map-marker"></i> Địa chỉ: <?php echo $itemjob->usc_address; ?></p>
                <p><i class="fa fa-users"></i> Quy mô công ty: <?php echo GetQuyMoCty($itemjob->usc_size); ?></p>
                <p style="color: red;"><i class="fa fa-phone-square"></i> Hotline: 
                <?php 
                if(isset($_SESSION['UserInfo']) && !empty($_SESSION['UserInfo'])){
                    if(empty($itemjob->usc_phone)){
                        echo "Chưa cập nhật";
                    }else{
                    echo $itemjob->usc_phone;
                    }
                }else{
                    echo "<span style='' class='btn_login_do' data-type='0'>Đăng nhập để xem</span>";
                }
                ?>

</p>
                <p style="color:red"><i class="fa fa-at"></i> Email: <?php 
                if(isset($_SESSION['UserInfo']) && !empty($_SESSION['UserInfo'])){
                    if(empty($itemjob->usc_email)){
                        echo "Chưa cập nhật";
                    }else{
                    echo $itemjob->usc_email;
                    }
                }else{
                    echo "<span style='' class='btn_login_do' data-type='0'>Đăng nhập để xem</span>";
                }
                ?></p>
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
            <h5>Top từ khóa</h5>
            <div class="keywords-wrap">
              <a href="javascript:void(0);" class="label label-simple">Visual Design</a>
              <a href="javascript:void(0);" class="label label-simple">Web design</a>
              <a href="javascript:void(0);" class="label label-simple">Logo Design</a>
              <a href="javascript:void(0);" class="label label-simple">Creative designer</a>
              <a href="javascript:void(0);" class="label label-simple">UI design</a>
              <a href="javascript:void(0);" class="label label-simple">Creative director</a>
              <a href="javascript:void(0);" class="label label-simple">IT</a>
              <a href="javascript:void(0);" class="label label-simple">UI / UX designer</a>
              <a href="javascript:void(0);" class="label label-simple">Project Manager</a>
            </div>
            <div class="job-notification">
              <div class="center-large-title">Increase your chances to get this job. Take these courses</div>
              <a title="Create Job Alert" class="btn btn-default btn-block">Know More</a>
            </div>
            <a href="javascript:void(0);" class="advertisement"><img src="images/advertise-2.jpg" alt="Advertisement"></a>
          </div>
        </div>
        <div class="row">
            <div class="col-md-8 candidatejobfeature">
            <div class="jobs-tab-panel"><h3 class="nav-tabs">Việc làm nổi bật</h3></div>
            <div class="job-list">
              <?php if(!empty($tinmoinhat)){
                        foreach($tinmoinhat as $n){
                        ?>
                        <div class="list-view">
                      <a target="_blank" href="<?php echo base_url()."".vn_str_filter($n->new_title)."-job".$n->new_id.".html"; ?>"><img src="<?= gethumbnail(geturlimageAvatar($n->usc_create_time).$n->usc_logo,$n->usc_logo,$n->usc_create_time,80,80,85) ?>" alt="Company Logo 01"></a>
                      <div class="list-info job-list-info">
                        <h4><a target="_blank" href="<?php echo base_url()."".vn_str_filter($n->new_title)."-job".$n->new_id.".html"; ?>"><?php echo $n->new_title ?></a></h4>
                        <p><a target="_blank" href="<?php echo base_url()."".vn_str_filter($n->usc_company)."-ntd".$n->new_user_id.".html"; ?>"><?php echo $n->usc_company ?></a></p>
                        <div class="job-icons">
                          <span><i class="fa fa-briefcase"></i> <?php echo Geteduhome($n->new_bang_cap) ?></span>
                          <span><i class="fa fa-map-marker"></i> <?php echo Getcitybyindex($n->new_city) ?></span>
                          <span><i class="fa fa-usd"></i> <?php echo GetLuong($n->new_money) ?> / tháng</span>
                          <?php if($n->new_hinh_thuc > 0 && $n->new_hinh_thuc < 3){ ?>
                          <span class="full-time"><?php echo GetTypeJob($n->new_hinh_thuc) ?></span>
                          <?php }else if($n->new_hinh_thuc >= 3 && $n->new_hinh_thuc < 5) { ?>
                          <span class="part-time"><?php echo GetTypeJob($n->new_hinh_thuc) ?></span>
                          <?php }else{ ?>
                          <span class="freelance-time"><?php echo GetTypeJob($n->new_hinh_thuc) ?></span>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                   <?php } } ?> 
            </div>
            </div>
            <div class="col-md-4 classcandidate">
                <div class="jobs-tab-panel"><h3 class="nav-tabs">Ứng viên nổi bật</h3></div>
                <div class="job-list">
                     <?php if(!empty($ungviennoibat)){ 
                        foreach ($ungviennoibat as $n){
                            ?>
                        <div class="list-view">
                            <a href="/"><img src="images/<?php echo $n->use_logo; ?>" alt="<?php echo $n->use_first_name ?>" onerror='this.onerror=null;this.src="images/icon-no-image.png";'></a>
                            <div class="list-info job-list-info candidate-info">
                              <h4><a href="<?php echo base_url()."ung-vien/".vn_str_filter($n->use_first_name)."-uv".$n->use_id.".html"; ?>"><?php echo $n->use_first_name ?></a></h4>
                              
                              <p>
                              <?php
                                if(empty($n->cv_cate_id)){
                                    $catname=0;
                                }else{
                                    $catname=$n->cv_cate_id;
                                }
                                 echo GetCategory($catname); ?>
                              </p>
                              <div class="job-icons">
                            <span><i class="fa fa-usd"></i> 300000 - 500000 / tháng</span>
                          </div>
                            </div>
                          </div>
                        
                        
                    <?php } } ?>
                  
                  
                </div>
            </div>
        </div>
      </div>
    </section>
    <script>
    $('#index_nganhnghe').select2({ width: 'calc(100% - 7px)' });
$('#index_dia_diem').select2({ width: 'calc(100% - 7px)' });
var job=new SearchJob();
    </script>