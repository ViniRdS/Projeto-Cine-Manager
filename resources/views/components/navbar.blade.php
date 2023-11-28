<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('filmes.listar') }}"><span style="color: white">CINE</span>MANAGER</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

    
                <span class="navbar-text text-white mx-auto">
                    <h1 navbar-text text-white mx-auto navbar-h1>@yield('titulo')</h1>
                </span>
                    <li class="nav-item ml-auto">
                        <a role="button" class="btn btn-success" id="bntEntrar" href="{{ route('user.index') }}"><i class="bi bi-person-square"></i>  Entrar</a>
                    </li>

            </div>
        </div>
    </nav>
    
</div>