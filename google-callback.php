
<?php
require_once "config.php";
if(isset($_SESSION['access_token']))
    $gClient->setAccessToken($_SESSION['access_token']);
else if(isset($_GET['code'])){
    $token=$gClient->authenticate($_GET['code']);
    $_SESSION['access_token']=$token;



}else{
    header('Location:index.php?manage=login');
exit();
}

$oAuth= new Google_Service_Oauth2($gClient);
$userData=$oAuth->userinfo_v2_me->get();
echo "<pre>";
var_dump($userData);
$_SESSION['username']=$userData['email'];
$_SESSION['email']=$userData['email'];
$_SESSION['hinh']=$userData['picture'];
$_SESSION['holot']=$userData['givenName'];
$_SESSION['ten']=$userData['familyName'];
$_SESSION['contact']=$userData['email'];
include('connect.php');
                     $holot = $userData['givenName'];
                    $ten = $userData['familyName'];
                    $username = $userData['email'];
                    
                    $email = $userData['email'];
                    $contact = $userData['email'];
                     $sql="select * from users where username='$username'";
                     $kt=mysqli_query($conn, $sql);
           
                     if(mysqli_num_rows($kt) >0  )
                        {
                          header('Location:index.php');
                          exit();
                        }
                     else{
                      $sql = "INSERT INTO users(holot, ten, username, email,contact
                        ) VALUES (
                         '$holot',
                         '$ten',
                         '$username',
                         '$email',
                         '$contact'
                        )";
                      // thực thi câu $sql với biến conn lấy từ file connect.php
                       mysqli_query($conn,$sql);
                     }
                     header('Location:index.php');
                        exit();



?>