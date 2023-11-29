@extends('tema.site.index')

@section('titulo', 'Editar Filme')

@section('conteudo')
    <div class="container mt-4">
        <div class="border rounded p-3 mb-3">
        <form action="{{ route('filmes.atualizar', ['id' => $filme->id]) }}" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $filme->titulo }}" required>
                        @error('titulo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="imagem" class="form-label">Imagem Atual</label>
                        @if ($filme->imagem)
                            <img src="{{ asset('caminho/para/sua/imagem/' . $filme->imagem) }}" alt="Imagem Atual" class="img-thumbnail" width="108" height="192">           
                        @else
                            <p>Nenhuma imagem disponível.</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="nova_imagem" class="form-label">Nova Imagem</label>
                        <input type="file" name="imagem" id="imagem" class="form-control">
                        @error('nova_imagem')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control" rows="4" required>{{ $filme->descricao }}</textarea>
                        @error('descricao')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="duracao" class="form-label">Duração (HH:MM)</label>
                        <input type="text" name="duracao" id="duracao" class="form-control" value="{{ substr($filme->duracao, 0, 5) }}" required pattern="^([0-1][0-9]|2[0-3]):[0-5][0-9]$">
                        @error('duracao')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="genero" class="form-label">Gênero</label>
                        <input type="text" name="genero" id="genero" class="form-control" value="{{ $filme->genero }}" required>
                        @error('genero')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="diretor" class="form-label">Diretor</label>
                        <input type="text" name="diretor" id="diretor" class="form-control" value="{{ $filme->diretor }}" required>
                        @error('diretor')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
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
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg">Atualizar</button>
            </div>

            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
        </form>
        </div>
    </div>
@endsection
