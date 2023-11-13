<div>
    <div class="container mt-4">
        <div id="carrossel-filmes" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($reg as $key => $filme)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img src="{{ asset('caminho/para/sua/imagem/' . $filme->imagem) }}" class="d-block mx-auto img-thumbnail" alt="Imagem do Filme" style="width: 400px; height: 600px; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $filme->titulo }}</h5>
                            <!-- Adicione mais informações se necessário -->
                            <div class="btn-group mt-2" role="group" aria-label="Botões de Ação">
                                <a href="{{ route('filmes.visualizar', $filme->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carrossel-filmes" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrossel-filmes" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
</div>