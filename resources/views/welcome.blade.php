<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

	<head>
		<title>Website</title>

		<!-- Meta -->
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="description" content="A Simple Website">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	</head>

	<body>
		<!-- Nav -->
		<nav></nav>

		<!-- Jumbotron -->
		<section>
			<header> <h1>Hello Laravel!</h1> </header>
		</section>

		<!-- Main -->
		<main id="app">

			<!-- Sidebar -->
			<section></section>

			<!-- Page -->
			<div class="container">

			</div>

		</main>

		<!-- Footer -->
		<footer></footer>

		<!-- Scripts -->
		<script src="{{ mix('/js/app.js') }}"></script>


	</body>
</html>
