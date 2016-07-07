<?php
/* Smarty version 3.1.29, created on 2016-07-07 11:10:45
  from "Z:\home\test1.ru\www\project\project\php\template\intropageMyAlbum.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577e00751f5ea3_68001412',
  'file_dependency' => 
  array (
    '33f763ee14d596dfb1432b7f753f2a937c2fd1ed' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\project\\project\\php\\template\\intropageMyAlbum.tpl',
      1 => 1467874519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout_home.tpl' => 1,
  ),
),false)) {
function content_577e00751f5ea3_68001412 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_646577e0075099554_31796207',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_5959577e00751b1d92_81896664',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout_home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'}  file:intropageMyAlbum.tpl */
function block_646577e0075099554_31796207($_smarty_tpl, $_blockParentStack) {
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
              <a href="../php/intropage.php" class="text_white color_white font_family_montserrat active">Создать альбом</a>
            </li> 
            <li class="menu_top_block_li" id="second_element">
              <a href="../php/my_albums.php" class="text_white font_family_montserrat color_white">Мои альбомы</a>
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
        <h2 class="title font_family_montserrat title_padding">Выбирайте снимки,<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</h2>
        <form id="uploadForm" action="doajaxfileupload.php" method="post" enctype="multipart/form-data" class="regisrize">
          <input name="MAX_FILE_SIZE" value="1000000" type="hidden"/>
          <input name="fileToUpload[]" id="fileToUpload" class="MultiFile regisrize_input_loading" type="file" />
          <input type="submit" value="Загрузить" class="regisrize_input regisrize_submit" name="loading"/>
        </form>
        <div class="loading_images">
          <span class="bird font_family_montserrat">Сейчас вылетит птичка..</span>
          <img class="loading_gif" src="../img/loading2.gif" />
        </div>
        <div id="uploadOutput"></div> 
        <h2 class="title font_family_montserrat title_padding">Загружайте фотографии в ваш альбом!</h2>
      </div>
    </div>
<?php
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:intropageMyAlbum.tpl */
function block_5959577e00751b1d92_81896664($_smarty_tpl, $_blockParentStack) {
?>

  <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-1.3.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.MultiFile.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.form.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.blockUI.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/upload.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'scripts'} */
}
