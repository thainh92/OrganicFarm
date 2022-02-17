@extends('layouts.admin')
@section('title','')
@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- validation form -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Create new category</h5>
                <div class="card-body">
                    <form action="{{route('admin-update-category', $category)}}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01"></label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Category Name" value="{{$category->name}}" name="name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom02"></label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Category code" value="{{$category->code}}" name="code" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom03"></label>
                                <input type="file" class="form-control" id="validationCustom02" placeholder="File input" value="{{$category->thumbnail}}" name="thumbnail" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                                <button class="btn btn-success" type="submit">Clear</button>
                                <a class="btn btn-danger" href="{{route('admin-category-index')}}">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end validation form -->
        <!-- ============================================================== -->
    </div>
@endsection
@section('script-tag')
    <script></script>
@endsection
