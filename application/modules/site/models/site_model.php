<?php 
class site_model extends Model
{	
	function site_model()
	{
		parent::Model();
    }
	
	function gettbl($tbl)
	{		
		$this->db->where('status',1);
		$this->db->order_by("id","desc");
		$query = $this->db->get($tbl);
		return $query;
	}
    function gettblwidthid($tbl,$id)
	{
		if($id!=''){
			$this->db->where('id',$id);
		}				
		$query = $this->db->get($tbl);
        if($query->num_rows() > 0)
        {
          $row = $query->row();//mysql_fetch_assoc($db_qr->result);
          return $row;
        }
		
	}
    function gettblwidthidandkey($tbl,$key,$id)
	{
		if($id!=''){
			$this->db->where($key,$id);
		}				
		$query = $this->db->get($tbl);
        if($query->num_rows() > 0)
        {
          $row = $query->row();//mysql_fetch_assoc($db_qr->result);
          return $row;
        }
		
	}	
    function ListDistrictByProvince($province)
    {
        if(intval($province)>0){
        $query="select * from city2 as c where c.cit_parent='".$province."'";
        $db_qr = $this->db->query($query);
        if($db_qr->num_rows() > 0)
        {
            $tg1="";
            foreach($db_qr->result() as $itemcat)
            {
                $tg1[]=$itemcat;
                }
        }
        return $tg1;
        }else{return null ;}
        
    }
	function add_tbl($tbl,$data,$id)
    {		
        if($id=='')
        {
            $this->db->insert($tbl,$data);
        }
        else
        {
            $this->db->where('id',$id);
            $this->db->update($tbl,$data);    
        }
    }  
	
	function gettbl_limited($tbl,$id,$start_row,$limit)
	{
		$sql = "SELECT * FROM $tbl WHERE status=1";		
		if($id!='' AND $tbl=='tbl_baiviet'){
			$sql .= " AND cid=$id";
		}	    		
		$sql .= " ORDER BY id DESC";
		if($limit!=''){
			$sql .= " LIMIT $start_row,$limit";
		}		
		$query=$this->db->query($sql);
		return $query;
	}	

	function base_limited($tbl,$cate,$exp,$note,$start_row,$limit)
	{
		$sql = "SELECT id,alias,image,view,love,download,price FROM $tbl WHERE status=1";		
		if($cate>0){
			$sql .= " AND FIND_IN_SET($cate,cate_id)";
		}
		if($exp>0){
			$sql .= " AND exp=$exp";
		}	    		
		if($note>0){
			$sql .= " AND nhucau=$note";
		}
		$sql .= " ORDER BY id DESC";
		if($limit!=''){
			$sql .= " LIMIT $start_row,$limit";
		}		
		$query=$this->db->query($sql);
		return $query;
	}	
	
