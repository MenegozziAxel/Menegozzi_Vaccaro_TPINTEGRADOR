<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Sistema de control de stock</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body class="container">
        <center>
            <br>
      </div>    
      <div class="text-center">
        <h3>Sistema de control de stock</h3>
        <?php
            if (isset($_GET['mensaje'])) {
                echo '<div id="mensaje" class="alert alert-danger text-center">
                    <p>'.$_GET['mensaje'].'</p></div>';
            }
        ?>
          <form action="login.php" method="post">
<div class="vh-50 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-10 col-md-8 col-lg-4">
        <div class="border border-3 border-primary"></div>
        <div class="card bg-white shadow-lg">
          <div class="card-body p-5">
            <form class="mb-3 mt-md-4">
              <h3 class="fw-bold mb-2 text-uppercase ">Iniciar sesion</h3>
              <p class=" mb-5">Ingrese su usuario y su contraseña</p>
              <div class="mb-3">
              <input name="usuario" class="form-control form-control-md" placeholder="Usuario"><br>
              </div>
              <div class="mb-3">
              <input name="contraseña" type="text" class="form-control form-control-md" placeholder="Contraseña"><br>
              <div class="d-grid">
                <button class="btn btn-outline-dark" type="submit">Ingresar</button>
              </div>
            </form>
            <div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </center>
    </body>
</html>
