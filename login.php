<?php
  require_once "config.php";
  if(isset($_SESSION['access_token']))
  {
    header('location:index.php');
    exit();
  }
  $loginURL=$gClient->createAuthUrl();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}else
if($status == PHP_SESSION_ACTIVE){
    //Destroy current and start new one
    session_destroy();
    session_start();
}
 ?>

<!--//////////////////////////////////////////////////-->
<?php
$kq="";
if(isset($_POST['submit']))
{
    include ('connect.php');
    $username = $_POST['username'] ;
    $password = md5($_POST['password']);
    $sql="SELECT * FROM users  where username = '$username'  and password = '$password'  ";
    $result = $conn->query($sql);
    
    // echo  $mk;
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
          $_SESSION['id'] = $row["id"] ;
        $_SESSION['username'] = $username ;
        $_SESSION['ten'] = $row["ten"];
        $_SESSION['holot'] = $row["holot"];
        $_SESSION['password'] = $row["password"];
        $_SESSION['contact'] = $row["contact"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['hinh'] = $row["hinh"];
            header('Location: index.php');
            $row = $result->fetch_assoc();  
        }         
    }
    else
    {
        $kq ="Thông tin không đúng vui lòng kiềm tra lại";
    }
    
}
?>
<?php
$kq="";
if(isset($_POST['submit']))
{
    include ('connect.php');
    $user = $_POST['username'] ;
    $pass = md5($_POST['password']);
    $sql="SELECT * FROM admin  where user = '$user'  and pass = '$pass'  ";
    $result = $conn->query($sql);
    
    // echo  $mk;
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row["id"] ;
        $_SESSION['user'] = $user ;
        $_SESSION['pass'] = $row["pass"];
        $_SESSION['holotad'] = $row["holotad"];
        $_SESSION['tenad'] = $row["tenad"];
        $_SESSION['email'] = $row["email"];
            header('Location: admin/home.php');
            $row = $result->fetch_assoc();  
        }         
    }
    else
    {
        $kq ="Thông tin không đúng vui lòng kiềm tra lại";
    }
    
}

?>

<div class="page-heading header-text formacc">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <section class="ftco-section">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Đăng nhập</h2>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-5">
                      <form action="#" class="signin-form" method="POST">
                          <div id="login-with-social" class="form-group">
                          <input type="button" onclick="window.location='<?php echo $loginURL?>';" value="Đăng nhập bằng Google" class="btn btn-danger">
                        </div>
                        <p class="w-70 py-2 px-3 text-center" style="color: #fff">Hoặc với</p>
                        <div class="form-group">
                          <input type="text" id="username" name="username" class="form-control" placeholder="Nhập email hoặc số điện thoại" required>
                        </div>
                        <div class="form-group">
                          <input id="password" name="password" type="password" class="form-control" placeholder="Nhập mật khẩu" required>
                          <span toggle="#password-field" class="show-btn" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                          <!--<button type="submit" class="form-control btn btn-primary submit px-3">Đăng nhập</button>-->
                          <input type="submit" name="submit" class="form-control btn btn-primary submit px-3" id="submit" value="Đăng nhập">
                        </div>
                        <div class="form-group d-md-flex">
                          <div class="w-60 px-4">
                            <label class="checkbox-wrap checkbox-primary">Nhớ đăng nhập
                              <input <?= isset($_POST['remember']) ? 'checked' : '' ?> name="remember" type="checkbox" checked>
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="w-40 text-md-right">
                            <a href="index.php?manage=forget" style="color: #fff">Quên mật khẩu</a>
                          </div>
                        </div>
                      </form>
                      
                      <div class="f-md-flex">
                        <div class="w-100">
                          <p class="w-70 text-center" style="color: #fff;">Nếu bạn chưa có tài khoản? <a href="index.php?manage=register">Đăng kí ngay</a></p>
                        </div>
                      </div>
                      <P style="color:red"><?php echo $kq; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
</div>

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