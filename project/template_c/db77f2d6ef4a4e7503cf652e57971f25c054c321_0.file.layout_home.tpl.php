<?php
/* Smarty version 3.1.29, created on 2016-07-01 05:34:45
  from "Z:\home\test1.ru\www\backend\project\template\layout_home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5775c8b532c477_56960597',
  'file_dependency' => 
  array (
    'db77f2d6ef4a4e7503cf652e57971f25c054c321' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\template\\layout_home.tpl',
      1 => 1467336529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header_home.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5775c8b532c477_56960597 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html> 
<html>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header_home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_3125775c8b527c619_75559943',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_176815775c8b52fb143_60621891',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html><?php }
/* {block 'main_content'}  file:layout_home.tpl */
function block_3125775c8b527c619_75559943($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:layout_home.tpl */
function block_176815775c8b52fb143_60621891($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'scripts'} */
}
