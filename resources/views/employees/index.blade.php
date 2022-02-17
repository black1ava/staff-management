@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <div class="d-flex flex-row justify-content-between">
          <h3>Employees table</h3>
          <a href="{{ route('employees.create') }}" class="btn btn-primary">New employee</a>
        </div>
      </div>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of birth</th>
            <th>Roles</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
          @foreach($employees as $employee)
            <tr>
              <td>{{ $employee->id }}</td>
              <td>
                <a href="{{ route('employees.show', $employee) }}" class="card-link">{{ $employee->name }}</a>
              </td>
              <td>{{ $employee->dob }}</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                    Roles
                  </button>
                  <ul class="dropdown-menu">
                    @foreach($employee->roles as $employee_role)
                      <li class="dropdown-item">{{ $employee_role->name }}</li>
                    @endforeach
                  </ul>
                </div>
              </td>
              <td>{{ $employee->phone }}</td>
              <td>{{ $employee->email }}</td>
              <td>{{ $employee->address }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection