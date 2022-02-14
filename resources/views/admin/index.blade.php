@extends('layouts.admin')
@section('title', 'Administrator')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel
                            mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                    </div>
                    <div>
                        search bar
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Categories List</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Code</th>
                                            <th class="border-0">Create At</th>
                                            <th class="border-0">Update At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                        @foreach($categories as $category)

                                        <tr>
                                            <td>{{$id}}</td>
                                            @php
                                                $id++;
                                            @endphp
                                            <td>
                                                <div class="m-r-10"><img src="{{$category->thumbnail}}" alt="user"
                                                                         class="rounded" width="45"></div>
                                            </td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->code}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <td>{{$category->updated_at}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-tag')

@endsection
{{--<!-- Route -->--}}
{{--{{ route('admin/index') }}--}}
