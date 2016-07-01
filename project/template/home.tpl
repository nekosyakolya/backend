{extends file='layout_home.tpl'}
{block name="main_content"}
  <section id="slider"></section>
  <div class="description">
    <div class="center_block back_white">
      <section id="about">
        <h2 class="title font_family_montserrat">О нас</h2>
        <div class="about_us">
          <p class="album_text album_text_first_padding"><span class="album_title">ALБооом</span>-не просто приложение!Это удобный сервис для создания онлайн-фотоальбомов.Фотография-остановленное мгновение жизни.Разве не прекрасно иметь возможность делиться своими впечатлениями?</p> 
          <img src="img/sofa.jpg" class="loading" alt="loading" />
          <div class="clear"></div>
        </div>
        <div class="about_us">
          <img src="img/list.jpg" class="cafe" alt="loading" />
          <p class="album_text_second">Вы сами создаете альбом.Только вы решаете,какими будут фон и название.Также имеется возможность оставлять комменатрии,ставить лайки.Вперед к прекрасному!</p>  
          <div class="clear"></div>
        </div>
        <div class="about_us">
          <p class="album_text album_text_third_padding">Элементарно! Сбросьте ваши изображения и видео файлы в ALБооом,нажмите кнопку Создать, и Ваш альбом готов!</p>
          <img src="img/loading.png" class="loading" alt="loading" />
          <div class="clear"></div>
        </div>
      </section>
      <section id="regisrize" class="about_us_entrance">
        <h2 class="title font_family_montserrat">Регистрация</h2>
        <form action="php/register.php" name="questionnaire" method="post" class="regisrize">
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
        <form action="php/login.php" name="questionnaire" method="post" class="regisrize entrance_form" id="login">
          <input type="text" maxlength="40" name="username" placeholder="Имя пользователя" class="regisrize_input" />
          <input type="password" maxlength="40" placeholder="Пароль" name="password" class="regisrize_input" />
          <input type="submit" value="Войти" name="login" class="regisrize_input regisrize_submit" />
          <a href="albumRecovery.html" class="password">Забыли пароль?</a>
        </form>
      </div>
    </section>
    <div class="center_block back_white about_us_entrance">
      <h2 class="title font_family_montserrat">Присоединяйся!</h2>
      <img src="img/1112.jpg" class="mini_photo float_left margin_mini_photo mini_photo_first" alt="loading" />
      <img src="img/113.jpg" class="mini_photo float_left margin_mini_photo" alt="loading" />
      <img src="img/111.jpg" class="mini_photo float_left" alt="loading" />
      <div class="clear"></div>
    </div>
  </div>
{/block}
{block name="scripts"}
  <script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
  <script type="text/javascript" src="js/menu_selector.js"></script>
  <script type="text/javascript" src="js/slider.js"></script>
{/block}