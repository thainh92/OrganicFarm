@extends('layouts.master')
@section('title','Product')
@section('content')
    <section class="product-container">
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>{{$category->name}}</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('home-page') }}">Home</a>
                                </li>
                                <li>{{$category->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Top Products Area -->
        <section class="top-products-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="orgo-grid-sorting row align-items-center">
                            <div class="col-lg-6 col-md-6 result-count">
                                <p>We found <span class="count">{{$products->count()}}</span> products available for you
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($products as $item)
                                <div class="col-lg-4 col-md-6">
                                    <div class="top-products-item">
                                        <div class="products-image">
                                            <a href="{{route('product-detail', $item->id)}}"><img
                                                    src="{{asset('assets/img/product/'.$item->thumbnail)}}" alt="image"></a>

                                            <ul class="products-action">
                                                <li>
                                                    <a onclick="AddCart({{$item->id}})" href="javascript:"
                                                       data-tooltip="tooltip" data-placement="top"
                                                       title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tooltip="tooltip" data-placement="top"
                                                       title="Quick View" data-toggle="modal"
                                                       data-target="#productsQuickView">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li>
                                            </ul>

                                            {{--                                            <div class="sale">--}}
                                            {{--                                                <span>Sale</span>--}}
                                            {{--                                            </div>--}}
                                        </div>

                                        <div class="products-content">
                                            <h3>
                                                <a href="{{route('product-detail', $item->id)}}">{{$item->name}}</a>
                                            </h3>
                                            <div class="price">
                                                <span class="new-price">${{number_format($item->price,2)}}</span>
                                                {{--                                                <span class="old-price">${{number_format($item->price * 1.1,2)}}</span>--}}
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-lg-12 col-md-12 mt-5 d-flex justify-content-center">
                                {{$products->appends(request()->query())->links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            {{--                            <section class="widget widget_search">--}}
                            {{--                                <h3 class="widget-title">Search</h3>--}}

                            {{--                                <form name="searchForm" class="search-form" method="get" onsubmit="return validateForm()">--}}
                            {{--                                    <label>--}}
                            {{--                                        <span class="screen-reader-text">Search for:</span>--}}
                            {{--                                        <input name="input_name" type="search" class="mt-2 search-field" placeholder="Search by name">--}}
                            {{--                                        <input name="start_price" class="mt-2 search-field" placeholder="Start price">--}}
                            {{--                                        <input name="end_price" class="mt-2 search-field" placeholder="End price">--}}
                            {{--                                    </label>--}}
                            {{--                                    <button class="" type="submit">--}}
                            {{--                                        <i class="flaticon-search"></i>--}}
                            {{--                                    </button>--}}
                            {{--                                </form>--}}
                            {{--                            </section>--}}
                            {{--                            <section class="widget price_list_widget">--}}
                            {{--                                <h3 class="widget-title">Product Type</h3>--}}
                            {{--                                @php--}}
                            {{--                                    $sub_category = DB::table('categories')->where('parent_id', '=', $category->id)->get();--}}
                            {{--                                @endphp--}}
                            {{--                                @foreach($sub_category as $item)--}}
                            {{--                                    <form>--}}
                            {{--                                        <label class="custom-control custom-checkbox">--}}
                            {{--                                            <input type="checkbox" class="custom-control-input"><span--}}
                            {{--                                                class="custom-control-label">{{$item->name}}</span>--}}
                            {{--                                        </label>--}}
                            {{--                                    </form>--}}
                            {{--                                @endforeach--}}
                            {{--                            </section>--}}
                            <section class="widget widget_search">
                                <h3 class="widget-title">Search</h3>
                                <form id="searchForm" name="searchForm" class="search-form" method="get"
                                      onsubmit="return validateForm()">
                                    <div>
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input name="input_name" type="search" class="mt-2 search-field"
                                                   placeholder="Search by name">
                                            <input name="start_price" class="mt-2 search-field"
                                                   placeholder="Start price">
                                            <input name="end_price" class="mt-2 search-field" placeholder="End price">
                                        </label>
                                        <button class="" type="submit">
                                            <i class="flaticon-search"></i>
                                        </button>
                                    </div>

                                    <h3 class="widget-title mt-4">Product Type</h3>
                                    @php
                                        $sub_category = DB::table('categories')->where('parent_id', '=', $category->id)->get();
                                    @endphp
                                    @foreach($sub_category as $item)
                                        <label class="custom-control custom-checkbox">
                                            <input name="sub_category_id[]" value="{{$item->id}}" type="checkbox"
                                                   class="custom-control-input"><span
                                                class="custom-control-label">{{$item->name}}</span>
                                        </label>
                                    @endforeach
                                </form>
                                <h3 class="widget-title mt-4">Sort By</h3>
                                <div class="select-box mb-3">
                                    <label></label>
                                    <select name="sort_by" form="searchForm">
                                        <option value="default">Default</option>
                                        <option value="latest">Latest</option>
                                        <option value="low_to_high">Price: low to high</option>
                                        <option value="high_to_low">Price: high to low</option>
                                    </select>
                                </div>
                            </section>

                            <section class="widget widget_tag_cloud">
                                <h3 class="widget-title">Popular Tags</h3>
                                @php
                                    $category_tag = DB::table('categories')->where([['parent_id', '=', null], ['deleted_at', '=', null]])->get();
                                @endphp
                                <div class="tagcloud">
                                    @foreach($category_tag as $item)
                                        <a href="{{route('product-page', $item->url)}}">{{$item->name}}</a>
                                    @endforeach
                                </div>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Products Area -->
    </section>
@endsection
@section('script-tag')
    <script>
        function validateForm() {
            let x = document.forms["searchForm"]["start_price"].value;
            let y = document.forms['searchForm']['end_price'].value;
            if (isNaN(x)) {
                alert("Start price must be a number");
                return false
            }
            if (isNaN(y)) {
                alert("End price must be a number");
                return false
            }
        }
    </script>
@endsection
