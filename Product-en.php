<?php
  require "./config/config.php";
  $type = explode('%',$_GET['type']);
  $a = (join(" ",$type));
  
  $item_data = $mysql -> query("SELECT * FROM `items` WHERE `categoryen`='$a'"); 
  $asr = $mysql -> query("SELECT * FROM `assortment`");
  
  $mysql -> close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/product1Style.css">
    <link rel="stylesheet" href="./css/productStyle.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/productMedia768.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="stylesheet" href="./css/productMedia375.php">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="icon" href="./img/Logo.png">
    <title>Գլխավոր / Տեսականի</title>
</head>
<body>
    <main class="body">
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
         <li><a href="Product.php" class="resp-neu-li" class="active">Տեսականի</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
         <li><a href="About.php">Մեր մասին</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Masnachyux.php">Մասնաճյուղեր</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Blog.php">Բլոգ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Contact.php">Կապ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <div class="resp-menu-line"></div>
        <div class="resp-lang-menu">
          <a href="#" class="active">Հայ</a>
          <a href="Product-en.php">EN</a>
          <a href="Product-ru.php">РУ</a>
        </div>
      </ul>

      <div class="language resp-lang">
        <a href="#" class="active">Հայ</a>
        <a href="Product-en.php">EN</a>
        <a href="Product-ru.php">РУ</a>
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
            <?php 
              foreach ($asr as $value) {
                echo '<a href="Product-en.php?type='.$value['type-eng'].'" class="sub-menu-a">'.$value['type-eng'].'</a>';
              }
            ?>
          </div>
          <div class="language">
              <a href="Product.php" class="active">Հայ</a>
              <a href="Product-ru.php">РУ</a>
          </div>
      </div>

        <div class="hidden--block"></div>
        <div class="container">

            <div class="breadcrumb">
                <p>Գլխավոր</p>
                <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.21967 0.96967C0.512563 0.676777 0.987437 0.676777 1.28033 0.96967L5.78033 5.46967C6.07322 5.76256 6.07322 6.23744 5.78033 6.53033L1.28033 11.0303C0.987437 11.3232 0.512563 11.3232 0.21967 11.0303C-0.0732233 10.7374 -0.0732233 10.2626 0.21967 9.96967L4.18934 6L0.21967 2.03033C-0.0732233 1.73744 -0.0732233 1.26256 0.21967 0.96967Z" fill="#B0AFB3"/>
                </svg>
                <p>Տեսականի</p>                    
            </div>

            <div class="title--mob-filter">
                <h1 class="title">Տեսականի</h1>

                <button type="button" class="mob-filter">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.75 4.2308H12.169C12.5131 5.79731 13.9121 6.97336 15.5805 6.97336C17.2488 6.97336 18.6478 5.79736 18.9919 4.2308H23.25C23.6642 4.2308 24 3.89498 24 3.4808C24 3.06661 23.6642 2.7308 23.25 2.7308H18.9915C18.6467 1.16508 17.2459 -0.0117188 15.5805 -0.0117188C13.9141 -0.0117188 12.5139 1.16489 12.1693 2.7308H0.75C0.335812 2.7308 0 3.06661 0 3.4808C0 3.89498 0.335812 4.2308 0.75 4.2308ZM13.588 3.48277C13.588 3.48009 13.588 3.47738 13.588 3.4747C13.5913 2.37937 14.4851 1.48833 15.5805 1.48833C16.6743 1.48833 17.5681 2.37816 17.5728 3.47297L17.573 3.48398C17.5712 4.58119 16.6781 5.47341 15.5805 5.47341C14.4833 5.47341 13.5904 4.58208 13.5879 3.48553L13.588 3.48277ZM23.25 19.769H18.9915C18.6467 18.2033 17.2459 17.0265 15.5805 17.0265C13.9141 17.0265 12.5139 18.2031 12.1693 19.769H0.75C0.335812 19.769 0 20.1047 0 20.519C0 20.9332 0.335812 21.269 0.75 21.269H12.169C12.5131 22.8355 13.9121 24.0115 15.5805 24.0115C17.2488 24.0115 18.6478 22.8355 18.9919 21.269H23.25C23.6642 21.269 24 20.9332 24 20.519C24 20.1047 23.6642 19.769 23.25 19.769ZM15.5805 22.5115C14.4833 22.5115 13.5904 21.6202 13.5879 20.5237L13.588 20.5209C13.588 20.5182 13.588 20.5155 13.588 20.5129C13.5913 19.4175 14.4851 18.5265 15.5805 18.5265C16.6743 18.5265 17.5681 19.4163 17.5728 20.511L17.573 20.5221C17.5714 21.6194 16.6782 22.5115 15.5805 22.5115ZM23.25 11.2499H11.831C11.4869 9.68339 10.0879 8.50739 8.41955 8.50739C6.75117 8.50739 5.35223 9.68339 5.00808 11.2499H0.75C0.335812 11.2499 0 11.5857 0 11.9999C0 12.4141 0.335812 12.7499 0.75 12.7499H5.00845C5.35331 14.3156 6.75413 15.4924 8.41955 15.4924C10.0859 15.4924 11.4861 14.3158 11.8307 12.7499H23.25C23.6642 12.7499 24 12.4141 24 11.9999C24 11.5857 23.6642 11.2499 23.25 11.2499ZM10.412 11.9979C10.412 12.0007 10.412 12.0033 10.412 12.006C10.4087 13.1013 9.51492 13.9924 8.41955 13.9924C7.32572 13.9924 6.43191 13.1025 6.42717 12.0078L6.42703 11.9968C6.42867 10.8995 7.32188 10.0074 8.41955 10.0074C9.5167 10.0074 10.4096 10.8987 10.4121 11.9953L10.412 11.9979Z" fill="#1D1C20"/>
                    </svg>                        
                </button>
            </div>

            <section class="contant">
                <div class="contant__menu" id="assortment-menu">
                    <div class="mob-menu">
                        <button type="button" id="close-mob-filter" onclick="closeFilter()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 6L6 18" stroke="#1D1C20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 6L18 18" stroke="#1D1C20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </button>
                        <h2 class="mob-title">Տեսականի</h2>
                    </div>
                </div>

                <div class="contant__items" id="assortment-items">
                  <?php 
                        if(mysqli_num_rows($item_data) > 0){
                          foreach($item_data as $value){
                            echo '<a href="Apranq.php?id='.$value['id'].'" class="contant__items--item">
                              <img src="./img/'.$value['ownimage'].'" alt>
                              <div class="shodow"></div>
                              <h3>'.$value['nameeng'].'</h3>
                            </a>';
                          }}else{
                           echo "<h1>There are no products in this section yet...</h1>";
                          }
                  ?>
                </div>
            </section>
        </div>
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
    </main> 
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
    <script src="./js/script.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/style.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>