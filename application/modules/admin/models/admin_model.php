<?php 
class admin_model extends Model
{	
	function admin_model()
	{
		parent::Model();
	}
	
	function gettbl($tbl,$id)
	{
		if($id!=''){
			$this->db->where('id',$id);
		}				
		$query = $this->db->get($tbl);
		return $query;
	}	
	function gettbl_listbv($tbl)
	{		
		$this->db->where('status',1);
		$query = $this->db->get($tbl);
		return $query;
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
	function UpdateorAddtbl($tbl,$data,$keyID,$id)
    {		
        if($id=='')
        {
            $this->db->insert($tbl,$data);
        }
        else
        {
            $this->db->where($keyID,$id);
            $this->db->update($tbl,$data);    
        }
    } 
	function show_category($cid,$parent_id="0",$insert_text="-")
    {
        $this->db->where('parent',$parent_id);
        $this->db->order_by('id','asc');
        $sql=$this->db->get('tbl_chuyenmuc');
        foreach($sql->result() as $itemcat)
        {		
			if($itemcat->id==$cid){
				echo "<option selected=\"selected\" value='".$itemcat->id."'>".$insert_text.$itemcat->name."</option>";				
			}
			else{
				echo "<option value='".$itemcat->id."'>".$insert_text.$itemcat->name."</option>";				
			}
            $this->show_category($cid,$itemcat->id,$insert_text."---");    
        }
        return true;
    }
	function Getlistcontent($findkey)
    {
        if($findkey != '')
        {
            $query="SELECT id,alias,title,image FROM tbl_baiviet WHERE status=1 and title like '%".str_replace(' ','%',$findkey)."%' ORDER BY id DESC LIMIT 5";
        }else{
            $query='SELECT id,alias,title,image FROM tbl_baiviet WHERE status=1 ORDER BY id DESC LIMIT 5';
        }
        //var_dump($query);die();
        $news_cat = $this->db->query($query);
        $tg="";
        foreach($news_cat->result() as $items)
            { 
                $tg[]=$items;
                }
                return $tg;
                
    }	
    function selectCtrl($cid,$name,$class)
    {
        echo "<select name='".$name."' class='".$class."'>\n";
		echo "<option value='0'>-- Chọn chuyên mục --</option>";
        $this->show_category($cid);
        echo "</select>";
    }    	
	// Đệ quy link thân thiện
	function getcatlink($uid)
    {				
		$catlink=0;
        $this->db->where('id',$uid);
        $sql1=$this->db->get('tblchuyenmuc');
        if($sql1->num_rows() >0)
        {           		
            foreach($sql1->result() as $items)
            {                            
                $catlink = $this->getcatlink($items->uid); 
				$catlink .= '/'.$items->alias;								
            }   
		return $catlink;
        }				
    }

		
	function gettbl_limited($tbl,$start_row,$limit)
	{
	    $sql="select * from $tbl order by id desc limit $start_row,$limit";
		$query=$this->db->query($sql);
		return $query;
	}	

	function gettbl_search_limited($tbl,$start_row,$limit)
	{	   	
		if(isset($_SESSION['txt_search']) and $_SESSION['txt_search']!='Nhập từ khóa tìm kiếm')
        {                       		
			$this->db->like('title',$_SESSION['txt_search']);			
		}
		if(isset($_SESSION['search_cid'])and $_SESSION['search_cid']!=0)
        {             			
			$this->db->where('cid',$_SESSION['search_cid']);					
		}
		if(isset($_SESSION['search_user'])and $_SESSION['search_user']!=0)
        {             			
			$this->db->where('uid',$_SESSION['search_user']);					
		}
		if(isset($_SESSION['search_status'])and $_SESSION['search_status']!=-1)
        {             			
			$this->db->where('status',$_SESSION['search_status']);		
		}
		$this->db->order_by('id','DESC');
		if($limit!=''){
			$this->db->limit($limit,$start_row);			
		}		
		$query=$this->db->get($tbl);		
		return $query;
	}

	function doanhnghiep_limited($tbl,$start_row,$limit)
	{	   	
		if(isset($_SESSION['cp']))
        {                       		
			$this->db->like('name',$_SESSION['cp']);
		}		
		$this->db->order_by('id','DESC');
		if($limit!=''){
			$this->db->limit($limit,$start_row);			
		}		
		$query=$this->db->get($tbl);		
		return $query;
	}

	function del_tbl($tbl,$id){
		$sql="DELETE FROM $tbl WHERE id=".$id;                
		$result=$this->db->query($sql);		
		return $result;
	}
    function delrowtbl($tbl,$field,$id){
		$sql="DELETE FROM $tbl WHERE ".$field."=".$id;                
		$result=$this->db->query($sql);		
		return $result;
	}
	function checkstatus($tbl,$action,$id)
	{
		$sql="UPDATE $tbl SET status='$action' WHERE id='$id'";
		$this->db->query($sql);
	}
    function checkstatusjob($tbl,$field,$action,$fieldid,$id)
	{
		$sql="UPDATE $tbl SET ".$field."='$action' WHERE ".$fieldid."='$id'";
        //var_dump($sql);die();
		$this->db->query($sql);
	}
    function gettblbyfield($tbl,$field,$id)
	{
		if($id!=''){
			$this->db->where($field,$id);
		}				
		$query = $this->db->get($tbl);
		return $query;
	}	
	//Check admin
	function getlogin($name,$pass)
    {
        $this->db->where('name',$name);
        $this->db->where('pass',md5($pass));
        $sql=$this->db->get('tbl_admin');
        if($sql->num_rows()==1)
        {
            return TRUE;
        }
    }
    function checkfileds($name)
    {
        $this->db->where('name',$name);
        $sql=$this->db->get('tbl_admin');
        if($sql->num_rows()==1)
        {
            return TRUE;
        }
    }
	//Gan Flag
	function flags($id,$nguoidang,$flag){		
		$sql="UPDATE tblbaiviet SET nguoidang=$nguoidang,flag=$flag WHERE id='$id'";
		$this->db->query($sql);
	}	
    function Getallnewbypage($findkey,$category,$city,$hot,$do,$gap,$cao,$page,$perpage){
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow.' - 7 day');
        $query="select n.new_id,
		n.new_title,
		n.new_cat_id,
		n.new_city,
		n.new_do_tuoi,
		n.new_create_time,
		n.new_active,
		n.new_view_count,
		n.new_han_nop,
		n.new_renew,
		n.new_hot,
		n.new_do,
		n.new_gap,
		n.new_cao,
		n.new_thuc,
		m.new_mota,
		m.new_yeucau,
		m.new_quyenloi,
		m.new_ho_so
        from new as n join new_multi as m on n.new_id=m.new_id
        where 1=1";
        if($findkey!=''){
         $query.=" and n.new_title like '%".$findkey."%'";   
        }else{
            $query.=" and n.new_create_time >'".$timenow1."'";
        }
        if(intval($category) >0){
            $query .=" and FIND_IN_SET('".intval($category)."',n.new_cat_id)";
        }
        if(intval($city)>0){
            $query.=" and FIND_IN_SET('".intval($city)."',n.new_city)";
        }
        if(intval($hot)>0){
            $query.=" and n.new_hot =1";
        }
        if(intval($do)>0){
            $query.=" and n.new_do =1";
        }
        if(intval($gap)>0){
            $query.=" and n.new_gap =1";
        }
        if(intval($cao)>0){
            $query.=" and n.new_cao =1";
        }
        $query.=" ORDER BY n.new_id desc";
        $total=$this->db->query($query)->num_rows();
        $query.=" limit ".$page.",".$perpage;
        $sql1=	$this->db->query($query);
        $catlink="";
        if($sql1->num_rows() >0)
        {           		
            foreach($sql1->result() as $items)
            {                            
                $catlink[] =		$items;						
            }   
		
        }
        return array('data'=>$catlink,'total'=>$total) ;	
    }
    function Getallcompanybypage($findkey,$city,$page,$perpage){
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow.' - 7 day');
        $query="select 
            n.usc_id,
            n.usc_company,
            n.usc_address,
            n.usc_phone,
            n.usc_logo,
            n.usc_size,
            n.usc_website,
            n.usc_city,
            n.usc_create_time,
            n.usc_money,
            n.usc_active,
            n.usc_mail,
            n.usc_mst,
            n.usc_authentic,
            m.usc_company_info
            from user_company as n join user_company_multi as m on n.usc_id=m.usc_id
            where 1=1";
        if($findkey!=''){
         $query.=" and (n.usc_company '%".$findkey."%' or n.usc_mail '%".$findkey."%')";   
        }else{
            $query.=" and n.usc_create_time >'".$timenow1."'";
        }
        if(intval($city)>0){
            $query.=" and n.usc_city='".intval($city)."'";
        }
        
