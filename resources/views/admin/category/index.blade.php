@extends('layouts.admin')
@section('title','admin-index-category')
@section('content')
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="">
                            <h5>Categories List</h5>
                            <a class="text-success" href="{{route('admin-create-category')}}">
                                Create new category
                            </a>
                        </div>
                        <div>
                            @if(session('message'))
                                <p id="showMessage" class="alert alert-success"><em>{{session('message')}}</em></p>
                            @endif
                            @if(session('failed'))
                                <p id="showMessage" class="alert alert-danger"><em>{{session('failed')}}</em></p>
                            @endif
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Image</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Code</th>
                                    <th class="border-0">Category Level</th>
                                    <th class="border-0">Create At</th>
                                    <th class="border-0">Update At</th>
                                    <th class="border-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $key => $category)
                                    <tr>
                                        <td>{{ ($currentPage - 1) * $perPage + $key + 1 }}</td>
                                        <td>
                                            <div class="m-r-10"><img
                                                    src="{{asset('assets/img/category/'.$category->thumbnail)}}"
                                                    alt="user"
                                                    class="rounded" width="45"></div>
                                        </td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->code}}</td>
                                        @if($category->parent_id == null)
                                            <td>
                                                <div class="btn btn-outline-primary btn-sm">Lv. 1</div>
                                            </td>
                                        @else
                                            <td>
                                                <div class="btn btn-outline-secondary btn-sm">Lv. 2</div>
                                            </td>
                                        @endif
                                        <td>{{$category->created_at}}</td>
                                        <td>{{$category->updated_at}}</td>
                                        <td>
                                            @if($category->parent_id != null)
                                                <a href="{{route('admin-edit-category', $category->id)}}"
                                                   class="p-1 f-icon fas fa-edit text-primary"></a>
                                                <a href="javascript:void(0)" onclick="deleteRecord({{$category->id}})"
                                                   class="p-1 f-icon fas fa-trash-alt text-danger"></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{$categories->links('pagination::bootstrap-4')}}
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
                    url: '/admin/category/trash/' + id,
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
        setTimeout(() => {
            document.getElementById('showMessage').style.display = 'none';
        }, 2000)
    </script>
@endsection
