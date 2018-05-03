<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('product.index')}}">Book Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <a class="nav-link" href="{{route('product.shoppingCart')}}">Shopping Cart
                    <span class="badge badge-pill badge-secondary">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span></a>
            </li>
            <li class="nav-item dropdown">
                <i class="fa fa-user" aria-hidden="true"></i>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manage Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if(Auth::check())
                    <a class="dropdown-item" href="{{route('user.profile')}}">User Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                    @else
                    <a class="dropdown-item" href="{{route('user.login')}}">Log in</a>
                    <a class="dropdown-item" href="{{route('user.signup')}}">Sign up</a>
                    @endif   
                </div>
            </li>
        </ul>
    </div>
</nav>
