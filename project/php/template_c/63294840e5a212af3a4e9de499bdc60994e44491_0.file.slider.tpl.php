<?php
/* Smarty version 3.1.29, created on 2016-07-08 00:17:44
  from "Z:\home\test1.ru\www\backend\project\php\template\slider.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577eb8e858c5d3_19744512',
  'file_dependency' => 
  array (
    '63294840e5a212af3a4e9de499bdc60994e44491' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\php\\template\\slider.tpl',
      1 => 1467922658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout_create.tpl' => 1,
  ),
),false)) {
function content_577eb8e858c5d3_19744512 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_27407577eb8e8300f29_38151469',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_22428577eb8e8562fa0_10905766',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout_create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'}  file:slider.tpl */
function block_27407577eb8e8300f29_38151469($_smarty_tpl, $_blockParentStack) {
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
function block_22428577eb8e8562fa0_10905766($_smarty_tpl, $_blockParentStack) {
?>

  <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-2.0.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/slider_album.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'scripts'} */
}
