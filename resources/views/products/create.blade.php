@extends('layouts.default-app')

@section('content')
    <section class="container">

        @include('layouts.partials.messages')

        <div class="row">
            <div class="col-12">

                <form action="{{route('products.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="d-block mt-3">
                        <h4>Add Product</h4>
                    </div>
                    <div class="d-block mt-3 pt-2">
                        <div class="form-group mt-3">
                            <div class="col-6">
                                <label for="name">Name*</label>
                                <input id="name" type="text"
                                       class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                       name="name" placeholder="Name" value="{{old('name')}}">
                                @if($errors->has('name'))
                                    <span class="invalid-feedback"> {{$errors->first('name')}}</span>
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
                        <div class="form-group mt-3">
                            <div class="col-6">
                                <label for="price">Price*</label>
                                <input id="price" type="text"
                                       class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}"
                                       name="price" placeholder="Price" value="{{old('price')}}">
                                @if($errors->has('name'))
                                    <span class="invalid-feedback"> {{$errors->first('price')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            * required fields
                        </div>
                        <div class="row">
                            <div class="col-12 text-end">
                                <a href="{{route('products.index')}}" class="btn btn-outline-secondary">BACK</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
