@extends('layout')

@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
        <label>Username</label>
        <input type="text" name="username" value="{{ $user->username }}" required>
        <label>Email</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <label>Phone</label>
        <input type="text" name="phone" value="{{ $user->phone }}" required>
        <label>Password</label>
        <input type="password" name="password">
        <label>Address</label>
        <textarea name="address" required>{{ $user->address }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
