@extends('layouts.admin')
@section('title','')
@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- validation form -->
        <!-- ============================================================== -->

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header mt-3">Create new user</h5>
                <div class="card-body">
                    <form action="{{route('admin-store-user')}}" enctype="multipart/form-data" method="post"
                          class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Name</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                       placeholder="Username" value="" name="name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input username.
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Email Address</label>
                                <input type="email" class="form-control" id="validationCustom01"
                                       placeholder="Email Address" value="" name="email" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input user's email.
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Address</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                       placeholder="Address" value="" name="address" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input user's address.
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Phone</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                       placeholder="Phone" value="" name="phone" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input user's phone number.
                                </div>
                            </div>
                            <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="form-group pt-2">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                              placeholder="Product description" value="" name="description"></textarea>
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div> -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">
                                    Password
                                    
                                </label>
                                <input type="password" class="form-control" id="password"
                                       placeholder="Password" value="" name="password" required>
                                <span id="password-feedback-admin" style="font-size: 12px;"></span>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">
                                    Confirm Password
                                    
                                </label>
                                <input type="password" class="form-control" id="password-confirm"
                                       placeholder="Confirm Password" value="" name="password_confirmation" required>
                                <span id="password-confirm-feedback-admin" style="font-size: 12px;"></span>
                                <!-- <span id="password-confirm-feedback"></span> -->
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                <label class="pt-2" for="validationCustom01">Role</label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" value="1" name="role"
                                           class="form-control custom-control-input">
                                    <span class="custom-control-label">Admin</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" value="0" name="role" checked=""
                                           class="form-control custom-control-input"><span
                                        class="custom-control-label">User</span>
                                </label>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please input status.
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <button id='submit-button-create-user' class="btn btn-primary" type="submit">Submit form</button>
                                <!-- <button class="btn btn-success" type="submit">Clear</button> -->
                                <a href="{{route('admin-user-index')}}" class="btn btn-danger">Back</a>
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
        $('#password, #password-confirm').on('keyup', function () {
            if ($('#password').val().length < 8 && $('#password-confirm').val().length < 8) {
                $('#password-feedback-admin').html('Password must be at least eight characters long.').css({'color': '#dc3545'});
                $('#submit-button-create-user').prop('disabled', true);
                $('#submit-button-create-user').css('cursor', 'default');
                $('#password').css({'borderColor': '#dc3545'});
            } else {
                $('#password-feedback-admin').html('Valid password').css('color', 'green');
                $('#submit-button-create-user').prop('disabled', false);
                $('#submit-button-create-user').css('cursor', 'pointer');
                $('#password').css({'borderColor': '#28a745'});

                if ($('#password').val() == $('#password-confirm').val()) {
                    $('#password-confirm-feedback-admin').html('Password matched').css('color', 'green');
                    $('#submit-button-create-user').prop('disabled', false);
                    $('#password-confirm').css({'borderColor': '#28a745'});
                  } else {
                    $('#password-confirm-feedback-admin').html('Password unmatched').css('color', '#dc3545');
                    $('#submit-button-create-user').prop('disabled', true);
                    $('#submit-button-create-user').css('cursor', 'default');
                    $('#password-confirm').css({'borderColor': '#dc3545'});
                  }
            }       
        });

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
    </script>
@endsection
