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

        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status_ativo" value="1" {{ old('status') == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="status_ativo">Em cartaz</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status_inativo" value="0" {{ old('status') == '0' ? 'checked' : '' }}>
                    <label class="form-check-label" for="status_inativo">Em Breve</label>
                </div>
            </div>
            @error('status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

@endsection
