{extends file='layout.tpl'}
{block name="main_content"}
  <div class="description">
    <div class="center_block back_white">
      {foreach from=$title_array item=album}
        <div class="center_div">
          <img src="img/folder.png" class="folder" alt="loading" />
          <a href="album_img.php?name={$album}" class="title font_family_montserrat">{$album}</a>
        </div>
      {foreachelse}
        <h2 class="title font_family_montserrat title_padding">У вас нет альбомов:(</h2>
        <a href="intropage.html" class="title font_family_montserrat">Создать!</a>
      {/foreach}
    </div>
  </div>
{/block}
{block name="scripts"}
  <script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
  <script type="text/javascript" src="js/menu_selector.js"></script>
{/block}