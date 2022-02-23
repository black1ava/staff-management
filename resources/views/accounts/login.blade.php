@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <h2>Login</h2>
      </div>
      <form action="/account/login" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" id="remember" class="custom-control-input">
            <label for="remember" class="custom-control-label">Remeber me</label>
          </div>
        </div>
        <button class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
@endsection