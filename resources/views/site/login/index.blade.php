@extends('tema.site.index')

@section('titulo', 'Login de Usuário')

@section('conteudo')


<div id = "boxes">
    <div id = "leftbox"><img src="/img/CineManagerLogin.png" id="imgLogin"></div> 
    <div id = "rightbox">
        <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center  ">
                <div class="col-md-5 col-lg-9 col-xl-10 offset-xl-1">
                    <div style="text-align: center; color:white">
                    <h1 >Bem vindo!</h1>
                    <p>Entre em sua conta</p>
                    </div>
                    
                  <form action="{{ route('user.auth') }}" method="POST">
                    <!-- Usuario -->
                    <label style="color: white">Usuário</label>
                    
                    <div class="form-outline mb-4 input-group">
                        <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                      <input type="text" name="username"  id="username" class="form-control form-control-lg " value="{{ old('username') }}"
                        placeholder="Digite o nome de Usuário" required>
                    </div>
          
                    <!-- Senha -->
                    <label style="color: white">Senha</label>
                    <div class="form-outline mb-3 input-group">
                    <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                      <input type="password" name="password" id="password" class="form-control form-control-lg"
                        placeholder="Digite sua Senha" required>
                    </div>
                    <br>
                    <div style="text-align: center">
                      <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login  <i class="bi bi-door-open-fill"></i></button>
                    </div>
                    {{ csrf_field() }}
                  </form>
                  <br>
                  <hr style="color:white">

                  <div style="text-align: center">
                    <h1 style="color:white">Ou então</h1>
                    <p style="color:white">veja os filmes cadastrados</p>
                    <a role="button" class="btn btn-dark btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" href="{{ route('filmes.listar') }}"><i class="bi bi-film"></i> Ver Filmes</a>

                  </div>
                  
                </div>
            </div>
        </div>
          </section>
    </div>
</div>


@endsection
