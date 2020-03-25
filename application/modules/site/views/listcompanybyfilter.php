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
                <input class="form-control" id="keyworkcom" value="<?php echo $params['keywork'] ?>" placeholder="Nhập từ khóa" type="text">
              </div>
              <div class="input-group">
                <i class="fa fa-search"></i>
                <button name="submit" type="button" class="timdoanhnghiep">Tìm</button>
              </div>
            </form>
            <!-- JOB SEARCH FORM ENDS -->
          </div>
        </div>
        <div class="alpha-filters">
          <div class="filter-by slider">
            <?php 
            if(!empty($fillabc)){
                foreach($fillabc as $abc){
                    if($params['keywork']==$abc['name'] && $params['type']==2){ ?>
                        <div><a onclick="load('<?php echo $abc['url']  ?>')" class="active"><?php echo $abc['name'] ?></a></div>
                    <?php }else{ ?>
                        <div><a onclick="load('<?php echo $abc['url']  ?>')" ><?php echo $abc['name'] ?></a></div>
                    <?php }
                }
            }
            ?>
            
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
          <div class="sidebar col-md-3 col-sm-4">
            <h5>Lọc tìm kiếm <a onclick="load('<?php echo base_url()."nha-tuyen-dung&keywork=&c=0&n=0&type=1"  ?>')" class="pull-right">Xóa lọc</a></h5>
            <!--<div class="filters-wrap">
              <div class="category-title"></div>
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
                  <input name="search-location" placeholder="Search New Location" type="text">
                  <i class="fa fa-search"></i>
                </div>-->
                <ul>
                <?php if(!empty($category)){
                    foreach($category as $c){
                        if($params['cate']==$c['cit_id']){
                            ?>
                            <li>
                                <input onclick="load('<?php echo $c['url']  ?>')" checked="checked" name="location<?php echo $c['cit_id'] ?>" id="location<?php echo $c['cit_id'] ?>" type="checkbox">
                                <label for="location<?php echo $c['cit_id'] ?>"><?php echo $c['cit_name'] ?></label>
                                <!--<span class="pull-right">63</span>-->
                              </li>
                        <?php }else{?>
                            <li>
                                <input onclick="load('<?php echo $c['url']  ?>')" name="location<?php echo $c['cit_id'] ?>" id="location<?php echo $c['cit_id'] ?>" type="checkbox">
                                <label for="location<?php echo $c['cit_id'] ?>"><?php echo $c['cit_name'] ?></label>
                                <!--<span class="pull-right">63</span>-->
                              </li>
                        <?php }
                    }
                } ?>
                  
                </ul>
              </div>
            </div>
            <div class="filters-wrap">
              <div class="category-title">Theo ngành nghề <a href="javascript:void(0);" class="expand pull-right"><i class="fa fa-minus"></i></a> </div>
              <div class="filter-list citylist">
                <!--<div class="input-group">
                  <input name="search-industry" placeholder="Search New Industry" type="text">
                  <i class="fa fa-search"></i>
                </div>-->
                <ul>
                <?php
                    if(!empty($ccity)){
                        foreach($ccity as $c){
                            if($params['nganhnghe']==$c['cat_id']){ ?>
                                <li>
                                    <input checked="checked" onclick="load('<?php echo $c['url']  ?>')" name="industry<?php echo $c['cat_id'] ?>" id="industry<?php echo $c['cat_id'] ?>" type="checkbox">
                                    <label for="industry<?php echo $c['cat_id'] ?>"><?php echo $c['cat_name'] ?></label>
                                    <span class="pull-right"><?php echo $c['socongty'] ?></span>
                                  </li>
                 <?php     }else{ ?>
                                <li>
                                    <input onclick="load('<?php echo $c['url']  ?>')" name="industry<?php echo $c['cat_id'] ?>" id="industry<?php echo $c['cat_id'] ?>" type="checkbox">
                                    <label for="industry<?php echo $c['cat_id'] ?>"><?php echo $c['cat_name'] ?></label>
                                    <span class="pull-right"><?php echo $c['socongty'] ?></span>
                                  </li>
                <?php }
                        }
                    }   
                 ?>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div class="row">
              <div class="col-md-7">
                <h5>Có <?php echo $totalrow ?> phù hợp với điều kiện tìm kiếm</h5>
              </div>
              <!--<div class="col-md-5">
                <div class="btn-group btn-block">
                  <a href="javascript:void(0);" class="btn btn-toggle">Best Match</a>
                  <a href="javascript:void(0);" class="btn btn-toggle active">View All</a>
                </div>
              </div>-->
            </div>
            <div class="row company-list">
                <?php if(!empty($itemcom)){ 
                        foreach($itemcom as $n){
                            ?>
                           <div class="col-md-6">
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