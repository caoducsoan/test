<style>
	.menu-head-kh{
		background: #003471;
		font-weight: bold;
	}
.nav-link {
    color: #fff!important;
    margin-left: 50px;
}

.nav-item a{
    font-weight: 700;
    color: #fff;
}
.inbox-waitting {
    position: absolute;
    right: 0;
    font-size: 30px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}
.inbox-waitting>kbd {
    position: absolute;
    font-size: 16px;
    color: #ffffff;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    line-height: 12px;
    right: -10px;
    background-color: #E60000;
    top: 5px;
    z-index: 2
}

.man-den{
  background: rgba(0, 0, 0, 0.35);
  position: absolute;
  width: 100%;
  height: 100%;
}


.title-kh-english{
    font-weight: bold;
    font-size: 30px;
    line-height: 35px;
    text-transform: uppercase;
    color: #003471;
    border-bottom: 3px solid #DDDDDD;
    position: relative;

}
.title-kh-english p{
    border-bottom: 3px solid #003471;
    width: fit-content;
    margin: 0 auto;
    position: relative;
    margin-bottom: -3px;
}
.title-kh-english{
	margin-top: 35px;
}
.poiner-kh{
  background: #003471;
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
width: 264px;
height: 100px;
}

/* css for slide */

 .kh-english .owl-carousel {
   position: relative;
   margin: 20px auto;
  margin-top: 35px;
  margin-bottom: 40px;
   overflow: hidden;
   box-sizing: content-box;
}

 .kh-english .owl-carousel .owl-stage-outer {
   overflow: visible;
}
 .kh-english .owl-carousel .owl-stage-outer:before {
   content: '';
   display: block;
   position: absolute;
   top: 50%;
   left: 10px;
   right: 10px;
   height: 1px;
   background-color: #003471;
}
.kh-english .owl-stage-outer{
  height: auto;
}

 .kh-english .owl-stage {
   height: 220px;
}
 .kh-english .owl-item {
   float: left;
   position: relative;
   height: 100px;
   transition: opacity 1s ease;
}

.kh-english .item:hover{
  color: #fff;
}


 .kh-english .owl-item:nth-child(even) > div {
   top: calc(100% + 20px);
  left: -5px;
     }
     .item i{
    font-size: 34px;
     }
.kh-english .owl-nav span{
    font-size: 20px;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 18px;
    transform: translate(-50%,-50%);
    width: 20px;
    height: 20px;
    text-align: center;
    margin-bottom: 10px;
    border-radius: 10px;
    border: 1px solid;
    line-height: 15px;
    background: #fff;
    color: #dddddd;
}
.kh-english .owl-prev {
    background: #DDDDDD;
    border-radius: 0px 10px 10px 0px;
    width: 37px;
    height: 79px;
}
.kh-english .owl-next {
    width: 37px;
    height: 79px;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 10px 0px 0px 10px;
    background: #DDDDDD;
}
.kh-english .owl-dots {
    margin-top: 25px;
    margin-bottom: 40px;
}
.kh-english .owl-prev:hover,.owl-next:hover{
  background: #003471;
  color: #003471;
}
.kh-english .owl-carousel .owl-stage-outer:before{
  display: none;
}
/* end css for slide */
/* -------------------------------------------------------------------------- */
/* css for form search */

.tabsearchcon.active {
    background: #003471;
    color: #fff;
    margin-bottom: 0;
    height: 82px;
    border-radius: 10px 10px 0 0;
}




.tabsearchcon {
    border: 1px solid #003471;
    box-sizing: border-box;
    width: 200px;
    height: 55px;
    border-radius: 10px;
    background: transparent;
    text-align: center;
    margin-bottom: 13px;
}
.tabsearchcon:nth-child(2){
	margin-left: 13px;
}
.select2-container--open .select2-dropdown {
    left: 0;
    left: 0!important;
    width: 263px!important;
}
.menu_two.menu.menu-two {
    width: 225px;
    display: flex;
    justify-content: space-around;
}
button.btn.btn-warning{
	background: #FF8401;
    border-radius: 10px;
    width: 108px;
    height: 55px;
    color: #fff;
}

button.owl-dot {
    border: 0;
}
.open{
	display: block;
}
/* break css for form search */
</style>
<?php 
  $this->load->library('user_agent');
?>

<div class="menu-head-kh">
	<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark">
	<button class="navbar-toggler btn-search-kh" type="button" data-toggle="collapse" data-target="#navbarsearch" aria-controls="navbarsearch" aria-expanded="false" aria-label="Toggle navigation">
		<span><i class="fas fa-search"></i></span>
	</button>
	
  <!-- logo -->
  <a class="navbar-brand" href="#"><img src="images/logonew.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <div class="navbar-collapse collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Khóa học tiếng anh</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Trung tâm tiếng anh</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Thi thử TOEIC</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Blog</a>
    </li>
    <li class="nav-item">
    	<a href="javascript:void(0)" class=" nav-link inbox-out">
								<span class="inbox-waitting">
									<i class="fas fa-envelope"></i>
									<kbd>0</kbd>
								</span>
							</a>
    </li>
  </ul>
