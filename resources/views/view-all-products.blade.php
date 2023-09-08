@extends('master')
@section('title', 'All Products')
@section('content')
<div class="product-section" style="margin-top:8%;">
    <div class="container-fluid">
        <div class="row grid-row p-2">
            <p style="margin-bottom:3%; font-size:12px;" class="mt-3">
                <a href="{{url('/')}}">Home</a>&nbsp;&nbsp;/<a href="{{url('/view-products')}}" style="color:#99244D;">&nbsp;&nbsp;"All Products"</a>
             </p>

            @foreach ($products as $product)
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
                <a href="{{url('view-single-product/'.$product->slug)}}" class="">
                <div class="card" style="min-height:220px; width:100%;">
                    <div class="card-body ml-2 text-center">
                     <img  class="card-img-top" alt="..." loading="lazy" 
                    src="{{ asset('assets/img/gallery/'.$product->image.'?v=1.4')}}" style="min-height:20%;">
                     <p class="" style="font-weight:bold; font-size:20px; color:#DA83A5;">{{$product->selling_price}}<b style="font-size:18px!important;">&nbsp;&#2547;&nbsp;</b></p></p>
                      <p class="card-title" style="min-height:55px; font-weight:bold; font-size:13px;">{{$product->name}}</p>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
      </div>
     <div class="row mt-5 pagination-row" >
            <div class="col-lg-5 col-md-4 col-sm-3"></div>
                <div class="col-lg-4 col-md-4 col-sm-9 col-12 pagination-col">
                    {{ $products->onEachSide(3)->links() }}
                </div>
            <div class="col-lg-3 col-md-4 col-sm-2 col-12"></div>
        </div>
    </div>
</div>
@endsection
