<div class="page-heading header-text formacc">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <section class="ftco-section">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Đăng ký</h2>
                  </div>
                </div>
                <div class=" row justify-content-center " >
                  <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-5">
                      <form action="#" class="signin-form" method="POST">
                        <div class="form-group">
                         
                          <input type="text" name="holot" class="form-control" placeholder="Họ lót" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name='ten' class="form-control" placeholder="Tên" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                          <input type="text" id="email" name='email' class="form-control" placeholder="Email" autocomplete="off" required onfocusout="formValidate()">
                        </div>
                        <div class="form-group">
                          <input type="text" name='username' class="form-control" placeholder="Username"  autocomplete="off" required>
                        </div>
                        <div class="form-group">
                          <input id="password-field" name='password1' type="password" class="form-control "  autocomplete="off" placeholder="Nhập mật khẩu" required>
                          <span toggle="#password-field" class="show-btn" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                          <input id="password-field" name='password2' type="password" class="form-control" autocomplete="off" placeholder="Nhập lại mật khẩu" required>
                          <span toggle="#password-field" class="show-btn" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        
                        <div class="form-group">
                          <input type="phone" id="mobile" name='contact' class="form-control" placeholder="Số điện thoại" autocomplete="off" required onfocusout="formValidate1()">
                        </div>
                        <div class="form-group">
                          <button type="submit" name="dangky" class="form-control btn btn-danger submit px-3">Đăng ký</button>
                        </div>
                        
                      </form>
                      
                      <?php include ('registerdb.php');?>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">

function formValidate1(){
  var regExp =/((09|03|07|08|05)+([0-9]{8})\b)/g;
  var phone = document.getElementById("mobile").value;
  if (regExp.test(mobile)) 
      alert('SĐT hợp lệ!'); 
    else 
        alert('SĐT không hợp lệ!');
}
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