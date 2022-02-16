@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header d-flex flex-row justify-content-between align-items-center">
        <h3>Update role</h3>
        <a href="{{ url()->previous() }}" class="card-link">Back</a>
      </div>
      <form action="{{ route('roles.update', $role) }}" method="post">
        @csrf
        @method('PUT')
        @include('roles.form')
        <button class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
@endsection