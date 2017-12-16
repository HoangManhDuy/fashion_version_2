<nav class="main-nav-outer" id="test">
    <!--main-nav-start-->
    <div class="container">
        <ul class="main-nav">
            @if(Auth::guest())
                <li><a href="#header">Home</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#Portfolio">Topic</a></li>
                <li><a href="">Fashion</a></li>
                <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
                <li><a href="#client">About Us</a></li>
                <li><a href="#team">Stylist</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            @else
                <li><a href="#header">Home</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#Portfolio">Topic</a></li>
                <li><a href="">Fashion</a></li>
                <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
                <li><a href="#client">About Us</a></li>
                <li><a href="#team">Stylist</a></li>
                <li><a href="#contact">Contact</a></li>
                <li id="logout-1">
                    Logout
                    {!! Form::open([ 'route'=> 'logout', 'method'=>'POST', 'id'=>'logout-form' ]) !!}
                    {{ csrf_field() }}
                    {!! Form::close() !!}
                </li>
            @endif
        </ul>
        <a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
    </div>
</nav>
<!--main-nav-end-->
