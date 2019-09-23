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
    session_start();
	include( "conn.php" );
	$username = stripslashes( @$_REQUEST[ 'username' ] ); // removes backslashes
	$username = mysqli_real_escape_string( $link, $username ); //escapes special characters in a string
	$password = stripslashes( @$_REQUEST[ 'password' ] );
	$password = mysqli_real_escape_string( $link, $password );

	$sql = "SELECT * FROM `member` WHERE member.email='$username' AND member.password='$password'";
	$result = $link->query( $sql);

    if ( $result->num_rows == 0 ) 
    {
		?>
        <script>
            Swal.fire({
                title: 'ไม่พบบัญชีผู้ใช้งาน',
                text: 'กรุณาเข้าสู่ระบบใหม่อีกครั้ง',
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
	}else {
		$row = $result->fetch_object();
		$_SESSION[ "member_id" ] = $username;
		$_SESSION[ "fname" ] = $row->fname;
		?>
        <script>
            Swal.fire({
                title: 'ยินดีต้อนรับเข้าสู่ระบบ',
                type: 'success',
                confirmButtonText: 'ตกลง',
                confirmButtonColor: '#3085d6'
                }).then((result)=>{
                   if (result.value) {
                    location.href = "home.php";
                    }
                })
        </script>
	<?php
	}
	?>
</body>
</html>
