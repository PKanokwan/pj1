<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Page level plugin CSS-->
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://netpie.io/public/netpieio/microgear.js"></script>
        <title>เครื่องผลิตพลังงานไฟฟ้าจากจักรยานออกกำลังกาย</title>
      
        <style>
            p  {
                font-size: 160%;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="index.html">เครื่องผลิตพลังงานไฟฟ้าจากจักรยานออกกำลังกาย</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>

<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
</form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">     
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user-circle fa-fw"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="login.php">Login</a>
      <a class="dropdown-item" href="register.php">Register</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
  </li>
</ul>

</nav>

<div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="list.php">
      <i class="fas fa-fw fa-folder"></i>
      <span>List</span>
    </a>
  </li>
</ul>

<div id="content-wrapper">
<center>
         <p id="isConnected">Waiting.....</p>
         <p id="data"></p>   
         <p id='info'></p>
        </center>
    <script>
      const APPID     = "projectPJ";
      const APPKEY    = "3cXUYtkTAtUpTjG";
      const APPSECRET = "AgeIr599ibVhRYUBSvcBUNOdE" ;
        var microgear = Microgear.create({
            key: APPKEY,
            secret: APPSECRET
        });
        microgear.on('message',function(topic,msg) {
           document.getElementById("data").innerHTML = msg;
        });
        microgear.on('connected', function() {
            microgear.setAlias('hello');    /* alias can be renamed anytime with this function */
            document.getElementById("isConnected").innerHTML = "Now I am connected with NETPIE...";
            document.getElementById("info").innerHTML ='NETPIE On HTML5'
            setInterval(function() {
                var currentdate = new Date(); 
                var datetime = currentdate.getDate() + "/"
                    + (currentdate.getMonth()+1)  + "/" 
                    + currentdate.getFullYear() + " @ "  
                    + currentdate.getHours() + ":"  
                    + currentdate.getMinutes() + ":" 
                    + currentdate.getSeconds();
                microgear.chat("hello", "Hello from myself at " + datetime);
            },1000);
        });
        microgear.on('present', function(event) {
            console.log(event);
        });
        microgear.on('absent', function(event) {
            console.log(event);
        });
        microgear.connect(APPID);
    </script>

  <div class="container-fluid">
  
   

   

  <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © Your Website 2019</span>
      </div>
    </div>
  </footer>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <a class="btn btn-primary" href="login.html">Logout</a>
    </div>
  </div>
</div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>



    </body>
</html>