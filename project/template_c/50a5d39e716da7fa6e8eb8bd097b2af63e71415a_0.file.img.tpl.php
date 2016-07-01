<?php
/* Smarty version 3.1.29, created on 2016-07-01 04:24:53
  from "Z:\home\test1.ru\www\backend\project\template\img.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5775b855c71b28_71463069',
  'file_dependency' => 
  array (
    '50a5d39e716da7fa6e8eb8bd097b2af63e71415a' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\template\\img.tpl',
      1 => 1467332444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5775b855c71b28_71463069 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_212285775b855775925_08945593',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_262935775b855c3d928_38627208',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'}  file:img.tpl */
function block_212285775b855775925_08945593($_smarty_tpl, $_blockParentStack) {
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
          <a href="big_img.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null);?>
"  class="decoration"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" class="img_thumbs" alt="loading" /></a>
        </div>
      <?php
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['img']->_loop) {
?>
        <h2 class="title font_family_montserrat title_padding">Пока что у вас нет фото:(</h2>
        <a href="intropageMyAlbum.html" class="title font_family_montserrat">Загрузить!</a>
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
function block_262935775b855c3d928_38627208($_smarty_tpl, $_blockParentStack) {
?>

  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.0.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/menu_selector.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'scripts'} */
}
