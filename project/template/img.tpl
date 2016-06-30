{extends file='layout.tpl'}
{block name="main_content"}
  <div class="description">
    <div class="center_block back_white">
      {foreach from=$img_array item=img name=foo}
        <div class="center_div float_left">
          <a href="big_img.php?id={$smarty.foreach.foo.index}"  class="decoration"><img src="{$img}" class="img_thumbs" alt="loading" /></a>
        </div>
        {if $smarty.foreach.foo.index % 2 == 0 && $smarty.foreach.foo.index != 0}
          <div class="clear"></div>
        {/if}
      {foreachelse}
        <h2 class="title font_family_montserrat">���� ��� � ��� ��� ����:(</h2>
      {/foreach}
      <div class="clear"></div>
    </div>
  </div>
{/block}
{block name="scripts"}
  <script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
  <script type="text/javascript" src="js/menu_selector.js"></script>
{/block}