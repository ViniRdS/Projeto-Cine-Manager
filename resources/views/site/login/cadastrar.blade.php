@extends('tema.site.index')

@section('titulo', 'Cadastrar Administrador')

@section('conteudo')
    <div class="container mt-4 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 col-lg-5 col-xl-25 offset-xl-1">
        <form action="{{ route('user.cadastrar') }}" method="post">
    @csrf

    <div class="mb-3">
    <label for="username" class="form-label">Nome de Usuário</label>
    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" placeholder="Insera o Nome do Usuario" required>
    @error('username')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Insera a sua Senha" required>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirme a Senha</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirme sua senha" required>
    </div>

    <button type="submit" class="btn btn-primary justify-content-center">Cadastrar</button>
</form>
</div>
</div>
    </div>
@endsection

