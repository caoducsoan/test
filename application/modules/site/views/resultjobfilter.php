<?php

/**
 * @author lolkittens
 * @copyright 2018
 */



?>
<section class="inner-banner">
      <!-- BANNER STARTS -->
      <div class="container">
        <h4>Tất cả việc làm tại vieclam24h.net.vn</h4>
        <div class="row">
          <div class="col-md-12">
            <!-- JOB SEARCH FORM STARTS -->
            <div class="form-inline" >
              <div class="form-group keyword">
                <input class="form-control" value="<?php echo $params['keywork'] ?>" id="findkeyjob" placeholder="Nhập từ khóa" type="text">
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
      </div>
      <!-- BANNER ENDS -->
    </section>
 <section class="search-result">
      <div class="container">
        <div class="row">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Trang chủ</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin-tuyen-dung.html">Tin tuyển dụng</a></li>
          <li class="breadcrumb-item active">Kết quả tìm kiếm</li>
        </ol>
          <div class="sidebar col-md-3 col-sm-4">
            <h5>Lọc tìm kiếm <a onclick="clearcooke()" id="" class="pull-right">Xóa lọc</a></h5>
            <!--<div class="filters-wrap">
              <div class="category-title">Nhà tuyển dụng hàng đầu</div>
              <div class="filter-list">
                <ul>
                  <li>
                    <input name="employer1" id="employer1" type="checkbox">
                    <label for="employer1">Orcapod Consulting Services</label>
                    <span class="pull-right">63</span>
                  </li>
                  <li>
                    <input name="employer2" id="employer2" type="checkbox">
                    <label for="employer2">Growel Softech Limited</label>
                    <span class="pull-right">55</span>
                  </li>
                  <li>
                    <input name="employer3" id="employer3" type="checkbox">
                    <label for="employer3">Capgemini</label>
                    <span class="pull-right">64</span>
                  </li>
                  <li>
                    <input name="employer4" id="employer4" type="checkbox">
                    <label for="employer4">Abyss &amp; Horizon Pvt. Ltd.</label>
                    <span class="pull-right">64</span>
                  </li>
                  <li>
                    <input name="employer5" id="employer5" type="checkbox">
                    <label for="employer5">iQuest Management Services</label>
                    <span class="pull-right">56</span>
                  </li>
                </ul>
              </div>
            </div>-->
            <div class="filters-wrap">
              <div class="category-title">Tỉnh / Thành Phố <a href="javascript:void(0);" class="expand pull-right"><i class="fa fa-minus"></i></a> </div>
              <div class="filter-list citylist">
                <!--<div class="input-group">
                  <input name="search-location" placeholder="Lọc tỉnh thành phố" type="text">
                  <i class="fa fa-search"></i>
                </div>-->
                <ul>
                    <?php if(!empty($city)){
                        foreach($city as $item){
                            if($params['diadiem']==$item['cit_id']){
                            ?>  
                              <li>
                                <input checked="checked" onclick="load('<?php echo $item['url']  ?>')" name="location<?php echo $item['cit_id']  ?>" id="location<?php echo $item['cit_id']  ?>" type="checkbox">
                                <label for="location<?php echo $item['cit_id']  ?>"><?php echo $item['cit_name']  ?></label>
                                <span class="pull-right"><?php echo $item['tongbanghi']  ?></span>
                              </li>
                           <?php }else{
                            ?>
                            <li>
                                <input onclick="load('<?php echo $item['url']  ?>')" name="location<?php echo $item['cit_id']  ?>" id="location<?php echo $item['cit_id']  ?>" type="checkbox">
                                <label for="location<?php echo $item['cit_id']  ?>"><?php echo $item['cit_name']  ?></label>
                                <span class="pull-right"><?php echo $item['tongbanghi']  ?></span>
                              </li>
                     <?php }  }
                    } ?>
                  
                </ul>
              </div>
            </div>
            <div class="filters-wrap">
              <div class="category-title">Việc làm theo ngành nghề <a href="javascript:void(0);" class="expand pull-right"><i class="fa fa-minus"></i></a> </div>
              <div class="filter-list citylist">
                <!--<div class="input-group">
                  <input name="search-industry" placeholder="Search New Industry" type="text">
                  <i class="fa fa-search"></i>
                </div>-->
                <ul>
                    <?php 
                    if(!empty($category)){
                        foreach($category as $itemcat)
                        {
                            if($params['nganhnghe']==$itemcat['cat_id']){
                            ?>  
                              <li>
                                <input checked="checked" onclick="load('<?php echo $itemcat['url']  ?>')" name="location<?php echo $itemcat['cat_id']  ?>" id="location<?php echo $itemcat['cat_id']  ?>" type="checkbox">
                                <label for="location<?php echo $itemcat['cat_id']  ?>"><?php echo $itemcat['cat_name']  ?></label>
                                <span class="pull-right"><?php echo $itemcat['tongbanghi']  ?></span>
                              </li>
                           <?php }else{
                            ?>
                            <li>
                                <input onclick="load('<?php echo $itemcat['url']  ?>')" name="location<?php echo $itemcat['cat_id']  ?>" id="location<?php echo $itemcat['cat_id']  ?>" type="checkbox">
                                <label for="location<?php echo $itemcat['cat_id']  ?>"><?php echo $itemcat['cat_name']  ?></label>
                                <span class="pull-right"><?php echo $itemcat['tongbanghi']  ?></span>
                              </li>
                   <?php  }   }
                    }
                    ?>
                  
                </ul>
              </div>
            </div>
            <!--<div class="filters-wrap">
              <div class="category-title">Việc làm theo lương</div>
              <div class="filter-list">
                <form class="row">
                  <div class="col-md-6">
                    <input name="minimun" class="form-control" placeholder="Min" min="0" max="100000" step="500" type="number">
                  </div>
                  <div class="col-md-6">
                    <input name="maximum" class="form-control" placeholder="Max" min="0" max="100000" step="500" type="number">
                  </div>
                </form>
              </div>
            </div>-->
            <div class="filters-wrap">
              <div class="category-title">Học vấn <a href="javascript:void(0);" class="expand pull-right"><i class="fa fa-plus"></i></a> </div>
              <div class="filter-list" style="display:none;">
                <ul>
                    <?php
                     
                    
                    if(!empty($filteredu)){
                        foreach($filteredu as $edu){
                            if(!empty($_COOKIE['jobedu']) && strval($_COOKIE['jobedu']) == strval(trim($edu->ValueOption)) ){
                                ?>
                                <li>
                                    <input checked="checked" onclick="filledu(this)" name="function<?php echo $edu->EduID ?>" id="function<?php echo $edu->EduID ?>" value="<?php echo $edu->ValueOption ?>" type="checkbox">
                                    <label for="function<?php echo $edu->EduID ?>"><?php echo $edu->TitleEdu ?></label>
                                    <span class="pull-right"><?php echo $edu->sobanghi ?></span>
                                  </li> 
                            <?php    }else{
                          ?>
                           <li>
                            <input onclick="filledu(this)" name="function<?php echo $edu->EduID ?>" id="function<?php echo $edu->EduID ?>" value="<?php echo $edu->ValueOption ?>" type="checkbox">
                            <label for="function<?php echo $edu->EduID ?>"><?php echo $edu->TitleEdu ?></label>
                            <span class="pull-right"><?php echo $edu->sobanghi ?></span>
                          </li>  
                     <?php }  }
                    }
                    ?>
                  
                </ul>
              </div>
            </div>
            <div class="filters-wrap">
              <div class="category-title">Cấp bậc <a href="javascript:void(0);" class="expand pull-right"><i class="fa fa-plus"></i></a> </div>
              <div class="filter-list" style="display:none;">
                <ul>
                <?php 
                if(!empty($filterlevel)){
                    foreach($filterlevel as $level){
                        if(!empty($_COOKIE['joblevel']) && $_COOKIE['joblevel']== $level->LevelID ){ ?>
                        <li>
                            <input checked="checked" onclick="filterlevel(this)" value="<?php echo $level->LevelID ?>" name="company-type<?php echo $level->LevelID ?>" id="company-type<?php echo $level->LevelID ?>" type="checkbox">
                            <label for="company-type<?php echo $level->LevelID ?>"><?php echo $level->Title ?></label>
                            <span class="pull-right"><?php echo $level->sobanghi ?></span>
                          </li>
                        <?php }else{
                        ?>
                        <li>
                            <input onclick="filterlevel(this)" value="<?php echo $level->LevelID ?>" name="company-type<?php echo $level->LevelID ?>" id="company-type<?php echo $level->LevelID ?>" type="checkbox">
                            <label for="company-type<?php echo $level->LevelID ?>"><?php echo $level->Title ?></label>
                            <span class="pull-right"><?php echo $level->sobanghi ?></span>
                          </li>
                    <?php } }
                    }
                ?>
                </ul>
              </div>
            </div>
            <div class="filters-wrap">
              <div class="category-title">Kinh nghiệm làm việc<a href="javascript:void(0);" class="expand pull-right"><i class="fa fa-plus"></i></a> </div>
              <div class="filter-list" style="display:none;">
                <ul>
                <?php 
                if(!empty($filterexp))
                {
                    foreach($filterexp as $exp){
                        if(!empty($_COOKIE['jobexperion']) and intval($_COOKIE['jobexperion'])=== intval($exp->ValueOption)  ){ ?>
                        <li>
                            <input checked="checked" onclick="fillexp(this)" value="<?php echo $exp->ValueOption ?>" name="company-exp<?php echo $exp->ExperienceID ?>" id="company-exp<?php echo $exp->ExperienceID ?>" type="checkbox">
                            <label for="company-exp<?php echo $exp->ExperienceID ?>"><?php echo $exp->TitleEX ?></label>
                            <span class="pull-right"><?php echo $exp->sobanghi ?></span>
                          </li>
                       <?php }else{ ?>
                        <li>
                            <input onclick="fillexp(this)" value="<?php echo $exp->ValueOption ?>" name="company-exp<?php echo $exp->ExperienceID ?>" id="company-exp<?php echo $exp->ExperienceID ?>" type="checkbox">
                            <label for="company-exp<?php echo $exp->ExperienceID ?>"><?php echo $exp->TitleEX ?></label>
                            <span class="pull-right"><?php echo $exp->sobanghi ?></span>
                          </li>
                  <?php  }  }
                    }
                    ?>                  
                </ul>
              </div>
            </div>
            <div class="filters-wrap">
              <div class="category-title">Cập nhật <a href="javascript:void(0);" class="expand pull-right"><i class="fa fa-plus"></i></a> </div>
              <div class="filter-list" style="display:none;">
                <ul>
                  <li>
                    <input <?php if($_COOKIE['jobupdate']=='day'){echo 'checked="checked"';}?> onclick="fillupdate(this)" name="freshness" id="freshness1" value="day" type="radio">
                    <label for="freshness1">Hôm nay</label>
                  </li>
                  <li>
                    <input <?php if($_COOKIE['jobupdate']=='week'){echo 'checked="checked"';}?> onclick="fillupdate(this)" name="freshness" id="freshness2" value="week" type="radio">
                    <label for="freshness2">1 tuần trở lại</label>
                  </li>
                  <li>
                    <input <?php if($_COOKIE['jobupdate']=='twoweek'){echo 'checked="checked"';}?> onclick="fillupdate(this)" name="freshness" id="freshness3" value="twoweek" type="radio">
                    <label for="freshness3">15 ngày gần đây</label>
                  </li>
                  <li>
                    <input <?php if($_COOKIE['jobupdate']=='month'){echo 'checked="checked"';}?> onclick="fillupdate(this)" name="freshness" id="freshness4" value="month" type="radio">
                    <label for="freshness4">1 tháng</label>
                  </li>
                  <li>
                    <input <?php if($_COOKIE['jobupdate']=='twomonth'){echo 'checked="checked"';}?> onclick="fillupdate(this)" name="freshness" id="freshness5" value="twomonth" type="radio">
                    <label for="freshness5">2 tháng</label>
                  </li>
                  <li>
                    <input <?php if($_COOKIE['jobupdate']=='all'){echo 'checked="checked"';}?> onclick="fillupdate(this)" name="freshness" id="freshness6" value="all"  type="radio">
                    <label for="freshness6">Tất cả</label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div class="row">
              <div class="col-md-8">
                <h5><?php echo $start_row." - ".($start_row + 20)  ?> / <?php echo $total ?> việc làm tìm thấy</h5>
              </div>
              <!--<div class="col-md-4">
                <div class="btn-group btn-block">
                  <a href="javascript:void(0);" class="btn btn-toggle">Relevent</a>
                  <a href="javascript:void(0);" class="btn btn-toggle active">Latest</a>
                </div>
              </div>-->
            </div>
            <div class="job-list">
                <?php if(!empty($itemjob)){
                        foreach($itemjob as $n){
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
                          <span class="freelance-time"><?php echo GetTypeJob($n->new_hinh_thuc)?></span>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                   <?php } } ?> 
              
              
              
              
              
              
              
              
            </div>
            <div class="pagation pull-right">
						<?php echo $pagination; ?>
					</div>
            <!--<ul class="pagination pull-right">
              <li><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a></li>
              <li><a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a></li>
              <li class="active"><a>1</a></li>
              <li class=""><a>2</a></li>
              <li class=""><a>3</a></li>
              <li><a href="javascript:void(0);">4</a></li>
              <li><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
              <li><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>-->
          </div>
        </div>
        <div class="row company-list">
            <div class="jobs-tab-panel"><h3 class="nav-tabs">Nhà tuyển dụng nổi bật</h3></div>
            <?php if(!empty($congtymoinhat)){ 
                        foreach($congtymoinhat as $n){
                            ?>
                           <div class="col-md-4 col-sm-6">
                              <div class="company-grid">
                                <a href="<?php echo base_url()."".vn_str_filter($n->usc_company)."-ntd".$n->usc_id.".html"; ?>"><img src="<?= gethumbnail(geturlimageAvatar($n->usc_create_time).$n->usc_logo,$n->usc_logo,$n->usc_create_time,80,80,85) ?>" onerror='this.onerror=null;this.src="images/no-image.png";' alt="<?php echo $n->usc_company ?>"></a>
                                <div class="company-info">
                                  <h3><a href="<?php echo base_url()."".vn_str_filter($n->usc_company)."-ntd".$n->usc_id.".html"; ?>"><?php echo $n->usc_company; ?></a></h3>
                                  <h4>Quy mô: <?php echo GetQuyMoCty($n->usc_size); ?></h4>
                                  <p>Địa chỉ: <?php echo $n->usc_address; ?></p>
                                  <h5><?php echo number_format($n->sobaiviet); ?> Việc</h5>
                                </div>
                                <div class="actionbar">
                                  <?php echo number_format($n->point_usc); ?> điểm <a href="<?php echo base_url()."".vn_str_filter($n->usc_company)."-ntd".$n->usc_id.".html"; ?>" class="btn btn-primary">Chi tiết</a>
                                </div>
                              </div>
                            </div> 
                    <?php } } ?>
            
            
            
            
            
        </div>
      </div>
    </section>
