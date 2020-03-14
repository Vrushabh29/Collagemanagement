<?php
@ob_start();
session_start();
?>
<div class="row">
  <div class="row header_main">
    <div class="col-md-2 col-sm-2 col-xs-12" align="center"><img src="images/ngplogo.png" width="650" height="75" /></div>
    <div class="col-md-7 col-sm-7 col-xs-12 main_name" align="center"></div>
    <div class="col-md-3 col-sm-3 col-xs-12" align="center">
      <div class="social_icons">
        <ul>
          <li><a href="https://www.facebook.com/gpjamnagar1/?epa=SEARCH_BOX" target="_blank"><img src="images/fb1.png" width="32" height="32" /></a></li>
          <li><a href="https://plus.google.com" target="_blank"><img src="images/google-plus.png" width="32" height="32" /></a></li>
          <li><a href="https://www.linkedin.com" target="_blank"><img src="images/li1.png" width="32" height="32" /></a></li>
          <li><a href="https://twitter.com" target="_blank"><img src="images/tw1.png" width="32" height="32" /></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <!-- Start Navbar -->
  <nav class="navbar navbar-default" id="flat-mega-menu">
    <div class="row">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--<a class="navbar-brand" href="index.php">LOGO</a>-->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about_us.php">ABOUT US</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="contact_us.php"><i class="fa fa-map-marker"></i> CONTACT US</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGIN<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#myModal_1" data-toggle="modal"><i class="fa fa-user"></i> Student</a></li>
              <li><a href="#myModal_2" data-toggle="modal"><i class="fa fa-user"></i> Faculty</a></li>
              <li><a href="#myModal_3" data-toggle="modal"><i class="fa fa-user"></i> Admin</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- End Nav Bar -->
</div>

<!--modal for login form starts -->
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 modal_bg">
    <div id="myModal_1" class="modal modal_2 fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
      <div class="modal-header">
        <form action="" method="post">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/close.png" width="20" height="20" /></button>
          <h4 class="modal-title">STUDENT LOGIN</h4>
      </div>
      <div class="modal-body">
        <input class="form-control modal_form" type="text" name="roll_no" data-tabindex="2" placeholder="Roll Number" required />
        <input class="form-control modal_form" type="password" name="password" data-tabindex="5" placeholder="Password" required />
        <button class="btn modal_form_btn" name="student_login" type="submit">LOGIN NOW</button>
        <div style="margin-top:20px; font-size:18px;">New Student? <a href="student_register.php">Register Now</a></div>
      </div>
      </form>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
<!--modal for login form ends -->
<?php
if (isset($_POST['student_login'])) { //print_r($_POST); die;
  $roll_number = $_POST['roll_no'];
  $pass = md5($_POST['password']);
  $query = $db->query("select * from student_register where roll_no='$roll_number' and password ='$pass'") or die(mysqli_error());
  $result = mysqli_fetch_assoc($query); //print_r($result); die;
  if ($result) {
    $user = $result['roll_no'];
    $_SESSION['roll_no'] = $user;
    header('location:stu_dashboard.php');
  } else {
    $message = "Please Check Your Username or password";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  if (isset($_SESSION['roll_no'])) {
    header("location:stu_dashboard.php");
  }
}
?>

<!--modal for login form starts -->
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 modal_bg">
    <div id="myModal_2" class="modal modal_2 fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
      <div class="modal-header">
        <form action="" method="post">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/close.png" width="20" height="20" /></button>
          <h4 class="modal-title">FACULTY LOGIN</h4>
      </div>
      <div class="modal-body">
        <input class="form-control modal_form" type="email" name="email_id" data-tabindex="2" placeholder="Email Id" required />
        <input class="form-control modal_form" type="password" name="password" data-tabindex="5" placeholder="Password" required />
        <button class="btn modal_form_btn" name="faculty_login" type="submit">LOGIN NOW</button>
        <div style="margin-top:20px; font-size:18px;">New Faculty? <a href="faculty_register.php">Register Now</a></div>
      </div>
      </form>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
<!--modal for login form ends -->
<?php
if (isset($_POST['faculty_login'])) { //print_r($_POST); die;
  $email = $_POST['email_id'];
  $pass = md5($_POST['password']);
  $query = $db->query("select * from faculty_register where email_id='$email' and password ='$pass'") or die(mysqli_error());
  $result = mysqli_fetch_assoc($query); //print_r($result); die;
  if ($result) {
    $user = $result['email_id'];
    $_SESSION['email_id'] = $user;
    header('location:faculty_dashboard.php');
  } else {
    $message = "Please Check Your Username or password";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  if (isset($_SESSION['email_id'])) {
    header("location:faculty_dashboard.php");
  }
}
?>

<!--modal for login form starts -->
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 modal_bg">
    <div id="myModal_3" class="modal modal_2 fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
      <div class="modal-header">
        <form action="" method="post">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/close.png" width="20" height="20" /></button>
          <h4 class="modal-title">ADMIN ACCOUNT</h4>
      </div>
      <div class="modal-body">
        <input class="form-control modal_form" type="text" name="user_name" data-tabindex="2" placeholder="User Name" required />
        <input class="form-control modal_form" type="password" name="user_pass" data-tabindex="5" placeholder="Password" required />
        <button class="btn modal_form_btn" name="admin_login" type="submit">LOGIN NOW</button>
      </div>
      </form>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
<!--modal for login form ends -->
<?php
if (isset($_POST['admin_login'])) { //print_r($_POST); die;
  $name = $_POST['user_name'];
  $pass = md5($_POST['user_pass']);
  $query = $db->query("select * from admin where u_name='$name' and u_pass ='$pass'") or die(mysqli_error());
  $result = mysqli_fetch_assoc($query); //print_r($result); die;
  if ($result) {
    $user = $result['u_name'];
    $_SESSION['u_name'] = $user;
    header('location:dashboard.php');
  } else {
    $message = "Please Check Your Username or password";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  if (isset($_SESSION['u_name'])) {
    header("location:dashboard.php");
  }
}
?>