@extends('tema.site.index')

@section('titulo','Visualizar Filme')

@section('conteudo')
    <h1>Visualizar Filmes</h1>
    
    <div class="row right">
        <a href="{{route('filmes.listar')}}">Voltar</a>
    </div>
<br>

    <h2>{{$filme->titulo}}</h2>
    <br>
    <img src="{{ asset('img/' . $filme->imagem) }}" alt="{{ $filme->titulo }}" width="270" height="480">
    <br>
    {{$filme->descricao}}
    <br>
    {{$filme->duracao}}
    <br>
    {{$filme->genero}}
    <br>
    {{$filme->diretor}}
    <br>
    {{(isset($filme->status) AND $filme->status)? 'Em Cartaz':'Em Breve'}}
    

@endsection