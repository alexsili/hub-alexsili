@extends('layouts.app')


@section('content')

    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">

        <h3>{{$article->title}}</h3>
        <p>
        <img src="/uploads/images/{{$article->image}}" alt="{{$article->image}}"
             class="img-fluid img-thumbnail"/>
        </p>
        <p>
            {{$article->description}}
        </p>
    </div>
    <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Most Popular</div>
        </div>
        @foreach($mostPopularArticles as $mostPopularArticle)
            <div class="row pb-3">
                <div class="col-5 align-self-center">
                    <a href="{{route('article', $mostPopularArticle->id)}}">
                        <img src="/uploads/images/{{$mostPopularArticle->image}}" alt="{{$mostPopularArticle->image}}"
                             class="img-fluid img-thumbnail"/>
                    </a>
                </div>
                <div class="col-7 paddding">
                    <a href="{{route('article', $mostPopularArticle->id)}}">
                        <div class="most_fh5co_treding_font"> {{$mostPopularArticle->title}}</div>
                    </a>
                    <div class="most_fh5co_treding_font_123"> {{$article->created_at->format('M d, Y')}}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
