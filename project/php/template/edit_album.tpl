{extends file='layout.tpl'}
{block name="main_content"}
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
        <h2 class="title font_family_montserrat title_padding">Изменить имя альбома</h2>
        <form action="" name="questionnaire" method="post" class="regisrize padding_auto" id="editNameAlbum">
          <input type="text" name="nameAlbum" value="{$name_album}" class="regisrize_input_loading" />
          <input type="submit" value="Изменить" class="regisrize_input regisrize_submit" id="createAlbum" name="createAlbum" />
          <a class="hint message" id="success_edit">Регистрация прошла успешно!</a>
          <a class="hint message" id="error_edit">Ошибка!</a>
        </form>
        <a class="title font_family_montserrat title_padding" id="delete">delete?</a>
        <div id="podlogka" class="hint">
          <div id="modalWindow">
            <a id="yes">YES!</a>
            <a id="no">NO!</a>
          </div>
        </div>
      </div>
    </div>
{/block}
{block name="scripts"}
  <script type="text/javascript" src="../js/jquery-2.0.0.min.js"></script>
  <script type="text/javascript" src="../js/edit_name_album.js"></script>
  <script type="text/javascript" src="../js/delete_album.js"></script>
{/block}