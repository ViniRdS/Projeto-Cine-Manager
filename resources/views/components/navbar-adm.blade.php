<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('filmes.listar') }}"><span style="color: white">CINE</span>MANAGER</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    
                    <li class="nav-item me-auto px-2">
                        <a role="button" class="btn btn-primary" id="btnNovoFilme" href="{{ route('filmes.cadastrar') }}"><i class="bi bi-plus-circle"></i> Novo Filme</a>
                    </li>
                </ul>
    
                <span class="navbar-text text-white mx-auto">
                    <h1 navbar-text text-white mx-auto navbar-h1>@yield('titulo')</h1>
                </span>
    
                    <li class="nav-item ml-auto">
                    <a role="button" class="btn btn btn-warning" id="btnNovoAdm" href="{{ route('user.cadastrar') }}"><i class="bi bi-person-fill-add"></i>  Cadastrar Administrador</a>
                    </li>

                    
                    <li class="nav-item ml-auto">
                        <a role="button" class="btn btn-danger" id="btnSair" href="{{ route('user.logout') }}"><i class="bi bi-box-arrow-left"></i> Sair</a>
                    </li>

            </div>
        </div>
    </nav>
    
</div>