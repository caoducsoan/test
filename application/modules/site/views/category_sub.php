<?php 
//$urlweb="http://localhost".$_SERVER['REQUEST_URI'] ;
//echo $urlweb;
//echo $this->uri->segment(1);
$urlweb=base_url().$this->uri->segment(1);
$urlweb=str_replace('_','.',$urlweb);
echo $urlweb;
if($urlweb != $canonical)
{
   header("HTTP/1.1 301 Moved Permanently"); 
   header("Location: $canonical");
   exit();
}
?>
<section class="inner-banner">
<h1 class="text-center"><?php echo $item->name ?></h1>
</section>
<section class="position-details news-break">
<div class="container list-news">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Trang chủ</a></li>      
      <li class="breadcrumb-item active"><a href="<?php echo $canonical ?>"><?php echo $item->name ?></a></li>
    </ol>
    <div class="col-md-8">
        <div class="news">
					<?php if($query->num_rows()>0){
						foreach ($query->result() as $nub) { 
						  
                          ?>
					<div class="item">
						<div class="wi"><a href="<?php echo site_url($nub->alias.'-b'.$nub->id.'.html'); ?>"><img src="<?echo base_url().'upload/news/thumb/'.$nub->image; ?>" alt="<?php echo $nub->title; ?>"></a></div>
						<div class="tit"><a href="<?php echo site_url($nub->alias.'-b'.$nub->id.'.html'); ?>"><?php echo $nub->title; ?></a></div>
						<p><span>Ngày đăng: <?php 
						$d = explode('-',explode(' ', $nub->created_day)[0]);
						echo $d[2].'/'.$d[1].'/'.$d[0]; ?></span></p>
						<div class="sapo"><?php echo $nub->sapo; ?></div>
						<a class="more bg-orange" href="<?php echo site_url($nub->alias.'-b'.$nub->id.'.html'); ?>">Chi tiết</a>
						<div class="clr"></div>
					</div>
				<?php } } ?>
					<div class="pagation pull-right">
						<?php echo $pagination; ?>
					</div>
				</div>
    </div>
    <div class="col-md-4">
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
</section>
