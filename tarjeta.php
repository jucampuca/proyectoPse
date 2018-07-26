<!DOCTYPE html>
<html> <!-- start html -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- start head -->
	<title>PRUEBA</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style type="text/css"></style>
</head> <!-- end head -->

<body>
    <div class="container">
        <form class="form-amount" action="index.php" method="post">
            <div class="form-group">
                <p><h4><label type="text">Nueva tarjeta de pago</label></h4></p>
                        <h5 class="card-title">Información del banco</h5>
                        <div class="form-row">
                            <div class="col">
                        <div class="form-group">
                            <p><div class="card border-primary mb-3" style="max-width: 40rem;">
                                <label for="selectTipoClient">Tipo de tarjeta: *</label>
                                <select class="form-control" id="selectTipoClient">
                                    <option selected>Seleccione el tipo de tarjeta</option>
                                    <option value="1">MasterCard</option>
                                    <option value="2">BBVA</option>
                                    <option value="3">AmericanExpress</option>
                                    <option value="4">VISA</option>
                                    <option value="5">Discover</option>
                                    <!---->
                                        <div class="form-group">
                                          <select class="form-control" id="selectTipoDoc">
                                            <option selected>Comprueba tu tarjeta</option>
                                          </select>
                                        </div>
                                      </div>
                                    <div class="form-row">
                                      <div class="col">
                                          <div class="form-group">
                                          <label for="inputNumDoc">Número de tarjeta: *</label>
                                          <input type="text" class="form-control" id="inputNumDoc" placeholder="Número de tarjeta" style="max-width: 40rem;">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="inputNumDoc">CVC *</label>
                                                <input type="text" class="form-control" id="inputNumDoc" placeholder="CVC" style="max-width: 10rem;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p><div class="card border-primary mb-3" style="max-width: 17rem;">
                                    <label for="selectTipoClient">Cuotas</label>
                                    <select class="form-control" id="selectTipoClient">
                                        <option selected>Número de cuotas</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </div>
                            </div>
                              </select>
                          </div></p>
                            <p><div class="form-row"></p>
                                <div class="form-group col-md-6">
                                  <img src="mastercard.jpg" class="estilo_bootstrap" width="40" height="30">
                                  <img src="bbva.jpg" class="estilo_bootstrap" width="40" height="30">
                                  <img src="AmericanExpress.jpg" class="estilo_bootstrap" width="40" height="30">
                                  <img src="visa.jpg" class="estilo_bootstrap" width="40" height="30">
                                  <img src="Discover.jpg" class="estilo_bootstrap" width="40" height="30"><br>
                                  <p></p>
                                  <br>
                                  <p><input class="btn btn-lg btn-primary" name="submitPayment" type="submit" value="Pagar"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


</body> <!-- end body -->
</html> <!-- end html -->
