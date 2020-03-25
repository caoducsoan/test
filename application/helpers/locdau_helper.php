<?php 
function ob_html_compress($buf){
    return str_replace(array("\n","\r","\t"),'',$buf);
}
function ob_html_compress1 ($b){return preg_replace(['/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'],['>','<','\\1'],$b);}
function vn_str_filter ($str){
	$str = trim(strtolower($str));
	$unicode = array(
		'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
		'd'=>'đ|Đ',
		'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
		'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
		'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
		'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
		'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',							
		'-'=>' |%|,|=|;|!',		
	);
    foreach($unicode as $nonUnicode=>$uni){
		$str = preg_replace("/($uni)/i", $nonUnicode, $str);
    }
    $str = str_replace("[",'-',$str);
    $str = str_replace("]",'-',$str);
	$str = str_replace('?','',$str);
	$str = str_replace('"','',$str);
	$str = str_replace('“','',$str);
	$str = str_replace('”','',$str);
	$str = str_replace("'",'',$str);
    $str = str_replace("/",'',$str);
    $str = str_replace("(",'',$str);
    $str = str_replace(")",'',$str);
    $str = str_replace("\\",'',$str);
	$str = str_replace("---",'-',$str);
	$str = str_replace("--",'-',$str);
    
	return $str;
}
function GetCategory($index)
{
    $arrcat=['Không lựa chọn',
    'Kế toán - Kiểm toán',
    'Hành chính - Văn phòng',
    'Sinh viên làm thêm',
    'Xây dựng',
    'Điện - Điện tử',
    'Làm bán thời gian',
    'Vận tải - Lái xe',
    'Khách sạn - Nhà hàng',
    'Nhân viên kinh doanh',
    'Việc làm bán hàng',
    'Cơ khí - Chế tạo',
    'Lao động phổ thông',
    'IT phần mềm',
    'Marketing-PR',
    'khong yeu cau',
    'khong yeu cau',
    'Giáo dục-Đào tạo',
    'Kỹ thuật',
    'Y tế-Dược',
    'Quản trị kinh doanh',
    'Dịch vụ',
    'Biên-Phiên dịch',
    'Dệt may - Da giày',
    'Kiến trúc - Tk nội thất',
    'Xuất,nhập khẩu',
    'IT Phần cứng-mạng',
    'Nhân sự',
    'Thiết kế - Mỹ thuật',
    'Tư vấn',
    'Bảo vệ',
    'Ô tô - xe máy',
    'Thư ký-Trợ lý',
    'KD bất động sản',
    'Du lịch',
    'Báo chí-Truyền hình',
    'Thực phẩm-Đồ uống',
    'Ngành nghề khác',
    'Vật tư-Thiết bị',
    'Thiết kế web',
    'In ấn - Xuất bản',
    'Nông-Lâm-Ngư-Nghiệp',
    'Thương mại điện tử',
    'Nhập liệu',
    'Việc làm thêm tại nhà',
    'Chăm sóc khách hàng',
    'Sinh viên mới tốt nghiệp -Thực tập',
    'Kỹ thuật ứng dụng',
    'Bưu chính viễn thông',
    'Dầu khí - Địa chất',
    'Giao thông vận tải - Thủy lợi - Cầu đường',
    'Khu chế xuất - Khu công nghiệp',
    'Làm đẹp - Thể lực - Spa',
    'Luật - Pháp lý',
    'Môi trường - Xử lý chất thải',
    'Mỹ phẩm - Thời trang - Trang sức',
    'Ngân hàng - Chứng khoán - Đầu tư',
    'Nghệ thuật - Điện ảnh',
    'Phát triển thị trường',
    'Phục vụ - Tạp vụ - Giúp việc',
    'Quan hệ đối ngoại',
    'Quản lý điều hành',
    'Sản xuất - Vận hành sản xuất',
    'Thẩm định - Giám thẩm định - Quản lý chất lượng',
    'Thể dục - Thể thao',
    'Hóa học - Sinh học',
    'Bảo hiểm',
    'Freelancer',
    'Công chức - Viên chức',
    'khong yeu cau',
    'khong yeu cau',
    'Điện tử viễn thông',
    'khong yeu cau',
    'Hoạch định - Dự án',
    'khong yeu cau',
    'Lương cao',
    'khong yeu cau',
    'Tiếp thị - Quảng cáo',
    'khong yeu cau',
    'Việc làm Tết'];
return $arrcat[$index];
}
function GetABC()
{
    $arrabc=['a',
            'b',
            'c',
            'd',
            'e',
            'f',
            'g',
            'h',
            'i',
            'j',
            'k',
            'l',
            'm',
            'n',
            'o',
            'p',
            'q',
            'r',
            's',
            't',
            'u',
            'v',
            'w',
            'x',
            'y',
            'z',
            '0-9'];
    return $arrabc;
}
function Getcitybyindex($index)
{
    $arrcity=['Toàn Quốc','Hà Nội',
'Hải Phòng',
'Bắc Giang',
'Bắc Kạn',
'Bắc Ninh',
'Cao Bằng',
'Điện Biên',
'Hòa Bình',
'Hải Dương',
'Hà Giang',
'Hà Nam',
'Hưng Yên',
'Lào Cai',
'Lai Châu',
'Lạng Sơn',
'Ninh Bình',
'Nam Định',
'Phú Thọ',
'Quảng Ninh',
'Sơn La',
'Thái Bình',
'Thái Nguyên',
'Tuyên Quang',
'Vĩnh Phúc',
'Yên Bái',
'Đà Nẵng',
'Thừa Thiên Huế',
'Khánh Hòa',
'Lâm Đồng',
'Bình Định',
'Bình Thuận',
'Đắk Lắk',
'Đắk Nông',
'Gia Lai',
'Hà Tĩnh',
'Kon Tum',
'Nghệ An',
'Ninh Thuận',
'Phú Yên',
'Quảng Bình',
'Quảng Nam',
'Quảng Ngãi',
'Quảng Trị',
'Thanh Hóa',
'Hồ Chí Minh',
'Bình Dương',
'Bà Rịa Vũng Tàu',
'Cần Thơ',
'An Giang',
'Bạc Liêu',
'Bình Phước',
'Bến Tre',
'Cà Mau',
'Đồng Tháp',
'Đồng Nai',
'Hậu Giang',
'Kiên Giang',
'Long An',
'Sóc Trăng',
'Tiền Giang',
'Tây Ninh',
'Trà Vinh',
'Vĩnh Long'];
return $arrcity[$index];
}
function GetLuong($index){
    $arrluong=['Thỏa thuận',
'Thỏa thuận',
'1 - 3 triệu',
'3 - 5 triệu',
'5 - 7 triệu',
'7 - 10 triệu',
'10 - 15 triệu',
'15 - 20 triệu',
'20 - 30 triệu',
'Trên 30 triệu'];
return $arrluong[$index];
}
function Getexp($index)
{
    $arrexp=['Chưa có kinh nghiệm',
'0 - 1 năm kinh nghiệm',
'1 - 2 năm kinh nghiệm',
'2 - 5 năm kinh nghiệm',
'5 - 10 năm kinh nghiệm',
'Hơn 10 năm kinh nghiệm',
'Hơn 10 năm kinh nghiệm'];
return $arrexp[$index];
}
function GetSex($index)
{
    $arrsex=['Không chọn','Nam','Nữ'];
    return $arrsex[$index];
}
function Getedu($index)
{
    $arredu=['Không chọn','Không yêu cầu','Sau đại học','Đại học','Cao đẳng','Trung học','Khác','Khác'];
    return $arredu[$index];
}
function Geteduhome($index)
{
    $arreduhome=['Không yêu cầu','Trung học','Trung học','Cao đẳng','Cao đẳng','Đại học','Đại học','Sau đại học','Sau đại học','Sau đại học','Sau đại học',
'Sau đại học',
'Sau đại học',
'Sau đại học',
'Sau đại học',
'Sau đại học',
'Sau đại học',
'Khác',
'Khác'];
return $arreduhome[$index];
}
function GetTypeJob($index)
{
    $arrtypejob=['Không chọn','Toàn thời gian cố định','Toàn thời gian tạm thời','Bán thời gian cố định','Bán thời gian tạm thời','Hợp đồng','Khác'];
    return $arrtypejob[$index];
}
function GetCapBac($index){
    $arrcapbac=['Không chọn','Mới tốt nghiệp','Thực tập sinh','Nhân viên','Trưởng phòng','Phó giám đốc','Giám đốc','Tổng giám đốc điều hành'];
    return $arrcapbac[$index];
}
function GetQuyMoCty($index)
{
    $arrquymo=['Chưa cập nhật',
'Ít hơn 10 nhân viên',
'Từ 10 - 24 nhân viên',
'Từ 25 - 99 nhân viên',
'Từ 100 - 499 nhân viên',
'Hơn 500 nhân viên','Hơn 500 nhân viên'];
return $arrquymo[$index];
}
 function cnvUtf8($source){
	$b = array('á' , 'à' , 'ả' , 'ã' , 'ạ' , 'ă' , 'ắ' , 'ằ' , 'ẳ' , 'ẵ' , 'ặ' , 'â' , 'ấ' , 'ầ' , 'ẩ' , 'ẫ' , 'ậ' , 'å' , 'ä' , 'æ' , 'ā' , 'ą' , 'ǻ' , 'ǎ' , 'Á' , 'À' , 'Ả' , 'Ã' , 'Ạ' , 'Ă' , 'Ắ' , 'Ằ' , 'Ẳ' , 'Ẵ' , 'Ặ' , 'Â' , 'Ấ' , 'Ầ' , 'Ẩ' , 'Ẫ' , 'Ậ' , 'Å' , 'Ä' , 'Æ' , 'Ā' , 'Ą' , 'Ǻ' , 'Ǎ' , 'ǽ' , 'Ǽ' , 'ç' , 'ć' , 'ĉ' , 'ċ' , 'č' , 'Ç' , 'Ć' , 'Ĉ' , 'Ċ' , 'Č' , 'đ' , 'ď' , 'Đ' , 'Ď' , 'Ð' , 'é' , 'è' , 'ẻ' , 'ẽ' , 'ẹ' , 'ê' , 'ế' , 'ề' , 'ể' , 'ễ' , 'ệ' , 'ë' , 'ē' , 'ĕ' , 'ę' , 'ė' , 'ě' , 'É' , 'È' , 'Ẻ' , 'Ẽ' , 'Ẹ' , 'Ê' , 'Ế' , 'Ề' , 'Ể' , 'Ễ' , 'Ệ' , 'Ë' , 'Ē' , 'Ĕ' , 'Ę' , 'Ė' , 'Ě' , 'ƒ' , 'ĝ' , 'ğ' , 'ġ' , 'ģ' , 'Ĝ' , 'Ğ' , 'Ġ' , 'Ģ' , 'ĥ' , 'ħ' , 'Ĥ' , 'Ħ' , 'í' , 'ì' , 'ỉ' , 'ĩ' , 'ị' , 'î' , 'ï' , 'ī' , 'ĭ' , 'ǐ' , 'į' , 'ı' , 'Í' , 'Ì' , 'Ỉ' , 'Ĩ' , 'Ị' , 'Î' , 'Ï' , 'Ī' , 'Ĭ' , 'Ǐ' , 'Į' , 'İ' , 'ĳ' , 'Ĳ' , 'ĵ' , 'Ĵ' , 'ķ' , 'Ķ' , 'ĺ' , 'ļ' , 'ľ' , 'ŀ' , 'ł' , 'Ĺ' , 'Ļ' , 'Ľ' , 'Ŀ' , 'Ł' , 'ó' , 'ò' , 'ỏ' , 'õ' , 'ọ' , 'ô' , 'ố' , 'ồ' , 'ổ' , 'ỗ' , 'ộ' , 'ơ' , 'ớ' , 'ờ' , 'ở' , 'ỡ' , 'ợ' , 'ö' , 'ø' , 'ǿ' , 'ǒ' , 'ō' , 'ŏ' , 'ő' , 'Ó' , 'Ò' , 'Ỏ' , 'Õ' , 'Ọ' , 'Ô' , 'Ố' , 'Ồ' , 'Ổ' , 'Ỗ' , 'Ộ' , 'Ơ' , 'Ớ' , 'Ờ' , 'Ở' , 'Ỡ' , 'Ợ' , 'Ö' , 'Ø' , 'Ǿ' , 'Ǒ' , 'Ō' , 'Ŏ' , 'Ő' , 'œ' , 'Œ' , 'ñ' , 'ń' , 'ņ' , 'ň' , 'ŉ' , 'Ñ' , 'Ń' , 'Ņ' , 'Ň' , 'ú' , 'ù' , 'ủ' , 'ũ' , 'ụ' , 'ư' , 'ứ' , 'ừ' , 'ử' , 'ữ' , 'ự' , 'û' , 'ū' , 'ŭ' , 'ü' , 'ů' , 'ű' , 'ų' , 'ǔ' , 'ǖ' , 'ǘ' , 'ǚ' , 'ǜ' , 'Ú' , 'Ù' , 'Ủ' , 'Ũ' , 'Ụ' , 'Ư' , 'Ứ' , 'Ừ' , 'Ử' , 'Ữ' , 'Ự' , 'Û' , 'Ū' , 'Ŭ' , 'Ü' , 'Ů' , 'Ű' , 'Ų' , 'Ǔ' , 'Ǖ' , 'Ǘ' , 'Ǚ' , 'Ǜ' , 'ß' , 'ſ' , 'ś' , 'ŝ' , 'ş' , 'š' , 'Ŕ' , 'Ŗ' , 'Ř' , 'Ś' , 'Ŝ' , 'Ş' , 'Š' , 'ţ' , 'ť' , 'ŧ' , 'Ţ' , 'Ť' , 'Ŧ' , 'ŵ' , 'Ŵ' , 'ý' , 'ỳ' , 'ỷ' , 'ỹ' , 'ỵ' , 'ÿ' , 'ŷ' , 'Ý' , 'Ỳ' , 'Ỷ' , 'Ỹ' , 'Ỵ' , 'Ÿ' , 'Ŷ' , 'ź' , 'ż' , 'ž' , 'Ź' , 'Ż' , 'Ž' );
	$a = array('\u00e1' , '\u00e0' , '\u1ea3' , '\u00e3' , '\u1ea1' , '\u0103' , '\u1eaf' , '\u1eb1' , '\u1eb3' , '\u1eb5' , '\u1eb7' , '\u00e2' , '\u1ea5' , '\u1ea7' , '\u1ea9' , '\u1eab' , '\u1ead' , '\u00e5' , '\u00e4' , '\u00e6' , '\u0101' , '\u0105' , '\u01fb' , '\u01ce' , '\u00c1' , '\u00c0' , '\u1ea2' , '\u00c3' , '\u1ea0' , '\u0102' , '\u1eae' , '\u1eb0' , '\u1eb2' , '\u1eb4' , '\u1eb6' , '\u00c2' , '\u1ea4' , '\u1ea6' , '\u1ea8' , '\u1eaa' , '\u1eac' , '\u00c5' , '\u00c4' , '\u00c6' , '\u0100' , '\u0104' , '\u01fa' , '\u01cd' , '\u01fd' , '\u01fc' , '\u00e7' , '\u0107' , '\u0109' , '\u010b' , '\u010d' , '\u00c7' , '\u0106' , '\u0108' , '\u010a' , '\u010c' , '\u0111' , '\u010f' , '\u0110' , '\u010e' , '\u00d0' , '\u00e9' , '\u00e8' , '\u1ebb' , '\u1ebd' , '\u1eb9' , '\u00ea' , '\u1ebf' , '\u1ec1' , '\u1ec3' , '\u1ec5' , '\u1ec7' , '\u00eb' , '\u0113' , '\u0115' , '\u0119' , '\u0117' , '\u011b' , '\u00c9' , '\u00c8' , '\u1eba' , '\u1ebc' , '\u1eb8' , '\u00ca' , '\u1ebe' , '\u1ec0' , '\u1ec2' , '\u1ec4' , '\u1ec6' , '\u00cb' , '\u0112' , '\u0114' , '\u0118' , '\u0116' , '\u011a' , '\u0192' , '\u011d' , '\u011f' , '\u0121' , '\u0123' , '\u011c' , '\u011e' , '\u0120' , '\u0122' , '\u0125' , '\u0127' , '\u0124' , '\u0126' , '\u00ed' , '\u00ec' , '\u1ec9' , '\u0129' , '\u1ecb' , '\u00ee' , '\u00ef' , '\u012b' , '\u012d' , '\u01d0' , '\u012f' , '\u0131' , '\u00cd' , '\u00cc' , '\u1ec8' , '\u0128' , '\u1eca' , '\u00ce' , '\u00cf' , '\u012a' , '\u012c' , '\u01cf' , '\u012e' , '\u0130' , '\u0133' , '\u0132' , '\u0135' , '\u0134' , '\u0137' , '\u0136' , '\u013a' , '\u013c' , '\u013e' , '\u0140' , '\u0142' , '\u0139' , '\u013b' , '\u013d' , '\u013f' , '\u0141' , '\u00f3' , '\u00f2' , '\u1ecf' , '\u00f5' , '\u1ecd' , '\u00f4' , '\u1ed1' , '\u1ed3' , '\u1ed5' , '\u1ed7' , '\u1ed9' , '\u01a1' , '\u1edb' , '\u1edd' , '\u1edf' , '\u1ee1' , '\u1ee3' , '\u00f6' , '\u00f8' , '\u01ff' , '\u01d2' , '\u014d' , '\u014f' , '\u0151' , '\u00d3' , '\u00d2' , '\u1ece' , '\u00d5' , '\u1ecc' , '\u00d4' , '\u1ed0' , '\u1ed2' , '\u1ed4' , '\u1ed6' , '\u1ed8' , '\u01a0' , '\u1eda' , '\u1edc' , '\u1ede' , '\u1ee0' , '\u1ee2' , '\u00d6' , '\u00d8' , '\u01fe' , '\u01d1' , '\u014c' , '\u014e' , '\u0150' , '\u0153' , '\u0152' , '\u00f1' , '\u0144' , '\u0146' , '\u0148' , '\u0149' , '\u00d1' , '\u0143' , '\u0145' , '\u0147' , '\u00fa' , '\u00f9' , '\u1ee7' , '\u0169' , '\u1ee5' , '\u01b0' , '\u1ee9' , '\u1eeb' , '\u1eed' , '\u1eef' , '\u1ef1' , '\u00fb' , '\u016b' , '\u016d' , '\u00fc' , '\u016f' , '\u0171' , '\u0173' , '\u01d4' , '\u01d6' , '\u01d8' , '\u01da' , '\u01dc' , '\u00da' , '\u00d9' , '\u1ee6' , '\u0168' , '\u1ee4' , '\u01af' , '\u1ee8' , '\u1eea' , '\u1eec' , '\u1eee' , '\u1ef0' , '\u00db' , '\u016a' , '\u016c' , '\u00dc' , '\u016e' , '\u0170' , '\u0172' , '\u01d3' , '\u01d5' , '\u01d7' , '\u01d9' , '\u01db' , '\u0155' , '\u0157' , '\u0159' , '\u0154' , '\u0156' , '\u0158' , '\u00df' , '\u017f' , '\u015b' , '\u015d' , '\u015f' , '\u0161' , '\u015a' , '\u015c' , '\u015e' , '\u0160' , '\u0163' , '\u0165' , '\u0167' , '\u0162' , '\u0164' , '\u0166' , '\u0175' , '\u0174' , '\u00fd' , '\u1ef3' , '\u1ef7' , '\u1ef9' , '\u1ef5' , '\u00ff' , '\u0177' , '\u00dd' , '\u1ef2' , '\u1ef6' , '\u1ef8' , '\u1ef4' , '\u0178' , '\u0176' , '\u017a' , '\u017c' , '\u017e' , '\u0179' , '\u017b' , '\u017d' );
	return str_replace($a,$b,$source);
}

