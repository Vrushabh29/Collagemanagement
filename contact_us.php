<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial=scale=1" />
  <title>Collage management</title>
  <?php include('css_files.php'); ?>
</head>

<body>

  <?php
  include('db.php');
  include('header.php');
  ?>
  <!-- Start Slider -->
  <!--<div id="banner_main_slider">
<div class="ws_images"><ul>
		<li><img src="images/banner_1.jpg" alt="banner_1" title="" id="wows1_0"/></li>
		<li><img src="images/banner_2.png" alt="banner_2" title="" id="wows1_1"/></li>
		<li><img src="images/banner_3.png" alt="banner_3" title="" id="wows1_2"/></a></li>
		<li><img src="images/banner_4.png" alt="banner_4" title="" id="wows1_3"/></li>
	</ul></div>
</div>-->
  <!-- End Slider -->

  <!-- Start Content -->
  <!-- Start Map -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29492.59920852438!2d70.03396130900747!3d22.482603554649224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39573ff67d40edd9%3A0x5689f2748cdaaec1!2sGovernment%20Polytechnic%20college!5e0!3m2!1sen!2sin!4v1583922353799!5m2!1sen!2sin" width="1700" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  <!-- end Map -->
  <!-- Start Section 1 -->
  <div class="row m40_0">
    <div class="col-md-5 col-sm-5 col-xs-12">
      <div class="contact_form_text">Contact Form</div>
      <div align="center"><img src="images/shadow.png" class="img img-responsive" /></div>
      <form action="#" method="POST" enctype="multipart/form-data">
        <input class="form-control modal_form" type="text" name="name" placeholder="Your Name" required="required">
        <input type="email" class="form-control modal_form" name="email" placeholder="Email ID" required="required" />
        <input type="text" class="form-control modal_form" name="mobile" placeholder="Mobile Number" required="required" />
        <textarea cols="" rows="3" class="form-control modal_form" name="address" placeholder="Address" required="required"></textarea>
        <textarea cols="" rows="4" class="form-control modal_form" name="message" placeholder="Message" required="required"></textarea>
        <input type="submit" name="contact" class="btn modal_form_btn" value="SUBMIT" />
      </form>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-12"></div>
    <div class="col-md-5 col-sm-5 col-xs-12">
      <div class="contact_form_text">Contact Details</div>
      <div align="center"><img src="images/shadow.png" class="img img-responsive" /></div>
      <div class="row m20_0">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class=" contact_form_text_2"><i class="fa fa-map-marker"></i>&nbsp; ADDRESS</div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">Government Polytechnic Jamnagar,Valsura Road, Bedi , Jamnagar, <br />Gujarat , INDIA ,<br />Pin : 361009</div>
      </div>
      <div class="row m20_0">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class=" contact_form_text_2"><i class="fa fa-mobile"></i>&nbsp; PHONE</div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">0877 2XXXX52</div>
      </div>
      <div class="row m20_0">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class=" contact_form_text_2"><i class="fa fa-envelope"></i>&nbsp; EMAIL ID</div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12"><a href="mailto:sampleemail@gmail.com">sampleemail@gmail.com</a><br /><a href="mailto:sampleemail@gmail.com">sampleemail@gmail.com</a></div>
      </div>
    </div>
  </div>
  <!-- End Section 1 -->

  <!-- End Content -->



  <?php include('footer.php'); ?>
  <?php include('js_files.php'); ?>
</body>

</html>