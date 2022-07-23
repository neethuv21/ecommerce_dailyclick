@extends('customerheader')
@section('customerbody')
<div style="height:500px;">
<center>
  <div style="width:50%;height:300px;background-color:gray;">
<div>
  <h3 style="padding-top:10px;">Payment</h3>
  @foreach($total as $value)
  @if($value->status=="proceed to pay")
  <form style="padding-top:20px;" action="/paymentaction/{{$value->uid}}" method="post">
    @csrf
<table>
   <tr>
<td> Total amount:{{$value->total}}</td>

  </tr>
 
  <tr>
<td><input type="text" placeholder="Name On Card" style="width:350px;"></td>

  </tr>
 <tr>
<td style="padding-top:10px;"><input type="text" placeholder="Card Number" style="width:350px;"></td>

  </tr>
   <tr>
<td style="padding-top:10px;"><input type="date" placeholder="Exp. Date" style="width:175px;">

<input type="password" placeholder="CVV" style="width:175px;">

</td>

  </tr>
   <tr>
<td style="padding-top:40px;"><center><button type="submit" class="btn btn-info" style="width:175px;">PAY</button></center></td>

  </tr>


</table>


  </form>
 @endif
@endforeach



</div>




  </div>
</center>
</div>

  @endsection