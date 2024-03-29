@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manage Users</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th>{{ $user->name }}</th>
                                    <th>{{ $user->email }}</th>
                                    <th>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</th>
                                    <th>
                                        <a href="{{ route('manager.users.edit', $user->id) }}">
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                        </a>
                                        <form method="POST" action="{{ route('manager.users.destroy', $user->id) }}" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm inline">Delete</button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
