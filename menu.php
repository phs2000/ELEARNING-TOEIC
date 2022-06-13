 <!-- ***** Preloader Start ***** -
 <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
     ***** Preloader End ***** -->
    <!-- Header -->
 




    <div id="sub-header" class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>effoffical@gmail.com</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>02812345678</a></li>
              <li><a href="#"><i class=""></i><?php echo date("F d, Y ") ; ?></a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="right-icons">
              
            <?php
                    
							 // require "login.php";
               

                   
							      if(!isset($_SESSION['username'])) // If session is not set then redirect to Login Page
							       {
							           printf(' <li class="login"><a href="index.php?manage=login"> <span class="fa fa-login"></span>Đăng nhập</a></li>
										<li class="register"><a href="index.php?manage=register"><span class="fa fa-register"></span> Đăng kí</a></li>');
							       }
							       else{
                      echo '<div class="dropdown">
                      <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"><img src="admin/assets/images/users/'.$_SESSION['hinh'].'"class="rounded-circle" style="width:35px;height:35px">  <b>' . $_SESSION['holot'] . ' ' . $_SESSION['ten'] . '</b> </button>
                      <div class="dropdown-menu" style="z-index:99999999;" >
                          <a class="dropdown-item" href="index.php?manage=info">Thông tin tài khoản</a>
                          <a class="dropdown-item" href="index.php?manage=purpose">Ôn tập</a>
                          
                          <a class="dropdown-item" href="index.php?manage=history">Lịch sử thi</a>
                          <a class="dropdown-item" href="index.php?manage=file">Tài liệu</a>
                          <a class="dropdown-item" href="index.php?manage=point">Tích lũy nhận quà</a>
                          <a class="dropdown-item" href="index.php?manage=setting">Cài đặt chung</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="index.php?manage=logout">Đăng xuất</a> 
                          </div>
                      </div>
                       </div>';
							       }
                     
                     
?>       
							
              
            </ul>
            
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="admin/assets/images/1.png" ></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link " href="index.php">Trang chủ
                  <span class="sr-only">(current)</span>
                </a>
              </li>
               <!--<li class="nav-item">
                <a class="nav-link" href="index.php?manage=vision&id=1">Tầm nhìn</a>
              </li>-->

              <li class="nav-item">
                <a class="nav-link" href="index.php?manage=about">Giới thiệu</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="index.php?manage=team">Sáng lập</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?manage=contact">Liên hệ</a>
              </li>
               <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cài đặt
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <form method="POST">
                   <button name="1" class="btn btn-primary">Màu xanh dương </button>
              <button name="2" class="btn btn-success">Màu xanh lá</button>
              <button name="3" class="btn btn-info">Màu xanh lam</button>
              <button name="4" class="btn btn-warning">Màu xanh vàng</button>
              <button name="5" class="btn btn-danger">Màu xanh đỏ</button>
              <button name="6" class="btn btn-secondary">Màu xanh xám</button>
              <button name="7" class="btn btn-dark">Màu xanh đen</button>
              <button name="8" class="btn btn-light">Màu xanh trắng xám</button>
                    </form>
                </div>
              </li>
             <li class="nav-item">
                <a class="nav-link" href="index.php?manage=login">Đăng nhập</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?manage=register">Đăng kí</a>
              </li>-->
              
            
            </ul>
          </div>
        </div>
      </nav>
    </header>
   