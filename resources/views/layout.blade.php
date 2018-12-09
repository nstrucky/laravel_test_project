</!DOCTYPE html>
<html>
<head>

	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Karla|Lato" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.4/css/bulma.min.css">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/normalize.css">
</head>
<body>

	<header>
		<div class="container">
			<div class="header-top">
				<h1>School Admin Site</h1>
				<a href="#">Sign In</a>
			</div>

			<nav>
				<a href="/">Home Page</a>
				<a href="/about">About Us</a>
				<a href="/contacts">Contact</a>
				<a href="/students">Students</a>
			</nav>
		</div>


	</header>


	@yield('content')

</body>
</html>