<?php
/* Smarty version 3.1.29, created on 2016-07-01 11:52:13
  from "Z:\home\test1.ru\www\backend\project\template\album.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5776212d25ef18_35753404',
  'file_dependency' => 
  array (
    '79118c88f4a9454f16fc4a490b6801051e375fcf' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\template\\album.tpl',
      1 => 1467359431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5776212d25ef18_35753404 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_279355776212ce336a1_18860790',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_62525776212d222060_12240763',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'}  file:album.tpl */
function block_279355776212ce336a1_18860790($_smarty_tpl, $_blockParentStack) {
?>

  <div class="description">
    <div class="center_block back_white">
      <?php
$_from = $_smarty_tpl->tpl_vars['title_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_album_0_saved_item = isset($_smarty_tpl->tpl_vars['album']) ? $_smarty_tpl->tpl_vars['album'] : false;
$_smarty_tpl->tpl_vars['album'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['album']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->_loop = true;
$__foreach_album_0_saved_local_item = $_smarty_tpl->tpl_vars['album'];
?>
        <div class="center_div">
          <img src="img/folder.png" class="folder" alt="loading" />
          <a href="album_img.php?name=<?php echo $_smarty_tpl->tpl_vars['album']->value;?>
" class="title font_family_montserrat"><?php echo $_smarty_tpl->tpl_vars['album']->value;?>
</a>
        </div>
      <?php
$_smarty_tpl->tpl_vars['album'] = $__foreach_album_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['album']->_loop) {
?>
        <h2 class="title font_family_montserrat title_padding">У вас нет альбомов:(</h2>
        <a href="intropage.php" class="title font_family_montserrat">Создать!</a>
      <?php
}
if ($__foreach_album_0_saved_item) {
$_smarty_tpl->tpl_vars['album'] = $__foreach_album_0_saved_item;
}
?>
    </div>
  </div>
<?php
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:album.tpl */
function block_62525776212d222060_12240763($_smarty_tpl, $_blockParentStack) {
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
