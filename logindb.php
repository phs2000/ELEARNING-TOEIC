<?php
	include("connect.php");
	
    if (isset($_POST["submit"])) {    
      $username = $_POST["username"];
      $password =md5( $_POST["password"]);
      $username = strip_tags($username);
      $username = addslashes($username);
      $password = strip_tags($password);
      $password = addslashes($password);
      if ($username == "" || $password =="") {
        echo '<script>confirm ("Đăng nhập sai, vui lòng thử lại")</script>';
      }else{
        $sql = "select * from users where username = '$username' and password = '$password' ";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
          echo '<script>confirm("Đăng nhập sai vui lòng thử lại")</script>';
        }else{
          $_SESSION['username'] = $username;
                  header('location:index.php');
        }
        
      }
      else{
        $sql = "select * from admin where user = '$username' and pass = '$password' ";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
          echo '<script>confirm("Đăng nhập sai vui lòng thử lại")</script>';
        }else{
          $_SESSION['user'] = $username;
                  header('location:admin/home.php');
        }
        
      }
    }


?>