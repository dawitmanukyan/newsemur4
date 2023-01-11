<?php
  require "./config/config.php";
  $id = $_GET['id'];
  $itm = $mysql -> query("SELECT * FROM `items` WHERE `id`=$id AND `lang`='ru'");
  $mysql -> close();

?>
<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/aparikStyle.php">
    <link rel="stylesheet" href="./css/aparikMedia768.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/aparikMedia375.php">
    <link rel="stylesheet" href="./css/apranqStyle.php">
    <link rel="stylesheet" href="./css.apranqStyle.php">
    <link rel="stylesheet" href="./css.apranqStyle.css.map">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="icon" href="./img/Logo.png">
    <title>Document</title>
</head>
<body>
<div class="header" id="header">
    <a href="index-ru.php" class="logo" id="logo"></a>
    <a
      href="#"
      class="toggle-button"
      id="toggle-button"
      onclick="toggleNav(this)"
    >
      <span class="bar1"></span>
      <span class="bar2"></span>
      <span class="bar3"></span>
    </a>      <ul class="navbar" id="navbar">
      <li><a href="Artadranq-ru.php" class="resp-neu-li">Ассортимент</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About-ru.php" >О нас</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux-ru.php">Ветви</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog-ru.php">Блог</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact-ru.php" >Контакт</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Hashvich-ru.php">Онлайн калькулятор</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>

      <div class="resp-menu-line"></div>
      <div class="resp-lang-menu">
        <a href="index.php">Հայ</a>
        <a href="index-en.php">EN</a>
        <a href="index-ru.php" class="active">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <a href="index.php">Հայ</a>
      <a href="index-en.php">EN</a>
      <a href="index-ru.php" class="active">РУ</a>
    </div>
    <div class="icons">
      <img class="search_icon" src="./img/search.png" alt="" id="search" />
      <img class="heart_icon" id="heart_icon" src="./img//heart.png" alt="" />
    </div>
    <div class="line" id="line"></div>
    <div class="call" id="call">
      <a class="phone">+374 33 51 55 55</a>
      <a href="tel:+37433515555" class="order-call">Заказать звонок</a>
    </div>
  </div>
  <div class="search-box hidden" id="search-box">
      <div class="search-label">Поиск</div>
      <div class="search-input-wrapper">
        <input class="search-input" type="text" name="" id="search-input" />
        <img id="search_icon-active" src="./img/activ-search.png" alt="" />
     </div>
    <div class="search-icon-close" id="close-search"><img src="./img/search-icon-close.png" alt=""></div>
  </div>
      <div class="second-menu">
          <div class="second-menu-navigation">
              <a href="Apranq-ru.php" class="sub-menu-a">Плитка</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Пластина</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Профиль</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Пронастил</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Сетки</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Изделия из металла</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Детали, завершающие крышу</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Другой</a>
          </div>
          <div class="language">
              <a href="index.php">Հայ</a>
              <a href="index-en.php">EN</a>
              <a href="index-ru.php" class="active">РУ</a>
          </div>
      </div>
    <div class="hidden--menu--block"></div>

    <section class="contect">
      <div class="container">

        <div class="contect__breadcrumb">
          <p>Главное</p>
          <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.21967 0.96967C0.512563 0.676777 0.987437 0.676777 1.28033 0.96967L5.78033 5.46967C6.07322 5.76256 6.07322 6.23744 5.78033 6.53033L1.28033 11.0303C0.987437 11.3232 0.512563 11.3232 0.21967 11.0303C-0.0732233 10.7374 -0.0732233 10.2626 0.21967 9.96967L4.18934 6L0.21967 2.03033C-0.0732233 1.73744 -0.0732233 1.26256 0.21967 0.96967Z" fill="#B0AFB3"/>
          </svg>            
          <p>Ассортимент</p>
          <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.21967 0.96967C0.512563 0.676777 0.987437 0.676777 1.28033 0.96967L5.78033 5.46967C6.07322 5.76256 6.07322 6.23744 5.78033 6.53033L1.28033 11.0303C0.987437 11.3232 0.512563 11.3232 0.21967 11.0303C-0.0732233 10.7374 -0.0732233 10.2626 0.21967 9.96967L4.18934 6L0.21967 2.03033C-0.0732233 1.73744 -0.0732233 1.26256 0.21967 0.96967Z" fill="#B0AFB3"/>
          </svg> 
          <?php 
            foreach($itm as $value);
            echo '<h2>'.$value['name'].' '.$value['type'].'</h2>';
          ?>
        </div>

        <div class="product--text--title">
        <?php 
            foreach($itm as $value);
            echo '<h2>'.$value['name'].' '.$value['type'].'</h2>';
          ?>
          <span>14058R</span>
        </div>

        <div class="product">
          <div class="product__img">
            <div class="product--img--main">
              <img src="./img/main.png" alt="">
            </div>
            <div class="product--img--childs">
              <div>
                <img src="./img/c1.png" alt="">
              </div>
              <div>
                <img src="./img/c2.png" alt="">
              </div>
              <div>
                <img src="./img/c3.png" alt="">
              </div>
            </div>
          </div>
            <div class="product__text__info-one">
              <h3>Характеристика</h3>
              <?php echo '<p>'.$value['description'].'</p>'; ?>            </div>
            <div class="product__text__info-two">
              <h3>Տվյալներ</h3>
              <ul>
                <?php 
                  echo '<li>'.$value['parametrs'].'</li>';
                ?>
              </ul>
            </div>

            <button type="button" class="product--save">Сохранить</button>
          </div>
        </div>

        <div class="slider slider--frist">
          <h2>Дополняющие детали</h2>
            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11864.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>
          </div>

          <div class="pagination">
            <div class="pagination__number">
              <p>01</p>
              <span></span>
              <p>10</p>             
            </div>

            <div class="pagination__btn">
              <button type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19 12H5" stroke="#B0AFB3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 19L5 12L12 5" stroke="#B0AFB3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
              </button>

              <button type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19" stroke="#615F66" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 5L19 12L12 19" stroke="#615F66" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
              </button>
            </div>
          </div>
        </div>

        <div class="slider slider--second">
          <h2>последние просмотры</h2>
          <div class="slider__items">
            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>
          </div>

          <div class="pagination">
            <div class="pagination__number">
              <p>01</p>
              <span></span>
              <p>10</p>             
            </div>

            <div class="pagination__btn">
              <button type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19 12H5" stroke="#B0AFB3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 19L5 12L12 5" stroke="#B0AFB3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
              </button>

              <button type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19" stroke="#615F66" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 5L19 12L12 19" stroke="#615F66" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

  
    <div class="headphones-hover">
      <div class="headphones">
        <img src="./img/naushnik.png" alt="" />
      </div>
      <div class="hover-icons">
        <div class="hover-icon-watsup button">
          <a href="watsup:+374 33 51 55 55" target="_blank"><img src="./img/wUp.png" alt="" /></a>
        </div>
        <div class="hover-icon-messanger button">
         <a href="https://www.facebook.com/messages/t/100000024311828" target="_blank"><img src="./img/messanger-icon.png" alt="" /></a>
        </div>
        <div class="hover-icon-call button">
        <a href="tel:+374 33 51 55 55" target="_blank"><img src="./img/icon-hover-call.png" alt="tel" /></a>
        </div>
        <div class="hover-icon-mail button">
          <a href="mailto:@semur.am" target="_blank"><img src="./img/icon-hover-mail.png" alt="" /></a>
        </div>
        <div class="hover-icon-headphone button">
          <img src="./img/headphone-hover.png" alt="headphone" target="_blank" />
        </div>
      </div>
    </div>
      
 
    <div class="footer">
        <div class="info">
          <img src="./img/logo_semur.png" class="logo-semur" alt="logo" />
          <a href="#">Завод. Котайкский район, Г. Егвард<br /> Ереванское шоссе 118
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
              <li><a href="Aparanqru.php">Производства</a></li>
              <li><a href="Aboutru.php">О нас</a></li>
              <li><a href="Masnachyuxru.php">Филиалы</a></li>
              <li><a href="Contactru.php">Связь</a></li>
            </ul>
              <hr class="resp-hr" />
          </div>

          <p class="copy">Семур энд Ко © 2022</p>
          <p class="copy1">Все права защищены.</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Производства</a>
            <a href="">Плитка</a>
            <a href="">Пластина</a>
            <a href="">Профнастил</a>
            <a href="">Профиль</a>
            <a href="">Сетка</a>
            <a href="">Изделия из металла</a>
            <a href="">Комплектующие детали крыши</a>
            <a href="">другое</a>
          </div>
          <div class="footer-items footer-info">
            <a>Еще</a>
            <a href="About-ru.php">О нас</a>
            <a href="Masnachyux-ru.php">Филиалы</a>
            <a href="Blog-ru.php">Блог</a>
            <a href="">Политика конфиденциальности</a>
            <a href="Hashvetvutyun.php">Отчет</a>
            <a href="Aparik-ru.php">Продажа в кредит</a>
            <a href="Contact-ru.php">Связь</a>
          </div>
          <div class="footer-items footer-img">
            <div class="social">
              <p>Следите за нами</p>
              <a target="_blank" href="https://www.instagram.com/semur.co/">
                <img src="./img/Instagram Icon.png" alt="Instagram" />
              </a>
              <a target="_blank" href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/">
                <img src="./img/Facebook Icon.png" alt="Facebook" />
              </a>
              <a target="_blank" href="https://www.youtube.com/channel/UCRKkZQOBU7hrXgYhSgnRBNg">
                <img src="./img/Youtube Icon.png" alt="Youtube" />
              </a>
            </div>
          </div>
        </div>
      </div>
	
    <script src="./js/style.js"></script>
</body>
</html>
