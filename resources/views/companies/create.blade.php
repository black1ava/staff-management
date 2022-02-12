@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header d-flex flex-row justify-content-between">
        <h3>New company</h3>
        <a href="{{ url()->previous() }}" class="card-link d-flex flex-row align-items-center">Back</a>
      </div>
      <form action="{{ route('companies.store') }}" method="POST">
          @csrf
          @include('companies.form')
          <button class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
@endsection