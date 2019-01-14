

function valida_cambio_contrasenia(){
    var usuario=$("#username").val();
    var clave=$("#password").val();
    var new_key=$("#nueva_clave").val();
    var repete_key=$("#repite_clave").val();
    
    if(usuario===""){
        alert("Debe Ingresar el Usuario a Modificar la clave");
        return;
    }
    if(clave===""){
        alert("Debe Ingresar la clave actual");
        return;
    }
    if(new_key===""){
        alert("Debe Ingresar la nueva clave");
        return;
    }
    if(repete_key===""){
        alert("Debe volver a ingresar la nueva clave");
        return;
    }
    if(repete_key===repete_key){
        alert("Las nuevas credenciales deben coincidir...");
        return;
    }
     $.ajax({
        url: '<?php echo base_url();?>index.php/cambiarcontrasenia/valida',
        type: 'post',
        dataType: 'json',
        data: {
          email:email
        },
        success: function (data){
          // console.log(data);
          $("#mensaje").show();
          if(data.valid === true){
            //window.location = data.url;
            $("#mensaje").html(data.mensaje);
          }else{
            $("#mensaje").html(data.mensaje);
          }
        },
        error: function(jqXHR, textStatus, errorThrown){
            $("#mensaje").show();
           $("#mensaje").html('<div class="alert alert-warning">'+'error en la peticion ajax - recuperarClave.js'+' </div>');
        }
      });
    
}