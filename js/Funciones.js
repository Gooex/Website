

function eliminarPregunta(id) {
    var url = 'libraries/deletePregunta.php';
    var pregunta = confirm('¿Esta seguro de eliminar esta pregunta?');
    if (pregunta == true) {

        $.ajax({
            type: 'POST',
            url: url,
            data: 'id=' + id,
            success: function (registro) {

                $('#mensajeME').addClass('alert alert-success').html('<i class="icons material-icons">verified_user</i> La pregunta se elimino correctamente').show(200).delay(2500).hide(200);
                $('#tablamostrarpreguntas').html(registro);

                return false;
            }
        });
        return false;
    } else {
        return false;
    }
}


function valoresPregunta(id) {
    //$('#modificarAdministrativoForm')[0].reset();
 var url = 'libraries/mostrarvalorespreguntas.php';
    $.ajax({
        type: 'POST',
        url: url,
        data: 'id=' + id,
        success: function (valores) {

            var datos = eval(valores);
            $('#inputArea').val(datos[0]);
            $('#inputDO').val(datos[1]);
            $('#inputBR').val(datos[2]);
            $('#inputR1').val(datos[3]);
            $('#inputAR1').val(datos[4]);

            if(datos[5]==0)
                $('#radio1').prop('checked', false);
            else
                $('#radio1').prop('checked', true);

            $('#inputR2').val(datos[6]);
            $('#inputAR2').val(datos[7]);

            if(datos[8]==0)
                $('#radio2').prop('checked', false);
            else
                $('#radio2').prop('checked', true);

            $('#inputR3').val(datos[9]);
            $('#inputAR3').val(datos[10]);

            if(datos[11]==0)
                $('#radio3').prop('checked', false);
            else
                $('#radio3').prop('checked', true);

            $('#inputR4').val(datos[12]);
            $('#inputAR4').val(datos[13]);

            if(datos[14]==0)
                $('#radio4').prop('checked', false);
            else
                $('#radio4').prop('checked', true);



            if(datos[15]!=0)
            {
                var elElemento=document.getElementById("myImg");
                elElemento.style.display = 'block';
                document.getElementById("myImg").src = ""+datos[15];
            }
            else
            {
                 var elElemento=document.getElementById("myImg");
                elElemento.style.display = 'none';
            }




            return false;
        }
    });
    return false;
}





function valoresPregunta2(id) {
    //$('#modificarAdministrativoForm')[0].reset();

 var url = 'libraries/mostrarvalorespreguntas2.php';
    $.ajax({
        type: 'POST',
        url: url,
        data: 'id=' + id,
        success: function (valores) {
            var datos = eval(valores);
            $('#inputArea1').val(datos[0]);
            $('#inputDO1').val(datos[1]);
            $('#inputBR1').val(datos[2]);
            $('#inputR11').val(datos[3]);
            $('#inputAR11').val(datos[4]);

            if(datos[5]==0)
                $('#radio11').prop('checked', false);
            else
                $('#radio11').prop('checked', true);

            $('#inputR21').val(datos[6]);
            $('#inputAR21').val(datos[7]);

            if(datos[8]==0)
                $('#radio21').prop('checked', false);
            else
                $('#radio21').prop('checked', true);

            $('#inputR31').val(datos[9]);
            $('#inputAR31').val(datos[10]);

            if(datos[11]==0)
                $('#radio31').prop('checked', false);
            else
                $('#radio31').prop('checked', true);

            $('#inputR41').val(datos[12]);
            $('#inputAR41').val(datos[13]);

            if(datos[14]==0)
                $('#radio41').prop('checked', false);
            else
                $('#radio41').prop('checked', true);



            if(datos[15]!=0)
            {
                var elElemento=document.getElementById("myImg1");
                elElemento.style.display = 'block';
                document.getElementById("myImg1").src = ""+datos[15];

                var elElemento2=document.getElementById("Eliminar");
                elElemento2.style.display = 'block';

            }
            else
            {
                 var elElemento=document.getElementById("myImg1");
                elElemento.style.display = 'none';
                 var elElemento2=document.getElementById("Eliminar");
                elElemento2.style.display = 'none';
            }

             $('#llavePrimR1').val(datos[16]);
             $('#llavePrimR2').val(datos[17]);
             $('#llavePrimR3').val(datos[18]);
             $('#llavePrimR4').val(datos[19]);

             $('#llavePrim').val(id);


            return false;
        }
    });
    return false;
}







