<?php
/* Smarty version 3.1.29, created on 2016-07-08 00:16:19
  from "Z:\home\test1.ru\www\backend\project\php\template\layout_create.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577eb893dbba79_20722892',
  'file_dependency' => 
  array (
    '98a21997fabee1c1d865ef54586611cabc0194e0' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\php\\template\\layout_create.tpl',
      1 => 1467922515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header_create.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_577eb893dbba79_20722892 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html> 
<html>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header_create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_17345577eb893d2a562_15962081',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_22374577eb893d90460_82627195',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html><?php }
/* {block 'main_content'}  file:layout_create.tpl */
function block_17345577eb893d2a562_15962081($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:layout_create.tpl */
function block_22374577eb893d90460_82627195($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'scripts'} */
}
