@extends('tema.site.index')

@section('titulo', 'Cadastrar Administrador')

@section('conteudo')
    <div class="container mt-4">
        <h1>Cadastrar Administrador</h1>

        <form action="{{ route('user.cadastrar') }}" method="post">
    @csrf

    <div class="mb-3">
    <label for="username" class="form-label">Nome de Usuário</label>
    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" required>
    @error('username')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" name="password" id="password" class="form-control" required>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirme a Senha</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

    </div>
@endsection

