@extends('layouts.admin')
@section('title','admin-index-user')
@section('content')
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="">
                            <h5>Users List</h5>
                            <a class="text-success" href="{{route('admin-create-user')}}">
                                Create new user
                            </a>
                        </div>
                        <div>
                            @if(session('message'))
                                <p id="showMessage" class="alert alert-success"><em>{{session('message')}}</em></p>
                            @endif
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">Address</th>
                                    <th class="border-0">Phone</th>
                                    <th class="border-0">Role</th>
                                    <th class="border-0">Create At</th>
                                    <th class="border-0">Update At</th>
                                    <th class="border-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key => $user)
                                    <tr>
                                        <td>{{ ($currentPage - 1) * $perPage + $key + 1 }}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->is_admin == 1 ? 'Admin' : 'User'}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updated_at}}</td>
                                        <td>
                                            <a href="{{route('admin-edit-user', $user->id)}}"
                                               class="p-1 f-icon fas fa-edit text-primary"></a>
                                            <a href="javascript:void(0)" onclick="deleteRecord({{$user->id}})"
                                               class="p-1 f-icon fas fa-trash-alt text-danger"></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{$users->links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-tag')
    <script>
        function deleteRecord(id) {
            if (confirm("Do you really want to delete this record")) {
                console.log(id);
                let obj = {};
                obj.id = id;
                obj._method = "delete";
                obj._token = $("input[name='_token']").val();
                $.ajax({
                    url: '/admin/user/trash/' + id,
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
        }
    </script>
    <script>
        setTimeout(()=>{
            document.getElementById('showMessage').style.display = 'none';
        }, 2000);
    </script>
    <script>
        function validateForm() {
            let x = document.forms["searchFormAdmin"]["input_min_price"].value;
            let y = document.forms['searchFormAdmin']['input_max_price'].value;
            if (isNaN(x)) {
                alert("Min price must be a number");
                return false
            }
            if (isNaN(y)) {
                alert("Max price must be a number");
                return false
            }
        }
    </script>
@endsection
