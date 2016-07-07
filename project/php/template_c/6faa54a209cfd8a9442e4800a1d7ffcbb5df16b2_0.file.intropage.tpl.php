<?php
/* Smarty version 3.1.29, created on 2016-07-08 00:11:51
  from "Z:\home\test1.ru\www\backend\project\php\template\intropage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577eb7876dace9_87917359',
  'file_dependency' => 
  array (
    '6faa54a209cfd8a9442e4800a1d7ffcbb5df16b2' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\backend\\project\\php\\template\\intropage.tpl',
      1 => 1467877191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_577eb7876dace9_87917359 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_24660577eb7875e9740_78410240',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_19453577eb7876b3285_09163319',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'}  file:intropage.tpl */
function block_24660577eb7875e9740_78410240($_smarty_tpl, $_blockParentStack) {
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
        <h2 class="title font_family_montserrat title_padding">Добро пожаловать,<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</h2>
        <form action="../php/create_album.php" name="questionnaire" method="post" class="regisrize padding_auto">
          <input type="text" name="nameAlbum" value="Новый альбом" class="regisrize_input_loading" />
          <input type="submit" value="Сохранить" class="regisrize_input regisrize_submit" id="createAlbum" name="createAlbum" />
        </form>
        <h2 class="title font_family_montserrat title_padding">Создайте альбом,как можно быстрее!Вперед,к прекрасному:)</h2>
      </div>
    </div>
<?php
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:intropage.tpl */
function block_19453577eb7876b3285_09163319($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'scripts'} */
}
