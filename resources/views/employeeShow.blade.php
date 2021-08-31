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
        <th>UPDATE</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    @foreach($results as $data)
      <tr>
        <td>{{ $data['id'] }}</td>
        <td> <img src='<?php echo "/storage/".str_replace('public/','',$data['image']); ?>'
         style="border: 1px solid #ddd; border-radius: 6px;
          max-width: 350px; width: 120px; height: 120px; 
          overflow: hidden; border-radius: 100%; 
          margin: -10px auto 0; object-fit: cover;" /></td>
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['email'] }}</td>
        <td>{{ $data['mobile'] }}</td>
        <td>{{ $data['address'] }}</td>
        <td>
        <form  action="">
        @csrf
        <button class="btn btn-dark btn-sm">Edit</button>
        </form>
        </td>
        <td>
        <a href="#">
        <button class="btn btn-dark btn-sm ">Delete</button>
        </a>
        </td>

      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection