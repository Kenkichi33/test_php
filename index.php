<?php
 define('__TEMPLATE__', 'templates/');
 define('__CSS__', 'css/');
 require_once('Smarty.class.php');
 $smarty = new Smarty();
 $smarty->display(__TEMPLATE__.'index.tpl');
 
 print('test2');
?>