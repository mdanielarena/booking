@section('scripts')
    <script src="{{ mix('/js/login.js') }}"></script>
@endsection()

<header class="color-1 hovered menu-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nav"> 
                    <a href="index.html" class="logo"><img src="img/theme-1/logo_dark.png" alt="lets travel"></a>
                    <div class="nav-menu-icon"><a href="#"><i></i></a></div>
                    <nav class="menu">
                        <ul>
                            @if(Auth::check())
                                <li class="type-1"><a href="/my-account">MY ACCOUNT<span class="fa fa-angle-down"></span></a></li>
                            @endif
                            <li class="type-1">
                                @if(Auth::check())
                                    <a href="/signout-post" id="signOut">LOGOUT<span class="fa fa-angle-down"></span></a>
                                @else
                                    <a href="#" onClick="loginModal()">LOGIN<span class="fa fa-angle-down"></span></a>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

@include('layouts.modals')