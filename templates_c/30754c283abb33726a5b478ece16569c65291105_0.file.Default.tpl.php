<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 08:23:21
  from 'C:\xampp\htdocs\FRAMEWORK DE DESARROLLO\FRAMEWORK-DE-DESARROLLO\FrameworkMVC\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee713d92f95c2_27583591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30754c283abb33726a5b478ece16569c65291105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FRAMEWORK DE DESARROLLO\\FRAMEWORK-DE-DESARROLLO\\FrameworkMVC\\templates\\Default.tpl',
      1 => 1592202154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5ee713d92f95c2_27583591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <header> 
      <div align="center" id="ENCABEZADO">
        <h1>REGISTRO</h1>
      </div>
    </header>
  
    <section>
       <div  id="CONTENIDO">
          <form method="post" action="USUARIOS.php">
		    <div class="form-group">
			  <label for="NOMBRE" >NOMBRE</label>
              <input type="text" name="NOMBRE" class="form-control" placeholder="Ingrese Usuario" required>
			</div>
			<div class="form-group">
			  <label for="CONTRASEÑA">CLAVE</label>
              <input type="password" class="form-control" name="CONTRASEÑA" placeholder="Ingrese Clave" required>
			</div>          
			<div class="form-group" align="center">
			  <input type="submit" value="INGRESAR" class="btn btn-primary btn-lg" required>
			</div>
			
          </form>
       </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php }
}
