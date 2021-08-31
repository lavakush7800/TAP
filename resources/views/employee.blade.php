@extends('layouts.app')

@section('content')
<div class="container card">
    <center><h2><b>Emoloyee Register</b></h2></center>
<form method="post" action="/save" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="image">image:</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="number" class="form-control" id="mobile" name="mobile">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
