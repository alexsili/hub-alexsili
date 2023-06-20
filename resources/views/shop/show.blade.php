@extends('layouts.app')


@section('content')

    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">

        <h3>{{$product->name}}</h3>
        <p>
            {{$product->description}}
        </p>
    </div>
    <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Newest Products</div>
        </div>
        @foreach($newestProducts as $newestProduct)
            <div class="row pb-3">
                <div class="col-5 align-self-center">
                    <a href="{{route('product', $newestProduct->id)}}">
                        <img src="/uploads/products/{{$newestProduct->image}}" alt="{{$newestProduct->image}}"
                             class="fh5co_most_trading"/>
                    </a>
                </div>
                <div class="col-7 paddding">
                    <a href="{{route('product', $newestProduct->id)}}">
                        <div class="most_fh5co_treding_font"> {{$newestProduct->name}}</div>
                    </a>
                    <div class="most_fh5co_treding_font_123"> {{$newestProduct->created_at->format('M d, Y')}}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
