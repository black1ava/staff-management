@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <div class="d-flex flex-row justify-content-between align-items-center">
          <h3>Update company</h3>
          <a href="{{ url()->previous() }}" class="card-link">Back</a>
        </div>
      </div>
      <form action="{{ route('companies.update', $company) }}" method="POST">
        @csrf
        @method('PUT')
        @include('companies.form')
        <button class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
@endsection