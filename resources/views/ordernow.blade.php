@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6">
    <table class="table table-striped">
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}} Rupees</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>0 Rupees</td>
      </tr>
      <tr>
        <td>Delivery Charge</td>
        <td>40 Rupees</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+100}}</td>
      </tr>
    </tbody>
  </table>

  <form action="orderplace" method="POST">
    @csrf
  <div class="form-group">
  <textarea placeholder="Enter Your Address" name="address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="">Payment Method</label>
    <p><input type="radio" value="cash" name="payment_method"><span>Online Payment</span></p>
    <p><input type="radio" value="cash" name="payment_method"><span>EMI Payment</span></p>
    <p><input type="radio" value="cash" name="payment_method"><span>Cash on Delivery</span></p>
  </div>
  <button type="submit" class="btn btn-success">Order Now</button>
</form>
</div>
</div>

@endsection
