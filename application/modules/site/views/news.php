<?php
?>
<section>
<div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Trang chủ</a></li>      
      <li class="breadcrumb-item"><a href="<?php echo base_url().$cat->alias.'-'.$cat->id.'.html' ?>"><?php echo $cat->name ?></a></li>
      <li class="breadcrumb-item active"><?php echo $item->title; ?></li>
    </ol>
</div>
<div class="bg-blue">
            		<div class="ctr container">
            			<h1><?php echo $item->title; ?></h1>
            		</div>
            	</div>
     <div class="container maincontent">
        <div class="rowaddon2 colmd7">
        <div class="col-md-8 news">
            <div class="blog">
                	
                <div class="content">
        			<!--<div class="module bar">			
        				<ul>
        					<li><a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url($item->alias.'-b'.$item->id.'.html'); ?>" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a></li>
        					<li><a rel="nofollow" href="http://www.twitter.com/share?url=<?php echo site_url($item->alias.'-b'.$item->id.'.html'); ?>" target="_blank"><i class="fa fa-twitter-square"></i> Twitter</a></li>
        					<li><a rel="nofollow" href="https://plus.google.com/share?url={<?php echo site_url($item->alias.'-b'.$item->id.'.html'); ?>}" target="_blank"><i class="fa fa-google-plus-square"></i> Gmail</a></li>
        					<
        				</ul>
        			</div>-->
        			<div class="ir">			
        				<?php echo $item->content; ?>
        			</div>
        		</div>
            </div>
        </div>
        <div class="col-md-4 news">
            <h3 class="nav-tabs" style="margin-top:2px;">Việc làm nổi bật</h3>
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
                  <div class="clear-float" style="height: 40px;"></div>
        <h3 class="nav-tabs" style="margin-top:2px;">Ứng viên nổi bật</h3>
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
