<div>
    <div class="container mt-4"> 
            <div class="filmes">
                @foreach ($reg as $key => $filme)
                    <div class="filme mx-auto text-center">
                        <img src="{{ asset('caminho/para/sua/imagem/' . $filme->imagem) }}" class="d-block mx-auto img-thumbnail" alt="Imagem do Filme" style="width: 300px; height: 450px; object-fit: cover;">
                            <div class="infos mx-auto text-center">
                                <h5>{{ $filme->titulo }}</h5>
                                <div class="btn-group mt-2" role="group" aria-label="Botões de Ação">
                                    <a href="{{ route('filmes.visualizar', $filme->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye-fill"></i>Visualizar</a>
                                </div>  
                            </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>


