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
        <h2 class="title font_family_montserrat title_padding">Выбирайте снимки,{$name}!</h2>
        <form id="uploadForm" action="multi_upload.php" method="post" enctype="multipart/form-data" class="regisrize">
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
{/block}
{block name="scripts"}
  <script type="text/javascript" src="../js/jquery-1.3.1.min.js"></script>
  <script type="text/javascript" src="../js/jquery.MultiFile.js"></script>
  <script type="text/javascript" src="../js/jquery.form.js"></script>
  <script type="text/javascript" src="../js/jquery.blockUI.js"></script>
  <script type="text/javascript" src="../js/upload.js"></script>
{/block}