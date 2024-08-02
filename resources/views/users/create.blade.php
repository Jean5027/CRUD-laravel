@extends('layout')

@section('content')
    <h1>Criar usuario</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Nome de usuario</label>
        <input type="text" name="username" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Telefone</label>
        <input type="text" name="phone" required>
        <label>Senha</label>
        <input type="password" name="password" required>
        <label>Endereço</label>
        <textarea name="address" required></textarea>
        <button type="submit">Criar</button>
    </form>
@endsection

