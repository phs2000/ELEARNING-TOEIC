<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>EFF</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head> 
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  

<body>
    <?php include('menu.php');?>
    

    <?php
     
        include('main.php');
        
        
        ?>
      
      <a class="on_top" href="#top" style="display: block;"><i class="fa-arrow-circle-up fa"></i></a>
    <div id='fb-root'></div>   <script>(function(d, s, id) {     var js, fjs = d.getElementsByTagName(s)[0];     js = d.createElement(s); js.id = id;     js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';     fjs.parentNode.insertBefore(js, fjs);   }(document, 'script', 'facebook-jssdk'));</script>   <div class='fb-customerchat'     page_id='ID của bạn'     theme_color='#44bec7'     logged_in_greeting='Xin chào, tôi có thể hổ trợ gì cho bạn không?'     logged_out_greeting='Xin chào, tôi có thể hổ trợ gì cho bạn không?'></div>
    <?php include('footer.php');?>   
</body>
</html>
<script>
  $(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#on_top').fadeIn(); 
        } else { 
            $('#on_top').fadeOut(); 
        } 
    }); 
    $('#on_top').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
    </script>