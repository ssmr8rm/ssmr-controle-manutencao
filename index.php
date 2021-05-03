<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Controle de Manutenção - TI</title>

    <link rel="stylesheet" type="text/css" href="assets/css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="http://10.89.8.29/templates/padraogoverno01/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="assets/js/global.js"></script>
  </head>
<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none logo">
        <img src="assets/img/logo_base.png" width="45" height="50">
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="margin-left:15px;">
        <li><a href="#" class="nav-link px-2 text-secondary">Início</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Consulta</a></li>
      </ul>

      <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2" onClick="acessar()">Acesso Administrativo</button>
      </div>
    </div>
  </div>
</header>

<div class="b-example-divider"></div>

<div class="bg-dark text-secondary px-4 py-5 text-center">
  <div class="py-5">
    <h1 class="display-5 fw-bold text-white">Sistema de Controle de Manutenção</h1>
    <div class="col-lg-6 mx-auto">
      <p class="fs-5 mb-4">Acesso Rápido:</p>
      <div id="menu-principal-show" class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" id="btn-sis" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Consulta</button>
      </div>
    </div>
  </div>
</div>


<div class="b-example-divider mb-2"></div>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="position:absolute;left:50%;transform:translateX(-50%);">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Encontre seu Computador</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary">
            <span data-feather="calendar"></span>
            Maio
          </button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          
            <tr>
              <th>#</th>
              <th>Código</th>
              <th>Especificações</th>
              <th>Data de Entrada</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
          <?php

include("config.php");

$sql = mysql_query("SELECT * FROM cadastros ORDER BY id DESC LIMIT 30");

while($lista = mysql_fetch_array($sql)) {

?>
            <tr>
              <td><?php echo $lista['id']; ?></td>
              <td><?php echo $lista['cod']; ?></td>
              <td><?php echo $lista['espec']; ?></td>
              <td><?php echo $lista['date']; ?></td>
              <td><?php echo $lista['status']; ?></td>
            </tr>
            <?php
}
        ?>
          </tbody>
        </table>
      </div>
      <br>
      <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted"><center>&copy; 2021 &rarr; Desenvolvido pela Subseção de Sistemas SSMR/8ª</center></span>
      </div>
      </footer>
</main>

<script type="text/javascript">
  const menu = document.getElementById("menu-principal-show");
  const menudocs = document.getElementById("menu-2-none");
  const menusis = document.getElementById("menu-3-none");

  function documentos() {
    menu.setAttribute('id', 'menu-principal-none');
    menu.removeAttribute('menu-principal-show');
    menudocs.setAttribute('id', 'menu-2-show');
    menudocs.removeAttribute('menu-2-none');
  }

  function sistemas() {
    menu.setAttribute('id', 'menu-principal-none');
    menu.removeAttribute('menu-principal-show');
    menusis.setAttribute('id', 'menu-3-show');
    menusis.removeAttribute( 'menu-3-show');
  }

  function voltar() {
    menu.setAttribute('id', 'menu-principal-show');
    menu.removeAttribute('menu-principal-none');
    menudocs.removeAttribute('menu-2-show');
    menusis.removeAttribute('menu-3-show');
    menudocs.setAttribute('id', 'menu-2-none');
    menusis.setAttribute('id', 'menu-3-none');
  }
  
  function acessar() {
    window.location = "login.php";
  }

</script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="assets/js/dashboard.js"></script>
  
  </body>
</html>