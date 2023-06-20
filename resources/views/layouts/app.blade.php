<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{asset('/css/media_query.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('/css/animate.css')}}" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/css/style_1.css')}}" type="text/css"/>

    <script type="text/javascript" href="{{asset('/js/modernizr-3.5.0.min.js')}}"></script>

    <link rel="icon" href="{{ asset("/images/favicon.ico") }}"/>

    @yield('topcss')

    @section('topjs')
    @endsection

    @yield('topjs')
</head>
<body>

@include('layouts.partials.header')

{{--@include('layouts.partials.home-carousel')--}}

{{--@include('layouts.partials.trending')--}}

{{--@include('layouts.partials.video-news')--}}

<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            @yield('content')

{{--            @include('layouts.partials.popular-articles')--}}
        </div>
        {{--        @include('layouts.partials.pagination')--}}
    </div>
</div>

@include('layouts.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="{{url('/js/owl.carousel.min.js')}}"></script>

<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script type="text/javascript" src="{{url('/js/jquery.waypoints.min.js')}}"></script>
<!-- Main -->
<script type="text/javascript" src="{{url('/js/main.js')}}"></script>

@yield('endjs')
</body>
</html>
