@extends('tema.site.index')

@section('titulo', 'Cadastrar Filme')

@section('conteudo')
    <h1>Cadastrar Filmes</h1>

    <form action="{{ route('filmes.salvar') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}" required>
            @error('titulo')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" id="imagem" class="form-control">
            @error('imagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="4" required>{{ old('descricao') }}</textarea>
            @error('descricao')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="duracao">Duração (HH:MM)</label>
            <input type="text" name="duracao" id="duracao" class="form-control" value="{{ old('duracao') }}" required pattern="^([0-1][0-9]|2[0-3]):[0-5][0-9]$">
            @error('duracao')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="genero">Gênero</label>
            <input type="text" name="genero" id="genero" class="form-control" value="{{ old('genero') }}" required>
            @error('genero')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="diretor">Diretor</label>
            <input type="text" name="diretor" id="diretor" class="form-control" value="{{ old('diretor') }}" required>
            @error('diretor')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Campo oculto para definir o status como 'Ativo' -->
        <input type="hidden" name="status" value="1">

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

@endsection
