@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header d-flex flex-row justify-content-between">
        <h3>Companies table</h3>
        <a href="{{ route('companies.create') }}" class="btn btn-primary">New company</a>
      </div>
      <table class="table-striped table table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Company name</th>
            <th>Location</th>
            <th>Phone</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach($companies as $company)
            <tr>
              <td>{{ $company->id }}</td>
              <td>
                <a href="{{ route('companies.show', $company) }}" class="card-link">{{ $company->name }}</a>
              </td>
              <td>{{ $company->location }}</td>
              <td>{{ $company->phone }}</td>
              <td>{{ $company->email }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection