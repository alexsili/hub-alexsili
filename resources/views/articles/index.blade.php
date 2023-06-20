@extends('layouts.default-app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1>Articles
                    <a class="btn btn-primary float-end" href="{{route('articles.create')}}"> Add Article</a></h1>
            </div>
        </div>

        @include('layouts.partials.messages')
        <div class="row">
            <div class="col-12">
                @if($articles->count())
                    <table class="table mt-5">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Views</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td> {{$article->created_at->format('Y-m-d')}} </td>
                                <td><a href="{{route('articles.edit', $article->id)}}"> {{$article->title}} </a></td>
                                <td> {{$article->description}} </td>
                                <td><img class="img-thumbnail" style="width: 200px; height: 150px;"
                                         src="/uploads/images/{{$article->image}}" alt="{{$article->image}}"></td>
                                <td> {{$article->views}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination">
                                {{$articles->links()}}
                            </div>
                        </div>
                    </div>
                @else
                    <p class="text-center"> No articles</p>
                @endif
            </div>
        </div>
    </section>
@endsection
