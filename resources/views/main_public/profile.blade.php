@extends('layouts.master')
@section('title','Profile page')
@section('content')
    <div class="profile-page">
        <!-- Start Services Details Area -->
        <section class="services-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="services-details-image">
                            <img src="{{asset('assets/img/main-slider/main-slider-2.png')}}" alt="image">
                        </div>
                        <div class="services-details-desc">
                            @if($orders == null)
                                <div>No data found</div>
                            @else
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Order Id</th>
                                                <th class="border-0">Total price</th>
                                                <th class="border-0">Order status</th>
                                                <th class="border-0">Cancel order</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $key => $order)
                                                <tr>
                                                    <td>{{ ($currentPage - 1) * $perPage + $key + 1 }}</td>
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->total}}</td>
                                                    <td>
                                                        <div class="btn btn-success disabled">
                                                            {{$order->status === 'cancel' ? 'canceled' : $order->status}}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button onclick="cancelOrder()"
                                                                data-order-id="{{$order->id}}"
                                                                class="cancelOrder btn btn-secondary"{{$order->status === "cancel" ? "disabled" : ""}}>
                                                            cancel
                                                        </button>
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
                            @endif

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="services-details-information">
                            <div class="services-contact-info">
                                <h3>Contact Info</h3>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class='bx bx-user-pin'></i>
                                        </div>
                                        <span>Phone:</span>
                                        <a href="tel:+21453545413">+2145 354 5413</a>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class='bx bx-map'></i>
                                        </div>
                                        <span>Location:</span>
                                        New York, USA
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class='bx bx-envelope'></i>
                                        </div>
                                        <span>Email:</span>
                                        <a href="mailto:hello@orgo.com">hello@orgo.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="related-services">
                    <h5>Related Services</h5>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services-box">
                                <div class="icon">
                                    <i class="flaticon-apple"></i>
                                </div>
                                <h3>Natural Food</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt.</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="single-services-box">
                                <div class="icon">
                                    <i class="flaticon-nature"></i>
                                </div>
                                <h3>Biologically Safe</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt.</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="single-services-box">
                                <div class="icon">
                                    <i class="flaticon-forest"></i>
                                </div>
                                <h3>Biodiversity</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt.</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="single-services-box">
                                <div class="icon">
                                    <i class="flaticon-organic"></i>
                                </div>
                                <h3>100% Organic</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt.</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Services Details Area -->
    </div>
@endsection
@section('script-tag')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
        // function cancelOrder() {
            $('.cancelOrder').on('click', function(){
                let dataId = $(this).attr('data-order-id');
                if (confirm("Do you want cancel order? You can't go to back this action")) {
                    $.ajax({
                        type: 'GET',
                        data: {id: $(this).attr('data-order-id'), status: 0},
                        url: "{{route('change-order-status')}}",
                        success: (result) => {
                            console.log();
                            location.reload();
                        }
                    });
                }
            })

        // }
    </script>
@endsection
