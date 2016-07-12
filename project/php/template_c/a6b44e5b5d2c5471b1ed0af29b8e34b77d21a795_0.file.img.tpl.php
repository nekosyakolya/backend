<?php
/* Smarty version 3.1.29, created on 2016-07-12 11:25:14
  from "Z:\home\test1.ru\www\backend\project\php\template\img.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57849b5aaf8eb2_04413442',
  'file_dependency' => 
  array (
    'a6b44e5b5d2c5471b1ed0af29b8e34b77d21a795' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\php\\template\\img.tpl',
      1 => 1468308302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout_create.tpl' => 1,
  ),
),false)) {
function content_57849b5aaf8eb2_04413442 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_2794657849b5a701e59_32318636',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_3049157849b5aac7994_80497306',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout_create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'}  file:img.tpl */
function block_2794657849b5a701e59_32318636($_smarty_tpl, $_blockParentStack) {
?>

  <div class="description">
    <div class="center_block back_white">
      <?php
$_from = $_smarty_tpl->tpl_vars['img_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['img']) ? $_smarty_tpl->tpl_vars['img'] : false;
$_smarty_tpl->tpl_vars['img'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['img'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)%3 == 0 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null) != 0) {?>
          <div class="clear"></div>
        <?php }?>
        <div class="center_div float_left">
          <a href="../php/big_img.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null);?>
"  class="decoration"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" class="img_thumbs" alt="loading" /></a>
        </div>
      <?php
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['img']->_loop) {
?>
        <h2 class="title font_family_montserrat title_padding">Пока что у вас нет фото:(</h2>
        <a href="../php/add_img.php" class="title font_family_montserrat">Загрузить!</a>
      <?php
}
if ($__foreach_foo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_0_saved;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_0_saved_item;
}
?>
      <div class="clear"></div>
    </div>
  </div>
<?php
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:img.tpl */
function block_3049157849b5aac7994_80497306($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'scripts'} */
}
