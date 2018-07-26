<?php

 ?>


  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>PHP con el WebServices de PSE</title>
  </head>

  <body>
    <div class="container">
      <h1>PHP con el WebServices de PSE</h1>
      <form>

        <!-- Para registrarse -->

        <h3>Iniciar registro</h3>
        <div class="container">
         <img src="imgpse.jpg" class="estilo_bootstrap" align=right width="350" height="200"></img>
        </div>
            <div class="card border-primary mb-3" style="max-width: 40rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información del cliente</h5>
                            <div class="form-row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="selectTipoDoc">Tipo de documento: *</label>
                                  <select class="form-control" id="selectTipoDoc">
                                    <option selected>Seleccione el tipo de documento</option>
                                    <option value="1">Cédula de ciudadanía</option>
                                    <option value="2">Cédula de extranjería</option>
                                    <option value="3">NIT</option>
                                    <option value="3">Pasaporte</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col">
                                <div class="form-group">
                                  <label for="inputNumDoc">Número de documento: *</label>
                                  <input type="text" class="form-control" id="inputNumDoc" placeholder="Identificación">
                                </div>
                              </div>
                            </div>
                        <div class="form-group">
                          <label for="inputNombre">Nombre: *</label>
                          <input type="text" class="form-control" id="inputNombre" placeholder="Nombre y Apellido">
                        </div>

                        <div class="form-group">
                          <label for="inputCel">Número de teléfono:</label>
                          <input type="number" class="form-control" id="inputCel" placeholder="123456789">
                        </div>

                        <div class="form-group">
                          <label for="inputEmail">Email: *</label>
                          <input type="email" class="form-control" id="inputEmail" placeholder="tuCorreo@ejemplo.com">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-secondary mb-3" style="max-width: 40rem;">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Información del banco</h5>
                    <div class="form-group">
                      <label for="selectTipoClient">Tipo de cliente: *</label>
                      <select class="form-control" id="selectTipoClient">
                            <option selected>Seleccione el tipo de cliente</option>
                            <option value="1">Persona Natural</option>
                            <option value="2">Persona Jurídica</option>
                          </select>
                    </div>

                    <div class="form-group">
                      <label for="selectBanc">Entidad Financiera: *</label>
                      <select class="form-control" id="selectBanc">
                            <option selected>Seleccionar Banco</option>
                            <option value="1">BANCO UNIÓN COLOMBIANO</option>
                            <option value="2">BANCO AGRARIO</option>
                            <option value="3">BANCO AV VILLAS</option>
                            <option value="4">BANCO BBVA COLOMBIA S.A.</option>
                            <option value="5">BANCO CAJA SOCIAL</option>
                            <option value="6">BANCO COLPATRIA</option>
                            <option value="7">BANCO COOPERATIVO COOPCENTRAL</option>
                            <option value="8">BANCO DAVIVIENDA</option>
                            <option value="9">BANCO DE BOGOTA</option>
                            <option value="10">BANCO DE OCCIDENTE</option>
                            <option value="11">BANCO FALABELLA </option>
                            <option value="12">BANCO GNB SUDAMERIS</option>
                            <option value="13">BANCO PICHINCHA S.A.</option>
                            <option value="14">BANCO POPULAR</option>
                            <option value="15">BANCO PROCREDIT</option>
                            <option value="16">BANCO SANTANDER COLOMBIA</option>
                            <option value="17">BANCOLOMBIA</option>
                            <option value="18">BANCOOMEVA S.A.</option>
                            <option value="19">CITIBANK </option>
                            <option value="20">ITAU</option>
                            <option value="21">NEQUI</option>
                          </select>
                    </div>
                </div>
            </div>
            </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
                Recibir notificaciones de productos y servicios
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <p><label class="form-check-label" for="exampleRadios2">
              No recibir notificaciones de productos y servicios
          </label></p>
        </div>
            <p><a type="button" class="btn btn-primary" href="pse.php">Enviar a PSE</a></p>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>

  </html>
