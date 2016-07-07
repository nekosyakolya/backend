<?php
/* Smarty version 3.1.29, created on 2016-07-01 10:11:37
  from "Z:\home\test1.ru\www\project\project\php\template\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5776099994d412_90061017',
  'file_dependency' => 
  array (
    '96bd32c9d9d4fd5b09c9e82e5b9dc6f7c5e14ff4' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\project\\project\\php\\template\\layout.tpl',
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
function content_5776099994d412_90061017 ($_smarty_tpl) {
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
  0 => 'block_1390577609998c9911_48741015',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_1039577609999260a3_34234345',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html><?php }
/* {block 'main_content'}  file:layout.tpl */
function block_1390577609998c9911_48741015($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:layout.tpl */
function block_1039577609999260a3_34234345($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'scripts'} */
}
