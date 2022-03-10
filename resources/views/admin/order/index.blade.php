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
                                    <th class="border-0">Customer ID</th>
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
                                        <td>{{$order->user_id}}</td>
                                        <td>{{$order->last_name . $order->first_name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->phone}}</td>
                                        <td>{{$order->address}}</td>
                                        <td> {{$order->total}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td>{{$order->updated_at}}</td>
                                        <td>
                                            {{--                                            <input name="" type="checkbox"--}}
                                            {{--                                                   id="changeOrderStatus"--}}
                                            {{--                                                   @if($order->status == "approve")--}}
                                            {{--                                                   checked--}}
                                            {{--                                                   @elseif($order->status == "cancel")--}}
                                            {{--                                                   disabled--}}
                                            {{--                                                   @endif--}}
                                            {{--                                                   data-toggle="toggle" data-size="sm" data-on="approve"--}}
                                            {{--                                                   data-off="not approve" data-onstyle="success">--}}
                                                <input name="" type="checkbox"
                                                       class="changeOrderStatus"
                                                       data-order-id="{{$order->id}}"
                                                       {{$order->status === "approve" ? "checked disabled" : ""}}
                                                       {{$order->status === "cancel" ? "disabled" : ""}}
                                                       data-toggle="toggle" data-size="sm" data-on="approve"
                                                       data-off="not approve" data-onstyle="success">
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{$orders->links('pagination::bootstrap-4')}}
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
        $('.changeOrderStatus').change(function () {
            let dataId = $(this).attr('data-order-id');
            let returnVal = confirm("Confirm change order status? You cannot go back to this action! ");
            if (returnVal) {
                if (this.checked) {
                    $(this).attr('disabled', 'disabled');
                    $.ajax({
                        type: 'GET',
                        data: {id: dataId, status: 1},
                        url: "{{route('change-order-status')}}",
                        success: (result) => {
                            console.log();
                            location.reload();
                        }
                    });
                } else {
                    console.log(this.checked)
                }
            } else {
                console.log('hehe')
                $('.changeOrderStatus').prop('checked', false);
                location.reload();
            }
        });

        // $(".changeOrderStatus").change(function() {
        //     console.log(this);
        // });
        //     // $(".changeOrderStatus").each(changeInput);
        //     // function changeInput (e){
        //     //     $(this).on('click',function (){
        //     //         alert('Hello');
        //     //     })
        //     // }
    </script>
@endsection
