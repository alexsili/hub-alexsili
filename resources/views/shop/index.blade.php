@extends('layouts.app')

@section('content')
    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Shop</div>
        </div>
        <div class="row pb-4">
            @foreach($products as $product)
                <div class="col-6">
                    <div class="row pb-4">
                        <div class="col-md-8">
                            <a href="{{route('product', $product->id)}}">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img">
                                        <img src="/uploads/products/{{$product->image}}" alt="{{$product->image}}"/>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 animate-box">
                            <a href="{{route('product', $product->id)}}"
                               class="fh5co_magna py-2"> {{$product->name }} </a>
                            {{$product->user->name}} -
                            {{$product->created_at->format('M d, Y')}}
                            <div class="fh5co_consectetur"> {{ substr( $product->description, 0, 250)}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
