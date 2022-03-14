@extends('master')
@section("content")

<link rel="stylesheet" href="css/styles.css">
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember Password
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
        </div>
    </div>
</div>

@endsection