@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <div class="d-flex flex-row justify-content-between align-items-center">
          <h3>{{ $company->name }}</h3>
          <a href="{{ url()->previous() }}" class="card-link">Back</a>
        </div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          ID: <strong>{{ $company->id }}</strong>
        </li>
        <li class="list-group-item">
          Location: <strong>{{ $company->location }}</strong>
        </li>
        <li class="list-group-item">
          Phone: <strong>{{ $company->phone }}</strong>
        </li>
        <li class="list-group-item">
          Email: <strong>Email: {{ $company->email }}</strong>
        </li>
        <li class="list-group-item">
          Employees:
          <ul>
            @foreach($company->employees as $employee)
              <li>
                <a href="{{ route('employees.show', $employee) }}" class="card-link">{{ $employee->name }}</a>
              </li>
            @endforeach
          </ul>
        </li>
      </ul>
      <a href="{{ route('companies.edit', $company) }}" class="card-link">Edit</a>
      <a href="{{ route('companies.destroy', $company) }}" class="card-link" onclick="event.preventDefault(); document.getElementById('{{ $company->id }}').submit();">Destroy</a>
      <form action="{{ route('companies.destroy', $company) }}" id="{{ $company->id }}" method="post">
        @csrf
        @method('DELETE')
      </form>
    </div>
  </div>
@endsection