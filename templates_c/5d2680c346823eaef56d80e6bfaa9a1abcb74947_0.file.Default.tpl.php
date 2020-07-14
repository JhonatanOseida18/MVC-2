<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-13 20:35:36
  from 'C:\xampp\htdocs\MVC 2\MVC-2\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0ca978a95239_34180796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d2680c346823eaef56d80e6bfaa9a1abcb74947' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC 2\\MVC-2\\templates\\Default.tpl',
      1 => 1592506867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5f0ca978a95239_34180796 (Smarty_Internal_Template $_smarty_tpl) {
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
			  <label for="User" >User</label>
              <input type="text" name="User" class="form-control" placeholder="Ingrese Usuario" required>
			</div>
			<div class="form-group">
			  <label for="Password">Pass</label>
              <input type="password" class="form-control" name="Password" placeholder="Ingrese PIN" required>
			</div>          
			<div class="form-group" align="center">
			  <input type="submit" value="Ingreso" class="btn btn-primary btn-lg" required>
			</div>
			
          </form>
       </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php }
}
