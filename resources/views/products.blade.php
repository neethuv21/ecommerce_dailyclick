@extends('mainheader')
@section('mainbody')




<section class="products_section">
    <div class="heading_container">
       <h2 style="color:white;">
        New Products In Store
      </h2> 
    </div>

<div class="container layout_padding">
      <div class="product_container">
      	@foreach($result as $value)
        @if($value->status=='Available')
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="/upload/{{$value->productimage}}" height="200px" width="200px" alt="" />
             
            </div>
            <div class="product_detail-box">
             
              <h3>{{$value->pname}}</h3>		
		      <h5>{{$value->prize}}</h5>
            </div>
            
                <button class="btn btn-danger"><a href="/productdetails/{{$value->id}}">View Product</a></button>
              
          </div>
        </a>
        @endif
        @endforeach
       </div>
    </div>
  </section>		

	
@endsection