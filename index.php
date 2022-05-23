<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/curso/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    </style>
    <title>Document</title>
</head>
<body class="grey lighteen-2">
    <main>
        <div class="row">
            <div class="input-field col s12 center"  >
            <img src="img/logo.png" width="200px" class="circle" >
            </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="card z-depth-5">
                  <div class="card-content">
                    <span class="card-title"><center>Inicio de sesion</center>  </span>
                    <form action="login/index.php" method="post" autocomplate="off">
                        <div class="input-field" >
                        <i class="material-icons prefix">perm_identity</i>
                        <input type="text" name="usuario" title="usuario"  id="usuario" requiered pattern="[A-Za-z]{8,15}" autofocus >
                        <label for="usuario">Usuario</label>
                        </div>
                        <div class="input-field" >
                        <i class="material-icons prefix">vpn_key</i>
                        <input type="password" name="contra" title=""  id="contra" pattern="[A-Za-z0-9]{8,15}"  >
                        <label for="contra">Contraseña</label>
                        </div>
                        <div class="input-field center"  >
                        <button type="submit" class="btn waves-effect waves-light">Acceder</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/curso/js/materialize.min.js"></script>
</body>
</html>