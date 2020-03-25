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
              <div class="form-group">
                <input class="form-control" id="keyworkcongty" value="<?php echo $params['keywork'] ?>" placeholder="Nhập từ khóa" type="text">
              </div>
              <div class="input-group">
                <i class="fa fa-search"></i>
                <button name="submit" type="button" class="hosocongty">Tìm</button>
              </div>
            </div>
            <!-- JOB SEARCH FORM ENDS -->
          </div>
        </div>
        <div class="position-intro">
          <div class="row">
          
            <div class="col-md-2">
              <a href="<?php echo base_url()."".$itemcom->alias."-dn".$itemcom->id.".html"; ?>"><img src="<?=base_url()."laytin_trangvang/laytin_trangvang/doanhnghiep".$itemcom->image ?>" onerror='this.onerror=null;this.src="images/no-image.png";' alt="<?php echo $itemcom->name ?>"></a>
            </div>
            <div class="col-md-10">
              <div class="company-info note-intro">
                <h1><?php echo $itemcom->name; ?></h1>
                <p><i class="fa fa-map-marker"></i> <?php if(empty($itemcom->address)){echo "Chưa cập nhật";}else{ echo trim($itemcom->address); } ?></p>
                
                <p><i class="fa fa-internet-explorer"></i> Website:  <?php echo $itemcom->website ?></p>
                <p style="color: red;"><i class="fa fa-phone-square"></i> 
                <?php 
               echo $itemcom->phone;
                ?>
                </p>
                <p><i class="fa fa-fax"></i> <?php echo $itemcom->Fax; ?></p>
                <p><i class="fa fa-at"></i> Email: <?php if(empty($itemcom->email)){echo "Chưa cập nhật";}else{ echo $itemcom->email;} ?></p>
                
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
          <div class="col-md-9 congtytv">
            <h6>Thông tin khác</h6>
            <div class="divdesctription">
                <p style="color:#55d3e1"><b><?php 
                if(empty($itemcom->member)){echo "Chưa cập nhật";}else{
                    
                    echo trim($itemcom->member);
                }
                 ?></b></p>
                <p style="color:#55d3e1"><b><?php if(empty($itemcom->year_created)){echo "Chưa cập nhật";}else{ echo $itemcom->year_created;} ?></b></p>
                <p style="color:#55d3e1"><b><?php echo $itemcom->type ?></b></p>
                <p style="color:#55d3e1"><b><?php echo $itemcom->job ?></b></p>
            </div>
            <h6>Đại diện Công ty </h6>
            <div class="divdecsctription">
                <?php echo $itemcom->represent ?>
            </div>
            <h6>Ngành nghề kinh doanh</h6>
            <div>
            <?php echo $itemcom->NganhNghe ?>
            </div>
            <h6>Dịch vụ sản phẩm</h6>
            <div class="divdecsctription"><?php echo $itemcom->ProductServices ?></div>
            <h6>Thông tin chi tiết </h6>
            <div class="divdecsctription">
                <?php echo $itemcom->content ?>
                <br />
            </div>
            <div class="well">
                <div class="red"><p>Ghi chú(*)</p></div>
                <p>+ Thông tin trên chỉ mang tính tham khảo, các doanh nghiệp mới làm thủ tục thay đổi thông tin mà hệ thống chưa cập nhật kịp thời vui lòng liên hệ hotline để cập nhật</p>
            </div>
          </div>
          <div class="sidebar col-md-3">
            <h5>Các Công ty khác</h5>
            <div class="keywords-wrap">
                <?php if(!empty($morejob)){ 
                        foreach($morejob as $n){
                            ?>
                           <div class="">
                              <div class="tencongtykhac">
                                <h3><a href="<?php echo base_url()."".$n->alias."-dn".$n->id.".html"; ?>"><?php echo $n->name; ?></a></h3>
                              </div>
                              <div class="tencongtykhac-info">
                                  
                                  <span><?php if(empty($n->address)){echo "Chưa cập nhật";}else{ echo $n->address; } ?></span>
                                  <span><?php echo $n->phone; ?></span>
                                  
                                </div>
                                
                            </div> 
                    <?php } } ?>
              
            </div>
            
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