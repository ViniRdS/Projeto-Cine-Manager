<div>
    <table>
        <thead hidden>
            <tr>
                <th>Coluna1</th>
                <th>Coluna2</th>
                <th>Coluna3</th>
                <th>Coluna4</th>
                <th>Coluna5</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reg as $key => $filme)
                @if ($key%5==0)
                    @if ($key>0)
                        </tr>
                    @endif
                    <tr>
                @endif
                <td class="celulaFilme">
                    <img src="{{ asset('caminho/para/sua/imagem/' . $filme->imagem) }}" class="d-block mx-auto img-thumbnail" alt="Imagem do Filme" style="width: 200px; height: 300px; object-fit: cover;">

                            <h5>{{ $filme->titulo }}</h5>
                            <!-- Adicione mais informações se necessário -->
                            <div class="btn-group mt-2" role="group" aria-label="Botões de Ação">
                                <a href="{{ route('filmes.visualizar', $filme->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                                <a href="{{ route('filmes.editar', $filme->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <a href="{{ route('filmes.remover', $filme->id) }}" class="btn btn-danger btn-sm">Remover</a>
                            </div>
                </td>
            @endforeach
            </tr>
        </tbody>
    </table>
</div>