<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com Project</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height:500px;
        padding-top:100px;
    }
    .img.slider-img{
        height:300px !important;
    }
    .custom-product{
        height:500px;
    }
    .slider-text{
        background-color:#24465454 !important;
    }
    .trending-img{
        height:100px;
    }
    .trending-item{
        float:left;
        width:20%;
    }
    .trending-wrapper{
        margin:20px;
    }
    .detail-img{
        height:200px;
    }
    .search-form{
        width:500px;
    }
    .cart-list-devider{
        border-bottom:1px solid #ccc;
        margin-bottom:20px;
        padding-bottom:20px;
    }

    </style>
</html>