@extends('tema.site.index')

@section('titulo','Listar Filmes')

@section('conteudo')

<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="switchAdm" checked>
    <label class="form-check-label" for="switchAdm">ADM</label>
</div>

<div id="composerListar" style="display: none;">
    <x-listar :reg=$reg id="normal"/>
</div>

<div id="composerListarAdm">
    <x-listar-adm :reg=$reg id="adm"/>
</div>

@endsection
