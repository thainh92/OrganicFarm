@extends('layouts.admin')
@section('title','admin-index-user')
@section('content')
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="">
                            <h5>Products List</h5>
                            <a class="text-success" href="#">
                                Create new product
                            </a>
                        </div>
                        <div>
                            @if(session('message'))
                                <p id="showMessage" class="alert alert-success"><em>{{session('message')}}</em></p>
                            @endif
                        </div>
                    </div>
                    <div class="card-header">
                        <form>
                            <div>
                                <div class="row">
                                    <div class="form-group col-lg-4 col-sm-6" >
                                        <label for="inputDefault" class="col-form-label">Search by name</label>
                                        <input style="height: 38px" id="inputDefault" type="text" value="Default input" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-4 col-sm-6">
                                        <label for="inputDefault" class="col-form-label">Search by category</label>
                                        <select class="form-control">
                                            @foreach($users as $user)
                                                <option>{{$user->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-group col-lg-4 col-sm-6">
                                        <label for="inputDefault" class="col-form-label">Search by status</label>
                                        <select class="form-control">
                                            <option>Default select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="btn btn-success">
                                    Search
                                </div>
                            </div>
                        </form>
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
                                        <td>{{($user->phone}}</td>
                                        <td>{{$user->is_admin == 1 ? 'Admin' : 'User'}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updated_at}}</td>
                                        <td>
                                            <a href="{{route('admin-edit-product', $user->id)}}"
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
@endsection
