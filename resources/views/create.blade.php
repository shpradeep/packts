

@extends('layout')

@section('content')
<div style="margin-left: 20%;margin-right: 50%;">
<h1>Add User</h1>

<form action="{{ route('createsubmit')  }}" method="post">
@csrf
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" name = "name" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" placeholder="Enter email" name = "email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name = "password" id="pwd">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection