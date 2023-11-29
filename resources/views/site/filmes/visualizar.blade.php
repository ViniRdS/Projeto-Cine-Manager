@extends('tema.site.index')

@section('titulo', 'Visualizar Filme')

@section('conteudo')
    <div class="container mt-4">
        <div class="row mt-3">
            <div class="col-md-6">
                <img src="{{ asset('caminho/para/sua/imagem/' . $filme->imagem) }}" alt="Imagem Atual" class="img-thumbnail" width="648" height="1152">
            </div>

            <div class="col-md-6">
                <div class="border rounded p-3 mb-3">
                    <h2>{{ $filme->titulo }}</h2>
                </div>

                <div class="border rounded p-3 mb-3">
                    <p><strong>Sinopse:</strong> {{ $filme->descricao }}</p>
                </div>

                <div class="border rounded p-3 mb-3">
                    <p><strong>Duração:</strong> {{ $filme->duracao }}</p>
                </div>

                <div class="border rounded p-3 mb-3">
                    <p><strong>Gênero:</strong> {{ $filme->genero }}</p>
                </div>

                <div class="border rounded p-3 mb-3">
                    <p><strong>Diretor:</strong> {{ $filme->diretor }}</p>
                </div>

                <div class="border rounded p-3 mt-3">
                    <p><strong>Status:</strong> {{ ($filme->status) ? 'Em Cartaz' : 'Em Breve' }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
