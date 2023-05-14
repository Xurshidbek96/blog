<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<!-- My CSS -->
	<link rel="stylesheet" href="/admin/style.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="@yield('dashboard')">
				<a href="/a-panel">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
            <li class="">
				<a href="{{ route('admin.infos.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Infos</span>
				</a>
			</li>

			<li class="">
				<a href="#">
					<span class="text"></span>
				</a>
			</li>

            <li>
				<a href="{{ route('admin.humans.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Odamlar</span>
				</a>
			</li>
            <li>
				<a href="{{ route('admin.numbers.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Raqamlar</span>
				</a>
			</li>

            <li class="">
				<a href="#">
					<span class="text"></span>
				</a>
			</li>

            <li>
				<a href="{{ route('admin.categories.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Kategoriylar</span>
				</a>
			</li>
            <li>
				<a href="{{ route('admin.posts.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Postlar</span>
				</a>
			</li>

		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="text">Logout</button>
                    </form>

				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="/admin/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

    @yield('content')

</section>
<!-- CONTENT -->

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="/admin/script.js"></script>
</body>
</html>
