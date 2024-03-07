@extends('layouts.app')
@section('content')
    <div class=" justify-between w-full">
        @include('search.filterSidebar')
        @foreach ($products as $product)
            @include('search.productCard')
            <br>
        @endforeach

    </div>
@endsection
