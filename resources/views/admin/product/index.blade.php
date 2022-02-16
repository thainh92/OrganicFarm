@extends('layouts.admin')
@section('title','admin-index-product')
@section('content')
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Products List</h5>
                    <h5 class="card-header">
                        <a class="text-success" href="{{route('admin-create-product')}}">
                            Create new product
                        </a>
                    </h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Image</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Description</th>
                                    <th class="border-0">Category</th>
                                    <th class="border-0">Discount</th>
                                    <th class="border-0">Price</th>
                                    <th class="border-0">Status</th>
                                    <th class="border-0">Create At</th>
                                    <th class="border-0">Update At</th>
                                    <th class="border-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $id = 1;
                                @endphp
                                @foreach($products as $product)

                                    <tr>
                                        <td>{{$id}}</td>
                                        @php
                                            $id++;
                                        @endphp
                                        <td>
                                            <div class="m-r-10"><img
                                                    src="{{asset('assets/img/product/'.$product->thumbnail)}}"
                                                    alt="user"
                                                    class="rounded" width="45"></div>
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->category_name}}</td>
                                        <td>{{($product->discount_id != null) ? $item->discount : 'None'}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{ ($product->status == 1) ? 'Active' : 'Disable'}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>{{$product->updated_at}}</td>
                                        <td>
                                            <a href="{{route('admin-edit-product', $product)}}"
                                               class="p-1 f-icon fas fa-edit text-primary"></a>
                                            <a href="javascript:void(0)" onclick="deleteRecord({{$product->id}})"
                                               class="p-1 f-icon fas fa-trash-alt text-danger"></a>
                                        </td>
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
@endsection
@section('script-tag')
    <script>
        function deleteRecord(id) {
            if (confirm("Do you really want to delete this record")) {
                let obj = {};
                obj.id = id;
                obj._method = "delete";
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
        }
    </script>
@endsection
