<div class="row justify-content-md-center">
  <div class="col-6">
    <header> 
      <div align="center" id="ENCABEZADO">
        <h1>REGISTRO</h1>
      </div>
    </header>
    <section>
       <div id="CONTENIDO">
          <form method="post" action="USUARIOS.php">
            <div class="form-group">
              <label for="NOMBRE" >NOMBRE</label>
              <input type="text" name="NOMBRE" class="form-control" placeholder="Ingrese Usuario" required>
            </div>
            <div class="form-group">
              <label for="CONTRASEÑA">CLAVE</label>
              <input type="password" class="form-control" name="CONTRASEÑA" placeholder="Ingrese Clave" required>
            </div>
            <div class="form-group">
              <label for="TIPO">TIPO DE USUARIO</label>
              <select class="form-control" name="TIPO" id="TIPO">
                <option value="TRABAJADOR">Trabajador</option>
                <option value="ADMINISTRADOR">Administrador</option>
              </select>
            </div>
            <div class="form-group" align="center">
              <input type="submit" value="INGRESAR" class="btn btn-primary btn-lg" required>
            </div>
          </form>
       </div>
    </section>
  </div>
</div>
