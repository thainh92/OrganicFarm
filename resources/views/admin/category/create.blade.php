@extends('layouts.admin')
@section('title','')
@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- validation form -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header mt-3">Create new category</h5>
                <div class="card-body">
                    <form action="{{route('admin-store-category')}}" enctype="multipart/form-data" method="post"
                          class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Name</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                       placeholder="Category Name" value="" name="name" required>
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
                                       placeholder="Category code" value="" name="code" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input category code.
                                </div>
                            </div>
                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="input-select">Select Main Category</label>
                                <select class="form-control form-control-sm" name="parent_id" id="input-select">
                                    @foreach($get_parent_category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Image upload</label>
                                <input type="file" class="form-control" id="validationCustom02" placeholder="File input"
                                       value="" name="thumbnail" required>
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
        // Example starter JavaScript for disabling form submissions if there are invalid fields
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
    </script>
@endsection
