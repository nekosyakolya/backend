<?php
/* Smarty version 3.1.29, created on 2016-07-01 04:43:34
  from "Z:\home\test1.ru\www\backend\project\template\slider.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5775bcb6bb1705_56239517',
  'file_dependency' => 
  array (
    '979ad39b549b9b266feee3ff760bb057ae6d902c' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\template\\slider.tpl',
      1 => 1467333721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5775bcb6bb1705_56239517 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_112765775bcb6839450_44443493',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_64855775bcb6b91b80_12553143',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'}  file:slider.tpl */
function block_112765775bcb6839450_44443493($_smarty_tpl, $_blockParentStack) {
?>

  <div id="slider-wrap">
    <div class="pad_arrow float_left pad_arrow_right">
      <a class="sprait2" id="prewbutton"></a>
    </div>
    <div id="sliderNew" class="float_left">
       <div class="slide">
          <img src="<?php echo $_smarty_tpl->tpl_vars['img_first']->value;?>
" class="img_big" alt="loading" />
        </div>
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
         <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null) != $_smarty_tpl->tpl_vars['img_index']->value) {?>
            <div class="slide">
              <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" class="img_big" alt="loading" />
            </div>
          <?php }?>
      <?php
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_0_saved_local_item;
}
if ($__foreach_foo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_0_saved;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_0_saved_item;
}
?>
    </div>
    <div class="pad_arrow_right float_left">
      <a class="sprait2" id="nextbutton"></a>
    </div>
    <div class="clear"></div>
  </div>
<?php
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:slider.tpl */
function block_64855775bcb6b91b80_12553143($_smarty_tpl, $_blockParentStack) {
?>

  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.0.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/menu_selector.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/slider_album.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'scripts'} */
}
