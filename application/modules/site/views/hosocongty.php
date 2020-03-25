<?php

/**
 * @author GallerySoft.info
 * @copyright 2018
 */


?>
<section class="inner-banner">
      <!-- BANNER STARTS -->
      <div class="container">
        <h4>Tìm kiếm nhà tuyển dụng</h4>
        <div class="row">
          <div class="col-md-12">
            <!-- JOB SEARCH FORM STARTS -->
            <form class="form-inline">
              <div class="form-group">
                <input class="form-control" id="keyworkcongty" value="<?php echo $params['keywork'] ?>" placeholder="Nhập từ khóa" type="text">
              </div>
              <div class="input-group">
                <i class="fa fa-search"></i>
                <button name="submit" type="button" class="hosocongty">Tìm</button>
              </div>
            </form>
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
          <li class="breadcrumb-item active">Danh sách Công ty</li>
        </ol>
          
          <div class="col-md-12 col-sm-12">
            <div class="row">
              <div class="col-md-12">
                <h5>Có <?php echo $totalrow ?> phù hợp với điều kiện tìm kiếm</h5>
              </div>
              
            </div>
            <div class="row company-list">
                <?php if(!empty($itemcom)){ 
                        foreach($itemcom as $n){
                            ?>
                           <div class="col-md-4">
                              <div class="company-grid">
                                <a href="<?php echo base_url()."".$n->alias."-dn".$n->id.".html"; ?>"><img src="<?=base_url()."laytin_trangvang/laytin_trangvang/doanhnghiep".$n->image ?>" onerror='this.onerror=null;this.src="images/no-image.png";' alt="<?php echo $n->name ?>"></a>
                                <div class="company-info">
                                  <h3><a href="<?php echo base_url()."".$n->alias."-dn".$n->id.".html"; ?>"><?php echo $n->name; ?></a></h3>
                                  <h4><?php if(empty($n->member)){echo "Số lượng nhân viên: chưa cập nhật";}else{ echo $n->member; } ?></h4>
                                  <p><?php echo $n->address; ?></p>
                                  <h5><?php if(empty($n->masothue)){echo "MST: Chưa cập nhật";}else{ echo $n->masothue;} ?></h5>
                                </div>
                                <div class="actionbar">
                                 <?php echo $n->year_created; ?> <a href="<?php echo base_url()."".$n->alias."-dn".$n->id.".html"; ?>" class="btn btn-primary">Chi tiết</a>
                                </div>
                              </div>
                            </div> 
                    <?php } } ?>
            </div>
            <div class="pagation pull-right">
				<?php echo $pagination; ?>
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
                      <a target="_blank" href="<?php echo base_url()."".vn_str_filter($n->new_title)."-job".$n->new_id.".html"; ?>"><img src="<?= gethumbnail(geturlimageAvatar($n->usc_create_time).$n->usc_logo,$n->usc_logo,$n->usc_create_time,80,80,85) ?>" onerror='this.onerror=null;this.src="images/no-image.png";' alt="Company Logo 01"></a>
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
                            <span><i class="fa fa-usd"></i> <?php echo GetLuong($n->cv_money_id) ?> / tháng</span>
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
var job=new SearchJob();
function load(elm){window.location = elm;}
</script>