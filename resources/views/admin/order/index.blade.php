@extends('layouts.admin')
@section('title','admin-index-order')
@section('content')
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="">
                            <h5>Orders List</h5>
                        </div>
                    </div>
{{--                    <div class="card-header">--}}
{{--                        <form>--}}
{{--                            <div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="form-group col-lg-4 col-sm-6" >--}}
{{--                                        <label for="inputDefault" class="col-form-label">Search by name</label>--}}
{{--                                        <input style="height: 38px" id="inputDefault" type="text" value="Default input" class="form-control">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group col-lg-4 col-sm-6">--}}
{{--                                        <label for="inputDefault" class="col-form-label">Search by category</label>--}}
{{--                                        <select class="form-control">--}}
{{--                                            @foreach($orders as $order)--}}
{{--                                                <option>{{$categories->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}

{{--                                    </div>--}}
{{--                                    <div class="form-group col-lg-4 col-sm-6">--}}
{{--                                        <label for="inputDefault" class="col-form-label">Search by status</label>--}}
{{--                                        <select class="form-control">--}}
{{--                                            <option>Default select</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="btn btn-success">--}}
{{--                                    Search--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">Phone</th>
                                    <th class="border-0">Order Address</th>
                                    <th class="border-0">Total Price</th>
                                    <th class="border-0">Order Status</th>
                                    <th class="border-0">Create At</th>
                                    <th class="border-0">Update At</th>
                                    <th class="border-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $key => $order)
                                    <tr>
                                        <td>{{ ($currentPage - 1) * $perPage + $key + 1 }}</td>
                                        <td>{{$order->last_name . $order->first_name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->phone}}</td>
                                        <td>{{$order->address}}</td>
                                        <td> number</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td>{{$order->updated_at}}</td>
                                        <td>
{{--                                            <a href="{{route('admin-edit-product', $product->id)}}"--}}
{{--                                               class="p-1 f-icon fas fa-edit text-primary"></a>--}}
{{--                                            <a href="javascript:void(0)" onclick="deleteRecord({{$product->id}})"--}}
{{--                                               class="p-1 f-icon fas fa-trash-alt text-danger"></a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
{{--                            <div class="mt-3">--}}
{{--                                {{$products->links('pagination::bootstrap-4')}}--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
