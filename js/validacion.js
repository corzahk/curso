 /* valida si el nick esta disponible en la base de datos */
               $('#nick').change(function(){
                   $.post('ajax_validacion_nick.php',{
                        nick:$('#nick').val(),
                        beforeSend:function(){
                            $('.validacion').html("Espere un momento por favor..");
                        }
                    }, function(respuesta){
                        $('.validacion').html(respuesta);    
                    });
               }); 
               $('#btn_guardar').hide();
               /* Valida los poasswords que sean correctos e iguales */
               $('#passtwo').change(function(event){
                   if($('#passone').val() == $('#passtwo').val() ){
                        swal('Bien hecho...', 'Las contraseñas coinciden', 'success');
                        $('#btn_guardar').show();
                    }else{
                    swal('Opss....', 'Las contraseñas no coinciden', 'error');   
                    $('#btn_guardar').hide();
                    $('#passone').val('');
                    $('#passtwo').val('');
                   }
               });
               /* Desabilita tecla Enter para enviar formulario */
               $('.form').keypress(function(e){
                   if(e.which == 13){
                       return false;
                   }
               })