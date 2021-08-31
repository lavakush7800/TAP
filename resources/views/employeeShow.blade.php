@extends('layouts.app')
@section('title','egistration_show')
@section('content')

<div class="container-fluid">
 <center> <h2>Employee Table</h2></center>   
  <table class="table bg-primary text-white">
    <thead class="text-light bg-dark">
      <tr>
        <th>ID</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>ADDRESS</th>
      </tr>
    </thead>
    <tbody>
    @foreach($results as $data)
      <tr>
        <td>{{ $data['id'] }}</td>
        <td><img src='<?php echo "/storage/".str_replace('public/','',$data['image']); ?>' width="80" /></td>
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['email'] }}</td>
        <td>{{ $data['mobile'] }}</td>
        <td>{{ $data['address'] }}</td>

      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection