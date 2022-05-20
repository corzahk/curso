<?php include '../extend/header.php' ?>

        <div class="row">
          <div class="col s12">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Alta de usuarios</span>
                <form action="ins_usuarios.php" method="post" enctype="multipart/form-data">
                    <div class="input-field">
                        <input type="text" name="nick" require autofocus title="DEBE DE CONTENER ENTRE 8 Y 15 CARACTERES, SOLO LETRAS" pattern="[A-Za-z]{8,15}" id="nick" onblur="may(this.value, this.id)">
                        <label for="nick">Nick:</label>
                    </div>
                    
                    <div class="validacion"></div>
                    <div class="input-field">
                        <input type="password" name="passone" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS" pattern="[A-Za-z0-9]{8,15}"  id="passone" required  >
                        <label for="passone">Contraseña</label>
                        </div>

                        <div class="input-field">
                        <input type="password" name="passtwo" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS" pattern="[A-Za-z0-9]{8,15}"  id="passtwo" required  >
                        <label for="passtwo">Contraseña</label>
                        </div>
                            <select name="nivel" requiered>
                                <option value="" disabled selected>ELIGE UN NIVEL DE USUARIO</option>
                                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                <option value="ASESOR" >ASESOR</option>
                            </select>
                    <div class="input-field" >
                    <input type="text" name="nombre" title="Nombre de usuario"  id="nombre"  onblur="may(this.value, this.id)" required pattern="[A-Z/s -]+" >
                    <label for="nombre">Nombre completo del usuario</label>
                    </div>
                    <div class="input-field" >
                    <input type="email" name="correo" title="Correo electronico"  id="correo" required >
                    <label for="correo">Correo electronico</label>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                        <span>Foto:</span>
                        <input type="file" name="foto">
                        </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                    </div>
                    <button type="submit" class="btn black" id="btn_guardar">Guardar <i class="material-icons ">send</i></button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <?php include '../extend/scripts.php'; ?>
           <script src="../js/validacion.js"> </script> 
</body>
</html>