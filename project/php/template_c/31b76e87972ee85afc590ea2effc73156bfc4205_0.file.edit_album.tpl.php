<?php
/* Smarty version 3.1.29, created on 2016-07-12 11:57:29
  from "Z:\home\test1.ru\www\backend\project\php\template\edit_album.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5784a2e96ff117_63515077',
  'file_dependency' => 
  array (
    '31b76e87972ee85afc590ea2effc73156bfc4205' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\php\\template\\edit_album.tpl',
      1 => 1468310226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5784a2e96ff117_63515077 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_150905784a2e943ab28_74380697',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_13475784a2e96cb263_38509733',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'}  file:edit_album.tpl */
function block_150905784a2e943ab28_74380697($_smarty_tpl, $_blockParentStack) {
?>

  <div class="header">
      <div class="center_block"> 
        <div class="float_left camera_padding">
          <a href="#" class="camera"></a>
        </div>
        <a href="#" class="mogo_logo_top_block float_left font_family_montserrat color_white" title="ALБОМ">ALБооом</a>
        <div class="menu_block_header menu_block_header_user">
          <ul class="menu_top_block">
            <li class="menu_top_block_li" id="first_element">
              <a href="../php/intropage.php" class="text_white color_white font_family_montserrat">Создать альбом</a>
            </li> 
            <li class="menu_top_block_li" id="second_element">
              <a href="../php/my_albums.php" class="text_white font_family_montserrat color_white active">Мои альбомы</a>
            </li>
            <li class="menu_top_block_li" id="third_element">
              <a href="#regisrize" class="text_white font_family_montserrat color_white">Редактировать</a>
            </li>
            <li>
              <a href="../php/logout.php" class="text_white font_family_montserrat color_white">Выйти</a>
            </li>
          </ul>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="description">
      <div class="center_block back_white about_us_entrance">
        <h2 class="title font_family_montserrat title_padding"><a id="delete">Удалить альбом?</a></h2>
        <div id="podlogka" class="hint">
          <div id="modalWindow">
           <h2 class="title font_family_montserrat title_padding">Удалить альбом?</h2>
            <a href="../php/delete_album.php">да!</a>
            <a id="no">нет!</a>
          </div>
        </div>
        <div class="update">
          <h2 class="title font_family_montserrat">Изменить имя альбома</h2>
          <form action="" name="questionnaire" method="post" class="regisrize" id="editNameAlbum">
            <input type="text" name="nameAlbum" value="<?php echo $_smarty_tpl->tpl_vars['name_album']->value;?>
" class="regisrize_input_loading" />
            <input type="submit" value="Изменить" class="regisrize_input regisrize_submit" id="createAlbum" name="createAlbum" />
            <a class="hint message" id="success_edit">Регистрация прошла успешно!</a>
            <a class="hint message" id="error_edit">Ошибка!</a>
          </form>
        </div>
        <a href="../php/add_img.php" class="title font_family_montserrat title_padding">Загрузить новые фотографии!</a>
        <div class="float_left column">
          <?php
$_from = $_smarty_tpl->tpl_vars['img_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['img']) ? $_smarty_tpl->tpl_vars['img'] : false;
$_smarty_tpl->tpl_vars['img'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['img'];
?>
            <div class="center_edit">
              <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" class="img_thumbs" alt="loading" />
            </div>
          <?php
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_0_saved_local_item;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['img'] = $__foreach_foo_0_saved_item;
}
?>
        </div>
        <div class="float_right">
          <?php
$_from = $_smarty_tpl->tpl_vars['id_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_1_saved_item = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
$__foreach_foo_1_saved_local_item = $_smarty_tpl->tpl_vars['id'];
?>
            <div class="delete_album">
              <a href="../php/delete_img.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="title font_family_montserrat delete_img">удалить фото</a>
            </div>
          <?php
$_smarty_tpl->tpl_vars['id'] = $__foreach_foo_1_saved_local_item;
}
if ($__foreach_foo_1_saved_item) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_foo_1_saved_item;
}
?>
        </div>
        <div class="clear"></div>
      </div>
    </div>
<?php
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:edit_album.tpl */
function block_13475784a2e96cb263_38509733($_smarty_tpl, $_blockParentStack) {
?>

  <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-2.0.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/edit_name_album.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/delete_album.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'scripts'} */
}
