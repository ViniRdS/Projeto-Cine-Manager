@extends('tema.site.index')

@section('titulo','Editar Filme')

@section('conteudo')
    <h1>Editar Filmes</h1>

    <form action="{{ route('filmes.atualizar', ['id' => $filme->id]) }}" method="POST" enctype="multipart/form-data">    

    <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $filme->titulo }}" required>
            @error('titulo')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="imagem">Imagem Atual</label>
            @if ($filme->imagem)
            <img src="{{ asset('caminho/para/sua/imagem/' . $filme->imagem) }}" alt="Imagem Atual" class="img-thumbnail" width="108" height="192">           
            @else
                <p>Nenhuma imagem disponível.</p>
            @endif
        </div>

        <div class="form-group">
            <label for="nova_imagem">Nova Imagem</label>
            <input type="file" name="imagem" id="imagem" class="form-control">
            @error('nova_imagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="4" required>{{ $filme->descricao }}</textarea>
            @error('descricao')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="duracao">Duração (HH:MM)</label>
            <input type="text" name="duracao" id="duracao" class="form-control" value="{{ $filme->duracao }}" required pattern="^([0-1][0-9]|2[0-3]):[0-5][0-9]$">
            @error('duracao')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="genero">Gênero</label>
            <input type="text" name="genero" id="genero" class="form-control" value="{{ $filme->genero }}" required>
            @error('genero')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="diretor">Diretor</label>
            <input type="text" name="diretor" id="diretor" class="form-control" value="{{ $filme->diretor }}" required>
            @error('diretor')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
    <label>Status</label>
    <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="status_ativo" value="1" {{ $filme->status == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="status_ativo">Em cartaz</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="status_inativo" value="0" {{ $filme->status == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="status_inativo">Em Breve</label>
        </div>
    </div>
    @error('status')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

        <button type="submit" class="btn btn-primary">atualizar</button>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
    </form>
@endsection