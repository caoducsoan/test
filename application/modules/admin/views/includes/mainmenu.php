<?php 
$CI=&get_instance();
$CI->load->model('admin/admin_model');
$footer=$CI->admin_model->gettbl('tbl_meta',1)->row();
$uoctinhluong=$CI->admin_model->gettbl('tbl_meta',2)->row();
$formresultsosanh=	$CI->admin_model->gettbl('tbl_meta',3)->row();
$ketquauoctinhluong=	$CI->admin_model->gettbl('tbl_meta',4)->row();
$this->db->where('status',1);
$this->db->where('name',$_SESSION['name_admin']);
$admin=$this->db->get('tbl_admin')->row();
$huongdan=	$CI->admin_model->gettbl('tbl_footer',1)->row();
?>
<div class="navbar-inner">
	<ul>
		<li><a href="<?php echo site_url('admin'); ?>">Quản trị</a></li>	
		<?php if($admin->role==1){?>
		<li><a href="javascript:void(0)">Module phụ</a>
			<ul class="sub-menu">
				<!--<li><a href="<?php echo site_url('admin/banner'); ?>">Banner</a></li>
				<li><a href="<?php echo site_url('admin/slider'); ?>">Slider</a></li>-->
				<li><a href="<?php echo site_url('admin/custom'); ?>">Custom HTML</a></li>
			</ul>
		</li>	
		<?php } ?>
		<li><a href="javascript:void(0)">Quản lý bài viết</a>
			<ul class="sub-menu">
				<li><a href="<?php echo site_url('admin/chuyenmuc'); ?>">Chuyên mục</a></li>
				<li><a href="<?php echo site_url('admin/baiviet'); ?>">Bài viết</a></li>	
			</ul>			
		</li>		
		<?php if($admin->role==1){?>
		<li>
			<a href="javascript:void(0)">Quản lý việc làm</a>
			<ul class="sub-menu">
				<li><a href="<?php echo site_url('admin/vieclam'); ?>">tất cả việc làm</a></li>
                <li><a href="<?php echo site_url('admin/doanhnghiep'); ?>">Quản lý doanh nghiệp</a></li>
                <li><a href="<?php echo site_url('admin/ungvien'); ?>">Quản lý ứng viên</a></li>
			</ul>
		</li>
		<!--<li>
			<a href="javascript:void(0)">Quản lý CV</a>
			<ul class="sub-menu">
				<li><a href="<?php echo site_url('admin/danhmuc_cv'); ?>">Danh mục CV</a></li>
				<li><a href="<?php echo site_url('admin/cv'); ?>">Mẫu CV</a></li>				
			</ul>
		</li>
		<li><a href="<?php echo site_url('admin/tbl_ungvien'); ?>">Ứng viên</a>
			<ul class="sub-menu">
				<li><a href="<?php echo site_url('admin/thu_ungvien'); ?>">Thư Ứng viên</a></li>
			</ul>
		</li>		
		<li><a href="<?php echo site_url('admin/khachhang'); ?>">Khách hàng</a></li>
		<li><a href="<?php echo site_url('admin/doanhnghiep'); ?>">Doanh nghiệp</a></li>-->		
		<li>
            <a href="admin/pagemeta">Quản lý Meta</a>
            <ul class="sub-menu">
                <li><a href="<?php if (count($footer)==0){echo site_url('admin/edit_meta/1');}
            			else{
            			echo site_url('admin/edit_meta/'.$footer->id);
            			}
            		?>">Home</a>
                </li>
                <li><a href="<?php if (count($uoctinhluong)==0){echo site_url('admin/edit_meta/2');}
            			else{
            			echo site_url('admin/edit_meta/'.$uoctinhluong->id);
            			}
            		?>">Tin tuyển dụng</a>
                </li>
                <li><a href="<?php if (count($formresultsosanh)==0){echo site_url('admin/edit_meta/3');}
            			else{
            			echo site_url('admin/edit_meta/'.$formresultsosanh->id);
            			}
            		?>">Nhà tuyển dụng</a>
                </li>
                <li><a href="<?php if (count($ketquauoctinhluong)==0){echo site_url('admin/edit_meta/4');}
            			else{
            			echo site_url('admin/edit_meta/'.$ketquauoctinhluong->id);
            			}
            		?>">Ứng viên</a>
                </li>
                <!--
                
                
                
                <li><a href="<?php if (count($formtimkiem)==0){echo site_url('admin/edit_footer/4');}
            			else{
            			echo site_url('admin/edit_footer/'.$formtimkiem->id);
            			}
            		?>">Form ước tính lương</a>
                </li>-->
            </ul>
            </li>
        <li><a href="<?php if (count($huongdan)==0){echo site_url('admin/edit_footer/1');}
            			else{
            			echo site_url('admin/edit_footer/'.$huongdan->id);
            			}
            		?>">Thông số chung</a>
                </li>			
		<li><a href="<?php echo site_url('admin/tbladmin'); ?>">Thành viên</a></li>
		<?php } ?>
	</ul>
</div>