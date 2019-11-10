<head>
    <link rel="stylesheet" href="../CSS/login.css" />
    <script src="../JS/Validations.js"></script>
</head>
<div class="sidenav">
         <div class="login-main-text">
            <h2>TEC<br> Teaching Execution Control</h2>
         </div>
      </div>
      <div class="main">
         <div class="col-md-7 col-sm-12">
            <div class="login-form">
               <form name="formLogin" action='../Controllers/LoginController.php' method="post" onsubmit="return checkLogin()">
                  <div class="form-group">
                     <label data-translate="Nombre de usuario"></label>
                     <input type="text" class="form-control" id="login" name="login" maxlength="9" size ="9" data-translate="Nombre de usuario" onblur="checkEmpty(this) & checkLength(this,9) && comprobarTexto(this,9)">
                  </div>
                  <div class="form-group">
                     <label data-translate="Contraseña"></label>
                     <input type="password" class="form-control" id="password" name="password" maxlength="20" size ="20" data-translate="Contraseña" onblur="checkEmpty(this) & checkLength(this,20) && comprobarTexto(this,20)">
                  </div>
                  <button type="submit" name="action" value="login-user" class="btn btn-black">
                      <p data-translate="Iniciar sesión"></p></button>
               </form>
            </div>
         </div>
          <li class="nav-item row flags">
              <a href="javascript:translatePage('gl')"><img class="flag" src="../Images/gl.png"></a>
              <a href="javascript:translatePage('es')"><img class="flag" src="../Images/es.jpg"></a>
              <a href="javascript:translatePage('en')"><img class="flag" src="../Images/en.jpg"></a>
          </li>
      </div>
<script>
    translatePage(getCookie("language-selected"));
</script>