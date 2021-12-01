@extends('master')
@section('title', 'search-page')
@section('content')
    <div class=" custom-product">
        <div class=" col-md-4 ">
            <a href="#">
                filter
            </a>
        </div>
        <div class="col">
            <div class="trending-wrapper">
                <h3>
                    trending Products
                </h3>
                @foreach ($product as $item)
                    <div class="trending-item">
                        <a href="detail/{{ $item['id'] }}">
                            <img class="trending-iamge" src="{{ $item['gallary'] }}">
                            <div class="">

                                <h5>
                                    {{ $item['name'] }}
                                </h5>
                                <h5>
                                    {{ $item['description'] }}
                                </h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
