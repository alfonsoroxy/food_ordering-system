<header class="navigation ">
	<nav class="navbar navbar-expand-lg main-nav py-lg-3 position-absolute w-100" id="main-nav">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('frontend/images/logo.png') }}" alt="" class="img-fluid">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation"
				aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('/') }}">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('menu') }}">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Other Elements</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="{{ url('cart') }}">Cart</a></li>
							<li><a class="dropdown-item" href="{{ url('shipping') }}">Shipping</a></li>
							<li><a class="dropdown-item" href="{{ url('payment') }}">Payment</a></li>
							<li><a class="dropdown-item" href="{{ url('confirmation') }}">Confirmation</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</nav>
</header>
