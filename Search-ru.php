<?php 
    require "./config/config.php";
    $asr = $mysql -> query("SELECT * FROM `assortment`");
    $subc = $mysql -> query("SELECT * FROM `subcategories`");
    if(isset($_POST['search'])){

        // $search =  ucwords($search);
        //  Assortment   //
        $search = $_POST['search'];
        $selassortment = $mysql -> query("SELECT * FROM `assortment` WHERE `type-arm` = '$search' || `type-ru` = '$search' || `type-eng` = '$search'");
                                            // Blog //
        $selblogs = $mysql -> query("SELECT * FROM `blogs` WHERE `namearm` = '$search' || `nameru` = '$search' || `nameeng` = '$search' || `descriptionarm`
        = '$search' || `descriptionru` = '$search' || `descriptioneng` = '$search'");
                                            // Item //
        $selitems = $mysql -> query("SELECT * FROM `items` WHERE `namearm` = '$search' || `nameru` = '$search' || `nameeng` = '$search' || `descriptionarm`
        = '$search' || `descriptionru` = '$search' || `descriptioneng` = '$search'");
                                            // Subcategories // 
        $selsubcat = $mysql -> query("SELECT * FROM `subcategories` WHERE `type-arm` = '$search' || `type-ru` = '$search' || `type-eng` = '$search'");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/searchstyle.php">
    <link rel="stylesheet" href="./css/style.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/glxavorMedia768.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/glxavorMedia375.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="stylesheet" href="./css/productStyle.php">
    <title>Semur & Co</title>
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
    <li><a href="Artadranq-ru.php" class="resp-neu-li">Ассортимент</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About-ru.php" >О нас</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux-ru.php">Ветви</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog-ru.php">Блог</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact-ru.php" >Контакт</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>

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
            <?php 
              foreach ($asr as $value) {
                echo '<a href="Product-ru.php?type='.$value['category_id'].'" class="sub-menu-a">'.$value['type-ru'].'</a>';
              }
            ?>
          </div>
          <div class="language">
              <a href="index.php">Հայ</a>
              <a href="index-en.php">EN</a>
              <a href="index-ru.php" class="active">РУ</a>
          </div>
      </div>
<div id="data">
        <div id="search-header"><h3>Результаты поиска</h3></div>
        <hr id="srch-hr">
        <div id="items">
            <?php 
                foreach($selitems as $value){
                    echo '<a href="Apranq.php?id='.$value['id'].'" class="contant__items--item">
                    <img src="./img-items/'.$value['ownimage'].'" alt>
                    <div class="shodow"></div>
                    <h3>'.$_POST['search'].'</h3>
                  </a>';
                }
                foreach ($selsubcat as $value) {
                    echo '<a href="Product.php?type='.$value['category_id'].'" class="contant__items--item">
                    <img src="./img-subcategories/'.$value['img'].'" alt>
                    <div class="shodow"></div>
                    <h3>'.$_POST['search'].'</h3>
                  </a>';
                }
                foreach ($selassortment as $value) {
                    echo '<a href="Product.php?type='.$value['category_id'].'" class="contant__items--item">
                    <img src="./img-categories/'.$value['img'].'" alt>
                    <div class="shodow"></div>
                    <h3>'.$_POST['search'].'</h3>
                  </a>';
                }
            ?>
        </div>
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
      <script src="./js/main.js"></script>
    <script src="./js/style.js"></script>
</body>
</html>
</body>
</html>