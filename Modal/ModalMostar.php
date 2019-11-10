<!-- Modal para mostrar pregunta-->
<div class="modal fade" id="Mostrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Visualizar</h4>
            </div>
            <div class="modal-body">

            <div class="container">
                <div class="form-group col-md-6">
                    <label for="inputArea">Area</label>
                    <input name="Ar" type="text" id="inputArea" class="form-control" readonly >
                </div>
             </div>

             <div class="container">
                <div class="form-group col-md-6">
                    <label for="inputDO">Definion Operacional</label>
                    <textarea name="DefOp" class="form-control" id="inputDO" rows="3" readonly></textarea>
                </div>
            </div>

             <div class="container">
                <div class="form-group col-md-6">
                    <label for="inputBR">Base de Reactivo</label>
                    <textarea name="BasRe" class="form-control" id="inputBR" rows="3" readonly></textarea>
                </div>
            </div>


            <div class="container">
                <div id="imagen" class="form-group col-md-6">
                    <img style="display: none;" id="myImg" class="img-responsive center-block" src="" width="200" height="200">
                </div>  
            </div>


            <div class="container">
                <div class="form-group col-md-6">
                                            <label for="inputR1">Opcion de Respuesta 1</label>
                                            <input name="Res1" type="text" id="inputR1" class="form-control" readonly >
                                            <div class="radio">
                                              <label><input type="radio" name="optradio" id="radio1" value="0" disabled>Correcta</label>
                                            </div>
                </div>

                                         
            </div>

                <div class="container">
                                        <div class="form-group col-md-6">
                                            <label for="inputAR1">Argumentacion</label>
                                            <textarea name="Arg1" class="form-control" id="inputAR1" rows="3" readonly></textarea>
                                        </div>
                </div>



       <div class="container">
                <div class="form-group col-md-6">
                                            <label for="inputR2">Opcion de Respuesta 2</label>
                                            <input name="Res2" type="text" id="inputR2" class="form-control" readonly >
                                            <div class="radio">
                                              <label><input type="radio" name="optradio" id="radio2" value="1" disabled>Correcta</label>
                                            </div>
                </div>

                                         
            </div>

                <div class="container">
                                        <div class="form-group col-md-6">
                                             <label for="inputAR2">Argumentacion</label>
                                            <textarea name="Arg2" class="form-control" id="inputAR2" rows="3" readonly></textarea>
                                        </div>
                </div>






                       <div class="container">
                <div class="form-group col-md-6">
                                           <label for="inputR3">Opcion de Respuesta 3</label>
                                            <input name="Res3" type="text" id="inputR3" class="form-control" readonly >
                                            <div class="radio">
                                              <label><input type="radio" name="optradio" id="radio3" value="2" disabled>Correcta</label>
                                            </div>
                </div>

                                         
            </div>

                <div class="container">
                                        <div class="form-group col-md-6">
                                          <label for="inputAR3">Argumentacion</label>
                                            <textarea name="Arg3" class="form-control" id="inputAR3" rows="3" readonly></textarea>
                                        </div>
                </div>




                       <div class="container">
                <div class="form-group col-md-6">
                                           <label for="inputR4">Opcion de Respuesta 4</label>
                                            <input name="Res4" type="text" id="inputR4" class="form-control" readonly >
                                            <div class="radio">
                                              <label><input type="radio" name="optradio" id="radio4" value="3" disabled>Correcta</label>
                                            </div>
                </div>

                                         
            </div>

                <div class="container">
                                        <div class="form-group col-md-6">
                                            <label for="inputAR4">Argumentacion</label>
                                            <textarea name="Arg4" class="form-control" id="inputAR4" rows="3" readonly></textarea>
                                        </div>
                </div>



                
            </div>

        </div>
    </div>
</div>