	function selectCtrl($catid,$name,$class)
    {
        echo "<select name='".$name."' class='".$class."'>\n";		
		echo "<option value='0'> -- Chọn chuyên mục -- </option>";		
        $this->show_category($catid);
        echo "</select>";
    }
	function show_category($catid,$parent_id="0",$insert_text="-")
    {
        $this->db->where('uid',$parent_id);
        $this->db->order_by('id','asc');
        $sql=$this->db->get('tbl_chuyenmuc');
        foreach($sql->result() as $itemcat)
        {		        	
			if($itemcat->id==$catid){
				echo '<option selected="selected" value="'.$itemcat->id.'">'.$insert_text.$itemcat->name."</option>";				
			}
			else{
				echo "<option value='".$itemcat->id."'>".$insert_text.$itemcat->name."</option>";				
			}
            $this->show_category($catid,$itemcat->id,$insert_text."---");    
        }
        return true;
    }
	function selectprovince($name,$class,$title)
    {
        //'select * FROM city where cit_id <> 1 and cit_id <> 45 ORDER BY `cit_name`';
        //$this->db->where('uid',$parent_id);
        //$this->db->order_by('id','asc');
        //$sql=$this->db->get('tbl_chuyenmuc');
        //echo "<select name='".$name."' class='".$class."' title='".$title."'>\n";	
        $tg="";
        $sql="select * FROM city where cit_id = 1 or cit_id = 45 ORDER BY `cit_name`";
        $query=$this->db->query($sql);
        foreach($query->result() as $itemcat)
        {
            $tg[]=$itemcat;
        }
        $sql1="select * FROM city where cit_id <> 1 and cit_id <> 45 ORDER BY `cit_name`";
        $query1=$this->db->query($sql1);
        foreach($query1->result() as $itemcat1)
        {
            $tg[]=$itemcat1;
        }
        //foreach($query->result() as $itemcat)
//        {
//            echo "<option value='".$itemcat->cit_id."'>".$itemcat->cit_name."</option>";
//        }
//        echo "</select>";
        return $tg;
    }
    function SelectProvinceByID($id)
    {
        $sql="select * FROM city where cit_id='".trim($id)."' ORDER BY `cit_name`";
        $query=$this->db->query($sql);
        $kq="";
        if($id > 0){
        if($query->num_rows()> 0)
        {
        $row = $query->row();
        $kq=$row->cit_name;
        }}
        else{$kq='Toàn quốc';}
        return $kq;
    }
	function search_limited($tbl,$txt,$start_row,$limit)
	{						
		$sql="SELECT * FROM $tbl WHERE status=1";
		if($txt!=""){
			$txt = str_replace('+',' ', $txt);
			$sql .=" AND name LIKE '%$txt%'";	
		}			
		$sql .=" ORDER BY ngaybd DESC";		
		if($limit!=''){
			$sql .= " LIMIT $start_row,$limit";
		}
		$query=$this->db->query($sql);		
		return $query;
	}		
	function getlogin($name,$pass)
    {
        $query="select * FROM `user` where use_email ='".strtolower($name)."' and use_pass ='".md5($pass)."' AND `use_authentic`=1";
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            $row=$sql->row();
            
            
        }
        return $row;
    }
    function getcandidatebyID($id)
    {
        $query="select * FROM `user` as u left JOIN cv as c on u.use_id=c.cv_user_id where u.use_id ='".intval($id)."' AND u.`use_authentic`=1";
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            $row=$sql->row();
            
            
        }
        return $row;
    }
    function GetListCandidate($where,$limit,$order)
    {
        $query="select * FROM `user` as u left JOIN cv as c on u.use_id=c.cv_user_id where ";
        if($where != ""){
            $query.=$where;
        }
        if($order != "")
        {
            $query.=$order;
        }
        if(intval($limit)>0){
            $query.=" LIMIT 0,".$limit;
        }
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
            }
        }
        return $row;
    }
    	
    function getlogincompany($name,$pass)
    {
        $query="select usc_id as use_id,usc_email as use_email,usc_name as use_first_name from user_company where usc_email ='".strtolower($name)."' and usc_pass ='".md5($pass)."' AND `usc_authentic`=1";
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            $row=$sql->row();
            
            
        }
        return $row;
    }
    function GetTopNew($length)
    {
         $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow);
        $query="select n.new_id,
                    n.new_title,
                    n.new_cat_id,
                    n.new_city,
                    n.new_qh_id,
                    n.new_money,
                    n.new_cap_bac,
                    n.new_exp,
                    n.new_bang_cap,
                    n.new_gioi_tinh,
                    n.new_so_luong,
                    n.new_hinh_thuc,
                    n.new_user_id,
                    n.new_do_tuoi,
                    n.new_type,
                    n.new_over,
                    n.new_view_count,
                    n.new_han_nop,
                    n.new_post,
                    n.new_renew,
                    n.new_hot,
                    n.new_do,
                    n.new_gap,
                    n.new_cao,
                    n.new_thuc,
                    n.new_order,
                    n.source,u.usc_company from new as n left join user_company as u on n.new_user_id=u.usc_id ";
                    $query.="where n.new_han_nop > '".$timenow1."' and( n.new_hot = 0 or n.new_do = 0 or n.new_gap = 0) 
                    order by n.new_hot desc,
                    n.new_do desc,
                    n.new_gap desc,
                    n.new_cao desc, n.new_id desc limit 0,".$length;
                    
          //var_dump($query);          
        $sql=$this->db->query($query);
        $row="";
        $arrth="";
        
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
                
            }
        }
        return $row;
    }
    function GetTopCompany($lenght)
    {
        $query="SELECT u.usc_id,u.usc_create_time,u.usc_company,u.usc_logo,u.usc_size,COUNT(n.new_id) as sobaiviet,p.point_usc,u.usc_address  
,n.new_hot,n.new_do,n.new_gap,n.new_cao
from user_company as u
		JOIN tbl_point_company as p on u.usc_id=p.usc_id
		join new as n on u.usc_id = n.new_user_id
where u.usc_id IN (SELECT new_user_id FROM new WHERE (new_hot = 0 OR new_do = 0 OR new_gap = 0 OR new_cao = 0))
GROUP BY u.usc_id 
order by n.new_hot desc,n.new_do desc,n.new_gap desc,n.new_cao desc,u.usc_id desc
limit ".$lenght;
        
        $row="";
        
        
        $sql=$this->db->query($query);
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
            }
            
        }
        return $row;
    }
    function detailjobbyid($id)
    {
        $query="select n.new_id,
                    n.new_title,
                    n.new_cat_id,
                    n.new_city,
                    n.new_qh_id,
                    n.new_money,
                    n.new_cap_bac,
                    n.new_exp,
                    n.new_bang_cap,
                    n.new_gioi_tinh,
                    n.new_so_luong,
                    n.new_hinh_thuc,
                    n.new_user_id,
                    n.new_do_tuoi,
                    n.new_type,
                    n.new_over,
                    n.new_view_count,
                    n.new_han_nop,
                    n.new_post,
                    n.new_renew,
                    n.new_hot,
                    n.new_do,
                    n.new_gap,
                    n.new_cao,
                    n.new_thuc,
                    n.new_order,
                    n.source,
                    u.usc_create_time,
                    u.usc_company,
                    u.usc_logo,
                    u.usc_name_add,
                    u.usc_address,
                    u.usc_name_phone,
                    u.usc_phone,
                    u.usc_name_email,
                    u.usc_size,
                    nm.new_mota,
                    nm.new_yeucau,
                    nm.new_quyenloi,
                    nm.new_ho_so,
                    nm.meta_title,
                    nm.meta_desc,
                    nm.meta_keywork

                    from new as n left join user_company as u on n.new_user_id=u.usc_id left join new_multi as nm on n.new_id=nm.new_id";
        $query .=" Where n.new_id='".$id."'";
        //var_dump($query);
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            $row=$sql->row();
            
            
        }
        return $row;
    }
    function chitietcongty($id)
    {
        $query="select * from tbl_doanhnghiep as n";
        $query .=" Where n.id='".$id."'";
        //var_dump($query);
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            $row=$sql->row();
            
            
        }
        return $row;
    }
    function caccongtykhac($id)
    {
        $query="select * from tbl_doanhnghiep as n";
        $query .=" Where n.id<>'".$id."' order by id desc limit 10";
                    
                    $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
                }
            
            
            
        }
        return $row;
    }
    function GetDetailCompanyByID($id)
    {
        $query="SELECT u.usc_id,u.usc_email,u.usc_website,u.usc_phone,u.usc_id,u.usc_create_time,u.usc_company,u.usc_logo,u.usc_size,p.point_usc,u.usc_address ,c.usc_company_info
                from user_company as u
                		left JOIN tbl_point_company as p on u.usc_id=p.usc_id
                		left join user_company_multi as c on u.usc_id=c.usc_id
                where u.usc_id='".intval($id)."'";
                
         $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            $row=$sql->row();
            
            
        }
        return $row;
    }
    function GetMoreJobByCompany($id){
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow);
        $query="select n.new_id,
                    n.new_title,
                    n.new_cat_id,
                    n.new_city,
                    n.new_qh_id,
                    n.new_money,
                    n.new_cap_bac,
                    n.new_exp,
                    n.new_bang_cap,
                    n.new_gioi_tinh,
                    n.new_so_luong,
                    n.new_hinh_thuc,
                    n.new_user_id,
                    n.new_do_tuoi,
                    n.new_type,
                    n.new_over,
                    n.new_view_count,
                    n.new_han_nop,
                    n.new_post,
                    n.new_renew,
                    n.new_hot,
                    n.new_do,
                    n.new_gap,
                    n.new_cao,
                    n.new_thuc,
                    n.new_order,
                    n.source,u.usc_company 
                    from new as n left join user_company as u on n.new_user_id=u.usc_id 
                    where n.new_han_nop > '".$timenow1."'";                    
                    $query .=" and n.new_user_id ='".$id."'";
                    $query.=" order by n.new_id desc limit 0,6";
                    
                    $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
                }
            
            
            
        }
        return $row;
    }
    function GetCountJobByProvince($type,$cat,$pro,$keywork)
    {
        //type =1:viec lam them, 2: viec lam nganh nghe tại, 3: tìm việc làm
        //$query="select t.cit_id,t.cit_name,SUM(t.sobanghi) as tongbanghi from ((select c.cit_id,c.cit_name, COUNT(n.new_money)as sobanghi
//                from new as n ,city as c
//                where n.new_han_nop > 0  and LENGTH(n.new_city)>= 3 and FIND_IN_SET(c.cit_id , n.new_city)
//                GROUP BY c.cit_id)
//union ALL
//(
//select c.cit_id,c.cit_name, COUNT(n.new_money)as sobanghi
//                from new as n ,city as c
//                where n.new_han_nop > 0  and LENGTH(n.new_city)< 3 and n.new_city=c.cit_id
//                GROUP BY c.cit_id
//)) as t
//GROUP BY t.cit_id";

$query="select c.cit_id,c.cit_name, COUNT(n.new_money)as tongbanghi
                from new as n ,city as c
                where n.new_han_nop > 0  and FIND_IN_SET(c.cit_id , n.new_city)
                GROUP BY c.cit_id";

        $sql=$this->db->query($query);
            $row="";
            if($sql->num_rows()> 0)
            {
                foreach($sql->result() as $item){
                        $item1['cit_id']=$item->cit_id;
                        $item1['cit_name']=$item->cit_name;
                        $item1['tongbanghi']=$item->tongbanghi;
                        if($type < 3){
                        $urltt="";
                        if(intval($item->cit_id)>=1){
                            $urltt="-tai-".vn_str_filter(Getcitybyindex($item->cit_id));
                        }
                        $urlnn="";
                        if(intval($cat)>=1){
                            $urlnn="-".vn_str_filter(GetCategory($cat));
                        }
                        $link=base_url()."viec-lam".$urlnn.$urltt."-c".intval($cat)."p".$item->cit_id.".html";
                        }else{
                            $link=base_url()."tim-viec-lam&keywork=".$keywork."&dd=".intval($item->cit_id)."&nn=".intval($cat);
                        }
                        $item1['url']=$link;
                        $row[]=$item1;
                    }
                
                
                
            }
            return $row;
    }
    function GetCounJobByCategory($type,$cat,$pro,$keywork)
    {
        //type =1:viec lam them, 2: viec lam nganh nghe tại, 3: tìm việc làm
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow);
        //var_dump($type,$cat,$pro,$keywork);
        //$query="select t.cat_id,t.cat_name,SUM(t.sobanghi) as tongbanghi from ((select c.cat_id,c.cat_name, COUNT(n.new_money)as sobanghi
//                from new as n ,category as c
//                where n.new_han_nop > '".$timenow1."'  and LENGTH(n.new_cat_id)>= 3 and FIND_IN_SET(c.cat_id , n.new_cat_id)
//                GROUP BY c.cat_id)
//        union ALL
//        (
//        select c.cat_id,c.cat_name, COUNT(n.new_money)as sobanghi
//                        from new as n ,category as c
//                        where n.new_han_nop > '".$timenow1."'  and LENGTH(n.new_cat_id)< 3 and n.new_cat_id=c.cat_id
//                        GROUP BY c.cat_id
//        )) as t
//        GROUP BY t.cat_id";
$query="select c.cat_id,c.cat_name, COUNT(n.new_money)as tongbanghi
                from new as n ,category as c
                where n.new_han_nop > '".$timenow1."'  and FIND_IN_SET(c.cat_id , n.new_cat_id)
                GROUP BY c.cat_id";
        $sql=$this->db->query($query);
            $row="";
            if($sql->num_rows()> 0)
            {
                foreach($sql->result() as $item){
                        $item1['cat_id']=$item->cat_id;
                        $item1['cat_name']=$item->cat_name;
                        $item1['tongbanghi']=$item->tongbanghi;
                        if($type < 3){
                        $urltt="";
                        if(intval($pro)>=1){
                            $urltt="-tai-".vn_str_filter(Getcitybyindex($pro));
                        }
                        $urlnn="";
                        if(intval($item->cat_id)>=1){
                            $urlnn="-".vn_str_filter(GetCategory($item->cat_id));
                        }
                        $link=base_url()."viec-lam".$urlnn.$urltt."-c".intval($item->cat_id)."p".intval($pro).".html";
                        }else{
                            $link=base_url()."tim-viec-lam&keywork=".$keywork."&dd=".intval($pro)."&nn=".intval($item->cat_id);
                        }
                        $item1['url']=$link;
                        $row[]=$item1;
                    }
                
            }
            return $row;
    }
    function GetCountCandiByCity($keywork,$cat,$type)
    {
        $query="select u.use_city,IFNULL(c.cit_name, 'Chưa cập nhật') as tinhthanh ,COUNT(u.use_city) as soungvien from `user` as u left join city as c on u.use_city=c.cit_id
        GROUP BY u.use_city";
        $sql=$this->db->query($query);
        $row="";
        //var_dump($keywork,$cat,$type); 
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                        $item1['use_city']=$item->use_city;
                        $item1['tinhthanh']=$item->tinhthanh;
                        $item1['soungvien']=$item->soungvien;
                        if($type <=2){
                        $urltt="";
                        if(intval($item->use_city)>=1){
                            $urltt="-tai-".vn_str_filter($item->tinhthanh);
                        }else{
                            $urltt="-chua-cap-nhat";
                        }
                        $urlnn="";
                        if(intval($cat)>=1){
                            $urlnn="-".vn_str_filter(GetCategory($cat));
                            
                        }
                        $link=base_url()."ung-vien".$urlnn.$urltt."-u".intval($cat)."s".$item->use_city.".html";
                        }else{
                         $link=base_url()."tim-ung-vien&keywork=".$keywork."&dd=".$item->use_city."&nn=".intval($cat);
                        }
                        $item1['url']=$link;
                        $row[]=$item1;
                    }
                
        }
        return $row;
    }
    function GetCountCandiByCategory($keywork,$cate,$type)
    {
        $query="select c1.cv_cate_id,IFNULL(c.cat_name, 'Chưa cập nhật') as nganhnghe ,COUNT(c1.cv_cate_id) as soungvien 
        from `user` as u join cv as c1 on c1.cv_user_id=u.use_id
        			left join category as c on c.cat_id=c1.cv_cate_id
        GROUP BY c1.cv_cate_id";
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                        $item1['cv_cate_id']=$item->cv_cate_id;
                        $item1['nganhnghe']=$item->nganhnghe;
                        $item1['soungvien']=$item->soungvien;
                        if($type <=2){
                        $urltt="";
                        if(intval($cate)>=1){
                            $urltt="-tai-".vn_str_filter(Getcitybyindex($cate));
                        }else{
                            $urltt="-chua-cap-nhat";
                        }
                        $urlnn="";
                        if(intval($item->cv_cate_id)>=1){
                            $urlnn="-".vn_str_filter(GetCategory($item->cv_cate_id));
                        }
                        $link=base_url()."ung-vien".$urlnn.$urltt."-u".intval($item->cv_cate_id)."s".intval($cate).".html";
                        }else{
                         $link=base_url()."tim-ung-vien&keywork=".$keywork."&dd=".intval($cate)."&nn=".intval($item->cv_cate_id);
                        }
                        $item1['url']=$link;
                        $row[]=$item1;
                    }
                
        }
        return $row;
    }
    function GetSalaryByCandi()
    {
        $query="select c.cv_money_id,COUNT(c.cv_user_id) as sobanghi, 
                CASE c.cv_money_id
                				  WHEN 0 THEN N'Thỏa thuận' 
                				  WHEN 1 THEN N'1 - 3 triệu' 
                				  WHEN 2 THEN N'3 - 5 triệu' 
                				  WHEN 3 THEN N'5 - 7 triệu' 
                				  WHEN 4 THEN N'7 - 10 triệu' 
                					WHEN 5 THEN N'10 - 15 triệu'
                					WHEN 6 THEN N'15 - 20 triệu'
                					WHEN 7 THEN N'20 - 30 triệu'
                					WHEN 8 THEN N'Trên 30 triệu' 
                			   END As NameMoney
                from `user` as u join cv as c on c.cv_user_id=u.use_id
                group by c.cv_money_id";
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
                }
        }
        return $row;
    }
    function GetExpbyCandi()
    {
        $query="select c.cv_exp,COUNT(c.cv_user_id) as sobanghi, 
                CASE c.cv_exp
                				  WHEN 0 THEN N'Chưa có kinh nghiệm' 
                				  WHEN 1 THEN N'0 - 1 năm kinh nghiệm' 
                				  WHEN 2 THEN N'1 - 2 năm kinh nghiệm' 
                				  WHEN 3 THEN N'2 - 5 năm kinh nghiệm' 
                				  WHEN 4 THEN N'5 - 10 năm kinh nghiệm' 
              				    WHEN 5 THEN N'Hơn 10 năm kinh nghiệm'
                				END As NameExp
                from `user` as u join cv as c on c.cv_user_id=u.use_id
where c.cv_exp < 6
                group by c.cv_exp";
                $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
                }
        }
        return $row;
    }
    function GetFilterABCBycandi($city,$cat,$type)
    {
        $arrabc=GetABC();
        $row="";
        for($i=0;$i<count($arrabc);$i++){
            if($type==1){
                $link="tim-ung-vien&keywork=".$arrabc[$i]."&dd=".intval($city)."&nn=".intval($cat)."";
                $item1['url']=base_url().$link;
                $item1['name']=$arrabc[$i];
            }else{
                
            }
            $row[]=$item1;
        }
        return $row;
        
    }
    function FindCandiBySearch($keywork,$nganhnghe,$diadiem,$salary,$exp,$page,$perpage){
        $query="select	u.use_id,u.use_email,u.use_first_name,u.use_type,u.use_create_time,u.use_update_time,u.use_logo,u.use_phone,u.use_gioi_tinh,u.use_birth_day,
				u.use_city,u.use_address,u.use_hon_nhan,u.use_view,c.cv_address,c.cv_capbac_id,c.cv_cate_id,c.cv_city_id,c.cv_exp,c.cv_hocvan,c.cv_kynang,c.cv_money_id,c.cv_muctieu,c.cv_title,c.cv_kynang
        from `user` as u join cv as c on u.use_id=c.cv_user_id
        where u.use_authentic=1";
        if($salary !=''){
            $query.=" and c.cv_money_id='".intval($salary)."'";
        }
        if($diadiem !=''){
            $query.=" and (c.cv_city_id='".intval($diadiem)."' or u.use_city='".intval($diadiem)."')";
        }
        if($exp !=''){
            $query.=" and c.cv_exp='".intval($exp)."'";
        }
        if($nganhnghe != ''){
            $query.=" AND c.cv_cate_id='".intval($nganhnghe)."'";
        }
        if($keywork !='')
        {
            $keywork=preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($keywork));
          $query.=" and (c.cv_title like '%".$keywork."%'  or u.use_first_name like '%".$keywork."%' or c.cv_kynang like '%".$keywork."%')";  
        }
        $query.=" order by u.use_id desc";
        
        $total=$this->db->query($query)->num_rows();
        $query.=" limit ".$page.",".$perpage;;
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
            }
        }
        return array('data'=>$row,'total'=>$total);
        
    }
    function GetCityByCompany($nganhnghe,$findkey,$type)
    {
        $query="SELECT cit_id,cit_name from city ORDER BY cit_id asc";
        $sql=$this->db->query($query);
            $row="";
        if($sql->num_rows()> 0)
            {
                foreach($sql->result() as $item){
                        $item1['cit_id']=$item->cit_id;
                        $item1['cit_name']=$item->cit_name;
                        //$item1['tongbanghi']=$item->tongbanghi;
                       if($findkey !=''){
                        $link=base_url()."nha-tuyen-dung&keywork=".$findkey."&c=".$item->cit_id."&n=".$nganhnghe."&type=1";
                        }else{
                            $link=base_url()."nha-tuyen-dung&keywork=&c=".$item->cit_id."&n=".$nganhnghe."&type=1";
                        }
                        $item1['url']=$link;
                        $row[]=$item1;
                    }
                
                
                
            }
            return $row;
    }
    function GetCatByCompany($city,$findkey,$type)
    {
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow.'- 30 day');
        $query="SELECT c.cat_id,c.cat_name,COUNT(n.new_user_id) as socongty from new as n,category as c WHERE n.new_han_nop > '".$timenow1."' and FIND_IN_SET(c.cat_id,n.new_cat_id)
GROUP BY c.cat_id";
        $sql=$this->db->query($query);
            $row="";
        if($sql->num_rows()> 0)
            {
                foreach($sql->result() as $item){
                        $item1['cat_id']=$item->cat_id;
                        $item1['cat_name']=$item->cat_name;
                        $item1['socongty']=$item->socongty;
                       if($findkey !=''){
                        $link=base_url()."nha-tuyen-dung&keywork=".$findkey."&c=".$city."&n=".$item->cat_id."&type=1";
                        }else{
                           $link=base_url()."nha-tuyen-dung&keywork=&c=".$city."&n=".$item->cat_id."&type=1"; 
                        }
                        $item1['url']=$link;
                        $row[]=$item1;
                    }
                
                
                
            }
            return $row;
    }
    function GetFilterABCByType($city,$cat,$type)
    {
        $arrabc=GetABC();
        $row="";
        for($i=0;$i<count($arrabc);$i++){
            if($type==1){
                $link="danh-sach-nha-tuyen-dung/keywork=".$arrabc[$i]."&c=".$city."&n=".$cat."&type=2";
                $item1['url']=$link;
                $item1['name']=$arrabc[$i];
            }else{
                
            }
            $row[]=$item1;
        }
        return $row;
        
    }
    function GetCountJobbyEdu()
    {
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow);
        $query="select e.EduID,e.TitleEdu,COUNT(n.new_id) as sobanghi,ValueOption from new as n, edulevel as e
                WHERE n.new_han_nop > '".$timenow1."' and n.new_bang_cap in (e.ValueOption)
                GROUP BY e.EduID";
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
            {
                foreach($sql->result() as $item){
                        
                        $row[]=$item;
                    }
                
                
                
            }
        return $row;
    }
    function GetCountJobByLevel()
    {
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow);
        $query="select e.LevelID,e.Title,COUNT(n.new_id) as sobanghi from new as n, `level` as e
                    WHERE n.new_han_nop >'".$timenow1."' and n.new_cap_bac =e.LevelID
                    GROUP BY e.LevelID";
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
            {
                foreach($sql->result() as $item){
                        
                        $row[]=$item;
                    }
                
                
                
            }
        return $row;
    }
    function GetCountJobByEXP()
    {
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow);
        $query="select e.ExperienceID,e.TitleEX,COUNT(n.new_id) as sobanghi,e.ValueOption from new as n, experience as e
                WHERE n.new_han_nop > '".$timenow1."' and n.new_exp =e.ValueOption
                GROUP BY e.ExperienceID";
          $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
            {
                foreach($sql->result() as $item){
                        
                        $row[]=$item;
                    }
                
                
                
            }
        return $row;      
    }
    function GetLisCompanyByFillter($findkey,$category,$city,$type,$page,$perpage)
    {
        $query="SELECT u.usc_id,u.usc_create_time,u.usc_company,u.usc_logo,u.usc_size,COUNT(n.new_id) as sobaiviet,p.point_usc,u.usc_address  from user_company as u
		JOIN tbl_point_company as p on u.usc_id=p.usc_id
		join new as n on u.usc_id = n.new_user_id where 1=1";
        if(intval($category)>0){
            $query.=" and FIND_IN_SET('".$category."',n.new_cat_id)";
        }
        if(intval($city)>0){
            $query.=" and FIND_IN_SET('".$city."',n.new_city)";
        }
        if($type==2){
            if($findkey != ''){
                if($findkey=='0-9'){
                    $query.=" and(u.usc_company BETWEEN '0' AND '9')";
                }else{
                    $query.=" and u.usc_company like '".$findkey."%'";
                }
            }
        }else{
            if($findkey !=''){
                $findkey=preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($findkey));
                $query.=" and u.usc_company like '%".str_replace(' ','%',$findkey)."%'";    
            }            
            
        }
        $query.=" GROUP BY u.usc_id";
        $total=$this->db->query($query)->num_rows();
        //var_dump($total);die();
        $query.=" order by sobaiviet desc limit ".$page.",".$perpage;;
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
            }
        }
        return array('data'=>$row,'total'=>$total);
    }
    function DanhSachCongTy($findkey,$page,$perpage)
    {
        $query="SELECT *  from tbl_doanhnghiep as u where 1=1";
        
            if($findkey !=''){
                $findkey=preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($findkey));
                $query.=" and u.name like '%".str_replace(' ','%',$findkey)."%'";    
            }
        
       
        $total=$this->db->query($query)->num_rows();
        //var_dump($total);die();
        $query.=" order by id desc limit ".$page.",".$perpage;;
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
            }
        }
        return array('data'=>$row,'total'=>$total);
    }
    function GetListJobforfilter($keywork,$cookjobedu,$cookjobexperion,$cookjoblevel,$cookjobupdate,$idcat,$idpro,$page,$perpage)
    {
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow);
        if(!empty($cookjobupdate)){
            if($cookjobupdate=="week"){
                $timenow1 = strtotime($timenow.' - 7 day');
            }
            if($cookjobupdate=="twoweek"){
                $timenow1 = strtotime($timenow.' - 14 day');
            }
            if($cookjobupdate=="month"){
                $timenow1 = strtotime($timenow.' - 30 day');
            }
            if($cookjobupdate=="twomonth"){
                $timenow1 = strtotime($timenow.' - 60 day');
            }
            if($cookjobupdate=="all"){
                //$timenow1 = strtotime($timenow.' - 360 day');
            }
        }
        $query="select n.new_id,
                    n.new_title,
                    n.new_cat_id,
                    n.new_city,
                    n.new_qh_id,
                    n.new_money,
                    n.new_cap_bac,
                    n.new_exp,
                    n.new_bang_cap,
                    n.new_gioi_tinh,
                    n.new_so_luong,
                    n.new_hinh_thuc,
                    n.new_user_id,
                    n.new_do_tuoi,
                    n.new_type,
                    n.new_over,
                    n.new_view_count,
                    n.new_han_nop,
                    n.new_post,
                    n.new_renew,
                    n.new_hot,
                    n.new_do,
                    n.new_gap,
                    n.new_cao,
                    n.new_thuc,
                    n.new_order,
                    n.source,u.usc_create_time,u.usc_company,u.usc_logo 
                    from new as n left join user_company as u on n.new_user_id=u.usc_id 
                    where 1=1";
                   if(intval($idcat)>0){
                    $query.=" And FIND_IN_SET('".$idcat."',n.new_cat_id)";
                   }  
                   if(intval($idpro)>0){
                    $query.=" and FIND_IN_SET('".$idpro."',n.new_city)";
                   }                  
                   if(isset($cookjobedu) && $cookjobedu !='') {
                    $query.=" and n.new_bang_cap in(".$cookjobedu.")";
                   }
                   if(!empty($cookjobexperion)  && $cookjobexperion !='') {
                    $query.=" and n.new_exp='".$cookjobexperion."'";
                   }
                   if(!empty($cookjoblevel)  && $cookjoblevel !='') {
                    $query.=" and n.new_cap_bac ='".$cookjoblevel."'";
                   }
                   if(!empty($cookjobupdate) && $cookjobupdate!='all'  && $cookjobupdate !='') {
                    $query.=" and n.new_han_nop >'".$timenow1."'";
                   }
                   if($keywork !=''){
                    $keywork=preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($keywork));
                    $query.=" and n.new_title like '%".str_replace(' ','%',$keywork)."%'";
                   }
                    $query.=" order by n.new_id desc";
                  //var_dump($query);  
                    
        $total=$this->db->query($query)->num_rows();
        $query.=" limit ".$page.",".$perpage;
        $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
            }
        }
        return array('data'=>$row,'total'=>$total);
    }
    function GetListJobbyCatAndProvince($cookjobedu,$cookjobexperion,$cookjoblevel,$cookjobupdate,$idcat,$idpro,$page,$perpage)
    {
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow);
        if(!empty($cookjobupdate)){
            if($cookjobupdate=="week"){
                $timenow1 = strtotime($timenow.' - 7 day');
            }
            if($cookjobupdate=="twoweek"){
                $timenow1 = strtotime($timenow.' - 14 day');
            }
            if($cookjobupdate=="month"){
                $timenow1 = strtotime($timenow.' - 30 day');
            }
            if($cookjobupdate=="twomonth"){
                $timenow1 = strtotime($timenow.' - 60 day');
            }
            if($cookjobupdate=="all"){
                //$timenow1 = strtotime($timenow.' - 360 day');
            }
        }
        $query="select n.new_id,
                    n.new_title,
                    n.new_cat_id,
                    n.new_city,
                    n.new_qh_id,
                    n.new_money,
                    n.new_cap_bac,
                    n.new_exp,
                    n.new_bang_cap,
                    n.new_gioi_tinh,
                    n.new_so_luong,
                    n.new_hinh_thuc,
                    n.new_user_id,
                    n.new_do_tuoi,
                    n.new_type,
                    n.new_over,
                    n.new_view_count,
                    n.new_han_nop,
                    n.new_post,
                    n.new_renew,
                    n.new_hot,
                    n.new_do,
                    n.new_gap,
                    n.new_cao,
                    n.new_thuc,
                    n.new_order,
                    n.source,u.usc_create_time,u.usc_company,u.usc_logo 
                    from new as n left join user_company as u on n.new_user_id=u.usc_id 
                    where 1=1";
                   if(intval($idcat)>0){
                    $query.=" And FIND_IN_SET('".$idcat."',n.new_cat_id)";
                   }  
                   if(intval($idpro)>0){
                    $query.=" and FIND_IN_SET('".$idpro."',n.new_city)";
                   }                  
                   if(isset($cookjobedu) && $cookjobedu !='') {
                    $query.=" and n.new_bang_cap in(".$cookjobedu.")";
                   }
                   if(!empty($cookjobexperion)  && $cookjobexperion !='') {
                    $query.=" and n.new_exp='".$cookjobexperion."'";
                   }
                   if(!empty($cookjoblevel)  && $cookjoblevel !='') {
                    $query.=" and n.new_cap_bac ='".$cookjoblevel."'";
                   }
                   if(!empty($cookjobupdate) && $cookjobupdate!='all'  && $cookjobupdate !='') {
                    $query.=" and n.new_han_nop >'".$timenow1."'";
                   }
                    $query.=" order by n.new_id desc limit ".$page.",".$perpage;
                  //var_dump($query);  
                    $sql=$this->db->query($query);
        $query1="select count(*) as sobanghi,
