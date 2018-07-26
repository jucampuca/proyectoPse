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
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>PHP con el WebServices de PSE</title>
  </head>

  <body>
      <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Cabecera de la ventana</h3>
     </div>
         <div class="modal-body">
            <h4>Texto de la ventana</h4>
            Mas texto en la ventana.
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>
      <div class="container">
          <h1>Realiza el pago</h1>
          <div class="card border-primary mb-3" style="max-width: 50rem;">
              <div class="card">
                  <div class="card-body">
                      <form>
                          <div class="form-group">
                              <label class="control-label col-xs-3">Nombre:</label>
                              <div class="col-xs-9">
                                  <input type="text" class="form-control" placeholder="Nombre">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-xs-3">Apellido:</label>
                              <div class="col-xs-9">
                                  <input type="text" class="form-control" placeholder="Apellido">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-xs-3" >Telefono:</label>
                              <div class="col-xs-9">
                                  <input type="tel" class="form-control" placeholder="Telefono">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-xs-3">Dirección:</label>
                              <div class="col-xs-9">
                                  <textarea rows="3" class="form-control" placeholder="Dirección"></textarea>
                              </div>
                          </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                            <!-- Información nueva -->
                          <div class="form-group">
                    <label class="control-label col-xs-3">Confirmar Password:</label>
                    <div class="col-xs-9">
                        <input type="password" class="form-control" placeholder="Confirmar Password">
                    </div>
                </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">F. Nacimiento:</label>
                            <div class="form-row" style="width: 10rem">
                                <div class="col">
                                    <div class="col-xs-3">
                                        <select class="form-control">
                                            <option>Dia</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-3">
                                        <select class="form-control">
                                            <option>Mes</option>
                                            <option>Enero</option>
                                            <option>Febrero</option>
                                            <option>Marzo</option>
                                            <option>Abril</option>
                                            <option>Mayo</option>
                                            <option>Junio</option>
                                            <option>Julio</option>
                                            <option>Agosto</option>
                                            <option>Septiembre</option>
                                            <option>Octubre</option>
                                            <option>Noviembre</option>
                                            <option>Diciembre</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-3">
                                        <select class="form-control">
                                            <option>Año</option>
                                            <option>1970</option>
                                            <option>1971</option>
                                            <option>1972</option>
                                            <option>1973</option>
                                            <option>1974</option>
                                            <option>1975</option>
                                            <option>1976</option>
                                            <option>1977</option>
                                            <option>1978</option>
                                            <option>1979</option>
                                            <option>1980</option>
                                            <option>1981</option>
                                            <option>1982</option>
                                            <option>1983</option>
                                            <option>1984</option>
                                            <option>1985</option>
                                            <option>1986</option>
                                            <option>1987</option>
                                            <option>1988</option>
                                            <option>1989</option>
                                            <option>1990</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>

                <div class="form-group">
                    <label class="control-label col-xs-3">Genero:</label>
                    <div class="col-xs-2">
                        <label class="radio-inline">
                            <input type="radio" name="genderRadios" value="male"> Maculino
                        </label>
                    </div>
                    <div class="col-xs-2">
                        <label class="radio-inline">
                            <input type="radio" name="genderRadios" value="female"> Femenino
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="news"> Enviar noticias.
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="agree">  Accepto <a href="terminos.php">Terminos y condiciones</a>.
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <p><a type="input" class="btn btn-primary" href="tarjeta.php">Enviar</a>
                        <input type="reset" class="btn btn-default" value="Limpiar"></p>
                    </div>

                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <p><label class="form-check-label" for="exampleCheck1">Check me out</label></p>
                          </div>
                          <div class="col-xs-offset-3 col-xs-9">
                          <a type="input" class="btn btn-primary" href="index.php">Volver</a>
                      </div>
                          <img src="imgpse.jpg" class="estilo_bootstrap" align=right width="350" height="200"></img>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
  </html>
