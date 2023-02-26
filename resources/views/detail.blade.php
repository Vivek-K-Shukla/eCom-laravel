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
    <button class="btn btn-success">Add To Cart</button>
    <br><br>
    <button class="btn btn-primary">Buy Now</button>
    <br><br>

</div>
</div>
</div>
@endsection
