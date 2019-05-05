
    <section class="my-jobs">
      <div class="wrapper">
      	<h2 class="my-jobs__title">Мои работы<span></span></h2>
        
        <ul class="my-jobs__list">
            <?php foreach ($my_jobs as $key => $value): ?>
                <li class="my-jobs__item">
                    <a href="<?=$value['Url'];?>" target="_blank">
                        <picture>
                            <source srcset="<?=$value['img-tablet'];?>" media="(min-width: 768px) and (max-width: 1200px)">
                            <source srcset="<?=$value['img-desktop'];?>" media="(min-width: 1200px)">
                            <img class="my-jobs__img" src="<?=$value['img-mobilr'];?>" alt="<?=$value['alt'];?>">
                        </picture>
                    </a>
                    <p class="my-jobs__descr"><?=$value['description'];?></p>
                </li>
            <?php endforeach;?>
        </ul>
        <h3>Это не все мои работы, полный список находится по кнопке ниже</h3>
        <div class="my-jobs__button" id="anchor-question">
          <a href="#" class="my-jobs__button-link btn-link"><span>Посмотреть все работы</span></a>
        </div>
      </div>
    </section>