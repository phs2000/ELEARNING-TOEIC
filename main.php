<?php
 if(isset($_GET['manage']))
 {
     $tam=$_GET['manage'];
 }
 else
 {
     $tam='';
 }
 if($tam=='vision')
 {
     include('vision.php');
 }
 elseif($tam=='about')
 {
     include('about.php');
 }
 elseif($tam=='team')
 {
     include('team.php');
 }elseif($tam=='contact')
 {
     include('contact.php');
 }elseif($tam=='login')
 {
     include('login.php');
 }elseif($tam=='register')
 {
     include('register.php');
 }elseif($tam=='logout')
 {
     include('logout.php');
 }elseif($tam=='google-callback')
 {
     include('google-callback.php');
 }elseif($tam=='info')
 {
    if(isset($_SESSION['username']))
    {
        include('users/info.php');
    }else
    {
        header('location:index.php');
    }
     
    
 }
 elseif($tam=='updatepass')
 {
    if(isset($_SESSION['username']))
    {
        include('users/updatepass.php');
    }else
    {
        header('location:index.php');
    }
     
 }
 elseif($tam=='forget')
 {
     include('forget.php');
 }elseif($tam=='file')
 {
    if(isset($_SESSION['username']))
    {
        include('users/tailieu.php');
    }else
    {
        header('location:index.php');
    }
        
 }elseif($tam=='setting')
 {
     include('users/setting.php');
 }elseif($tam=='pending')
 {
     include('pending.php');
 }
 elseif($tam=='newpass')
 {
    if(isset($_SESSION['username']))
    {
        include('newpass.php');
    }else
    {
        header('location:index.php');
    }
 }
 elseif($tam=='purpose')
 {
    if(isset($_SESSION['username']))
    {
        include('users/purpose.php');
    }else
    {
        header('location:index.php');
    }
 }
 elseif($tam=='choosetest')
 {
    if(isset($_SESSION['username']))
    {
        include('users/choosetest.php');
    }else
    {
        header('location:index.php');
    }
 }
 
 elseif($tam=='dotest')
 {
    if(isset($_SESSION['username']))
    {
        include('users/dotest.php');
    }else
    {
        header('location:index.php');
    }
 }
 elseif($tam=='result')
 {
    if(isset($_SESSION['username']))
    {
        include('users/result.php');
    }else
    {
        header('location:index.php');
    }
 }
 elseif($tam=='xulyresult')
 {
    if(isset($_SESSION['username']))
    {
        include('users/process/xulyresult.php');
    }else
    {
        header('location:index.php');
    }
 }
 elseif($tam=='history')
 {
    if(isset($_SESSION['username']))
    {
        include('users/history.php');
    }else
    {
        header('location:index.php');
    }
 }
 elseif($tam=='user_answer')
 {
    if(isset($_SESSION['username']))
    {
        include('users/process/user_answer.php');
    }else
    {
        header('location:index.php');
    }
 }
 elseif($tam=='point')
 {
    if(isset($_SESSION['username']))
    {
        include('users/point.php');
    }else
    {
        header('location:index.php');
    }
 }
 else
 {
     include('body.php');
 }
?>