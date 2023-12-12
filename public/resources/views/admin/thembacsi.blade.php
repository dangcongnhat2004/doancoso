@extends('admin_layout')
@section('content_admin')
@if (session('error'))
<div class="alert alert-success">
    {{ session('error') }}
</div>
@endif
@if ($errors->has('email'))
<div class="alert alert-danger">
    {{ $errors->first('email') }}
</div>
@endif
<form method="POST" action="{{ URL::to('/them-tai-khoan-bac-si') }}">
    {{ csrf_field() }}
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" class="form-control" id="password" name="password"  placeholder="Enter your password" >
          </div>
        </div>
      </div><br>
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </form>

@endsection