SUM(CASE WHEN n.new_han_nop > '".$timenow1."' THEN 1 ELSE 0 END) AS tinconhan 
                    from new as n where 1=1";
         if(intval($idcat)>0){
                    $query1.=" And FIND_IN_SET('".$idcat."',n.new_cat_id)";
                   }  
                   if(intval($idpro)>0){
                    $query1.=" and FIND_IN_SET('".$idpro."',n.new_city)";
                   }
                   if(isset($cookjobedu) && $cookjobedu !='') {
                    $query1.=" and n.new_bang_cap in(".$cookjobedu.")";
                   }
                   if(!empty($cookjobexperion) && $cookjobexperion !='') {
                    $query1.=" and n.new_exp='".$cookjobexperion."'";
                   }
                   if(!empty($cookjoblevel) && $cookjoblevel !='') {
                    $query1.=" and n.new_cap_bac ='".$cookjoblevel."'";
                   }
                   if(!empty($cookjobupdate) && $cookjobupdate!='all' && $cookjobupdate !='') {
                    $query1.=" and n.new_han_nop >'".$timenow1."'";
                   }  
         $query1.=" order by n.new_id desc";
         //var_dump($query1); 
         $sql1=$this->db->query($query1);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
            }
        }
        return array('data'=>$row,'total'=>$sql1->row());
    }
    function GetRelativeJobdetail($catid,$idnew){
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow);
        $query="select n.new_id,
                    n.new_title,
                    n.new_cat_id,
                    n.new_city,
                    n.new_qh_id,
                    n.new_money,
                    n.new_cap_bac,
                    n.new_exp,
                    n.new_bang_cap,
                    n.new_gioi_tinh,
                    n.new_so_luong,
                    n.new_hinh_thuc,
                    n.new_user_id,
                    n.new_do_tuoi,
                    n.new_type,
                    n.new_over,
                    n.new_view_count,
                    n.new_han_nop,
                    n.new_post,
                    n.new_renew,
                    n.new_hot,
                    n.new_do,
                    n.new_gap,
                    n.new_cao,
                    n.new_thuc,
                    n.new_order,
                    n.source,u.usc_company 
                    from new as n left join user_company as u on n.new_user_id=u.usc_id 
                    where n.new_han_nop > '".$timenow1."'";
                    $arr=explode(',',$catid);
                    for($i=0;$i< count($arr);$i++){
                        $query.=" And FIND_IN_SET(".$arr[$i].",n.new_cat_id)";
                    }
                    $query .=" and n.new_id <>'".$idnew."'";
                    $query.=" order by n.new_id desc limit 0,6";
                    //var_dump($query);
                    $sql=$this->db->query($query);
        $row="";
        if($sql->num_rows()> 0)
        {
            foreach($sql->result() as $item){
                $row[]=$item;
                }
            
            
            
        }
        return $row;
    }
    function getconfig()
    {
        $this->db->where('id',1);
        $this->db->order_by('id','desc');
        $sql=$this->db->get('tbl_footer');
        if($sql->num_rows() > 0)
        {
          $row = $sql->row();//mysql_fetch_assoc($db_qr->result);
          return $row;
        }
    }
    function create_token($userid,$ip,$type)
    {
       if (function_exists('com_create_guid') === true)
       {
         return trim(com_create_guid(), '{}');
       }
       $timecreate = date("Y-m-d H:i:s",time());
       $timexpired = strtotime('+30 minutes',time());
       $timexpired = date("Y-m-d H:i:s",$timexpired);
       $token = $this->v4_guid();//sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
       $db_token =$this->db->query("INSERT INTO tokens(UserId,AuthToken,IssuedOn,ExpiresOn,IP,Type)
                               VALUES('".$userid."','".$token."','".$timecreate."','".$timexpired."','".$ip."','".$type."')");
       //var_dump($db_token);die();
       //unset($db_token);
       return $token;
    }
    function v4_guid() {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
    
          // 32 bits for "time_low"
          mt_rand(0, 0xffff), mt_rand(0, 0xffff),
    
          // 16 bits for "time_mid"
          mt_rand(0, 0xffff),
    
          // 16 bits for "time_hi_and_version",
          // four most significant bits holds version number 4
          mt_rand(0, 0x0fff) | 0x4000,
    
          // 16 bits, 8 bits for "clk_seq_hi_res",
          // 8 bits for "clk_seq_low",
          // two most significant bits holds zero and one for variant DCE1.1
          mt_rand(0, 0x3fff) | 0x8000,
    
          // 48 bits for "node"
          mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
      }
    function Checktoken($token,$userid)
    {
       $now = 0;
       $db_qr = $this->db->query("SELECT * FROM tokens WHERE AuthToken = '".$token."' AND userid = '".$userid."' LIMIT 1");
       if($db_qr->num_rows() > 0)
       {
          $row = $db_qr->row();//mysql_fetch_assoc($db_qr->result);
          $expired = $row['ExpiresOn'];
          $expired = strtotime($expired);
          if($expired < time())
          {
             $now = 0;
          }
          else
          {
             $now = 1;
          }
       }
       return $now;
    }
    function GetTokenByUserID($userid)
    {
       $now = "";
       $db_qr = $this->db->query("SELECT * FROM tokens WHERE UserId = '".$userid."' ORDER By TokenId DESC LIMIT 1");
       if($db_qr->num_rows() > 0)
       {
          $row =$db_qr->row();// mysql_fetch_assoc($db_qr->result);
          $expired = $row['ExpiresOn'];
          $expired = strtotime($expired);
          if($expired < time())
          {
             $now = "";
          }
          else
          {
             $now = $row['AuthToken'];
          }
       }
       return $now;
    }
    function ChecktokenExpired($token)
    {
       $now = 0;
       $db_qr = $this->db->query("SELECT * FROM tokens WHERE 	AuthToken = '".$token."' ORDER BY TokenId DESC LIMIT 1");
       if($db_qr->num_rows() > 0)
       {
          $row = $db_qr->row();// mysql_fetch_assoc($db_qr->result);
          $expired = $row['ExpiresOn'];
          $expired = strtotime($expired);
          if($expired < time())
          {
             $now = 0;
          }
          else
          {
             $now = $row['UserId'];
          }
       }
       return $now;
    } 
    function deltokenbyuserid($userid)
    {
        $db_qr = $this->db->query("delete FROM tokens WHERE UserId = '".$userid."'");
        return 1;
    }
    function GetWordtime()
    {
        $query="select * from worktime order by worktimeID ASC";
        $db_qr = $this->db->query($query);
        if($db_qr->num_rows() > 0)
        {
            $tg1="";
            foreach($db_qr->result() as $itemcat)
            {
                $tg1[]=$itemcat;    
            }
        }
        return $tg1;
    } 
    function GetSex()
    {
        $query="select * from sex order by SexID ASC";
         $db_qr = $this->db->query($query);
        if($db_qr->num_rows() > 0)
        {
            $tg1="";
            foreach($db_qr->result() as $itemcat)
            {
                $tg1[]=$itemcat;    
            }
        }
        return $tg1;
    }
    
    function EmailNofity($findkey)
    {
        $query="Select Email from EmailNotify where Email like'%".$findkey."%'";
        $dbcompany = $this->db->query($query);
        if($dbcompany->num_rows() > 0)
        {
            $data=array('kq'=>false,'msg'=>'Bạn đã đăng ký nhận thông tin trước đó');
        }else{
            $timecreate = date("Y-m-d H:i:s",time());            
            $query ="INSERT INTO EmailNotify(Email,CreateDate,`Order`)VALUES('".strtolower($findkey)."','".$timecreate."',0)";
            //var_dump($query);die();
            $db_token =$this->db->query($query);
            $data=array('kq'=>true,'msg'=>'Bạn đã đăng ký nhận thông tin thành công');
        }
        return $data;
    }
    function GetCategoryWithLink()
    {
        $query="select c.cat_id,c.cat_name from category as c limit 64";
        $db_qr = $this->db->query($query);
        if($db_qr->num_rows() > 0)
        {
            $tg1="";
            foreach($db_qr->result() as $itemcat)
            {
                //viec-lam-viec-lam-ban-hang-c10p0.html
                $item['name']=$itemcat->cat_name;
                $item['url']=base_url()."viec-lam-".vn_str_filter($itemcat->cat_name)."-c".$itemcat->cat_id."p0.html";
                $tg1[]=$item;    
            }
        }
        return $tg1;
    }
    function GetProvinceWithLink()
    {
        $query="select c.cit_id,c.cit_name from city as c";
        $db_qr = $this->db->query($query);
        if($db_qr->num_rows() > 0)
        {
            $tg1="";
            foreach($db_qr->result() as $itemcat)
            {
                //viec-lam-viec-lam-ban-hang-c10p0.html
                $item['name']=$itemcat->cit_name;
                $item['url']=base_url()."viec-lam-tai-".vn_str_filter($itemcat->cit_name)."-c0p".$itemcat->cit_id.".html";
                $tg1[]=$item;    
            }
        }
        return $tg1;
    }
    function RegisterCandi($name,$email,$pass,$phone,$city,$ngaysinh,$gioitinh,$honnhan,$cvtitle,$bangcap,$hinhthuclamviec,$capbac,$noilamvieckhac,$nganhnghe,$extrann,$muctieu,$kynang,$diachi,$mucluong,$kinhnghiem,$district,$school,$schooltype,$xeploaihoctap,$languagecandi)
    {
        $queryket="select * from `user` where use_email = '".$email."'";
        $db_qr = $this->db->query($queryket);
        if($db_qr->num_rows() > 0)
        {
            return array('userid'=>0,'code'=>'');
            }else{
        $query="Insert into user(use_email,use_first_name,use_pass,use_type,use_create_time,use_update_time,use_phone,use_city,use_authentic,use_gioi_tinh,use_birth_day,use_address,use_hon_nhan)";
        $query.="values('".$email."','".$name."','".md5($pass)."','0','".time()."','".time()."','".$phone."','".intval($city)."','0','".intval($gioitinh)."','".strtotime($ngaysinh)."','".$diachi."','".intval($honnhan)."')";
        $insert=$this->db->query($query);
        $insertid=$this->db->insert_id();
        $query="INSERT INTO cv(cv_user_id,cv_title,cv_hocvan,cv_loaihinh_id,cv_capbac_id,cv_money_id,cv_exp,cv_kynang,cv_muctieu,cv_cate_id,cate_extra,cv_city_id,city_extra,district,school,schooltype,xeploaihoctap,language)
        VALUES(".$insertid.",'".$cvtitle."','".intval($bangcap)."','".intval($hinhthuclamviec)."','".intval($capbac)."','".intval($mucluong)."','".intval($kinhnghiem)."','".$kynang."','".$muctieu."','".intval($nganhnghe)."','".$extrann."','".intval($city)."','".intval($noilamvieckhac)."','".intval($district)."','".$school."','".$schooltype."','".intval($xeploaihoctap)."','".intval($languagecandi)."')";
        $insert=$this->db->query($query);
        $type=1;
        $body=file_get_contents(base_url().'EmailTemplate/XacThucEmail.htm');      
        $body=str_replace('<%name%>',$name,$body);
        $body=str_replace('<%email%>',$email,$body);    
        $body=str_replace('<%code%>',$code,$body);
        $body=str_replace('<%code%>',$type,$body);   
        $code="candi_".rand(1000000,9999999);
        $Description="Đăng ký tài khoản";
            $data="";
            $CreateDate=date("Y-m-d H:i:s",time());
            $queryconfrim="INSERT INTO comfirmtable(UserID,Code,Type,Status,Data,Description,CreateDate,UpdateDate) 
                                                   VALUES('".$insertid."','".$code."','1','0','".$body."','".$Description."','".$CreateDate."','".$CreateDate."')";
        $insert=$this->db->query($queryconfrim);
        
    	$subject='[timviec24h] Kích hoạt tài khoản đăng ký';
		$header='Từ: timviec24h.net.vn';
        require_once('class.phpmailer.php');
					require_once('class.pop3.php');
					define('GUSER','timviec365-noreply@timviec365.vn');
					define('GPWD','Bbz123');
					global $message;
					$this->smtpmailer($email,'timviec365-noreply@timviec365.vn',$header,$subject,$body);
         return array('userid'=>$insertid,'code'=>$code);       
            
         }                                      
    }
    function RegisterCompany($tencongty,$phone,$email,$city,$pass,$website,$addresscom)
    {
        $queryket="select * from `user_company` where usc_email = '".$email."'";
        $db_qr = $this->db->query($queryket);
        if($db_qr->num_rows() > 0)
        {
            return array('userid'=>0,'code'=>'');
            }else{
                $type=2;
        $query="Insert into user_company(usc_email,usc_name,usc_name_add,usc_name_phone,usc_name_email,usc_pass,usc_company,usc_type,usc_address,usc_phone,usc_website,usc_city,usc_create_time,usc_update_time,usc_authentic)";
        $query.="values('".$email."','".$tencongty."','".$addresscom."','".$phone."','".$email."','".md5($pass)."','".$tencongty."','0','".$addresscom."','".$phone."','".$website."','".$city."','".time()."','".time()."','0')";
        $insert=$this->db->query($query);
        $insertid=$this->db->insert_id();
        $query="INSERT INTO user_company_multi(usc_id)VALUES(".$insertid.")";
        $insert=$this->db->query($query);
        $body=file_get_contents(base_url().'EmailTemplate/XacThucEmail.htm');      
        $body=str_replace('<%name%>',$name,$body);
        $body=str_replace('<%email%>',$email,$body);    
        $body=str_replace('<%code%>',$code,$body); 
        $body=str_replace('<%type%>',$type,$body); 
        $code="com_".rand(1000000,9999999);
        $Description="Đăng ký tài khoản công ty";
            $data="";
            $CreateDate=date("Y-m-d H:i:s",time());
            $queryconfrim="INSERT INTO comfirmtable(UserID,Code,Type,Status,Data,Description,CreateDate,UpdateDate) 
                                                   VALUES('".$insertid."','".$code."','2','0','".$body."','".$Description."','".$CreateDate."','".$CreateDate."')";
        $insert=$this->db->query($queryconfrim);
        
    	$subject='[timviec24h] Kích hoạt tài khoản đăng ký';
		$header='Từ: timviec24h.net.vn';
        require_once('class.phpmailer.php');
					require_once('class.pop3.php');
					define('GUSER','timviec365-noreply@timviec365.vn');
					define('GPWD','Bbz123');
					global $message;
					$this->smtpmailer($email,'timviec365-noreply@timviec365.vn',$header,$subject,$body);
         return array('userid'=>$insertid,'code'=>$code);       
            
         }
    }
    function getconfirmuser($code,$email,$type){
        $arr=['kq'=>false];
        if(intval($type)<2){
            $query="select * from `user` where use_email ='".$email."' and use_authentic=0";
            //var_dump($query);
            $db_qr = $this->db->query($query);
            if($db_qr->num_rows() > 0)
            {
                $item=$db_qr->row();
                
                $query="select * from comfirmtable where Code='".$code."' and Type='".$type."' and UserID='".$item->use_id."'";
                $db_qr = $this->db->query($query);
                if($db_qr->num_rows() > 0)
                {
                    $item2=$db_qr->row();;
                    $query1="UPDATE `comfirmtable` SET `Status` = '1' WHERE Id = '".$item2->Id."'";
                    $tg=$this->db->query($query1);
                    $query1="UPDATE `user` SET `use_authentic` = '1' WHERE use_id = '".$item->use_id."'";
                    $tg1=$this->db->query($query1);
                    $arr=['kq'=>true];
                }
                
            }
            
        }else{
            $query="select * from `user_company` where usc_email ='".$email."' and usc_authentic=0";
            var_dump($query);
            $db_qr = $this->db->query($query);
            if($db_qr->num_rows() > 0)
            {
                $item=$db_qr->row();
                $query="select * from comfirmtable where Code='".$code."' and Type='".$type."' and UserID='".$item->usc_id."'";
                $db_qr = $this->db->query($query);
                if($db_qr->num_rows() > 0)
                {
                    $item2=$db_qr->row();;
                    $query1="UPDATE `comfirmtable` SET `Status` = '1' WHERE Id = '".$item2->Id."'";
                    $tg=$this->db->query($query1);
                    $query1="UPDATE `user_company` SET `usc_authentic` = '1' WHERE usc_id = '".$item->usc_id."'";
                    $tg1=$this->db->query($query1);
                    $arr=['kq'=>true];
                }
                
            }
        }
        return $arr;
    }
    function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->CharSet = "UTF-8";
        $mail->SMTPSecure = 'tls';                
        $mail->Host = 'mail.24hpay.net';         
        $mail->Port = 587;                         
        $mail->Username = GUSER;  
        $mail->Password = GPWD;           
        $mail->SetFrom($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $message = 'Gởi mail bị lỗi: '.$mail->ErrorInfo; 
            return false;
        } 
        else 
        {
            $message = 'Thư của bạn đã được gởi đi ';
            return true;
        }
    } 
       
}
?>