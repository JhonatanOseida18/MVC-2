<div class="row justify-content-md-center">
<div class= "col">
<br><h1>Habilitar/Deshabilitar Usuario</h1><br>
<form method ="post" action ="">
<div class="form-group">
<label for="usuario">Usuario</label>
<input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp">
</div><br>

<div class="form-group">
<label for="tipo"> Tipo de Trabajador</label>
<select class="form-control" name="tipo" id="tipo">
<option value="Trabajador">Trabajador</option>
<option value="Administrador">Administrador</option>
</select>

</div><br>

<div class="form-group">
<label for="tipo">Habilitador /Deshabilitar Usuario</label>
<select class="form-control" name="tipo" id="tipo">
<option value="1">Habilitar</option>
<option value="2">Deshabilitar</option>
</select>
</div><br>

<button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
</div>
</div>