function rewriteKey($key_id,$key_name,$key_cate_id,$cate_name,$key_city_id,$city_name,$key_qh_id,$qh_name,$key_cb_id,$cb_name,$key_type){
     $linkrt = "";
     if($key_qh_id != 0 && $key_city_id != 0 && $key_cate_id != 0 && $key_name == Null && $key_cb_id == 0 && $key_type == 0)
     {
        $linkrt = "/tag2/viec-lam-".vn_str_filter($cate_name)."-tai-".vn_str_filter($qh_name)."-".vn_str_filter($city_name)."-".$key_id;
     }
     else if($key_qh_id != 0 && $key_city_id != 0 && $key_name != Null && $key_cate_id == 0 && $key_cb_id == 0 && $key_type == 0 )
     {
        $linkrt = "/tag6/viec-lam-".vn_str_filter($key_name)."-tai-".vn_str_filter($qh_name)."-".vn_str_filter($city_name)."-".$key_id;
     }
     else if($key_cb_id != 0 && $key_cate_id != 0 && $key_city_id != 0 && $key_name == Null && $key_qh_id == 0 && $key_type == 0)
     {
        $linkrt = "/tag3/tuyen-dung-viec-lam-".vn_str_filter($cb_name)."-".vn_str_filter($cate_name)."-tai-".vn_str_filter($city_name)."-".$key_id;
     }
     else if($key_cb_id != 0 && $key_name != Null && $key_city_id != 0 && $key_cate_id == 0 && $key_qh_id == 0 && $key_type == 0)
     {
        $linkrt = "/tag4/viec-lam-".vn_str_filter($cb_name)."-".vn_str_filter($key_name)."-tai-".vn_str_filter($city_name)."-".$key_id;
     }
     else if($key_name != Null && $key_city_id != 0 && $key_type == 0 && $key_cate_id == 0 && $key_qh_id == 0 && $key_cb_id == 0)
     {
        $linkrt = "/tag5/tuyen-dung-viec-lam-".vn_str_filter($key_name)."-tai-".vn_str_filter($city_name)."-".$key_id;
     }
     else if($key_qh_id != 0 && $key_city_id != 0 && $key_cb_id == 0 && $key_cate_id == 0 && $key_name == Null && $key_type == 0)
     {
        $linkrt = "/tag1/viec-lam-tai-".vn_str_filter($qh_name)."-".vn_str_filter($city_name)."-".$key_id;
     }
     else if( $key_name != Null && $key_type == 0 && $key_cate_id == 0 && $key_qh_id == 0 && $key_city_id == 0 && $key_cb_id == 0)
     {
        $linkrt = "/tag7/DS-viec-lam-tuyen-dung-".vn_str_filter($key_name)."-".$key_id;
     }
     else if( $key_name != Null && $key_type != 0 && $key_cate_id == 0 && $key_qh_id == 0 && $key_city_id == 0 && $key_cb_id == 0)
     {
        $linkrt = "/tuyen-dung-viec-lam/".$key_id."-".vn_str_filter($key_name);
     }
     return  $linkrt;
}
function geturlimageAvatar($timeimage)
{
   $month  = date('m',$timeimage);
   $year   = date('Y',$timeimage);
   $day    = date('d',$timeimage);
   $dir        = "pictures/".$year."/".$month."/".$day."/"; // Full Path
    //is_dir($dir) || @mkdir($dir,0777,true) || die("Can't Create folder");
   return $dir;
}
function geturlimageAvatar2($timeimage)
{
   $month  = date('m',$timeimage);
   $year   = date('Y',$timeimage);
   $day    = date('d',$timeimage);
   $dir        = "pictures/".$year."/".$month."/".$day."/"; // Full Path
    is_dir($dir) || @mkdir($dir,0777,true) || die("Can't Create folder");
   return $dir;
}
function getimageuv($timeimage)
{
   $month  = date('m',$timeimage);
   $year   = date('Y',$timeimage);
   $day    = date('d',$timeimage);
   $dir        = "../pictures/uv/".$year."/".$month."/".$day."/"; // Full Path
   is_dir($dir) || @mkdir($dir,0777,true) || die("Can't Create folder");
   return $dir;
}
function getcvuv($timeimage)
{
   $month  = date('m',$timeimage);
   $year   = date('Y',$timeimage);
   $day    = date('d',$timeimage);
   $dir        = "../pictures/cv/".$year."/".$month."/".$day."/"; // Full Path
   is_dir($dir) || @mkdir($dir,0777,true) || die("Can't Create folder");
   return $dir;
}
function getcvuv2($timeimage)
{
   $month  = date('m',$timeimage);
   $year   = date('Y',$timeimage);
   $day    = date('d',$timeimage);
   $dir        = "/pictures/cv/".$year."/".$month."/".$day."/"; // Full Path
   return $dir;
}
function getlogouv($timeimage)
{
   $month  = date('m',$timeimage);
   $year   = date('Y',$timeimage);
   $day    = date('d',$timeimage);
   $dir        = "/pictures/uv/".$year."/".$month."/".$day."/"; // Full Path
   return $dir;
}
function getlogo($timeimage)
{
   $img_first     = explode(',',$timeimage);
   $img_f_name    = $img_first[0];
   $time_img      = intval(preg_replace("/[^0-9]/i","",$img_f_name));
   $day           = date("d",$time_img);
   $month         = date("m",$time_img);
   $year          = date("Y",$time_img);
   $get_full_path ="/pictures/vip/".$year."/".$month."/".$day."/".$img_f_name;
   return $get_full_path;
}
function getimagemeta($timeimage)
{
   $month  = date('m',$timeimage);
   $year   = date('Y',$timeimage);
   $day    = date('d',$timeimage);
   $dir        = "../pictures/".$year."/".$month."/".$day."/"; // Full Path
    is_dir($dir) || @mkdir($dir,0777,true) || die("Can't Create folder");
   return $dir;
}
function getimage($nameimage,$width,$height,$timeimage)
{
   $month  = date('m',$timeimage);
   $year   = date('Y',$timeimage);
   $day    = date('d',$timeimage);
   $urlfull = "../pictures/".$year."/".$month."/".$day."/".$nameimage;
   if(!file_exists($urlfull))
   {
      $urlre = "/images/no-image-2.png";
   }
   else
   {
      $dir        = "../pictures/thumb/".$year."/".$month."/".$day."/".$width."/".$height."/"; // Full Path
      is_dir($dir) || @mkdir($dir,0777,true) || die("Can't Create folder");
      $urlanh = $dir.$nameimage;
      if(!file_exists($urlanh))
      {
         $resizeObj = new resize($urlfull);
         $resizeObj -> resizeImage($width, $height,'crop');
         $resizeObj -> saveImage($urlanh,100);
         $urlre = $urlanh;
      }
      else
      {
         $urlre = $urlanh;
      }
      $urlre = str_replace("..","",$urlre);
   }
   return $urlre;
}
function gethumbnail($url,$nameimg,$timeimage,$width2,$height2,$optimize)
{
    require_once 'resize_helper.php';
    //$this->load->helper('resize');
   $url = str_replace("..","",$url);
  //var_dump($url);die();
  
   $url2 =$url;// "..".$url;
   //return file_exists($url2);
   if(file_exists($url2))
   {
      if(count(getimagesize($url2)) > 1)
      {
      if($timeimage == 0)
      {
         $time = explode("/",$url);
         $year = $time[2];
         $month = $time[3];
         $day = $time[4];
      }
      else
      {
         $day           = date("d",$timeimage);
         $month         = date("m",$timeimage);
         $year          = date("Y",$timeimage);
      }
      if($width2 == 0 && $height2 == 0 && $optimize == 0)
      {
         $linkimg = $url;
         $linkpath = '';
      }
      else
      {
         $linka = "thumb/".$year."/".$month."/".$day."/".$width2."/".$height2."/".$nameimg;
         $linkpath = "thumb/".$year."/".$month."/".$day."/".$width2."/".$height2."/";
         if(!file_exists($linka))
         {
            is_dir($linkpath) || @mkdir($linkpath,0777,true) || die("Can't Create folder");
            $linkimg = "thumb/".$year."/".$month."/".$day."/".$width2."/".$height2."/".$nameimg;          
            $urlrw =$url;// "..".$url;
            $resizeObjj = new resize($urlrw);
            $resizeObjj -> resizeImage($width2,$height2,'crop');
            $resizeObjj -> saveImage($linkimg,$optimize);
         }
         else
         {
            $linkimg = $linka;
         }
      } 
      }
      else
      {
         $linkimg = 'images/icon-no-image.png';
      }
   }
   else
   {
      $linkimg = 'images/icon-no-image.png';
   }
   return $linkimg;
}
?>