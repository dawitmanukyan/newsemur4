<?php 
    require "./config/config.php";

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
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="./css/style.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/glxavorMedia768.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/glxavorMedia375.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <title>Semur & Co</title>
</head>
<body>
    <div id="data">
        <div id="items">
            <?php 
                if(mysqli_num_rows($selassortment) > 0){
                    foreach ($selassortment as $value) {
                        echo '<div id="item">
                            <a href="#">
                                <div id="item-image">'.$_POST['search'].'</div>
                            </a>
                        </div>';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>