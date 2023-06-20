@extends('layouts.app')

@section('content')
    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Shop</div>
        </div>
        <div class="row pb-4">

            <a href="{{route('downloadPDF')}}" class="btn btn-info"> Download PDF</a>
        </div>
    </div>
@endsection
