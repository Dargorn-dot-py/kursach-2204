<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta hhtp-equiv="Content-type" content="text/html;charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
   <script src="https://kit.fontawesome.com/c9dfd375dd.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style2.css">
   <link rel="stylesheet" href="css/tooltip1.css">
   <link rel="stylesheet" href="css/slickSliderStyles1.css">
   <link rel="stylesheet" href="css/underline1.css">
   <title>Shop</title>
</head>
<body>
   <div class="wrapper">
      <header id="open" class="header">
         <div id="close" class="header__container">
             <a href="" class="header__logo">Магазин <span></span></a>
             <div class="header__menu menu">
                 <nav class="menu__body">
                     <ul class="menu__list">
                         <li class="menu__item"><h2 class="cool-bottom-line"><a href="news.php" class="menu__link">новости</a></h2></li>
                         <?php
                            if(!$_COOKIE['user']):
                         ?>
                         <li class="menu__item"><h2 class="cool-bottom-line"><a href="login.php" class="menu__link">войти</a></h2></li>
                        <?php
                            else:
                        ?>
                         <li class="menu__item"><h2 class="cool-bottom-line"><a href="php/exit.php" class="menu__link">выйти</a></h2></li>
                        <?php
                            endif;
                        ?>
                     </ul>
                 </nav>
             </div>
             <div class="header__button">
                 <a href="catalog.php" class="button button_green"><span>Каталог</span> <i class="fa  fa-shopping-basket"></i></a>
                 <a href="#open" class="icon_menu"><span></span></a>
                 <a href="#close" class="close-icon_menu"></a>
             </div>
         </div>
     </header>
      <main class="main">
         <section class="getstart">
            <div class="getstart__container">
                <div class="getstart__content">
                    <div class="getstart__slider">
                        <div class="slider">
                            <div class="slider__item">
                                <img src="img/Screenshot_1.jpg" alt="">
                            </div>
                            <div class="slider__item">
                                <img src="img/Screenshot_3.jpg" alt="">
                            </div>
                            <div class="slider__item">
                                <img src="img/Screenshot_4.jpg" alt="">
                            </div>
                            <div class="slider__item">
                                <img src="img/Screenshot_5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="getstart__items">
                        <div class="items__body">
                            <div class="getstart__slider">
                                <div class="product-slider">
                                    <?php 
                                        include('php/productPresentMain.php');
                                    ?>
                                    <!-- <a href="" class="slider__item">
                                        <div class="product-item">
                                            <div class="product-item__pic">
                                                <div class="post-pic">
                                                    <div href="" class="post-pic-img">
                                                        <img src="img/Screenshot_5.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__label">
                                                <span>Xiaomi</span>
                                                <h1>Note 9 PRO</h1>
                                            </div>
                                            <div class="product-item__price">18 000 <i class="fa fa-rub"></i></div>
                                        </div>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="getstart__news">
                        <div class="news-body">
                            <div class="news-item">
                                <div class="news-logo">Новую версию оболочки MIUI 13 получили смартфоны 2-й волны</div>
                                <div class="news-desk">Окончательный выход обновления запланирован к концу третьего квартала 2022 года. Сегодня MIUI уже получили смартфоны серии Redmi и Redmi Note 9</div>
                                <div class="news-date">15.04.22</div>
                            </div>
                            <div class="news-item">
                                <div class="news-logo">В Китае начались продажи телефона Redmi 10A</div>
                                <div class="news-desk">Бюджетная модель предлагается по очень привлекательной стоимости</div>
                                <div class="news-date">14.04.22</div>
                            </div>
                            <div class="news-item">
                                <div class="news-logo">Состоялась презентация электросамоката Xiaomi Mijia Electric Scooter 3 Lite</div>
                                <div class="news-desk">Старт продаж новинки назначен на 5 апреля</div>
                                <div class="news-date">13.04.22</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </main>
      <footer class="footer">
          <div class="footer__container">
              <div class="f-up">
                  <div class="social">
                      <a>Социальные сети:</a>
                      <div class="soc_pics">
                          <div class="sp_vk tooltip">
                              <a target="_blank" href="https://vk.com/dargorn">
                                  <i class="fa fa-vk"></i>
                              </a>
                              <span class="tooltiptext">ВКонтакте</span>
                          </div>
                          <div class="sp_vk tooltip">
                              <a target="_blank" href="https://t.me/Mil1shka">
                                  <i class="fa fa-telegram"></i>
                              </a>
                              <span class="tooltiptext">Телеграм</span>
                          </div>
                          <div class="sp_vk tooltip">
                              <a target="_blank" href="">
                                  <i class="fab fa-whatsapp"></i>
                              </a>
                              <span class="tooltiptext">Ватсап</span>
                          </div>
                          <div class="sp_vk tooltip">
                              <a target="_blank" href="">
                                  <i class="fab fa-viber"></i>
                              </a>
                              <span class="tooltiptext">Вайбер</span>
                          </div>
                          <div class="sp_vk tooltip">
                              <a target="_blank" href="">
                                  <i class="fa fa-envelope"></i>
                              </a>
                              <span class="tooltiptext">Почта</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="f-down">© 2022 <span class="f-down-txt">|</span> Designed by <span class="f-down-txt2">Dargorn</span></div>
          </div>
      </footer>
   </div>
   <script src="js/main2.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/slickSlider1.js"></script>
</body>
</html>