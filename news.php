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
   <link rel="stylesheet" href="css/news.css">
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
                    <div class="catalog__center">
                         <div class="flex-box">
                              <?php 
                                 include('php/newsPresentCatalog.php');
                              ?>
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