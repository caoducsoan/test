<?php 
$CI=&get_instance();
$CI->load->model('site/site_model');
//$footer=$CI->memcached_library->get('key_footer');
$footer=$CI->site_model->getconfig();
?>
<?php $urlweb= current_url();
?>

<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <a href="" class="footer-logo"><img src="images/footer-logo.png" alt="timvieclamthem.vn"></a>
            <?php echo $footer->content_thu ?>
            <ul class="social-links">
              <li>
                <a href="javascript:void(0);" class="fa fa-facebook"></a>
              </li>
              <li>
                <a href="javascript:void(0);" class="fa fa-twitter"></a>
              </li>
              <li>
                <a href="javascript:void(0);" class="fa fa-linkedin"></a>
              </li>
              <li>
                <a href="javascript:void(0);" class="fa fa-google-plus"></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
            <h5>Top từ khóa</h5>
            <?php echo $footer->content ?>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <h5>Liên kết</h5>
            <?php echo $footer->meta_footer ?>
          </div>
        </div>
        <div class="copyright">
          <div class="row">
            <div class="col-sm-6">
              © <a href="javascript:void(0);">Timvieclamthem.vn</a>, 2017 All rights reserved.
            </div>
            <div class="col-sm-6 author-info">
              Created by <a href="javascript:void(0);">Timviec365</a>.
            </div>
          </div>
        </div>
      </div>
    </footer>
