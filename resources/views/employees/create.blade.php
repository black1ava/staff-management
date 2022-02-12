@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <div class="d-flex flex-row justify-content-between align-items-center">
          <h3>New employee</h3>
          <a href="{{ url()->previous() }}" class="card-link">Back</a>
        </div>
      </div>
      <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        @include('employees.form')
        <button class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection