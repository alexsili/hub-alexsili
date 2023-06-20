<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="../public/images/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{Request::is('/') ? 'active' : '' }} {{ Request::is('article*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item {{Request::is('shop*') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('shop')}}">Shop</a>
                    </li>
                    <li class="nav-item  {{Request::is('pdf*') ? 'active' : ''}} ">
                        <a class="nav-link" href="{{route('pdf')}}">Dom PDF <span class="sr-only">(current)</span></a>
                    </li>

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">Community<span--}}
{{--                                class="sr-only">(current)</span></a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">--}}
{{--                            <a class="dropdown-item" href="#">Action in</a>--}}
{{--                            <a class="dropdown-item" href="#">Another action</a>--}}
{{--                            <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item ">
                        <a class="nav-link" href="Contact_us.html"><i class='fa fa-shopping-cart'> </i> My Cart</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
