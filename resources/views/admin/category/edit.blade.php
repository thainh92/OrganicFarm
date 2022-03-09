@extends('layouts.admin')
@section('title','')
@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- validation form -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Edit category</h5>
                <div class="card-body">
                    <form action="{{route('admin-update-category', $category)}}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                        @csrf
                        @method('put')
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">--}}
{{--                                <label for="validationCustom01"></label>--}}
{{--                                <input type="text" class="form-control" id="validationCustom01" placeholder="Category Name" value="{{$category->name}}" name="name" required>--}}
{{--                                <div class="valid-feedback">--}}
{{--                                    Looks good!--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">--}}
{{--                                <label for="validationCustom02"></label>--}}
{{--                                <input type="text" class="form-control" id="validationCustom02" placeholder="Category code" value="{{$category->code}}" name="code" required>--}}
{{--                                <div class="valid-feedback">--}}
{{--                                    Looks good!--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">--}}
{{--                                <label class="pt-2" for="input-select">Select Main Category</label>--}}
{{--                                <select class="form-control form-control-sm" name="parent_id" id="input-select">--}}
{{--                                    @foreach($get_parent_category as $item)--}}
{{--                                        <option value="{{$item->id}}">{{$item->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">--}}
{{--                                <label for="validationCustom03"></label>--}}
{{--                                <input type="file" class="form-control" id="validationCustom02" placeholder="File input" value="{{$category->thumbnail}}" name="thumbnail" required>--}}
{{--                                <div class="valid-feedback">--}}
{{--                                    Looks good!--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-row mt-3">--}}
{{--                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">--}}
{{--                                <button class="btn btn-primary" type="submit">Submit form</button>--}}
{{--                                <button class="btn btn-success" type="submit">Clear</button>--}}
{{--                                <a class="btn btn-danger" href="{{route('admin-category-index')}}">Back</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Name</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                       placeholder="Category Name" value="{{$category->name}}" name="name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input category name.
                                </div>
                                <div class="invalid-feedback">
                                    {{(isset($message)) ? $message : ''}}
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Code</label>
                                <input type="text" class="form-control" id="validationCustom02"
                                       placeholder="Category code" value="{{$category->code}}" name="code" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input category code.
                                </div>
                            </div>
                            <div class="mt-2 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="1" name="radio-inline" checked class="custom-control-input"><span class="custom-control-label">Create main category</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="2" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Create sub category</span>
                                </label>
                            </div>
                            <div id="getMainCategory" class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="input-select">Select Main Category</label>
                                <select class="form-control form-control-sm" name="parent_id" id="input-select">
                                    <option value="{{$category->id}}" selected>Select category</option>
                                    @foreach($get_parent_category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">--}}
                            {{--                                <label class="pt-2" for="input-select">Select Main Category</label>--}}
                            {{--                                <select class="form-control form-control-sm" name="parent_id" id="input-select">--}}
                            {{--                                    @foreach($get_parent_category as $item)--}}
                            {{--                                        <option value="{{$item->id}}">{{$item->name}}</option>--}}
                            {{--                                    @endforeach--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Image upload</label>
                                <input type="file" class="form-control" id="validationCustom02" placeholder="File input"
                                       value="{{$category->thumbnail}}" name="thumbnail" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please upload category image.
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                                <button class="btn btn-success" type="submit">Clear</button>
                                <a href="{{route('admin-category-index')}}" class="btn btn-danger">Back</a>
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
    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                let forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                let validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        $(document).ready(function (){
            let valueRatio = $('input[name="radio-inline"]:checked').val();
            if (valueRatio === "1") {
                $('#getMainCategory').css('display', 'none');
            } else {
                $('#getMainCategory').css('display', 'inline');
            }
            $('input[type=radio][name=radio-inline]').change(function() {
                if (this.value === "1") {
                    $('#getMainCategory').css('display', 'none');
                    valueRatio = this.value;
                }
                else {
                    $('#getMainCategory').css('display', 'inline');
                    valueRatio = this.value;
                }
            });
        })
    </script>
@endsection
