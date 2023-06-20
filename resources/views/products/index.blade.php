@extends('layouts.default-app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1>Products
                    <a class="btn btn-primary float-end" href="{{route('products.create')}}"> Add Products</a></h1>
            </div>
        </div>

        @include('layouts.partials.messages')
        <div class="row">
            <div class="col-12">
                @if($products->count())
                    <table class="table mt-5">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td> {{$product->created_at->format('Y-m-d')}} </td>
                                <td><a href="{{route('products.edit', $product->id)}}"> {{$product->name}} </a></td>
                                <td> {{$product->description}} </td>
                                <td><img class="img-thumbnail" style="width: 200px; height: 150px;"
                                         src="/uploads/products/{{$product->image}}" alt="{{$product->image}}"></td>
                                <td> {{$product->price}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination">
                                {{$products->links()}}
                            </div>
                        </div>
                    </div>
                @else
                    <p class="text-center"> No products</p>
                @endif
            </div>
        </div>
    </section>
@endsection
