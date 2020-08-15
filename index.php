<?php
include './pages/heading.php';
?>
<?php
// include '../db/connect.php';
// include "../authentication/login.php";
include "./authentication/Teacherlogin.php";
include "./authentication/Studentlogin.php";
?>
<?php if (isset($_SESSION['teacher_login'])) : ?>
	<?php include './pages/navbar.php';
		?>
<?php elseif (isset($_SESSION['student_login'])) : ?>
	<?php include './pages/navbar.php'; ?>
<?php endif; ?>
<?php if ((!isset($_SESSION['teacher_login'])) && (!isset($_SESSION['student_login']))) : ?>
	<div class="menu-area">
		<nav class="navbar navbar-expand-lg navbar-dark bg-success" style="background-color:#47535af5!important">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<div class="row">
						<?php include "./partial/teacher_loginp.php"; ?>
						<?php include "./partial/student_loginp.php"; ?>
					</div>
				</ul>
			</div>
		</nav>
	</div>

<?php endif; ?>
<div class="section">
	<div class="slider-area">
		<div class="row">

			<div class="col-md-2 padd">
				<div class="sidebar">
					<ul class="nav flex-column text-center">
						<!-- <li class="nav-item">
								<i class="fas fa-check"></i><a class="nav-link" href="profile.php">Profile</a>
							</li> -->
						<li class="nav-item mr-4">
							<i class="fas fa-check" style="font-family:verdana;"></i><a class="nav-link" href="content/achivement.php">Achievement</a>
						</li>
						<li class="nav-item mr-4">
							<i class="fas fa-check" style="font-family:verdana;"></i><a class="nav-link" href="content/about_us.php">About Us</a>
						</li>
					</ul>
				</div>
			</div>






			<div class="col-md-8 padd">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<h2 style="color:#8bd2d6f5;background-color:#69737b85!important " class="welcometext bg-secondary"> Welcome to RAMR School</h2>
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
						</li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="./img/img4.jpg" class="d-block w-100" style="height:530px;" alt="...">
						</div>
						<div class="carousel-item">
							<img src="./img/img5.jpg" class="d-block w-100" style="height:530px;" alt="...">
						</div>
						<div class="carousel-item">
							<img src="./img/img1.jpg" class="d-block w-100" style="height:530px;" alt="...">
						</div>
						<div class="carousel-item">
							<img src="./img/img2.jpg" class="d-block w-100" style="height:530px;" alt="...">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

						<span class="carousel-control-prev-icon" aria-hidden="true"> </span>

						<span class="sr-only">Previous</span>

					</a>

					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

			<div class="col-md-2 padd">
				<div class="sidebar">
					<ul class="nav flex-column text-center">
						<li class="nav-item ">
							<h3 style="color: #35587a;font-family:verdana; font-size: 14px;padding-top: 50px;">School Pedium</h3>
							<div class="progress-circle p10 text-center">

								<span>100%</span>

								<div class="left-half-clipper">

									<div class="first50-bar"></div>

									<div class="value-bar"></div>

								</div>

							</div>
						</li>


					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include './pages/footer.php';
include './partial/student_signup.php';
include './partial/teacher_signup.php';
?>