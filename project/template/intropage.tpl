{extends file='layout_home.tpl'}
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
              <a href="intropage.html" class="text_white color_white font_family_montserrat active">Создать альбом</a>
            </li> 
            <li class="menu_top_block_li" id="second_element">
              <a href="my_albums.php" class="text_white font_family_montserrat color_white">Мои альбомы</a>
            </li>
            <li class="menu_top_block_li" id="third_element">
              <a href="#regisrize" class="text_white font_family_montserrat color_white">Редактировать</a>
            </li>
            <li>
              <a href="php/logout.php" class="text_white font_family_montserrat color_white">Выйти</a>
            </li>
          </ul>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="description">
      <div class="center_block back_white about_us_entrance">
        <h2 class="title font_family_montserrat title_padding">Добро пожаловать,{$name}!</h2>
        <form action="create_album.php" name="questionnaire" method="post" class="regisrize padding_auto">
          <input type="text" name="nameAlbum" value="Новый альбом" class="regisrize_input_loading" />
          <input type="submit" value="Сохранить" class="regisrize_input regisrize_submit" id="createAlbum" name="createAlbum" />
        </form>
        <h2 class="title font_family_montserrat title_padding">Создайте альбом,как можно быстрее!Вперед,к прекрасному:)</h2>
      </div>
    </div>
{/block}
{block name="scripts"}
  <script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
  <script type="text/javascript" src="js/menu_selector.js"></script>
{/block}