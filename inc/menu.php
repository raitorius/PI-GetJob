<div class="container-fluid" style="overflow: hidden;">
  <div class="black row text-white" style="justify-content: space-between; background-color: black">
    <div class="navbar">
      <div class="p-4">
        <nav class="navbar navbar-dark black">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

          </button>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent" style="position: absolute; z-index: 2020;">
          <div class="bg-dark p-5">
            <h4 class="text-white">MENU</h4>
            <ul class="col my-5">
              <li class="my-3"><a href="index.php">Inicial</a></li>

              <div class="btn-group dropright">


                <li class="my-3type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href=" cadfuncionario.php">Cadastro </a> </li>
                <div class="dropdown-menu">
                  <ul>
                    <li> <a href="cadfuncionario.php">Funcionário</a></li>
                    <li><a href="cadusuario.php">Usuário</a></li>
                  </ul>
                </div>
              </div>

              <div class="btn-group dropright">


                <li class="my-3type=  " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="login.php">Login</a></li>
                <div class="dropdown-menu">
                  <ul>
                    <li> <a href="loginfuncionario.php">Funcionário</a></li>

                  </ul>
                </div>
              </div>

              <div class="btn-group dropright">

                <li class="my-3type=  " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href=" cadfuncionario.php">Serviços </a> </li>
                <div class="dropdown-menu">
                  <ul>
                    <li> <a href="servicos.php">Funcionários</a></li>

                    <div class="dropdown-menu">
                      <ul>
                        <li> <a href="cadfuncionario.php">Funcionário</a></li>
                        <li><a href="cadusuario.php">Usuário</a></li>
                      </ul>
                    </div>
                </div>



            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="logo"><img class="img-fluid" src="assets/img/logo.png">
    </div>
    <form method="POST" action="inc/teste.php">
      <div style="border: 2px white solid;">pesquisar anúncios</div><br>
      <input type="text" name="pesquisar" placeholder="PESQUISAR">
      <input type="submit" value="ENVIAR">
    </form>
  </div>