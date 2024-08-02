@extends('layout')

@section('title', 'ver ')

@section('content')
    <h1>Show User</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Username: {{ $user->username }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Phone: {{ $user->phone }}</p>
    <p>Address: {{ $user->address }}</p>
    <a href="{{ route('users.index') }}">Back</a>
@endsection