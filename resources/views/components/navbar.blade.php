<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CineManager</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item me-auto px-2">
                        <a role="button" class="btn btn-secondary" href="{{ route('filmes.listar') }}">Filmes</a>
                    </li>
                    <li class="nav-item me-auto px-2">
                        <a role="button" class="btn btn-primary" id="btnNovoFilme" href="{{ route('filmes.cadastrar') }}">Novo Filme</a>
                    </li>
                </ul>
    
                <span class="navbar-text text-white mx-auto">
                    <h1 navbar-text text-white mx-auto navbar-h1>@yield('titulo')</h1>
                </span>
    
                    <li class="nav-item ml-auto">
                    <a role="button" class="btn btn btn-warning" id="btnNovoAdm" href="{{ route('user.cadastrar') }}">Cadastrar Administrador</a>
                    </li>

                    <li class="nav-item ml-auto">
                        <a role="button" class="btn btn-success" id="bntEntrar" href="{{ route('user.login') }}" style="display: none;">Entrar</a>
                    </li>

                    <li class="nav-item ml-auto">
                        <a role="button" class="btn btn-danger" id="btnSair" href="#">Sair</a>
                    </li>

            </div>
        </div>
    </nav>
    
</div>