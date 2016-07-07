<?php
/* Smarty version 3.1.29, created on 2016-07-03 15:15:59
  from "Z:\home\test1.ru\www\project\project\php\template\registr.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5778f3efa56613_20532836',
  'file_dependency' => 
  array (
    '13ae81ce28e11265e0fce1ac4790bfff89d2ee03' => 
    array (
      0 => 'Z:\\home\\test1.ru\\www\\project\\project\\php\\template\\registr.tpl',
      1 => 1467544473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout_home.tpl' => 1,
  ),
),false)) {
function content_5778f3efa56613_20532836 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_content", array (
  0 => 'block_153895778f3ef94d419_23143243',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "scripts", array (
  0 => 'block_78265778f3efa2cac8_75426077',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout_home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'}  file:registr.tpl */
function block_153895778f3ef94d419_23143243($_smarty_tpl, $_blockParentStack) {
?>

  <section id="slider"></section>
  <div class="description">
    <div class="center_block back_white">
      <h2 class="title font_family_montserrat error_registr"><?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
</h2>
      <section id="about">
        <h2 class="title font_family_montserrat">О нас</h2>
        <div class="about_us">
          <p class="album_text album_text_first_padding"><span class="album_title">ALБооом</span>-не просто приложение!Это удобный сервис для создания онлайн-фотоальбомов.Фотография-остановленное мгновение жизни.Разве не прекрасно иметь возможность делиться своими впечатлениями?</p> 
          <img src="../img/sofa.jpg" class="loading" alt="loading" />
          <div class="clear"></div>
        </div>
        <div class="about_us">
          <img src="../img/list.jpg" class="cafe" alt="loading" />
          <p class="album_text_second">Вы сами создаете альбом.Только вы решаете,какими будут фон и название.Также имеется возможность оставлять комменатрии,ставить лайки.Вперед к прекрасному!</p>  
          <div class="clear"></div>
        </div>
        <div class="about_us">
          <p class="album_text album_text_third_padding">Элементарно! Сбросьте ваши изображения и видео файлы в ALБооом,нажмите кнопку Создать, и Ваш альбом готов!</p>
          <img src="../img/loading.png" class="loading" alt="loading" />
          <div class="clear"></div>
        </div>
      </section>
      <section id="regisrize" class="about_us_entrance">
        <h2 class="title font_family_montserrat">Регистрация</h2>
        <form action="register.php" name="questionnaire" method="post" class="regisrize">
          <input id="username" name="username" type="text" maxlength="40" placeholder="Имя пользователя" class="regisrize_input" />
          <input id="email" name="email" type="email" maxlength="40" placeholder="E-mail" class="regisrize_input" />
          <input id="password" name="password" type="password" maxlength="40" placeholder="Пароль" class="regisrize_input" />
          <input type="submit" value="Зарегистрироваться" class="regisrize_input regisrize_submit" id="register" name= "register" />
          <a href="#entrance" class="password authorized">Уже зарегестрированы?</a>
        </form>
      </section>
    </div>
    <section class="center_block back_white about_us_entrance" id="entrance">
      <div id="entrance_forma">
        <h2 class="title font_family_montserrat">Войти</h2>
        <form action="login.php" name="questionnaire" method="post" class="regisrize entrance_form" id="login">
          <input type="text" maxlength="40" name="username" placeholder="Имя пользователя" class="regisrize_input" />
          <input type="password" maxlength="40" placeholder="Пароль" name="password" class="regisrize_input" />
          <input type="submit" value="Войти" name="login" class="regisrize_input regisrize_submit" />
          <a href="albumRecovery.html" class="password">Забыли пароль?</a>
        </form>
      </div>
    </section>
    <div class="center_block back_white about_us_entrance">
      <h2 class="title font_family_montserrat">Присоединяйся!</h2>
      <img src="../img/1112.jpg" class="mini_photo float_left margin_mini_photo mini_photo_first" alt="loading" />
      <img src="../img/113.jpg" class="mini_photo float_left margin_mini_photo" alt="loading" />
      <img src="../img/111.jpg" class="mini_photo float_left" alt="loading" />
      <div class="clear"></div>
    </div>
  </div>
<?php
}
/* {/block 'main_content'} */
/* {block 'scripts'}  file:registr.tpl */
function block_78265778f3efa2cac8_75426077($_smarty_tpl, $_blockParentStack) {
?>

  <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-2.0.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/menu_selector.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/slider.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'scripts'} */
}
