
  <header class="main-header" id="home">
    <nav class="main-nav">
      <div class="container main-nav__container">
	    <div class="logo">
	      <a href="index.php">
	        <picture>
	          <source srcset="img/logo-tablet.png" media="(min-width: 768px) and (max-width: 1200px)" class="logo__img">
	          <source srcset="img/logo-desktop.png" media="(min-width: 1200px)" class="logo__img">
	          <img src="img/logo-mobile.png" alt="Frolov" class="logo__img">
	        </picture>
	      </a>
	    </div>

	    <button class="btn main-nav__toggle">
	        Закрыть меню
	      <span class="main-nav__toggle-element"></span>
	      <span class="main-nav__toggle-element"></span>
	      <span class="main-nav__toggle-element"></span>
	    </button>

	    <nav class="main-nav__wrapper main-nav__wrapper--closed">
	      <ul class="main-nav__contacts">
	      	<li class="social__link-one">
		      <ul class="social__list">
                  <?php foreach ($social_buttons as $key => $value): ?>
                     <li class="social__item"><a href="<?=$value['url'];?>" target="_blank"><i class="<?=$value['class_name'];?>"></i></a></li>
                  <?php endforeach;?>
		      </ul>
		    </li> 
			<li class="social__link-two"><a href="#" class="social__link">e-mail: frol1414@gmail.com</a></li>
		    <li class="social__link-three"><a class="social__link">Тел.: 8(931)971-55-83</a></li>
		  </ul>
	      <ul class="main-nav__list" id="top-menu">
            <?php foreach ($header_titles as $key => $value): ?>
                <li class="active main-nav__item">
                    <a href="<?=$value['url'];?>"><?=$value['title'];?></a>
                </li>
            <?php endforeach;?>

	      </ul>
	    </nav>
      </div>
    </nav>
    <div class="main-header__title">
      <h2 id="heading">Портфолию Web-разработчика</h2>	
      <div class="main-header__text"></div>
    </div>
    <div class="main-header__btn">
      <div class="main-header__content">
        <p class="content__btn"><a href="#openModal" id="anchor-aboutMe">Критика и предложения</a></p>
      </div>
    </div>
  </header>