<script>
$(document).on('ready', function() {
    
});
function filledu(e)
{
var fillzero = $(e).attr("value");
window.location = window.location.href;
setCookie('jobedu', fillzero);
}
function filterlevel(e)
{
    var fillzero = $(e).attr("value");
window.location = window.location.href;
setCookie('joblevel', fillzero);
}
function fillexp(e)
{
    var fillzero = $(e).attr("value");
window.location = window.location.href;
setCookie('jobexperion', fillzero);
}
function fillupdate(e)
{
    var fillzero = $(e).attr("value");
window.location = window.location.href;
setCookie('jobupdate', fillzero);
}
function setCookie(key, value) {
var expires = new Date();
expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}
function delCookie(key) {
var expires = new Date();
expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
document.cookie = key + '=;expires=' + expires.toUTCString();
}
var delcook = new AllClearCooke();
$('#index_nganhnghe').select2({ width: 'calc(100% - 7px)' }).select2("val", "<?php echo $params['nganhnghe'] ?>");
$('#index_dia_diem').select2({ width: 'calc(100% - 7px)' }).select2("val", "<?php echo $params['diadiem'] ?>");
var job=new SearchJob();
function clearcooke()
{
    delCookie('jobedu');
    delCookie('joblevel');
    delCookie('jobexperion');
    delCookie('jobupdate');
    //setCookie('jobedu', '');
    //setCookie('joblevel', '');
    //setCookie('jobexperion', '');
    //setCookie('jobupdate', '');
    window.location = '<?php echo base_url()."tim-viec-lam&keywork=&dd=0&nn=0" ?>';
}
function load(elm){window.location = elm;}
</script>