<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial=scale=1" />
<title>STUDENT REGISTRATION</title>
<?php include('css_files.php'); ?>
</head>

<body>

<?php 
include('db.php'); 
include('header.php'); 
?>
<div class="sub_header_bg">
	STUDENT REGISTER
</div>	
<div class="strip" align="right">
	<a href="index.php">Home</a> &nbsp;<span style="color:#FFF;" class="fa fa-angle-right"></span>&nbsp; <a href="">Student Register</a>
</div>
<?php
	if(isset($_POST['student_register'])){ //echo "<pre />"; print_r($_POST); die;
		$name = $_POST['stu_name'];
		$roll_no = $_POST['roll_no'];
		$email_id = $_POST['email_id'];
		$pass = md5($_POST['stu_pass']);
		$branch = $_POST['branch'];
		$semister = $_POST['sem'];
		$query = $db->query("INSERT INTO `student_register`(`id`, `name`, `roll_no`, `email_id`, `password`, `branch`, `semister`) VALUES ('','$name','$roll_no','$email_id','$pass','$branch','$semister')") or die(mysqli_error());
		
		if($query){
			echo "<script>alert('Successfully Updated Students Details')</script>";
			}
			
		
		}

?>

<!-- Start Content -->
    <div class="row m50_0">
    	<div class="col-md-5 col-sm-5 col-xs-12">
          <form action="" method="post" enctype="multipart/form-data">
        	<input class="form-control modal_form" type="text" name="stu_name" placeholder="Name" required="required" />
            <input class="form-control modal_form" type="text" name="roll_no" placeholder="Roll Number" required="required" />
            <input class="form-control modal_form" type="email" name="email_id" placeholder="Email Id" required="required" />
            <input class="form-control modal_form" type="password" name="stu_pass" placeholder="Password" required="required" />
            <select class="form-control modal_form" name="branch">
            	<option value="">Select Branch</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
            </select>
            <select class="form-control modal_form" name="sem">
            	<option value="">Select Semester</option>
                <option value="1-1">1-1</option>
                <option value="1-2">1-2</option>
                <option value="2-1">2-1</option>
                <option value="2-2">2-2</option>
                <option value="3-1">3-1</option>
                <option value="3-2">3-2</option>
            </select>
            <button class="btn modal_form_btn" name="student_register" type="submit">REGISTER NOW</button>
           </form>
           <div style="margin-top:20px; font-size:16px;">Already Register? Please <a href="#myModal_1" data-toggle="modal"> Login Now</a></div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12"></div>
    </div>
<!-- End Content -->



<?php 
include('footer.php');
include('js_files.php');
?>
</body>
</html>