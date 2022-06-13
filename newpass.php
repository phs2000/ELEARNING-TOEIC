
<div class="page-heading header-text formacc">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <section class="ftco-section">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Mật khẩu mới/h2>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-5">
                    <?php  if (count($errors) > 0) : ?>
                        <div class="msg">
                            <?php foreach ($errors as $error) : ?>
                            <span><?php echo $error ?></span>
                            <?php endforeach ?>
                        </div>
                        <?php  endif ?>
                      <form action="#" class="signin-form">
                        <div class="form-group">
                          <input type="text" class="form-control" name="new_pass" placeholder="Nhập mật khẩu mới" required>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control"  name="new_pass_c" placeholder="Nhập lại mật khẩu mới" required>
                        </div>
                        <div class="form-group">
                          <button type="submit" name="new_password" class="form-control btn btn-warning submit px-3">Tạo</button>
                        </div>
                        
                      </form>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