</div>
</nav>
</div>
</div>
    	<div id="navbarsearch" class="formsearch container navbar-collapse collapse">
    		<div class="tab-search">
  <button class="tabsearchcon" onclick="opsearch(event, 'timkh')" id="defaultOpen">Tìm khóa học</button>
  <button class="tabsearchcon" onclick="opsearch(event, 'timtt')">Tìm trung tâm</button>
</div>

<div id="timkh" class="tabcontent-search">
	<form action="" class="formsearch-kh">
		<select class="basic-single select-kh" name="khoahoc">
		  <option value="1">Chọn khóa học</option>
		  <option value="2">Wyoming</option>
		</select>
				<select class="basic-single select-diemden" name="adress">
		  <option value="1">chọn địa điểm</option>
		  <option value="2">Hà Nội</option>
		</select>
		<input type="text" class="inputsearch-kh" placeholder="Nhập vào từ khóa tìm kiếm...">
		<button type="submit" class="btn btn-warning"><i class="fas fa-search"></i></button>
		</form>
</div>

<div id="timtt" class="tabcontent-search">
	<form action="" class="formsearch-kh">
		<select class="basic-single select-kh" name="khoahoc">
		  <option value="1">Chọn trung tâm</option>
		  <option value="2">Wyoming</option>
		</select>
				<select class="basic-single select-diemden" name="adress">
		  <option value="1">chọn địa điểm</option>
		  <option value="2">Hà Nội</option>
		</select>
		<input type="text" class="inputsearch-kh" placeholder="Nhập vào từ khóa tìm kiếm...">
		<button type="submit" class="btn btn-warning"><i class="fas fa-search"></i></button>
		</form>
</div>
    	</div>
 <div class="hide-in-mb">
  <div class="banner-kh-new">
    <div class="man-den"></div>
    <img src="images/banner_khoahoc_new.png" alt="">
    <p>Khóa học tiếng Anh đa dạng như giao tiếp, <span>TOEIC, IELTS</span>... đến từ các <span>TRUNG TÂM UY TÍN, CHẤT LƯỢNG HÀNG ĐẦU</span> trên cả nước và phù hợp với mọi đối tượng</p>
  </div>
  <?php if(!$this->agent->is_mobile()){ ?>
  <!-- form search cho pc  -->
        <div id="navsearch" class="formsearch container ">
        <div class="tab-search">
  <button class="tabsearchcon" onclick="opsearch(event, 'timkhkh')" id="defaultOpen">Tìm khóa học</button>
  <button class="tabsearchcon" onclick="opsearch(event, 'timttkh')">Tìm trung tâm</button>
</div>

<div id="timkhkh" class="tabcontent-search">
  <form action="" class="formsearch-kh">
    <select class="basic-single select-kh" name="khoahoc">
      <option value="1">Chọn khóa học</option>
      <option value="2">Wyoming</option>
    </select>
        <select class="basic-single select-diemden" name="adress">
      <option value="1">chọn địa điểm</option>
      <option value="2">Hà Nội</option>
    </select>
    <input type="text" class="inputsearch-kh" placeholder="Nhập vào từ khóa tìm kiếm...">
    <button type="submit" class="btn btn-warning"><i class="fas fa-search"></i></button>
    </form>
</div>

<div id="timttkh" class="tabcontent-search">
  <form action="" class="formsearch-kh">
    <select class="basic-single select-kh" name="khoahoc">
      <option value="1">Chọn trung tâm</option>
      <option value="2">Wyoming</option>
    </select>
        <select class="basic-single select-diemden" name="adress">
      <option value="1">chọn địa điểm</option>
      <option value="2">Hà Nội</option>
    </select>
    <input type="text" class="inputsearch-kh" placeholder="Nhập vào từ khóa tìm kiếm...">
    <button type="submit" class="btn btn-warning"><i class="fas fa-search"></i></button>
    </form>
</div>
      </div>
  <!-- kết thúc form search cho pc  -->
<?php } ?>
</div>

<script>
function opsearch(evt, nametab) {
  var i, tabcontent, tabsearchcon;
  tabcontent = document.getElementsByClassName("tabcontent-search");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tabsearchcon = document.getElementsByClassName("tabsearchcon");
  for (i = 0; i < tabsearchcon.length; i++) {
    tabsearchcon[i].className = tabsearchcon[i].className.replace(" active", "");
  }
  document.getElementById(nametab).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
$(document).ready(function() {
    $('.basic-single').select2();
});

</script>