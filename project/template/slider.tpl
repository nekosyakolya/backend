{extends file='layout.tpl'}
{block name="main_content"}
  <div id="slider-wrap">
    <div class="pad_arrow float_left pad_arrow_right">
      <a class="sprait2" id="prewbutton"></a>
    </div>
    <div id="sliderNew" class="float_left">
       <div class="slide">
          <img src="{$img_first}" class="img_big" alt="loading" />
        </div>
       {foreach from=$img_array item=img name=foo}
         {if $smarty.foreach.foo.index != $img_index}
            <div class="slide">
              <img src="{$img}" class="img_big" alt="loading" />
            </div>
          {/if}
      {/foreach}
    </div>
    <div class="pad_arrow_right float_left">
      <a class="sprait2" id="nextbutton"></a>
    </div>
    <div class="clear"></div>
  </div>
{/block}
{block name="scripts"}
  <script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
  <script type="text/javascript" src="js/menu_selector.js"></script>
  <script type="text/javascript" src="js/1204.js"></script>
{/block}