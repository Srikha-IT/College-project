<?php include('studentsession.php') ?>
<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Student Profile Application  - Student Update</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
  <style>
  .btn-getstarted1 {
    color: var(--contrast-color);
    background: var(--accent-color);
    font-size: 14px;
    padding: 8px 25px;
    margin: 0 0 0 30px;
    border-radius: 4px;
    transition: 0.3s;
}
  </style>

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="get-a-quote-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/cauverylogo.png" width="200px" height="200px" alt="">
        <h1 class="sitename">
		Student Profile Application <br>
		Cauvery College for Women <br>
		Annamalai Nagar,Trichy - 620018</h1><br><br>
      </a>

      <nav id="navmenu" class="navmenu">
        <!--<ul>
          <li><a href="index.html">Home<br></a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>-->
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="student_login.php">Student Login</a>
	  
	  <a class="btn-getstarted" href="faculty_login.php">Faculty Login</a>
	  
	  <a class="btn-getstarted" href="admin_login.php">Admin Login</a>


    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Student Register</h1>
        <!--<p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>-->
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Student Register</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Get A Quote Section -->
    <section id="get-a-quote" class="get-a-quote section">

      <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

          <!--<div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>-->
		  
		  <div class="col-lg-2" data-aos="fade-up" data-aos-delay="200"></div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <form action="model/student_update.php" enctype="multipart/form-data" method="post" >
              <!--<h3>Get a quote</h3>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p> class="php-email-form"-->
              
              <div class="row gy-4">

                <!--<div class="col-md-6">
                  <input type="text" name="departure" class="form-control" placeholder="City of Departure" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="delivery" class="form-control" placeholder="Delivery City" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="weight" class="form-control" placeholder="Total Weight (kg)" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="dimensions" class="form-control" placeholder="Dimensions (cm)" required="">
                </div>-->

                <div class="col-lg-12">
                  <h3>Student Register</h3>
                </div>
				
				<?php 
				//session_start();<strong>Success!</strong><strong>Danger!</strong>
				if(isset($_SESSION['success'])){
					echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>'.$_SESSION['success'].'</div>';
					unset($_SESSION['success']);
				}		
				if(isset($_SESSION['error'])){
					echo '<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>'.$_SESSION['error'].'</div>';
					unset($_SESSION['error']);
				}
				$log_sql = "select * from `student` where student_id=".$_SESSION['student_id']."";
		
				$log_qr = mysqli_query($conn,$log_sql);
				
				$row = mysqli_fetch_array($log_qr);
				?>
				
				

                <div class="col-6">
				<label>First Name</label><br><br>
                  <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo $row['first_name'] ?>" required="">
                </div>
				
				<div class="col-6">
				<label>Last Name</label><br><br>
                  <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo $row['last_name'] ?>" required="">
                </div>

                <div class="col-6">
				<label>Date of Birth</label><br><br>
                  <input type="date" name="dob" class="form-control" placeholder="Date of Birth" value="<?php echo $row['dob'] ?>"  required="">
                </div>
				
				<div class="col-6">
				<label>Scholer Type </label><br><br>
					<div class="row">
						<div class="col-4">
							<input <?php  if(isset($row['type']) && $row['type']=="Day Scholer"){echo "checked"; } ?> type="radio" name="type" value="Day Scholer">
							<label > Day Scholer</label><br>
						</div>
						<div class="col-4">
							<input <?php if(isset($row['type']) && $row['type']=="Hosteller"){echo "checked"; } ?> type="radio" name="type" value="Hosteller">
							<label > Hosteller</label><br><br> 
							</div>
					</div>
					<div class="col-4">
					</div>
				</div>
				
				<div class="col-6">
				<label>Select Program</label><br><br>
					<div class="row">
						<div class="col-4">
							<input <?php if(isset($row['program']) && $row['program']=="UG"){echo "checked"; } ?> type="radio" name="program" value="UG">
							<label > UG</label><br>
						</div>
						<div class="col-4">
							&emsp;&emsp;<input <?php if(isset($row['program']) && $row['program']=="PG"){echo "checked"; } ?> type="radio" name="program" value="PG">
							<label > PG</label><br><br>
							</div>
					</div>
					<div class="col-4">
					</div>
				</div>
				
				<div class="col-6">
				    <label>Select Year of Study</label><br><br>
					<div id="ug">
					<select name="year_of_study" class="form-control">
					<option value="">Select Year of Study</option>
					<option value="I" <?php if(isset($row['year_of_study']) && $row['year_of_study']=="I"){echo "selected"; } ?>>I</option>
					<option value="II" <?php if(isset($row['year_of_study']) && $row['year_of_study']=="II"){echo "selected"; } ?>>II</option>
					<option value="III" <?php if(isset($row['year_of_study']) && $row['year_of_study']=="III"){echo "selected"; } ?>>III</option>
					</select>
					</div>
				</div>
				
				<div class="col-6">
				<label>Class of Section</label><br><br>
				<input name="class_section" class="form-control" value="<?php echo $row['class_section'] ?>">
				</div>
				
				<div class="col-6">
				<label>Select Department</label><br><br>
					<select name="department" class="form-control">
					<option value="">Select Department</option>
					<option value="B.A.Tamil" <?php if(isset($row['department']) && $row['department']=="B.A.Tamil"){echo "selected"; } ?>>B.A.Tamil</option>
					<option value="B.A.English" <?php if(isset($row['department']) && $row['department']==">B.A.English"){echo "selected"; } ?>>B.A.English</option>
					<option value="B.S.W" <?php if(isset($row['department']) && $row['department']=="B.S.W"){echo "selected"; } ?>>B.S.W</option>
					<option value="B.B.A" <?php if(isset($row['department']) && $row['department']=="B.B.A"){echo "selected"; } ?>>B.B.A</option>
					<option value="B.Com.(CA)" <?php if(isset($row['department']) && $row['department']=="B.Com.(CA)"){echo "selected"; } ?>>B.Com.(CA)</option>
					<option value="B.Sc.Mathematics" <?php if(isset($row['department']) && $row['department']=="B.Sc.Mathematics"){echo "selected"; } ?>>B.Sc.Mathematics</option>
					<option value="B.Sc.Physics" <?php if(isset($row['department']) && $row['department']=="B.Sc.Physics"){echo "selected"; } ?>>B.Sc.Physics</option>
					<option value="B.Sc.Chemistry" <?php if(isset($row['department']) && $row['department']=="B.Sc.Chemistry"){echo "selected"; } ?>>B.Sc.Chemistry</option>
					<option value="B.Sc.Computer Science" <?php if(isset($row['department']) && $row['department']=="B.Sc.Computer Science"){echo "selected"; } ?>>B.Sc.Computer Science</option>
					<option value="B.C.A" <?php if(isset($row['department']) && $row['department']=="B.C.A (Bachelor of Computer Application)"){echo "selected"; } ?>>B.C.A (Bachelor of Computer Application)</option>
					<option value="B.Sc.Information Tecnology" <?php if(isset($row['department']) && $row['department']=="B.Sc.Information Tecnology"){echo "selected"; } ?>>B.Sc.Information Tecnology</option>
					<option value="B.Sc.Microbiology" <?php if(isset($row['department']) && $row['department']=="B.Sc.Microbiology"){echo "selected"; } ?>>B.Sc.Microbiology</option>
					<option value="B.Sc.Biotechnology" <?php if(isset($row['department']) && $row['department']=="B.Sc.Biotechnology"){echo "selected"; } ?>>B.Sc.Biotechnology</option>
					<option value="B.Sc.Nutrition & Dietetics" <?php if(isset($row['department']) && $row['department']=="B.Sc.Nutrition & Dietetics"){echo "selected"; } ?>>B.Sc.Nutrition & Dietetics</option>
					<option value="M.A.Tamil" <?php if(isset($row['department']) && $row['department']=="M.A.Tamil"){echo "selected"; } ?>>M.A.Tamil</option>
					<option value="M.A.English" <?php if(isset($row['department']) && $row['department']=="M.A.English"){echo "selected"; } ?>>M.A.English</option>
					<option value="M.S.W" <?php if(isset($row['department']) && $row['department']==">M.S.W"){echo "selected"; } ?>>M.S.W</option>
					<option value="M.Com" <?php if(isset($row['department']) && $row['department']=="M.Com"){echo "selected"; } ?>>M.Com</option>
					<option value="M.Sc.Mathematics" <?php if(isset($row['department']) && $row['department']==">M.Sc.Mathematics"){echo "selected"; } ?>>M.Sc.Mathematics</option>
					<option value="M.Sc.Physics" <?php if(isset($row['department']) && $row['department']=="M.Sc.Physics"){echo "selected"; } ?>>M.Sc.Physics</option>
					<option value="M.Sc.Chemistry" <?php if(isset($row['department']) && $row['department']=="M.Sc.Chemistry"){echo "selected"; } ?>>M.Sc.Chemistry</option>
					<option value="M.Sc.Computer Science" <?php if(isset($row['department']) && $row['department']=="M.Sc.Computer Science"){echo "selected"; } ?>>M.Sc.Computer Science</option>
					<option value="M.Sc.Microbiology" <?php if(isset($row['department']) && $row['department']=="M.Sc.Microbiology"){echo "selected"; } ?>>M.Sc.Microbiology</option>
					<option value="M.Sc.Food Service Management" <?php if(isset($row['department']) && $row['department']=="M.Sc.Food Service Managemen"){echo "selected"; } ?>>M.Sc.Food Service Management</option>
					
					</select>
				</div>
				
				<div class="col-6">
				<label>Select Blood Group</label><br><br>
					<select name="bloodgroup" class="form-control">
					<option value="">Blood Group</option>
					<option value="A+" <?php if(isset($row['bloodgroup']) && $row['bloodgroup']=="A+"){echo "selected"; } ?>>A+</option>
					<option value="A-" <?php if(isset($row['bloodgroup']) && $row['bloodgroup']=="A-"){echo "selected"; } ?>>A-</option>
					<option value="B+" <?php if(isset($row['bloodgroup']) && $row['bloodgroup']=="B+"){echo "selected"; } ?>>B+</option>
					<option value="B-" <?php if(isset($row['bloodgroup']) && $row['bloodgroup']=="B-"){echo "selected"; } ?>>B-</option>
					<option value="O+" <?php if(isset($row['bloodgroup']) && $row['bloodgroup']=="O+"){echo "selected"; } ?>>O+</option>
					<option value="O-" <?php if(isset($row['bloodgroup']) && $row['bloodgroup']=="O-"){echo "selected"; } ?>>O-</option>
					<option value="AB+" <?php if(isset($row['bloodgroup']) && $row['bloodgroup']=="AB+"){echo "selected"; } ?>>AB+</option>
					<option value="AB-" <?php if(isset($row['bloodgroup']) && $row['bloodgroup']=="AB-"){echo "selected"; } ?>>AB-</option>
					</select>
				</div>
				
				<!--<div class="col-6">
				<label>Register No</label><br><br>
                  <input type="text" class="form-control" name="regno" placeholder="Register No" required="">
                </div>-->
				
				<div class="col-6">
				<label>Father Name</label><br><br>
                  <input type="text" class="form-control" name="father_name" placeholder="Father Name" value="<?php echo $row['father_name'] ?>"  required="">
                </div>
				
				<div class="col-6">
				<label>Mother Name</label><br><br>
                  <input type="text" class="form-control" name="mother_name" placeholder="Mother Name" value="<?php echo $row['mother_name'] ?>" required="">
                </div>

                <div class="col-6">
				<label>Mobile Number</label><br><br>
                  <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" value="<?php echo $row['mobile'] ?>" required="">
                </div>

                <div class="col-12">
				<label>Choose Whom Mobile No's Available</label><br><br>
					<div class="row">
						<div class="col-3">
							<input type="radio" name="mobile_available_type" <?php if(isset($row['mobile_available_type']) && $row['mobile_available_type']=="Both the Parent"){echo "checked"; } ?> value="Both the Parent">
							<label > Both the Parent</label><br>
						</div>
						<div class="col-3">
							&emsp;&emsp;<input  type="radio" name="mobile_available_type" <?php if(isset($row['mobile_available_type']) && $row['mobile_available_type']=="Only Father"){echo "checked"; } ?> value="Only Father">
							<label > Only Father</label><br><br>
						</div>
						<div class="col-3">
							&emsp;&emsp;<input  type="radio" name="mobile_available_type" <?php if(isset($row['mobile_available_type']) && $row['mobile_available_type']=="Only Mother"){echo "checked"; } ?> value="Only Mother">
							<label > Only Mother</label><br><br>
						</div>
						<div class="col-3">
							&emsp;&emsp;<input  type="radio" name="mobile_available_type" <?php if(isset($row['mobile_available_type']) && $row['mobile_available_type']=="Guardian"){echo "checked"; } ?> value="Guardian">
							<label > Guardian</label><br><br>
						</div>
					</div>
						
				</div>
				<div class="col-6">
				<label>Current Residental Address</label><br><br>
				<textarea name="residental_address" class="form-control"><?php echo $row['residental_address'] ?></textarea>
				</div>
				
				<div class="col-6">
				<label>College ID Image</label><br><br>
				<input type="file" name="id_image" class="form-control">
				<?php if(isset($row['id_image'])){?>
								
				    <center><img width="100px;" style="border-radius:50%" src="id_image/<?php echo $row['id_image']; ?>" style="width:120px; height:120px;" class="img" title="<?php echo $row['id_image']; ?>"></center>
								
				<?php } ?>
				<input type="hidden" name="old_id_image" class="form-control" value="<?php echo $row['id_image']; ?>">
				</div>
				
				<!--<div class="col-6">
				<label>Password</label><br><br>
                  <input type="text" class="form-control" name="password" placeholder="Password" required="">
                </div>
				
				<div class="col-6">
				<label>Confirm Password</label><br><br>
                  <input type="text" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="">
                </div>-->

                <div class="col-12 text-center">
                  <!--<div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>-->

                  <button type="submit" class="btn-getstarted1" name="student_update">Update</button><br><br>
				  <a href="student_login.php" class="btn-getstarted1" name="student_login">Already have a Account?</a>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->
         <div class="col-lg-2" data-aos="fade-up" data-aos-delay="200"></div>
        </div>

      </div>

    </section><!-- /Get A Quote Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <!--<div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Logis</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>-->

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Student Profile Application</strong> <span>All Rights Reserved</span></p>
      <!--<div class="credits">
        
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>-->
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
  
  <!-- Jquery Core Js -->
  <script src="js/jquery.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script>
  
	$("input[name='program']").change(function () {
    if ($(this).val() === "UG") {
        //console.log("UG selected");
		$("select option[value='III']").show();
    } else {
        //console.log("PG selected");
		$("select option[value='III']").hide();
    }
});
 </script>

</body>

</html>