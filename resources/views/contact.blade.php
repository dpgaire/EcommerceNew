@extends('layouts.app')

@section('content')

<div class="container">
<div class="row"> 
<div class="col-sm-5">
<img src="https://exscudo.com/blog/wp-content/uploads/2018/09/protecting-digital-ids.jpg" class="img-fluid" alt="...">

<!-- <h1 class="text-center"> Contact Us</h1> -->

<!-- <img src="https://images.pexels.com/photos/1563356/pexels-photo-1563356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Responsive image"> -->

</div>
<div class="col-sm-7">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

<!-- <form class="form-horizontal" method="post">
<label for="firstname">First Name:</label><br>
<input type="text" name="firstname"><br>
<label for="email">Email:</label><br>
<input type="text" name="email"><br>
<label for="website">Website:</label><br>
<input type="text" name="website"><br>
<label for="message">Message:</label><br>
<input type="longText" name="message"><br><br>
<button type="submit" class="btn btn-primary">Send</button>
</form> -->

</div>


@endsection