@extends('layout')

@section('content')
    <h1>Users</h1>
    <a href="{{ route('users.create') }}">Create New User</a>
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    <table>
        <tr>
            <th>Nome</th>
            <th>Nome de usuario</th>
            <th>Email</th>
            <th>telefone</th>
            <th>Endereço</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}">Show</a>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection