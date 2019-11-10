<!-- Modal para mostrar pregunta-->
<div class="modal fade" id="modificar" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifica los datos de la pregunta</h4>
            </div>
            <div class="modal-body">
                <form id="modificarPregumForm" action="libraries/updatePregunta.php" method="post" enctype="multipart/form-data">
                    <div class="formulario">
                        

                        <!-- Este submit no es visible y es solo para hacer referencia al id del usuario actual-->
                        <input style="display: none;" name="llavePrim" type="text" id="llavePrim">
                        <!--jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj-->

<!--dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd-->

                        <div class="container">
                <div class="form-group col-md-6">
                    <label for="inputArea1">Area</label>
                    <input name="Ar1" type="text" id="inputArea1" class="form-control" required >
                </div>
             </div>

             <div class="container">
                <div class="form-group col-md-6">
                    <label for="inputDO1">Definion Operacional</label>
                    <textarea name="DefOp1" class="form-control" id="inputDO1" rows="3" required></textarea>
                </div>
            </div>

             <div class="container">
                <div class="form-group col-md-6">
                    <label for="inputBR1">Base de Reactivo</label>
                    <textarea name="BasRe1" class="form-control" id="inputBR1" rows="3" required></textarea>
                </div>
            </div>


            <div class="container ">
                <div class="form-group col-md-6">
                     <img style="display: none;" id="myImg1" class="img-responsive center-block" src="" width="200" height="200">
                     <div class="checkbox center-block" id="Eliminar">
                          <label>
                            <input type="checkbox" name="checkEli" value="1"  id="checkEli">
                            Eliminar Imagen
                          </label>
                    </div>
                </div>
                                                   
            </div>

            <div class="container">
                                        <div class="form-group col-md-6">
                                            <label for="archivo">Adjuntar Imagen</label>
                                            <input name="archivo" type="file" id="archivo">
                                            <p class="help-block">Las Imagenes son opcionales.</p>
                                        </div>
                                    </div>             <!--lLAVE PRIMARIA PREGUNTA 1--> 
            <input style="display: none;" name="llavePrimR1" type="text" id="llavePrimR1">

            <div class="container">
                <div class="form-group col-md-6">
                                            <label for="inputR11">Opcion de Respuesta 1</label>
                                            <input name="Res11" type="text" id="inputR11" class="form-control" required >
                                            <div class="radio">
                                              <label><input type="radio" name="optradio1" id="radio11" value="0" >Correcta</label>
                                            </div>
                </div>

                                         
            </div>

                <div class="container">
                                        <div class="form-group col-md-6">
                                            <label for="inputAR11">Argumentacion</label>
                                            <textarea name="Arg11" class="form-control" id="inputAR11" rows="3" required></textarea>
                                        </div>
                </div>


     <!--lLAVE PRIMARIA PREGUNTA 2--> 
            <input style="display: none;" name="llavePrimR2" type="text" id="llavePrimR2">

       <div class="container">
                <div class="form-group col-md-6">
                                            <label for="inputR21">Opcion de Respuesta 2</label>
                                            <input name="Res21" type="text" id="inputR21" class="form-control" required >
                                            <div class="radio">
                                              <label><input type="radio" name="optradio1" id="radio21" value="1" >Correcta</label>
                                            </div>
                </div>

                                         
            </div>

                <div class="container">
                                        <div class="form-group col-md-6">
                                             <label for="inputAR21">Argumentacion</label>
                                            <textarea name="Arg21" class="form-control" id="inputAR21" rows="3" required></textarea>
                                        </div>
                </div>



 <!--lLAVE PRIMARIA PREGUNTA 3--> 
            <input style="display: none;" name="llavePrimR3" type="text" id="llavePrimR3">


                       <div class="container">
                <div class="form-group col-md-6">
                                           <label for="inputR31">Opcion de Respuesta 3</label>
                                            <input name="Res31" type="text" id="inputR31" class="form-control" required >
                                            <div class="radio">
                                              <label><input type="radio" name="optradio1" id="radio31" value="2" >Correcta</label>
                                            </div>
                </div>

                                         
            </div>

                <div class="container">
                                        <div class="form-group col-md-6">
                                          <label for="inputAR31">Argumentacion</label>
                                            <textarea name="Arg31" class="form-control" id="inputAR31" rows="3" required></textarea>
                                        </div>
                </div>



 <!--lLAVE PRIMARIA PREGUNTA 4--> 
            <input style="display: none;" name="llavePrimR4" type="text" id="llavePrimR4">


                       <div class="container">
                <div class="form-group col-md-6">
                                           <label for="inputR41">Opcion de Respuesta 4</label>
                                            <input name="Res41" type="text" id="inputR41" class="form-control" required >
                                            <div class="radio">
                                              <label><input type="radio" name="optradio1" id="radio41" value="3" >Correcta</label>
                                            </div>
                </div>

                                         
            </div>

                <div class="container">
                                        <div class="form-group col-md-6">
                                            <label for="inputAR41">Argumentacion</label>
                                            <textarea name="Arg41" class="form-control" id="inputAR41" rows="3" required></textarea>
                                        </div>
                </div>


<!--dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd-->

                    <button type="submit" class="center-block btn mdl-button--raised mdl-js-ripple-effect">Guardar
                        Cambios
                    </button>


                </form>
            </div>

        </div>
    </div>
</div>
