@extends('master')
@section("content")

<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>

            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Product Name :{{$item->name}}</h2>
                      <h5>Delivery Status: {{$item->status}}</h5>
                      <h5>Address :{{$item->adress}}</h5>
                      <h5>Payment Status: {{$item->payment_status}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>

                    </div>
             </div>

            </div>
            @endforeach
          </div>


     </div>
</div>
@endsection
