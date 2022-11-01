<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="{{ url('/') }}">WYD Commerce</a>
		<button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
			<span class="navbar-toggle-collapse"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link active" arial-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('category') }}">Cateogory</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('cart') }}">My Cart <span class="badge badge-pill bg-primary cart-count">1</span>
          </a>
				</li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('wishlist') }}">Wishlist <span class="badge badge-pill bg-success wishlist-count">1</span>
          </a>
        </li>

        @guest
          @if(Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @endif

          @if(Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ Route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif

        @else

				<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="{{ url('my-orders') }}">My Orders</a>
            <a class="dropdown-item" href="#">My Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
      	</li>

        @endguest
			</ul>
		</div>
	</div>
</nav>