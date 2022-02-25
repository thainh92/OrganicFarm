@extends('layouts.master')
<style type="text/css">
    .payment {
		border:1px solid #f2f2f2;
		height:280px;
        border-radius:20px;
        background:#fff;
	}
    .payment_header {
	   background:rgba(255,102,0,1);
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	}
    .check {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
    } 
    .check i {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:50px;
    }
    .content {
        text-align:center;
    }
    .content  h1 {
        font-size:25px;
        padding-top:25px;
    }
    .content a {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:rgba(255,102,0,1);
        transition:all ease-in-out 0.3s;
    }
</style>
@section('title','Thank You')
@section('content')
    <section class="payment-success-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-5">
                   <div class="payment">
                        <div class="payment_header">
                           <div class="check"><i class='bx bx-check'></i></div>
                        </div>
                        <div class="content">
                            <h1>Payment Success !</h1>
                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p>
                            <a href="{{ route('home-page') }}">Go to Home</a>
                      </div>
                   </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </section>
@endsection
@section('script-tag')
    <script></script>
@endsection