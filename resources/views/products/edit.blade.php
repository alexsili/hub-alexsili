@extends('layouts.default-app')

@section('content')
    <section class="container">

        @include('layouts.partials.messages')

        <div class="row">
            <div class="col-12">

                <form action="{{route('products.update', $product->id)}}" enctype="multipart/form-data" method="post">
                    @method('put')
                    @csrf
                    <div class="d-block mt-3">
                        <h4>Edit Product</h4>
                    </div>
                    <div class="d-block mt-3 pt-2">
                        <div class="form-group mt-3">
                            <div class="col-6">
                                <label for="name">Name*</label>
                                <input id="name" type="text"
                                       class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                       name="name" placeholder="Name" value="{{$product->name}}">
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
                                   {{$product->description}}
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
                                     src="/uploads/products/{{$product->image}}" alt="{{$product->image}}">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="col-6">
                                <label for="price">Price*</label>
                                <input id="price" type="text"
                                       class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}"
                                       name="price" placeholder="Price" value="{{$product->price}}">
                                @if($errors->has('price'))
                                    <span class="invalid-feedback"> {{$errors->first('price')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            * required fields
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteProduct">
                                    Delete
                                </button>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Back</a>
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


    <div class="modal fade" id="deleteProduct" tabindex="-1" aria-labelledby="deleteProductLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteProductLabel">Delete Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this product?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('products.destroy', $product->id)}}" method="POST">
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
