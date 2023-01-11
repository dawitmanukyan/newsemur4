<?php
  require "./config/config.php";
  $id = $_GET['id'];
  $itm = $mysql -> query("SELECT * FROM `items` WHERE `id`=$id AND `lang`='ru'");
  $asr = $mysql -> query("SELECT * FROM `assortment`");
  $mysql -> close();
?>
<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/aparikMedia375.php">
    <link rel="stylesheet" href="./css.apranqStyle.php">
    <link rel="stylesheet" href="./css.apranqStyle.css.map">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="icon" href="./img/Logo.png">

    <title>Ապրանք</title>
</head>
<body>
  <div class="header" id="header">
    <a href="index.php" class="logo" id="logo"></a>
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
      <li><a href="Artadranq.php" class="resp-neu-li">Տեսականի</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About.php" >Մեր մասին</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux.php">Մասնաճյուղեր</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog.php">Բլոգ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact.php" >Կապ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <div class="resp-menu-line"></div>
      <div class="resp-lang-menu">
        <a href="#" class="active">Հայ</a>
        <a href="Hashvichen.php">EN</a>
        <a href="Hashvichru.php">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <?php
      echo '<a href="#" class="active">Հայ</a>';
      echo '<a href="Apranq-en.php?id='.$id.'">EN</a>';
      echo '<a href="Apranq-ru.php?id='.$id.'">РУ</a>';
      ?>
    </div>
    <div class="icons">
      <img class="search_icon" src="./img/search.png" alt="" id="search" />
      <img class="heart_icon" id="heart_icon" src="./img//heart.png" alt="" />
    </div>
    <div class="line" id="line"></div>
    <div class="call" id="call">
      <a class="phone">+374 33 51 55 55</a>
      <a href="tel:+37433515555" class="order-call">Պատվիրել զանգ</a>
    </div>
  </div>
  <div class="search-box hidden" id="search-box">
      <div class="search-label">Որոնում</div>
      <div class="search-input-wrapper">
        <input class="search-input" type="text" name="" id="search-input" />
        <img id="search_icon-active" src="./img/activ-search.png" alt="" />
     </div>
    <div class="search-icon-close" id="close-search"><img src="./img/search-icon-close.png" alt=""></div>
  </div>
      <div class="second-menu">
          <div class="second-menu-navigation">
              <a href="#" class="sub-menu-a">Կղմինդր</a>
              <a href="#" class="sub-menu-a">Թիթեղ</a>
              <a href="#" class="sub-menu-a">Պրոֆիլ</a>
              <a href="#" class="sub-menu-a">Պրոֆնաստիլ</a>
              <a href="#" class="sub-menu-a">Ցանցեր</a>
              <a href="#" class="sub-menu-a">Մետաղական ապրանքներ</a>
              <a href="#" class="sub-menu-a">Տանիքը համալրող դետալներ</a>
              <a href="#" class="sub-menu-a">Այլ</a>
          </div>
          <div class="language">
          <?php
              echo '<a href="#" class="active">Հայ</a>';
              echo '<a href="Apranq-en.php?id='.$id.'">EN</a>';
              echo '<a href="Apranq-ru.php?id='.$id.'">РУ</a>';
            ?>
          </div>
      </div>
    <div class="hidden--menu--block"></div>

    <section class="contect">
      <div class="container">
        <div class="texts">
            <p class="main">Գլխավոր
                <img src="./img/arrow.png" class="arrow"> Մասնաճյուղեր
            </p>
        </div>
        <div class="product--text--title">
          <?php 
            // foreach($itm as $value);
            // echo '<h2>'.$value['name'].' '.$value['type'].'</h2>';
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

          <div class="product__text">

            <div class="product__text__info-one">
              <h3>Բնութագիր</h3>
              <?php echo '<p>'.$value['description'].'</p>'; ?>
            </div>

            <div class="product__text__info-two">
              <h3>Տվյալներ</h3>
              <ul>
                <?php 
                  echo '<li>'.$value['parametrs'].'</li>';
                ?>
              </ul>
            </div>

            <button type="button" class="product--save">Պահպանել</button>
          </div>
        </div>

        <div class="slider slider--frist">
          <h2>Լրացնող Դետալներ</h2>
          <div class="slider__items">
            <a href="#" class="slider--items--item">
              <img src="./img/Rectangle 11864.png" alt="">
              <div class="slider--items--item--text">
                <p><a href="Apranq.php">Բանգա</a></p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11864.png" alt="">
              <div class="slider--items--item--text">
                <p><a href="Apranq.php">Բանգա</a></p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11864.png" alt="">
              <div class="slider--items--item--text">
                <p><a href="Apranq.php">Բանգա</a></p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11864.png" alt="">
              <div class="slider--items--item--text">
                <p><a href="Apranq.php">Բանգա</a></p>
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
          <h2>Վերջին դիտվածները</h2>
          <div class="slider__items">
            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p><a href="Apranq.php">Բանգա</a></p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p><a href="Apranq.php">Բանգա</a></p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p><a href="Apranq.php">Բանգա</a></p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p<a href="Apranq.php">Բանգա</a></p>
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
        <a href="#"
          >Գործարան, Կոտայքի մարզ, ք. Եղվարդ,<br />
          Երևանյան Խճուղի, շ․ 118
        </a>
        <a href="">033 51 55 55, 033 52 55 55</a>
        <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
        <div class="resp-menu">
          <ul class="resp-menu-ul">
            <li><a href="Apranq.php">Արտադրանք</a></li>
            <li><a href="About.php">Մեր մասին</a></li>
            <li><a href="Masnachyux.php">Մասնաճյուղեր</a></li>
            <li><a href="Contact.php">Կապ</a></li>
          </ul>
        </div>
        <div class="resp-hr"></div>

        <p class="copy">Սեմուր ընդ Կո © 2022</p>
        <p class="copy1">Բոլոր իրավունքները պաշտպանված են:</p>
      </div>
      <div class="container-footer">
        <div class="footer-items">
          <a>Արտադրանք</a>
          <a href="Apranq.php">Կղմինդր</a>
          <a href="Apranq.php">Թիթեղ</a>
          <a href="Apranq.php">Պրոնաստիլ</a>
          <a href="Apranq.php">Պրոֆիլ</a>
          <a href="Apranq.php">Ցանցեր</a>
          <a href="Apranq.php">Մետաղական ապրանքներ</a>
          <a href="Apranq.php">Տանիքը համալրող դետալներ</a>
          <a href="Apranq.php">Այլ</a>
        </div>
        <div class="footer-items footer-info">
          <a>Ավելին</a>
         <a href="About.php" class="about">Մեր մասին</a>          
          <a  href="Masnachyux.php" class="masnachyux">Մասնաճյուղեր</a>
          <a href="Blog.php">Semur բլոգ</a>
          <a href="#">Գաղտնիության քաղաքականություն</a>
          <a href="Hashvetvutyun.php">Հաշվետվություն</a>
          <a href="Aparik.php"> Ապառիկ վաճառք</a>
          <a href="Contact.php">Կապ </a>
        </div>
        <div class="resp-footer-line"></div>

        <div class="footer-items footer-img">
          <div class="social">
            <p>Հետևեք մեզ</p>
            <a target="_blank" href="https://www.instagram.com/semur.co/">
              <img src="./img/Instagram Icon.png" alt="Instagram" />
            </a>
            <a
              target="_blank"
              href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/"
            >
              <img src="./img/Facebook Icon.png" alt="Facebook" />
            </a>
            <a
              target="_blank"
              href="https://www.youtube.com/channel/UCRKkZQOBU7hrXgYhSgnRBNg"
            >
              <img src="./img/Youtube Icon.png" alt="Youtube" />
            </a>
          </div>
        </div>
      </div>
    </div>
 
    <script src="./js/style.js"></script>
</body>
</html>
