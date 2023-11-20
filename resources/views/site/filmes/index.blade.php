@extends('tema.site.index')

@section('titulo','Listar Filmes')

@section('conteudo')

@auth
<div id="composerListarAdm">
    <x-listar-adm :reg=$reg id="adm"/>
</div>  
@else
<div id="composerListar">
    <x-listar :reg=$reg id="normal"/>
</div>
@endauth
@endsection
