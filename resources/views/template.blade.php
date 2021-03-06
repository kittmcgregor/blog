<!DOCTYPE HTML>
<html>
	<head>
		<title>Future Imperfect</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{asset('/assets/css/main.css')}}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="http://localhost/blog/public/">Future Imperfect</a></h1>
						<nav class="links">
							<ul>
							@if(Auth::check())
								<li><a href="{{url('logout')}}">Logout</a></li>
								<li><a href="{{url('users/'.Auth::user()->id)}}">User Details</a></li>
							@else
								<li><a href="{{url('login')}}">Log in</a></li>
								<li><a href="{{url('users/create')}}">Register</a></li>
							@endif
							</ul>
							
						</nav>
						<nav class="main">
							<ul>
								
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

	

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Log in</h3>
										</a>
									</li>
									<li>
										<a href="register.html">
											<h3>Register</h3>
										</a>
									</li>
									
								</ul>
							</section>



					</section>

				<!-- Main -->
					<div id="main">

					@yield('content')
					
					</div>
						
				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="http://localhost/blog/public/" class="logo"><img src="{{asset('/images/logo.jpg')}}" alt="" /></a>
								<header>
									<h2>Future Imperfect</h2>
									<p>Another fine responsive site template in HTML5</a></p>
								</header>
							</section>

						

						
						

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Crafted: <a href="http://designscrazed.org/">HTML5</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>