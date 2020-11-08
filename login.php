<?php    
     session_start(); 
    
include("conn.php");
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>เข้าสู่ระบบ</title>
    <link rel="shortcut icon"  href="icon/icons8_Stepper.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/f8237231c1.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>

      <form action="check_login.php" method="post" class="login-form">
        <h1>เข้าสู่ระบบ</h1>

        <div class="txtb">
          <input type="text" name="username">
          <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
          <input type="password" name="password">
          <span data-placeholder="Password"></span>
        </div>
     
        <input type="submit" class="logbtn" style="width:100%"  value="ยืนยัน">
        <div class="col" style="padding-right: 0px;padding-left: 0px;">
        <a class="btn btn-primary  registerbtn head-title-form" href="register.php"   style="width:100%;border:0px; padding: 0.8rem;">สมัครสมาชิก</a>
        </div>

<div class="txtb">
          <input type="password" name="password">
          <span data-placeholder="Password"></span>
        </div>
     
        <input type="submit" class="logbtn" style="width:100%"  value="ยืนยัน">
        <div class="col" style="padding-right: 0px;padding-left: 0px;">
        <a class="btn btn-primary  registerbtn head-title-form" href="register.php"   style="width:100%;border:0px; padding: 0.8rem;">สมัครสมาชิก</a>
        </div>
      


        <!--
        <div class="bottom-text">
          Don't have account? <a href="#">Sign up</a>
        </div>-->

      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


  </body>
</html>
