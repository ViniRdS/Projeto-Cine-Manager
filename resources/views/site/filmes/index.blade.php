@extends('tema.site.index')

@section('titulo','Listar Filmes')

@section('conteudo')
    <div class="row">
        <div class="center">
            <h1>Listar Filmes</h1>
        </div>
        <div class="row right">
            <a href="{{route('filmes.cadastrar')}}">Novo</a>
        </div>
        <table>
            <thead>
                <tr>

                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Duração</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reg as $filme)
                    <tr>

                        <td>
                            <!-- Adicionado para exibir a imagem -->
                            <img src="{{ asset('caminho/para/sua/imagem/' . $filme->imagem) }}" alt="Imagem Atual" class="img-thumbnail" width="108" height="192">            
                        </td>
                        <td>{{$filme->titulo}}</td>
                        <td>{{$filme->duracao}}</td>
                        <td>{{(isset($filme->status) AND $filme->status)? 'Em Cartaz':'Em Breve'}}</td>
                        <td>
                            <a href="{{route('filmes.visualizar',$filme->id)}}">Visualizar</a>
                            <a href="{{route('filmes.editar',$filme->id)}}">Editar</a>
                            <a href="{{route('filmes.remover',$filme->id)}}">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection