@extends('layouts.default-app')

@section('content')
    <section class="container">

        @include('layouts.partials.messages')

        <div class="row">
            <div class="col-12">

                <form action="{{route('articles.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="d-block mt-3">
                        <h4>Add Article</h4>
                    </div>
                    <div class="d-block mt-3 pt-2">
                        <div class="form-group mt-3">
                            <div class="col-6">
                                <label for="title">Title*</label>
                                <input id="title" type="text"
                                       class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
                                       name="title" placeholder="Title" value="{{old('title')}}">
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
                                    {{old('description')}}
                                </textarea>
                                @if($errors->has('description'))
                                    <span class="invalid-feedback"> {{$errors->first('description')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="col-6">
                                <label for="image">Image*</label>
                                <input class="form-control" type="file" name="image" value="{{old('image')}}" placeholder="Image">
                                @if($errors->has('image'))
                                    <span class="invalid-feedback"> {{$errors->first('image')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            * required fields
                        </div>
                        <div class="row">
                            <div class="col-12 text-end">
                                <a href="{{route('articles.index')}}" class="btn btn-outline-secondary">BACK</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
