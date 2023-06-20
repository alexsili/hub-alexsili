@extends('layouts.default-app')

@section('content')
    <section class="container">

        @include('layouts.partials.messages')

        <div class="row">
            <div class="col-12">

                <form action="{{route('articles.update', $article->id)}}" enctype="multipart/form-data" method="post">
                    @method('put')
                    @csrf
                    <div class="d-block mt-3">
                        <h4>Edit Article</h4>
                    </div>
                    <div class="d-block mt-3 pt-2">
                        <div class="form-group mt-3">
                            <div class="col-6">
                                <label for="title">Title*</label>
                                <input id="title" type="text"
                                       class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
                                       name="title" placeholder="Title" value="{{$article->title}}">
                                @if($errors->has('title'))
                                    <span class="invalid-feedback"> {{$errors->first('title')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="col-6">
                                <label for="description">Description*</label>
                                <textarea rows="10" type="text" name="description"
                                          class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}">
                                   {{$article->description}}
                                </textarea>
                                @if($errors->has('description'))
                                    <span class="invalid-feedback"> {{$errors->first('description')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="col-6">
                                <label for="image">Image*</label>
                                <input class="form-control" type="file" name="image" value="{{old('image')}}"
                                       placeholder="Image">
                                @if($errors->has('image'))
                                    <span class="invalid-feedback"> {{$errors->first('image')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <img class="img-thumbnail" style="width: 250px; height: 200px;"
                                     src="/uploads/images/{{$article->image}}" alt="{{$article->image}}">
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            * required fields
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteArticle">
                                    Delete
                                </button>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary">Back</a>
                                <button type="submit" class="btn btn-large btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>


    <div class="modal fade" id="deleteArticle" tabindex="-1" aria-labelledby="deleteArticleLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteArticleLabel">Delete Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this article?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('articles.destroy', $article->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
