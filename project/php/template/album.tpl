{extends file='layout_create.tpl'}
{block name="main_content"}
  <div class="description">
    <div class="center_block back_white">
      {foreach from=$title_array item=album}
        <div class="center_div">
          <div class="folder_block">
            <a href="album_edit.php?name={$album}" title ="Редактировать {$album}" class="edit"></a>
            <img src="../img/folder.png" class="folder" alt="loading" />
          </div>
          <a href="album_img.php?name={$album}" class="title font_family_montserrat">{$album}</a>
        </div>
      {foreachelse}
        <h2 class="title font_family_montserrat title_padding">У вас нет альбомов:(</h2>
        <a href="intropage.php" class="title font_family_montserrat">Создать!</a>
      {/foreach}
    </div>
  </div>
{/block}
{block name="scripts"}
{/block}