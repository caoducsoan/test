<?php 
$CI=&get_instance();
$CI->load->model('site/site_model');
$footer=$CI->site_model->getconfig();
//$urluri=
//if(current_url() == base_url())
//{
//   header("HTTP/1.1 301 Moved Permanently"); 
//   header("Location: $canonical");
//   exit();
//}

?>
<section class="banner">
      <!-- BANNER STARTS -->
      <div class="container form-wrapper">
        <h1><?php echo $footer->name ?></h1>
        <div class="row">
        <div class="jobs-tab-panel jobsearch">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#jobs" aria-controls="jobs" role="tab" data-toggle="tab">Tìm việc làm</a></li>
                <li role="presentation"><a href="#employers" aria-controls="employers" role="tab" data-toggle="tab">Tìm ứng viên</a></li>
                 <li role="presentation"><a href="#scompany" aria-controls="employers" role="tab" data-toggle="tab">Tìm nhà tuyển dụng</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="jobs">
                    <div class="form-inline">
                      <div class="form-group keyword">
                        <input id="findkeyjob" class="form-control" placeholder="Nhập từ khóa" type="text">
                      </div>                      
                      <div class="form-group keyword hidden-xs">
                        <!--<input class="form-control" placeholder="Ngành nghề" type="text">-->
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
                        <!--<input class="form-control" placeholder="Nơi làm việc" type="text">-->
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
                        <input name="submit" value="Tìm" type="button" class="timvieclam">
                      </div>
                    </div>
                    <div class="search-category">
                      <?php echo $footer->anatic ?></div>
                </div>
                <div role="tabpanel" class="tab-pane" id="employers">
                    <form class="form-inline">
                      <div class="form-group keyword">
                        <input class="form-control" id="findkeycandi" placeholder="Nhập từ khóa" type="text">
                      </div>
                      
                      <div class="form-group keyword hidden-xs">
                        <!--<input class="form-control" placeholder="Ngành nghề" type="text">-->
                        <select id="candinganhnghe" class="city_ab">
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
                        <!--<input class="form-control" placeholder="Nơi làm việc" type="text">-->
                         <select id="candilocation" class="city_ab">                        
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
                        <button name="submit" class="timungvien" type="button">Tìm</button>
                      </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="scompany">
                    <form class="form-inline">
                      <div class="form-group">
                        <input class="form-control" id="keyworkcom" value="" placeholder="Nhập từ khóa" type="text">
                      </div>
                      <div class="input-group">
                        <i class="fa fa-search"></i>
                        <button name="submit" type="button" class="timdoanhnghiep">Tìm</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
        
      </div>
      <!-- BANNER ENDS -->
      <!-- CLIENTS SLIDER STARTS -->
      <div class="client-slider">
        <div class="container">
          <div class="clients slider">
          <?php $custom = $this->db->query('SELECT html FROM tbl_custom_html WHERE status=1 AND sort="5" AND id=5 ORDER BY id DESC LIMIT 1'); 
                	if($custom->num_rows()>0){
                		$cus = $custom->row();
                		echo strip_tags($cus->html,'<div><img>'); 
                	} ?>
            <div>
              <img src="images/client-hp.png" alt="Client Logo 1">
            </div>
            <div>
              <img src="images/client-google.png" alt="Client Logo 2">
            </div>
            <div>
              <img src="images/client-at-and-t.png" alt="Client Logo 3">
            </div>
            <div>
              <img src="images/client-infosys.png" alt="Client Logo 4">
            </div>
            <div>
              <img src="images/client-tata.png" alt="Client Logo 5">
            </div>
            <div>
              <img src="images/client-hp.png" alt="Client Logo 1">
            </div>
            <div>
              <img src="images/client-google.png" alt="Client Logo 2">
            </div>
            <div>
              <img src="images/client-at-and-t.png" alt="Client Logo 3">
            </div>
            <div>
              <img src="images/client-infosys.png" alt="Client Logo 4">
            </div>
            <div>
              <img src="images/client-tata.png" alt="Client Logo 5">
            </div>
            <div>
              <img src="images/client-hp.png" alt="Client Logo 1">
            </div>
            <div>
              <img src="images/client-google.png" alt="Client Logo 2">
            </div>
            <div>
              <img src="images/client-at-and-t.png" alt="Client Logo 3">
            </div>
            <div>
              <img src="images/client-infosys.png" alt="Client Logo 4">
            </div>
            <div>
              <img src="images/client-tata.png" alt="Client Logo 5">
            </div>
          </div>

        </div>
      </div>
      <!-- CLIENTS SLIDER ENDS -->
    </section>
