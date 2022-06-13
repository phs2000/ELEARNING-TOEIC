<?php
		include('connectDB/connect.php');
		if (isset($_POST["dangky"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$holot = $_POST["holot"];
            $ten = $_POST["ten"];
            $username = $_POST["username"];
  			$password1 = $_POST["password1"];
            $password2 = $_POST["password2"];
			$email = $_POST["email"];
  			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if($password1!=$password2){
                echo '<script>alert("Mật khẩu không trùng khớp")</script>';
				
			
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
                    $password = md5($password1);
					$sql1="select * from admin where user='$username'";
					$kt1=mysqli_query($conn, $sql1);
					if(mysqli_num_rows($kt1)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
  					$sql="select * from users where username='$username'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO users(
	    					holot,
                            ten,
                            username,
	    					password,email,
	    					contact
						    
	    					) VALUES (
	    					'$holot',
                            '$ten',
                            '$username',
	    					'$password','$email',
	    					'$contact'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
						   $sqll = "INSERT INTO point_tbl(
	    					username,
                            point
						    
	    					) VALUES (
	    					
                            '$username',
	    					'0'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sqll);
				   		echo 'Chúc mừng bạn đã đăng ký thành công vui lòng <a href="index.php?manage=login" class="btn-danger">đăng nhập</a>';
					}
				}
									    
					
			  }
	}
	?>