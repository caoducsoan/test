<style>
.owl-stage-outer {
    height: 650px;
}
button.owl-dot {
    border: none;
}
</style>
<?php 
	$this->load->library('user_agent');
?>
<!--thông tin liên hệ đầu trang -->
			<div class="banner-homenew">
				<div class="container ">
					<div class="row">
						<div class="col-5 col-sm-2 col-md-2 col-lg-2">
							<i class="fas fa-phone-square-alt"></i> +84 869 154 226
						</div>
						<div class="col-7 col-sm-4 col-md-4 col-lg-3">
							<i class="fas fa-envelope"></i> jobthanhxuan@gmail.com
						</div>
					</div>
				</div>
			</div>
<!--end thông tin liên hệ đầu trang -->

<!-- menu header -->
	<div class="menu-headers">
		<div class="container">
		<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"><img src="images/logonew.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse p-2" id="navbarNav">
    <ul class="navbar-nav  ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Việc làm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gia sư</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Khóa học</a>
      </li>
    </ul>
  </div>
</nav>
</div>
	</div>
<!--end menu header-->
<?php
 	if (!$this->agent->is_mobile()) {
 ?>
<!-- banner slick -->
<div class="owl-carousel owl-theme">

    <div class="item">
      <img src="images/bannernew1.png" alt="">
      <div class="content-home-banner">
        <p>Bạn đang muốn tìm việc làm?</p>
        <p>Tìm khóa học tiếng Anh hay tìm gia sư?</p>
        <p><span>Vieclam123.vn</span> là lựa chọn đáng tin cậy trong lĩnh vực</p>
        <div class="btn-group">
        <a href="#" class="btn-vieclam">Việc làm <i class="fas fa-angle-double-right"></i></a>
        <a href="#" class="btn-gia-su">Gia sư <i class="fas fa-angle-double-right"></i></a>
        <a href="#" class="btn-khoa-hoc">Khóa học tiếng anh <i class="fas fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>

        <div class="item">
      <img src="images/bannernew2.png" alt="">
      <div class="content-home-banner-2">
        <p>Đồng hành cùng bạn tìm kiếm <span>công việc hấp dẫn</span>, giúp bạn <span>tạo CV ấn tượng</span> với nhà tuyển dụng chỉ trong 3 bước</p>
        <div class="btn-group">
        <a href="#" class="btn-more-2">Xem thêm <i class="fas fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>

        <div class="item">
      <img src="images/bannernew3.png" alt="">
      <div class="content-home-banner-3">
        <p>Kết nối gia sư và phụ huynh <span>nhanh chóng</span>. Giúp phụ huynh <span>tìm lớp dễ dàng</span> với chất lượng gia sư đáng mong đợi.</p>
        <div class="btn-group gruoper">
        <a href="#" class="btn-more-3">Xem thêm <i class="fas fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>

            <div class="item">
      <img src="images/bannernew4.png" alt="">
      <div class="content-home-banner-4">
        <p> Khóa học tiếng Anh đa dạng như giao tiếp, TOEIC, IELTS... đến từ các <span>TRUNG TÂM UY TÍN, CHẤT LƯỢNG HÀNG ĐẦU</span> trên cả nước và phù hợp với mọi đối tượng </p>
        <div class="btn-group">
        <a href="#" class="btn-more-4">Xem thêm <i class="fas fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
  </div>
<!-- end banner slick -->

<!-- content home -->
<div class="content-vl">
	<div class="container bao-boc-content">
		<img src="images/contentnew1.png" alt="">
		<div class="vl-content-trong">
			<p class="title-vl-content">
				Việc làm
			</p>
			<p>Bạn đang tìm kiếm công việc mới? Bạn chưa có CV ấn tượng? Hãy để chúng tôi giúp bạn!!</p>
			<div class="btn-group">
				<a href="#" class="btn-content-vl">Truy cập ngay <i class="fas fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="content-gs">
	<div class="container bao-boc-content">
		<img src="images/contentnew2.png" alt="">
				<div class="gs-content-trong">
			<p class="title-gs-content">
				Gia sư
			</p>
			<p> Bạn chưa biết tìm gia sư ở đâu? Bạn đang muốn đi dạy nhưng chưa có lớp dạy phù hợp? Đăng ký tài khoản ngay để được hỗ trợ</p>
			<div class="btn-group">
				<a href="#" class="btn-content-gs">Truy cập ngay <i class="fas fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="content-vl">
	<div class="container bao-boc-content">
		<img src="images/contentnew3.png" alt="">
		<div class="vl-content-trong">
			<p class="title-kh-content">
				Khóa học
			</p>
			<p>Bạn muốn đi học tiếng Anh nhưng không biết học ở đâu? Chúng tôi sẽ mang đến cho bạn những lựa chọn tuyệt vời nhất</p>
			<div class="btn-group">
				<a href="#" class="btn-content-kh">Truy cập ngay <i class="fas fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- end content home -->
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    lazyLoad: true,
    // autoplay:true,
// autoplayTimeout:5000,
// autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>
<?php }else{ ?>
	<div class="container">
		<div class="box-content-mb">
			<div class="avt-vl-mb"><i class="fas fa-briefcase"></i></div>
			<div class="content-trong-vl-mb">
				<p class="title-mb-vl">Việc làm</p>
				<p class="sapocontent"> Liên kết ứng viên và nhà tuyển dụng, tạo CV miễn phí, tìm việc nhanh chóng </p>
			</div>
		</div>
		</div>

			<div class="container">
		<div class="box-content-mb-gs">
			<div class="avt-gs-mb"><i class="fas fa-graduation-cap"></i></div>
			<div class="content-trong-vl-mb">
				<p class="title-mb-gs">Gia sư</p>
				<p class="sapocontent"> Hỗ trợ kết nối phụ huynh và gia sư trên toàn quốc với mức chi phí hợp lý. </p>
			</div>
		</div>
		</div>

					<div class="container">
		<div class="box-content-mb-kh">
			<div class="avt-kh-mb"><i class="fas fa-book"></i></div>
			<div class="content-trong-vl-mb">
				<p class="title-mb-kh">Gia sư</p>
				<p class="sapocontent"> Hỗ trợ kết nối phụ huynh và gia sư trên toàn quốc với mức chi phí hợp lý. </p>
			</div>
		</div>
		</div>
<?php } ?>