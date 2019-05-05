
  <footer class="main-footer container">
    <div class="main-footer__logo">
      <a href="#">
        <picture>
          <source srcset="img/logo-tablet.png" media="(min-width: 768px) and (max-width: 1200px)" class="logo__img">
	          <source srcset="img/logo-desktop.png" media="(min-width: 1200px)" class="logo__img">
	          <img src="img/logo-mobile.png" alt="Frolov" class="logo__img">
        </picture>
      </a>
    </div>
    <section class="social">
      <ul class="social__links">
          <?php foreach ($social_buttons as $key => $value): ?>
              <li class="social__item"><a href="<?=$value['url'];?>" target="_blank"><i class="<?=$value['class_name'];?>"></i></a></li>
          <?php endforeach;?>
	  </ul>
    </section>
    <section class="copyright">
      Разработано:<br>
      <a href="mailto:frol1414@gmail.com">
        Александр Фролов
      </a>
      <p> &#169 2018-2019 Нелицензированное использование материалов с данного ресурса запрещено.</p>
      <div class="scrollup">
        <span class="scrollup-descr">Наверх</span><span class="scrollup-icon">&uarr;</span>
      </div>
    </section>
  </footer>