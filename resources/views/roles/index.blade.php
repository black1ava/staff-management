@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header d-flex flow-row justify-content-between align-items-center">
        <h3>Roles table</h3>
        <a href="{{ route('roles.create') }}" class="btn btn-primary">New role</a>
      </div>
      <table class="table-dark table-striped table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($roles as $role)
            <tr>
              <td>{{ $role->id }}</td>
              <td>
              <a href="{{ route('roles.show', $role) }}" class="card-link">{{ $role->name }}</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection