@extends('tema.site.index')

@section('titulo', 'Cadastrar Administrador')

@section('conteudo')
    <div class="container mt-4 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 col-lg-5 col-xl-25 offset-xl-1">
        <form action="{{ route('user.cadastrar') }}" method="post">
    @csrf
    <div class="border rounded p-3 mb-3">
    <h5>Nome de Usuário</h5>
    <div class="mb-3 input-group">
    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" placeholder="Insera o Nome do Usuario" required>
    @error('username')
        <span class="text-danger">Nome de Usuário já cadastrado</span>
    @enderror
    </div>

    <h5>Senha</h5>
    <div class="mb-3 input-group">
        <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
        <input type="password" name="password" id="password" class="form-control" placeholder="Insera a sua Senha" required>
    </div>

    <h5>Confirme a Senha</h5>
    <div class="mb-3 input-group">
        <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirme sua senha" required>
        @error('password')
        <span class="text-danger">As senhas não são iguais</span>
        @enderror
    </div>

    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
    </div>
</form>
    </div>
</div>
</div>
    </div>
@endsection

