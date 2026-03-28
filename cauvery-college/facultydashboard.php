<?php 
  include('facultysession.php');
  include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Student Profile Application - Faculty Dashboard</title>
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
        <ul>
          <li><a href="facultydashboard.php">Dashboard<br></a></li>
		  <li><a href="facultylogout.php">Logout</a></li>
          <!--<li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
          <li><a href="contact.html">Contact</a></li>-->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!--<a class="btn-getstarted" href="student_login.php">Student Login</a>
	  
	  <a class="btn-getstarted" href="driver_login.php">Driver Login</a>
	  
	  <a class="btn-getstarted" href="staff_login.php">Staff Login</a>
	  
	  <a class="btn-getstarted" href="admin_login.php">Admin Login</a>-->

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Faculty Dashboard</h1>
        <!--<p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>-->
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Faculty Dashboard</li>
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
            <!--x<form action="model/admin_login.php" method="post" >
              <h3>Get a quote</h3>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p> class="php-email-form"-->

              <div class="row gy-4">

				
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
				
				?>
               
               <div class="col-lg-12">
                  <center><h3>Welcome <?php echo $_SESSION['faculty_username'];?></h3></center><br>
				
				
				<div class="row">
				<form action="facultydashboard.php" method="GET" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
					<div class="col-lg-10">
					  <input type="text" class="form-control" name="search_filter" placeholder="Your Department or Year of Study or Scholer Type" value="<?php if(isset($_GET['search_filter'])){ echo $_GET['search_filter']; }?>">
					</div>
					<div class="col-lg-2">
					  <button type="submit" class="btn btn-primary">Search</button>
					</div>
					</form>
				</div>
				  
				
				  <div class="container">
			       <table class="table">
					  <thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col"> Name </th>
						  <th scope="col"> Department </th>
						  <th scope="col"> Year of Study </th>
						  <th scope="col"> Scholer Type </th>
						  <th scope="col">Action</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php
					  
						$i=0;
						if(isset($_GET['search_filter'])){
							$sql = mysqli_query($conn,"select * from student where department like '%".$_GET['search_filter']."%' or year_of_study like '%".$_GET['search_filter']."%' or type like '%".$_GET['search_filter']."%'");
						}else{
						$sql = mysqli_query($conn,"select * from student");
						}
						while($row = mysqli_fetch_array($sql))
						{  
						  
						$i++; ?>
						<tr>
						  <th scope="row"><?php echo $i; ?></th>
						  <td><?php echo $row['first_name']."".$row['last_name'];?></td>
						  <td><?php echo $row['department'];?></td>
						  <td><?php echo $row['year_of_study'];?></td>
						  <td><?php echo $row['type'];?></td>
						  <td><a href="view_student.php?student_id=<?php echo $row['student_id']; ?>">View</a></td>
						</tr>
						<?php } ?>
					  </tbody>
					</table> 
                  </div>
              </div>
			  </div>
            <!--</form>-->
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>