function Verificar() {

   

    var radio = [11,21,31,41,51,61,71,81,91,101];

    NumerodePreguntas = document.getElementById('NumerodePreguntas').value;
    var i=0;

    var completo=true;
    while ( i < NumerodePreguntas&&completo==true) {
        //if(document.getElementById('radio'.radio[i]++).checked||document.getElementById('radio'.radio[i]++).checked||document.getElementById('radio'.radio[i]++).checked||document.getElementById('radio'.radio[i]++).checked)
        index=radio[i];
        nombre = "radio"+(index);
        nombre2 = "radio"+(index+1);
        nombre3 = "radio"+(index+2);
        nombre4 = "radio"+(index+3);

        if(document.getElementById(''+nombre).checked||document.getElementById(''+nombre2).checked||document.getElementById(''+nombre3).checked||document.getElementById(''+nombre4).checked)
         {
            completo=true;
         }
         else{
            completo=false;
         } 

    i++;
    }

    if(completo==false){
        $('#mensajeME').removeClass('alert alert-success');
        $('#mensajeME').addClass('alert alert-danger').html('<i class="icons material-icons">error</i> Faltan Preguntas por contestar').show(200).delay(2500).hide(200);
    }
   else
   {
        var url = 'libraries/SolucionExamen.php';
        MostrarCalificacion();
  
        //FormularioExamen

        $.ajax({
            type: 'POST',
            url: url,
            data: $('#FormularioExamen').serialize(),
            success: function (registro) {
               
                
                $('#tablamostrarpreguntas').html(registro);
                //$('#mensajeME').addClass('alert alert-success').html('<i class="icons material-icons">verified_user</i> La pregunta se elimino correctamente').show(200).delay(2500).hide(200);
               
                var elElemento=document.getElementById("boton");
                elElemento.style.display = 'none';


                return false;
            }
        });

   }
    
        return false;
    
}

function MostrarImagenGrande(srcimagen)
{
    //var elElemento=document.getElementById("myImg1");
    //elElemento.style.display = 'block';
    //document.getElementById("myImg1").src = ""+datos[15];
    //var srcimagen = document.getElementById("ImagenPequena").src;

    document.getElementById("ImagenGrande").src =""+srcimagen;



    $("#modalPreguntas").modal("show");
    //$('#modalPreguntas').show(200);
    return false;
}







///mostrar calificacion



function MostrarCalificacion() {


        parar();
 var auxhoras="";
 var auxminutos="";
 var auxsegundos="";
 var auxcentesimas="";


         if(horas<10)
                auxhoras = "0"+horas;
            else
                auxhoras =""+ horas;
            if(minutos<10)
               auxminutos = ":0"+minutos;
            else
               auxminutos= ":"+minutos;
            if(segundos<10)
                auxsegundos = ":0"+segundos;
            else
                auxsegundos = ":"+segundos;
  

        var crono2 =  auxhoras +  auxminutos +  auxsegundos +":" + centesimas;
       // alert(crono);

       $('#crono').val(crono2);

        var url = 'libraries/CalificarExamen.php';
  
   

        $.ajax({
            type: 'POST',
            url: url,
            data: $('#FormularioExamen').serialize(),
            success: function (registro) {
         
              
            if(horas<10)
                document.getElementById('Horas1').innerHTML = "0"+horas;
            else
                document.getElementById('Horas1').innerHTML = horas;
            if(minutos<10)
                document.getElementById('Minutos1').innerHTML = ":0"+minutos;
            else
                document.getElementById('Minutos1').innerHTML = ":"+minutos;
            if(segundos<10)
                document.getElementById('Segundos1').innerHTML = ":0"+segundos;
            else
                document.getElementById('Segundos1').innerHTML = ":"+segundos;
            if(centesimas<10)
                document.getElementById('Centesimas1').innerHTML = ":0"+centesimas;
            else
                document.getElementById('Centesimas1').innerHTML = ":"+centesimas;
        



            var datos = eval(registro);
            //$('#totalaerrores').val(datos[0]);
            $('#totalaerrores').text("  Errores "+datos[0]);
            //$('#totalaciertos').val(datos[1]);
            $('#totalaciertos').text("  Aciertos "+datos[1]);
            $("#modalCali").modal("show");

            
            
                return false;
            }
        });

   
        return false;
    
}



//cronometro

function parar () {
    clearInterval(control);
}

var centesimas = 0;
var segundos = 0;
var minutos = 0;
var horas = 0;



function inicio () {
    control = setInterval(cronometro,10);
}


function cronometro () {
    if (centesimas < 99) {
        centesimas++;
        if (centesimas < 10) { centesimas = "0"+centesimas }
        Centesimas.innerHTML = ":"+centesimas;
    }
    if (centesimas == 99) {
        centesimas = -1;
    }
    if (centesimas == 0) {
        segundos ++;
        if (segundos < 10) { segundos = "0"+segundos }
        Segundos.innerHTML = ":"+segundos;
    }
    if (segundos == 59) {
        segundos = -1;
    }
    if ( (centesimas == 0)&&(segundos == 0) ) {
        minutos++;
        if (minutos < 10) { minutos = "0"+minutos }
        Minutos.innerHTML = ":"+minutos;
    }
    if (minutos == 59) {
        minutos = -1;
    }
    if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
        horas ++;
        if (horas < 10) { horas = "0"+horas }
        Horas.innerHTML = horas;
    }
}