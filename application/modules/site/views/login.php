<?php

/**
 * @author GallerySoft.info
 * @copyright 2018
 */



?>
<section class="signup-signin">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <h1 class="text-center">Đăng nhập hệ thống</h1>
            <div class="signin-form">
              <div class="form loginform" >
                <div class="form-group">
                  <input type="text" name="username" id="username" class="form-control" placeholder="Tên đăng nhập" required="">
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu" required="">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="typelogin" name="typelogin" value="1">
                  <label for="typelogin">Nhà tuyển dụng?</label>
                  <a href="javascript:void(0);">Quên mật khẩu?</a>
                </div>
                <button class="btn btn-primary btn-secondary btn-block" id="btndangnhap">Đăng nhập</button>
              </div>
              <p class="register-link text-center">Bạn chưa là thành viên? <a href="register.html">Đăng ký ngay</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>