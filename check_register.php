<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>
<body>
<?php
    include("conn.php");

	$student_id = stripslashes( @$_REQUEST[ 'student_id' ] ); // removes backslashes
	$student_id = mysqli_real_escape_string( $link, $student_id ); //escapes special characters in a string
	$citizen_id = stripslashes( @$_REQUEST[ 'citizen_id' ] );
	$citizen_id = mysqli_real_escape_string( $link, $citizen_id );
    $fname = @$_REQUEST[ 'fname' ];
    $fname = mysqli_real_escape_string( $link, $fname );
    $lname = @$_REQUEST[ 'lname' ];
    $lname = mysqli_real_escape_string( $link, $lname );
	$birthday = stripslashes( @$_REQUEST[ 'birthday' ] );
	$birthday = mysqli_real_escape_string( $link, $birthday );
	$height = stripslashes( @$_REQUEST[ 'height' ] );
	$height = mysqli_real_escape_string( $link, $height );
	$weight = stripslashes( @$_REQUEST[ 'weight' ] );
	$weight = mysqli_real_escape_string( $link, $weight );
	$sex = stripslashes( @$_REQUEST[ 'sex' ] );
    $sex = mysqli_real_escape_string( $link, $sex );
    $email = stripslashes( @$_REQUEST[ 'email' ] );
    $email = mysqli_real_escape_string( $link, $email );
    $password = stripslashes( @$_REQUEST[ 'password' ] );
    $password = mysqli_real_escape_string( $link, $password );
    $repassword = stripslashes( @$_REQUEST[ 'repassword' ] );
    $repassword = mysqli_real_escape_string( $link, $repassword );
    $faculty = stripslashes( @$_REQUEST[ 'faculty' ] );
    $faculty = mysqli_real_escape_string( $link, $faculty );
    $major = stripslashes( @$_REQUEST[ 'major' ] );
    $major = mysqli_real_escape_string( $link, $major );
    $bmi = stripslashes( @$_REQUEST[ 'bmi' ] );
    $bmi = mysqli_real_escape_string( $link, $bmi );
    $phone_nember = stripslashes( @$_REQUEST[ 'phone_nember' ] );
    $phone_nember = mysqli_real_escape_string( $link, $phone_nember );

     $sql="SELECT * FROM `member`WHERE student_id ='$student_id' OR email ='$email'";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `member` (`student_id`, `citizen_id`, `email`, `password`, `title_id`, `fname`, `lname`, `birthday`, `phone_nember`, `faculty_id`, `major_id`, `bmi`, `weight`, `height`)
                VALUES ('$student_id', '$citizen_id', '$email', '$password', '$sex', '$fname', '$lname', '$birthday', '$phone_nember', '$faculty', '$major', '', '$height', '$weight');";
	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		?>
			 <script>
            Swal.fire({
                title: 'สมัครสมาชิกสำเร็จ',
                type: 'success',
                confirmButtonText: 'ตกลง',
                confirmButtonColor: '#3085d6'
                }).then((result)=>{
                   if (result.value) {
                    location.href = "index.php";
                    }
                })
        </script>
            
        <?php	 
	 }
	  else
	 { 
		?>
			   <script>
            Swal.fire({
                title: 'พบบัญชีผู้ใช้งานนี้มีอยู่ในระบบแล้ว',
                text: 'กรุณาสมัครใหม่อีกครั้ง',
                type: 'error',
                confirmButtonText: 'ตกลง',
                confirmButtonColor: '#3085d6'
                }).then((result)=>{
                   if (result.value) {
                    location.href = "index.php";
                    }
                })
        </script>
        <?php	  
		  
	}
?>
</body>
</html>

