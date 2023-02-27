@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
</div>
<div class="col-sm-6">
    <a href="/">Go Back</a>
    <h2>Name:{{$product['name']}}</h2>
    <h3>Price:{{$product['price']}}</h2>
    <h4>Category:{{$product['category']}}</h2>
    <h4>Description:{{$product['description']}}</h2>
    <br><br>
 
    <form action="/add_to_cart" method="POST">
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        @csrf
        <button type="submit" class="btn btn-success">ADD TO CART</button>
    </form>
    <br><br>
    <button class="btn btn-primary">BUY NOW</button>
    <br><br>

</div>
</div>
</div>
@endsection
