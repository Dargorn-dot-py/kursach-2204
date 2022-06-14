<!DOCTYPE html>
<html lang="en">
<head>
   <title>textarea</title>
   <meta charset="UTF-8">
   <meta hhtp-equiv="Content-type" content="text/html;charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
   <script src="https://kit.fontawesome.com/c9dfd375dd.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/tooltip1.css">
   <link rel="stylesheet" href="css/underline1.css">
</head>
<body>
   <div class="wrapper">
      <header id="open" class="header">
         <div id="close" class="header__container">
             <a href="index.php" class="header__logo">Магазин <span></span></a>
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
                 <a href="" class="button button_green"><span>Каталог</span> <i class="fa  fa-shopping-basket"></i></a>
                 <a href="#open" class="icon_menu"><span></span></a>
                 <a href="#close" class="close-icon_menu"></a>
             </div>
         </div>
     </header>
      <main class="main">
         <div class="content">
            <div class="content__container">
                <div class="catalog">
                    <div class="catalog__left">
                        <div class="flex-left__label">Каталог</div>
                        <div class="flex-left__box">
                            <div class="flex-left__block">
                                <div class="flex-left__item">
                                    <div class="item__label">
                                        Цена:
                                    </div>
                                    <br><br>
                                    <div class="item__cost">
                                        <div class="cost-slider">
                                           <output for="fader" id="volume">50000</output>
                                           <input type="range" id="fader" min="0" max="50000" value="50000" step="100" oninput="outputUpdate(value)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-left__block">
                                <div class="flex-left__item">
                                    <div class="select">
                                        <select class="choose-form" name="">
                                            <option value=""> Тип товара</option>
                                            <option value="">Телефоны</option>
                                            <option value="">Планшеты</option>
                                            <option value="">Аксессуары</option>
                                            <option value="">Гаджеты</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-left__block">
                                <div class="flex-left__item">
                                    <div class="select">
                                        <select class="choose-form" name="">
                                            <option value=""> Оперативная память </option>
                                            <option value="">2 гб</option>
                                            <option value="">3 гб</option>
                                            <option value="">4 гб</option>
                                            <option value="">6 гб</option>
                                            <option value="">8+ гб</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-left__block">
                                <div class="flex-left__item">
                                    <div class="select">
                                        <select class="choose-form" name="">
                                            <option value=""> Встроенная память </option>
                                            <option value="">16 гб</option>
                                            <option value="">32 гб</option>
                                            <option value="">64 гб</option>
                                            <option value="">128 гб</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-left__block">
                                <div class="flex-left__item">
                                    <div class="select">
                                        <select class="choose-form" name="">
                                            <option value="">Наличие NFC</option>
                                            <option value="">Да</option>
                                            <option value="">Нет</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-left__block">
                                <div class="flex-left__item">
                                    <div class="select">
                                        <select class="choose-form" name="">
                                            <option value="">Дата выхода</option>
                                            <option value="">1q 2022</option>
                                            <option value="">4q 2021</option>
                                            <option value="">3q 2021</option>
                                            <option value="">2q 2021</option>
                                            <option value="">1q 2021</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-left__block">
                                <div class="flex-left__item-btn">
                                    <button class="app-btn apply">Применить</button>
                                    <button class="app-btn reset-app">Сбросить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__right">
                        <div class="flex-row">
                            <div class="flex-row__sort-box">
                               Сортировать по:
                               <select name="" class="sort-box__sorting">
                                  <option value="">Популярные</option>
                                  <option value="">Цена: по возрастанию</option>
                                  <option value="">Цена: по убыванию</option>
                               </select>
                            </div>
                            <div class="flex-row__present-box">
                               Показывать по:
                               <select name="" class="presentCatalog">
                                  <option value="">12</option>
                                  <option value="">36</option>
                               </select>
                            </div>
                         </div>
                         <div class="flex-box">
                              <?php 
                                 include('php/productPresentCatalog.php');
                              ?>
                              <div class="flex-block"></div>
                              <div class="flex-block"></div>
                              <div class="flex-block"></div>
                              <div class="flex-block"></div>
                              <div class="flex-block"></div>
                              <div class="flex-block"></div>
                              <div class="flex-block"></div>
                              <div class="flex-block"></div>
                         </div>
                    </div>
                </div>
            </div>
         </div>
         <a href="#" class="arrowUp">
		      <i class="fas fa-arrow-up"></i>
	      </a>
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
     <script src="js/main.js"></script>
   </div>
</body>
</html>