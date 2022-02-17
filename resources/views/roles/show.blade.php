@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header d-flex flex-row-justify-content align-items">
        <h3>{{ $role->name }}</h3>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            ID: <strong>{{ $role->id }}</strong>
          </li>
        </ul>
        <a href="{{ route('roles.edit', $role) }}" class="card-link">Edit</a>
        <a href="{{ route('roles.destroy', $role) }}" class="card-link text-danger" onclick="event.preventDefault(); document.getElementById('{{ $role->id }}').submit();">Delete</a>
        <form action="{{ route('roles.destroy', $role) }}" id="{{ $role->id }}" method="POST">
          @csrf
          @method('DELETE')
        </form>
      </div>
    </div>
  </div>
@endsection