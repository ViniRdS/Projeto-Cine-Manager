@extends('tema.site.index')

@section('titulo', 'Login de Usuário')

@section('conteudo')

@if ($mensagem=Session::get('erro'))
{{$mensagem}}
@endif
    <div class="container mt-4">
        <h1>Login de Usuário</h1>

<form action="{{ route('user.auth') }}" method="POST">
    <div class="mb-3">
        <label for="username" class="form-label">Usuário</label>
        <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Entrar</button>
    {{ csrf_field() }} 
</form>
    </div>
@endsection
