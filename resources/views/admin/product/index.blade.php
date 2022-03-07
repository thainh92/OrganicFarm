@extends('layouts.admin')
@section('title','admin-index-product')
@section('content')
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="">
                            <h5>Products List</h5>
                            <a class="text-success" href="{{route('admin-create-product')}}">
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
                                                @foreach($get_categories as $categories)
                                                <option>{{$categories->name}}</option>
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
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ ($currentPage - 1) * $perPage + $key + 1 }}</td>
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
                                            <a href="{{route('admin-edit-product', $product->id)}}"
                                               class="p-1 f-icon fas fa-edit text-primary"></a>
                                            <a href="javascript:void(0)" onclick="deleteRecord({{$product->id}})"
                                               class="p-1 f-icon fas fa-trash-alt text-danger"></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{$products->links('pagination::bootstrap-4')}}
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
    <script>
        setTimeout(()=>{
            document.getElementById('showMessage').style.display = 'none';
        }, 2000);
    </script>
@endsection
