@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="register" method="POST">
          @csrf
          <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="myInput">Password-</label>
    <input type="password" name="password" class="form-control" id="myInput" placeholder="Password">
    <!-- An element to toggle between password visibility -->
  <input type="checkbox" onclick="myFunction()"> <b>Show Password</b>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
@endsection
