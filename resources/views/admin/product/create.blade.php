@extends('layouts.admin')
@section('title','')
@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- validation form -->
        <!-- ============================================================== -->

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header mt-3">Create new product</h5>
                <div class="card-body">
                    <form action="{{route('admin-store-product')}}" enctype="multipart/form-data" method="post"
                          class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Name</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                       placeholder="Product Name" value="" name="name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input product name.
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Description</label>
                                <input type="text" class="form-control" id="validationCustom02"
                                       placeholder="Product description" value="" name="description">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Price</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Price"
                                       value="" name="price" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input product price.
                                </div>
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="input-select">Select Category</label>
                                <select class="form-control form-control-sm" name="parent_category" id="input-select">
                                    @foreach($get_parent_category as $item)
                                        <option
                                            value="{{$item->id}}"
                                            onclick="getSubCategory({{$item->id}})">
                                            {{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="input-select">Select Sub-Category</label>
                                <select class="form-control form-control-sm" name="sub_category" id="sub-input-category"
                                        disabled="disabled"></select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input category.
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Status</label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" value="1" name="status" checked=""
                                           class="form-control custom-control-input">
                                    <span class="custom-control-label">Active</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" value="0" name="status"
                                           class="form-control custom-control-input"><span
                                        class="custom-control-label">Inactive</span>
                                </label>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input status.
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Upload image</label>
                                <input type="file" class="form-control" id="validationCustom02" placeholder="File input"
                                       value="" name="thumbnail" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please upload product image.
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

        // function getSubCategory(id) {
        //     $.ajax({
        //         url: `getSubCategoryProduct`,
        //         data: {id: id},
        //         method: 'GET',
        //         success: (result) => {
        //             // let optList = ``;
        //             // for(let i = 0; i < result.length;i++){
        //             //     let optItem = `<option value="${result[i]}">${ten}</option>`;
        //             //     optList += optItem;
        //             // }
        //             // $('#sub-input-category').html('').append(optList);
        //         }
        //     })
        //     $('#sub-input-category').removeAttr("disabled");
        // }
        function getSubCategory(id) {
            $.ajax({
                url: `/admin/product/getSubCategoryProduct?id=` + id,
                method: 'GET',
                success: (result) => {
                    if (result.length != 0) {
                        let optList = ``;
                        for (let i = 0; i < result.length; i++) {
                            let optItem = `<option value="${result[i].id}">${result[i].name}</option>`;
                            optList += optItem;
                        }
                        $('#sub-input-category').html('').append(optList);
                        $('#sub-input-category').removeAttr("disabled");
                    } else {
                        $('#sub-input-category').attr("disabled", "disabled");
                        $('#sub-input-category').html('').append(`<option value=""></option>`)
                    }
                }
            })
        }

        function getParentId(id) {
            let obj = {};
            obj.id = id;
            obj._method = "get";
            obj._token = $("input[name='_token']").val();
            $.ajax({
                url: '/admin/product/trash/' + id,
                method: "get",
                data: obj,
                success: function (response) {
                    if (response.indexOf('Success')) {
                        alert("Deleted success");
                        location.reload();
                    } else {
                        alert("Deleted not success");
                    }
                }
            });
        }
    </script>
@endsection
