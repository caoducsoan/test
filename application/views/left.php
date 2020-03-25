<?php
$CI=&get_instance();
$CI->load->model('site/site_model');
?>
<div class="giacart">
	<p class="gia"><?php echo $item->price==''?'Liên hệ':$item->price; 
	if($item->oldprice!=''){ echo '<span>'.$item->oldprice.'</span>';}
	?></p>
	<a class="gio" onclick="addCart(<?php echo $item->id; ?>)" href="javascript:void(0)">Thêm vào giỏ</a>
	<a href="javascript:void()" onclick="cartlogin()" class="ar1">Xem giỏ hàng và thanh toán</a>
</div>
<div class="boxthem">
	<p><img src="images/ico-time.png">Thời lượng: <?php echo $item->thoiluong; ?></p>
	<p><img src="images/ico-user.png">Trình độ: <?php echo $item->trinhdo; ?></p>
	<p><img src="images/ico-play.png">Bài học: <?php echo '30 bài'; ?></p>
	<p><img src="images/ico-sao.png">Cam kết: <?php echo $item->camket; ?></p>
</div>
<div class="social">	
		<div class="fb-like" style="float:left;margin-right:5px;" data-href="<?php echo site_url('khoa-hoc/'.$item->alias); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
		<a href="<?php echo site_url($item->alias.'-bv'.$item->id.'.html'); ?>" class="twitter-share-button"{count}>Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<div class="g-plus" data-href="<?php echo site_url('khoa-hoc/'.$item->alias); ?>" data-action="share" data-annotation="bubble"></div>
</div>		
<div class="khoalq">
	<p class="head">Khóa học liên quan</p>
	<ul>
	<?php $khoahoc = $this->db->query('SELECT * FROM tblkhoahoc WHERE status=1 AND id!='.$item->id.' ORDER BY ngaybd DESC LIMIT 10');
	if($khoahoc->num_rows()>0){
		foreach ($khoahoc->result() as $kh) {
			if($kh->image==''){
				$img = 'images/anh.jpg';
			}else{
				$img = 'upload/khoahoc/'.$kh->image;
			}
	?>	
		<li>
			<span class="wimg">
				<img src="<?php echo $img; ?>" alt="">
			</span>
			<a href="<?php echo site_url('khoa-hoc/'.$kh->alias); ?>"><?php echo $kh->name; ?></a>			
			<p class="gianew"><?php echo $kh->price==''?'Liên hệ':$kh->price; 
				if($kh->oldprice!=''){ echo '<span>'.$kh->oldprice.'</span>';}
			?></p>
			<div class="clr"></div>
		</li>
	<?php } } ?>		
	</ul>	
</div>
<script type="text/javascript">
function addCart(id)
{
	$.ajax({
		cache:false,
			type:"POST",  
			url:"<?php echo site_url('site/addCart'); ?>", 
			data:{id : id},
			success:function(html){		
				if(html=='false'){
					alert('Khóa học đã được chọn trong giỏ hàng !');
				}		
				else{
					alert('Đã thêm vào giỏ hàng !');
					window.location.href = window.location.href.split('?')[0];
				}				
			}                                                          
	});  
}
</script>
