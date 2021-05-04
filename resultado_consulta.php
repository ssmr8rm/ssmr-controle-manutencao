<?php
include("config.php");
?>
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
        <li><a href="inicio.php" class="nav-link px-2 text-white">Início</a></li>
        <li><a href="editar.php" class="nav-link px-2 text-secondary">Editar Cadastros</a></li>
      </ul>

      <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2" onClick="sair()">Sair</button>
      </div>
    </div>
  </div>
</header>

<div class="b-example-divider"></div>
<br>

<div class="col-md-7 col-lg-8" style="position:absolute;left:50%;transform:translateX(-50%);">
        <h4 class="mb-3">Consulta de Manutenção</h4>
        <form class="needs-validation" novalidate action="edition.php" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
            <?php
            include("config.php");
            $id = $_GET['id'];
            $sql = mysql_query("SELECT * FROM cadastros WHERE id=$id");
            
            while($lista = mysql_fetch_array($sql)) {
                ?>
                <input type="text" name="id" value="<?php echo $lista['id']; ?>" style="display:none;">
              <label for="firstName" class="form-label">Código (Automático)</label>
              <input type="text" class="form-control" id="cod"  value="
              <?php
                echo $lista['cod'];
              ?>
              " disabled>
              <div class="invalid-feedback">
                Requer um código
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Especificação</label>
              <input disabled type="text" class="form-control" id="espc"  placeholder="" value="<?php
                echo $lista['espec'];
              ?>" required>
              <div class="invalid-feedback">
                Requer uma especificação
              </div>
            </div>

            <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Data de Entrada</label>
              <input disabled type="date" class="form-control" id="date" placeholder="" value="<?php
                echo $lista['date'];
              ?>" required>
              <div class="invalid-feedback">
                Requer uma data
              </div>
            </div>


            <div class="col-md-5">
              <label for="country" class="form-label">Status</label>
              <select class="form-select" id="country" name="status" required>
                <option value="0">Escolha...</option>
                <option value="1">Entrou em carga</option>
                <option value="2">Em Vistoria</option>
                <option value="3">Em Conserto</option>
                <option value="4">Aguardando Entrega</option>
              </select>
              <div class="invalid-feedback">
                Escolha um status
              </div>
            </div>
            

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Atualizar</button>
        </form>
        <?php
            }
            ?>
      </div>
    </div>
  </main>
</div>
<div class="b-example-divider"></div>
<br><br>

<script src="https://getbootstrap.com/docs/5.0/examples/checkout/form-validation.js"></script>

<script type="text/javascript">
    function sair() {
        window.location = "logout.php";
    }
</script>