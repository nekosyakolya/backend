<?php
/* Smarty version 3.1.29, created on 2016-07-08 00:11:51
  from "Z:\home\test1.ru\www\backend\project\php\template\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577eb787ec2a57_19855239',
  'file_dependency' => 
  array (
    '9bfb4fb9e3e36d7ddfc4b488057ea1f3d9e3d873' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\php\\template\\layout.tpl',
      1 => 1467237814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_577eb787ec2a57_19855239 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html> 
<html>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_29507577eb787e09c60_74890506',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_11712577eb787e8ee82_53288660',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html><?php }
/* {block 'main_content'}  file:layout.tpl */
function block_29507577eb787e09c60_74890506($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:layout.tpl */
function block_11712577eb787e8ee82_53288660($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'scripts'} */
}
