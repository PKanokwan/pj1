<?php
session_start();
include("conn.php");
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-datetimepicker.min.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/f8237231c1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap-datetimepicker.min.js"></script>
  
  </head>
  <body>
  <div class="container-register">
      <form action="check_register.php" method="post" class="register-form" >
        <h1 align = 'center'>สมัครสมาชิก</h1>
        <h4 class="row">
            <h4 class="col">
            <h4 align = 'left'>ข้อมูลส่วนตัว</h4>
            </h4>
     </h4>

        <div class="row">
            <div class="col">
            <label for="inputEmail4">รหัสนักศึกษา</label>
            <input type="text" class="form-control" placeholder=" " name= "student_id">
            </div>
            <div class="col">
            <label for="inputEmail4">เลขประจำตัวประชาชน</label>
            <input type="text" class="form-control" placeholder=" " name= "citizen_id">
            </div>
     </div>
     <div class="row">
            <div class="col">
            <label for="inputEmail4">ชื่อ</label>
            <input type="text" class="form-control" placeholder=" "name= "fname" >
            </div>
            <div class="col">
            <label for="inputEmail4">นามสกุล</label>
            <input type="text" class="form-control" placeholder=" "name=  "lname">
            </div> 
     </div>
     <div class="row">
 
            <div class="col" >
            <label for="inputEmail4">คณะ</label>
            <select class="form-control" name = "faculty">
              <option>กรุณาเลือกคณะ</option>
              <?php
                            $sql = "SELECT * FROM `faculty` ORDER BY faculty_id ASC";
                            $result = $link->query( $sql );
                            while($row=$result->fetch_object())
                            {
              ?>
                            <option value="<?php echo $row->faculty_id;?>"><?=$row->faculty_name;?></option>
              <?php
                            }
		?>
            </select>
            </div>
            <div class="col" >
            <label for="inputEmail4">สาขา</label>
            <select class="form-control" name = "major">
              <option>กรุณาเลือกสาขา</option>
              <?php
                            $sql = "SELECT * FROM `major` ORDER BY major_id ASC";
                            $result = $link->query( $sql );
                            while($row=$result->fetch_object())
                            {
              ?>
                            <option value="<?php echo $row->major_id;?>"><?=$row->major_name;?></option>
              <?php
                            }
		?>
            </select>
            </div>
     </div>
     <div class="row">
     <div class="col-6">
            <label for="inputEmail4">เบอร์โทร</label>
            <input type="text" class="form-control" placeholder=" " name= "phone_nember">
            </div>
     </div>
     
     <div class="row">    
            <div class="col-3">
            
            <div class="form-group">
            <label for="inputEmail4">วันเดือนปีเกิด</label>
                        <div class="input-group date" id="id_4">
                            <input type="text" value="" class="form-control" required name="birthday"/>
                            <div class="input-group-addon input-group-append">
                                <div class="input-group-text">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-3">
            <label for="inputEmail4">ส่วนสูง</label>
            <input type="text" class="form-control" placeholder=" "name=  "height">
            </div>    
            <div class="col-3">
            <label for="inputEmail4">น้ำหนัก</label>
            <input type="text" class="form-control" placeholder=" "name=  "weight">
            </div>
            <div class="col-3">
            <label for="inputEmail4">BMI</label>
            <input type="text" class="form-control" placeholder=" "name=  "bmi">
            </div>
     </div> 
     <div class="row">
              
     </div>
     <div class="row">    
            <div class="col"> 
            <label for="inputEmail4">เพศ</label>
                </div>
            </div>
     <div class="row">
            <div class="col">              
            </div>
     </div>
     <div class="row">    
            <div class="col"> 
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" value="01">
                <label class="form-check-label" for="inlineRadio1">ชาย</label>
                </div>
            </div>
     </div>
     <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" value="03">
                <label class="form-check-label" for="inlineRadio2">หญิง</label>
                </div>
     <div class="row">
            <div class="col">  
            <h4 align = 'left' class="head-title-form">ข้อมูลบัญชีผู้ใช้</h4>           
            </div>
     </div>
     <div class="row">
            <div class="col">
            <label for="inputEmail4">อีเมล</label>
            <input type="text" class="form-control1" placeholder=" "name="email" >
            </div>
     </div>
     <div class="row">
            <div class="col">
            <label for="inputEmail4">รหัสผ่าน</label>
            <input type="text" class="form-control1" placeholder=" "name="password">
            </div>
     </div>
     <div class="row">
            <div class="col">
            <label for="inputEmail4">ยืนยันรหัสผ่าน</label>
            <input type="text" class="form-control1" placeholder=" "name="repassword">
            </div>
     </div>
     
     <div class="row justify-content-md-center  "  style="margin-top:1rem">

                 <div class = "col-3" style="text-align:right">
                       <input type="submit" class="btn btn-primary" href="home.php" style="width:100%; border-radius: .50rem;" value="ยืนยัน">
                   </div>
                   <div class = "col-3">
                     <a class="btn btn-danger " href="login.php"  style="width:100%;border-radius: .50rem;">ยกเลิก</a>
                   </div>
  </div>
      </form>
  </div>

  <script>
        (function($){
    $(function(){
        $('#id_4').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "format": "YYYY/MM/DD",
        });
    });
})(jQuery);

    </script>
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
