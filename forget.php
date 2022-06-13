
<div class="page-heading header-text formacc">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <section class="ftco-section">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Quên mật khẩu</h2>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-5">
                      
                      <form action="#" class="signin-form" method="POST">
                        <div class="form-group">
                          <input type="text" name="user" class="form-control"  autocomplete="off" placeholder="Nhập username" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="email" id="email" class="form-control"  autocomplete="off" placeholder="Nhập email" required>
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                          <input type="password" name="pass"  class="form-control"  autocomplete="off" placeholder="Nhập password mới" required>
                          <span toggle="#password-field" class="show-btn" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                          <input type="password" name="pass1"  class="form-control"  autocomplete="off" placeholder="Nhập lại password mới" required>
                          <span toggle="#password-field" class="show-btn" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                          <button type="submit" name="submit" class="form-control btn btn-warning submit px-3">Lấy lại mật khẩu</button>
                        </div>
                        <div class="form-group d-md-flex">
                          <div class="w-40 text-md-right">
                            <button class="btn btn-info"><a href="index.php?manage=login" style="color: #fff">Quay lại đăng nhập</a></button>
                          </div>
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
    <?php
  include('process/dbnewpass.php');
?>
 <script type="text/javascript">


function formValidate(){
  var regExp = /^[A-Za-z][\w$.]+@[\w]+\.\w+$/;
  var email = document.getElementById("email").value;
  if (regExp.test(email)) 
      alert('Email hợp lệ!'); 
    else 
        alert('email không hợp lệ!');
}
</script>
<script>
    const passField = document.querySelector("form-control");
       const showBtn = document.querySelector("show-btn");
       showBtn.onclick = (()=>{
         if(passField.type === "password"){
           passField.type = "text";
           showBtn.classList.add("hide-btn");
         }else{
           passField.type = "password";
           showBtn.classList.remove("hide-btn");
         }
       });
</script>