<section class="contenthome">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <!-- JOB LISTING & COMPANY LISTING STARTS -->
            <div class="jobs-tab-panel">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#vieclamnoibat" aria-controls="jobs" role="tab" data-toggle="tab">Việc làm nổi bật</a></li>
                <li role="presentation"><a href="#ungviennoibat" aria-controls="employers" role="tab" data-toggle="tab">Nhà tuyển dụng nổi bật</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="vieclamnoibat">
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
                <div role="tabpanel" class="tab-pane" id="ungviennoibat">
                  <div class="row company-list">
                    <?php if(!empty($congtymoinhat)){ 
                        foreach($congtymoinhat as $n){
                            ?>
                           <div class="col-sm-6">
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
              </div>
            </div>
            <!-- JOB LISTING & COMPANY LISTING ENDS -->
          </div>
          <div class="col-md-4">
            <div class="row"> 
              <div class="col-md-12 col-sm-6 classcandidate">
                <div class="jobs-tab-panel"><h3 class="nav-tabs" style="margin-top:2px;">Ứng viên nổi bật</h3></div>
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
              <div class="col-md-12 col-sm-6">
                <!-- JOB NOTIFICATION STARTS -->
                <div class="job-notification">
                  <div class="center-large-title">Nhận các công việc phù hợp nhất trên email của bạn. Không cần đăng ký</div>
                  <a title="Create Job Alert" class="btn btn-primary btn-block">Đăng ký nhận thông báo</a>
                </div>
                <!-- JOB NOTIFICATION ENDS -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="browse-jobs">
<div class="container">
<div class="row classic-list-view">
<div class="col-md-12 jobs-tab-panel listviectheovung">
<ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#viectheonganh" aria-controls="jobs" role="tab" data-toggle="tab">Việc làm theo ngành nghề</a></li>
                <li role="presentation"><a href="#viectheotinhthanh" aria-controls="employers" role="tab" data-toggle="tab">Việc làm theo tỉnh thành</a></li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="viectheonganh">
                    <?php $jobforcat=$CI->site_model->GetCategoryWithLink();
                        $tg=0;
                        foreach($jobforcat as $item){
                            if($tg %16==0){
                                echo "<div class='col-md-3 col-sm-6'><ul class='job-category-list'>";
                            }
                            ?>
                            <li><a class="" href="<?php echo $item['url'] ?>" title="<?php echo $item['name'] ?>"><?php echo $item['name'] ?></a></li> 
                            <?php
                            if($tg %16 == 15){
                                echo " </ul></div>";
                            }
                            $tg +=1;
                        }
                         ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="viectheotinhthanh">
                     <?php $jobforcat=$CI->site_model->GetProvinceWithLink();
                        $tg=0;
                        foreach($jobforcat as $item){
                            if($tg %16==0){
                                echo "<div class='col-md-3 col-sm-6'><ul class='job-category-list'>";
                            }
                            ?>
                            <li><a class="" href="<?php echo $item['url'] ?>" title="<?php echo $item['name'] ?>"><?php echo $item['name'] ?></a></li> 
                            <?php
                            
                            if($tg %16 == 15){
                                echo " </ul></div>";
                            }
                            
                            $tg +=1;
                            if($tg == count($jobforcat) && ($tg % 16 !=15)){
                               echo " </ul></div>"; 
                            }
                        }
                        
                         ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="blog-container">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h2 class="text-center">Tin việc làm</h2>
            <p class="intro-text text-center">Cập nhật những tin tức mới nhất liên quan đến việc làm</p>
          </div>
          <?php $news = $this->db->query('SELECT b.id,b.alias,b.title,b.image,b.sapo,b.created_day,c.`name`,c.alias as aliascat,c.id as idcat FROM tbl_baiviet as b inner join tbl_chuyenmuc as c on b.cid=c.id WHERE b.cid=2 and b.status=1 ORDER BY b.id DESC LIMIT 5'); 
                            if($news->num_rows()>0){                                
                                
                               $tg= $news->result();
                               
                            ?>
                            
                            
                            <?php } ?>
          <div class="col-md-3">
            <div class="row">
              <div class="col-sm-6 col-md-12">
                <div class="blog-small">
                  <a href="<?php echo site_url($tg[0]->alias.'-b'.$tg[0]->id.'.html'); ?>" class="blog-image">
                    <div class="border-box"></div>
                    <img src="upload/news/thumb/<?php echo $tg[0]->image==''?'images-09.jpg':$tg[0]->image; ?>" alt="<?php echo $tg[0]->title; ?>" title="<?php echo $tg[0]->title; ?>"/>
                  </a>
                  <h2><a  href="<?php echo site_url($tg[0]->alias.'-b'.$tg[0]->id.'.html'); ?>"><?php echo $tg[0]->title; ?></a></h2>
                  <p><?php echo $tg[0]->sapo ?></p>
                  <a href="<?php echo site_url($tg[0]->alias.'-b'.$tg[0]->id.'.html'); ?>" class="read-more">Chi tiết</a>
                </div>
              </div>
              <div class="col-sm-6 col-md-12">
                <div class="blog-small margin-0">
                   <a href="<?php echo site_url($tg[1]->alias.'-b'.$tg[1]->id.'.html'); ?>" class="blog-image">
                    <div class="border-box"></div>
                    <img src="upload/news/thumb/<?php echo $tg[1]->image==''?'images-09.jpg':$tg[1]->image; ?>" alt="<?php echo $tg[1]->title; ?>" title="<?php echo $tg[1]->title; ?>"/>
                  </a>
                  <h2><a  href="<?php echo site_url($tg[1]->alias.'-b'.$tg[1]->id.'.html'); ?>"><?php echo $tg[1]->title; ?></a></h2>
                  <p><?php echo $tg[1]->sapo ?></p>
                  <a href="<?php echo site_url($tg[1]->alias.'-b'.$tg[1]->id.'.html'); ?>" class="read-more">Chi tiết</a>
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="blog-small blog-large">
              <div class="overlay"></div>
              <div class="border-box">
                <div class="blog-details">
                  <h2><a href="<?php echo site_url($tg[2]->alias.'-b'.$tg[2]->id.'.html'); ?>"><?php echo $tg[2]->title; ?></a></h2>
                  <p><?php echo $tg[2]->sapo ?></p>
                  <a href="<?php echo site_url($tg[2]->alias.'-b'.$tg[2]->id.'.html'); ?>" class="read-more">Chi tiết</a>
                </div>
              </div>
              <img src="upload/news/thumb/<?php echo $tg[2]->image==''?'images-09.jpg':$tg[2]->image; ?>" alt="<?php echo $tg[2]->title; ?>" title="<?php echo $tg[2]->title; ?>">
            </div>
          </div>
          <div class="col-md-3">
            <div class="row">
              <div class="col-sm-6 col-md-12">
                <div class="blog-small">
                   <a href="<?php echo site_url($tg[3]->alias.'-b'.$tg[3]->id.'.html'); ?>" class="blog-image">
                    <div class="border-box"></div>
                    <img src="upload/news/thumb/<?php echo $tg[3]->image==''?'images-09.jpg':$tg[3]->image; ?>" alt="<?php echo $tg[3]->title; ?>" title="<?php echo $tg[3]->title; ?>"/>
                  </a>
                  <h2><a  href="<?php echo site_url($tg[3]->alias.'-b'.$tg[3]->id.'.html'); ?>"><?php echo $tg[3]->title; ?></a></h2>
                  <p><?php echo $tg[3]->sapo ?></p>
                  <a href="<?php echo site_url($tg[3]->alias.'-b'.$tg[3]->id.'.html'); ?>" class="read-more">Chi tiết</a>
                
                </div>
              </div>
              <div class="col-sm-6 col-md-12">
                <div class="blog-small margin-0">
                    <a href="<?php echo site_url($tg[4]->alias.'-b'.$tg[4]->id.'.html'); ?>" class="blog-image">
                    <div class="border-box"></div>
                    <img src="upload/news/thumb/<?php echo $tg[4]->image==''?'images-09.jpg':$tg[4]->image; ?>" alt="<?php echo $tg[4]->title; ?>" title="<?php echo $tg[4]->title; ?>"/>
                  </a>
                  <h2><a  href="<?php echo site_url($tg[4]->alias.'-b'.$tg[4]->id.'.html'); ?>"><?php echo $tg[4]->title; ?></a></h2>
                  <p><?php echo $tg[4]->sapo ?></p>
                  <a href="<?php echo site_url($tg[4]->alias.'-b'.$tg[4]->id.'.html'); ?>" class="read-more">Chi tiết</a>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<script type="text/javascript">
	$(document).ready(function() {
	   /*index_dia_diem ,placeholder:"Chọn ngành nghề"*/
$('#index_nganhnghe').select2({ width: 'calc(100% - 7px)' });
$('#index_dia_diem').select2({ width: 'calc(100% - 7px)' });
$('#candinganhnghe').select2({ width: 'calc(100% - 7px)' });
$('#candilocation').select2({ width: 'calc(100% - 7px)' });
var job=new SearchJob();
});
</script>
   

