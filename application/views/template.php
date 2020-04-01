<?php
        ob_start("ob_gzhandler");
        //ob_start("ob_html_compress1");
      ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">
<head>
	<meta name="google-site-verification" content="sHB_kIyLvpmytXDQtZiGe9daQFRc-ZRMsYPi6_oPQVc" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta charset="UTF-8">
    
	<?php header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 600)); 
	//header('Cache-Control: max-age=300, public');
	
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="language" content="vn"/>
	<meta name="keywords" content="<?php if(isset($meta_key)){echo $meta_key;} ?>"/>
	<meta name="description" content="<?php if(isset($meta_des)){echo $meta_des;} ?>"/>	
	<link rel="canonical" href="<?php echo $canonical; ?>"/>
	<meta name="revisit-after" content="1 days" />	
	<meta name="robots" content="<?php if(isset($start_row) and $start_row>0){echo 'noindex,follow';}else{echo $robots;}?>" />
	<base href="<?php echo base_url(); ?>" />	
	<title><?php if(isset($meta_title)){ ?><?php echo $meta_title; }?></title>	
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />	
	<link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- Font Awesome for icon fonts -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Google Font API for Lato and Montserrat font families -->
       <link href="css/stylenew.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <!-- CSS for slick slider plugin -->
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">  
    <link href="css/select2.min.css" rel="stylesheet"> 
   <link href="css/style.css" rel="stylesheet"> 
   <link href="css/select.css" rel="stylesheet"> 
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> 
   
       <script src="js/jquery_002.js"></script>
   <!-- soạn add thêm file css -->
   <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" /> -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet"  type="text/css" href="css/owlmin.css">
  <script src="js/owlmin.js" type="text/javascript" charset="utf-8"></script>
   <!-- kết thúc soạn add thêm file css -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
    <!-- Slick slider plugin JS -->
    <script src="js/slick.js"></script>
    <!-- Countdown plugin used on coming soon page -->
    <!--<script src="js/jquery.js"></script>-->
    <!-- Summernote Text editor plugin used on create resume page -->
    <script src="js/select2.js"></script>
    <!--<script src="js/summernote.js"></script>-->
    <script src="js/common.js"></script>
    <!-- Custom Javascript code as per requirement -->
    <script src="js/custom.js"></script>
</head>
<body class="<?php echo $classheader; ?>">
	<?php 
	if(isset($_SESSION['layoutType']) and $_SESSION['layoutType']=='mobile' and ($content=='tao_cv' or $content=='form_thu')){}else{ ?>

			<?php $this->load->view('headerofs'); ?>
		
	<?php } ?>
	
	<?php $this->load->view($content); ?>
	<?php if(isset($_SESSION['layoutType']) and $_SESSION['layoutType']=='mobile' and ($content=='tao_cv' or $content=='form_thu')){}else{ ?>
	
			<?php $this->load->view('footer'); ?>
		
	<?php } ?>

</body>
</html>
<?php
        //ob_end_flush();
        ob_end_flush();
      ?>