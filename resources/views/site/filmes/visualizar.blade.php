@extends('tema.site.index')

@section('titulo', 'Visualizar Filme')

@section('conteudo')
    <div class="container mt-4">
        <h1>Visualizar Filme</h1>

        <div class="row justify-content-end">
            <a href="{{ route('filmes.listar') }}" class="btn btn-secondary">Voltar</a>
        </div>

        <div class="mt-3">
            <h2>{{ $filme->titulo }}</h2>
            <br>

            <img src="{{ asset('caminho/para/sua/imagem/' . $filme->imagem) }}" alt="Imagem Atual" class="img-thumbnail" width="108" height="192">
            <br>

            <p>{{ $filme->descricao }}</p>
            <p><strong>Duração:</strong> {{ $filme->duracao }}</p>
            <p><strong>Gênero:</strong> {{ $filme->genero }}</p>
            <p><strong>Diretor:</strong> {{ $filme->diretor }}</p>
            <p><strong>Status:</strong> {{ ($filme->status) ? 'Em Cartaz' : 'Em Breve' }}</p>
        </div>
    </div>
@endsection
