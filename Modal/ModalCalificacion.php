<div class="modal fade" id="modalCali" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title glyphicon glyphicon-list-alt " id="myModalLabel">  Calificacion final</h4>
      </div>
      <div class="modal-body center-block">
									<div class="container">
      									<div class="form-group col-md-6">
                                       <h5>     <label for="Nom" >Nombre: </label>
                                            <?php echo $_SESSION['Nombre'] ?>
    									</h5>
                                        </div>
                                     </div>
        
        <h4>
									<div class="container">
                                        <div class=" col-md-3 alert-success">
                                            <label id="totalaciertos" for="totalaciertos" class="glyphicon glyphicon-ok">Aciertos </label>
                                            
                                        </div>
                                   
                                        <div class=" col-md-3 alert-danger">
                                            <label id="totalaerrores" for="totalaerrores" class="glyphicon glyphicon-remove">Errores</label>
                                        </div>
                                    </div>



    <div id="container">

    <h2 class=" text-center center-block glyphicon glyphicon-time">  Tiempo </h2>
      <div class="reloj" id="Horas1">00</div>
      <div class="reloj" id="Minutos1">:00</div>
      <div class="reloj" id="Segundos1">:00</div>
      <div class="reloj" id="Centesimas1">:00</div>
    </div>

</h4>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default glyphicon glyphicon-remove-circle" data-dismiss="modal">  Cerrar</button>
        
      </div>
    </div>
  </div>
</div>