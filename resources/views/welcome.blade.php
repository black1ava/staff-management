@extends('layout.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h3>Main table</h3>
            </div>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Roles</th>
                        <th>Phone number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Work at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>
                            <a href="{{ route('employees.show', $employee) }}" class="card-link">{{ $employee->name }}</a>
                        </td>
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
                        <td>
                            <a href="{{ route('companies.show', $employee->company) }}" class="card-link">{{ $employee->company->name }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection