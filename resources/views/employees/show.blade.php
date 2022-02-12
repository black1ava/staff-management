@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <div class="d-flex flex-row justify-content-between align-items-center">
          <h3>{{ $employee->name }}</h3>
          <a href="{{ url()->previous() }}" class="card-link">Back</a>
        </div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          ID: <strong>{{ $employee->id }}</strong>
        </li>
        <li class="list-group-item">
          Date of birth: <strong>{{ $employee->dob }}</strong>
        </li>
        <li class="list-group-item">
          Phone number: <strong>{{ $employee->phone }}</strong>
        </li>
        <li class="list-group-item">
          Email: <strong>{{ $employee->email }}</strong>
        </li>
        <li class="list-group-item">
          Address: <strong>{{ $employee->address }}</strong>
        </li>
        <li class="list-group-item">
          Work at: <strong>{{ $employee->company->name }}</strong>
        </li>
      </ul>
      <br>
      <a href="{{ route('employees.edit', $employee) }}" class="card-link">Edit</a>
      <a href="{{ route('employees.destroy', $employee) }}" class="card-link" onclick="event.preventDefault(); document.getElementById('{{ $employee->id }}').submit();">Destroy</a>
      <form action="{{ route('employees.destroy', $employee) }}" id="{{ $employee->id }}" method="post">
        @csrf
        @method('DELETE')
      </form>
    </div>
  </div>
@endsection