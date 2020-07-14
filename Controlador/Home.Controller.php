<?php
  class Home
  {

    function __construct()
    {
    }

    public function Inicio()
    {
        $smarty=new Smarty();
        $smarty->display('Default.tpl');
    }
    public function FunX()
    {
      echo"<br> controlador home y metodo x";
    }
  }

 ?>