        $query.=" ORDER BY n.usc_id desc";
        $total=$this->db->query($query)->num_rows();
        $query.=" limit ".$page.",".$perpage;
        $sql1=	$this->db->query($query);
        $catlink="";
        if($sql1->num_rows() >0)
        {           		
            foreach($sql1->result() as $items)
            {                            
                $catlink[] =		$items;						
            }   
		
        }
        return array('data'=>$catlink,'total'=>$total) ;	
    }
    
    function GetAllCandibypage($findkey,$category,$city,$page,$perpage)
    {
        $timenow=date("Y-m-d",time());
        $timenow1 = strtotime($timenow.' - 360 day');
        $query="select u.use_id,
                u.use_email,
                u.use_first_name,
                u.use_create_time,
                u.use_phone,
                u.use_gioi_tinh,
                u.use_birth_day,
                u.use_city,
                u.use_address,
                u.use_hon_nhan,
                u.use_authentic,
                c.cv_hocvan,
                c.cv_exp,
                c.cv_muctieu,
                c.cv_cate_id,
                c.cv_city_id,
                c.cv_capbac_id,
                c.cv_money_id,
                c.cv_loaihinh_id,
                c.cv_kynang                 
                from `user` as u left join cv as c on u.use_id=c.cv_user_id
                where 1=1";
        if($findkey!='')
        {
            $query.=" And (u.use_email like '%".$findkey."%' or u.use_first_name like '%".$findkey."%')";
        }else{
            
             $query.=" and u.use_create_time >'".$timenow1."'";
        }
        if(intval($category)>0){
            $query.=" and c.cv_cate_id='".intval($category)."'";
        }
        if(intval($city)>0){
            $query.=" and (u.use_city='".intval($city)."' or c.cv_city_id='".intval($city)."')";
        }
            $query.= " GROUP BY u.use_id ORDER BY u.use_id DESC";
            $total=$this->db->query($query)->num_rows();
            $query.=" limit ".$page.",".$perpage;
            //var_dump($query);die();
        $sql1=	$this->db->query($query);
        $catlink="";
        if($sql1->num_rows() >0)
        {           		
            foreach($sql1->result() as $items)
            {                            
                $catlink[] =		$items;						
            }   
		
        }
        return array('data'=>$catlink,'total'=>$total) ;
    }
}
?>