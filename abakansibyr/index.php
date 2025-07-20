<?php
   require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ДиалогСибирь-Абакан</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="fm.revealator.jquery.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--Shap-->
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light bg-light ">
    <div class="container-fluid">
        <a href="#" class="navbar-brad" id="menu_index"><img src="image/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a href="#" class="nav-link" id="menu_computer">Компьютеры</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="menu_orgtechnical">Оргтехника</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="menu_uslugi">Услуги</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="menu_about">О нас</a>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link" id="menu_korz">Корзина</a>
               </li>
               <?php 
                    if (isset($_SESSION['login'])){
                        echo ' <div class="dropdown"><li class="nav-item" >
                        <img src="image/icons.png" id="dropdownMenu1" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="true">
        <span class="caret"></span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">  
                                        <li class="dropdown-item">
                                            <a href="#" class="nav-link" id="menu_exit">Выход</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#" class="nav-link" id="menu_myorders">Мои заказы</a>
                                        </li>
                                    </ul>
                                </li> </div>';
                    }
                    else 
                        echo '<li class="nav-item">
                                <a href="#" class="nav-link" id="menu_vhod">Вход</a>
                            </li>';
                ?>
                
            </ul>

        </div>
    </div>
</nav>


<!--Slider-->
<div id="main_container">
    <div class="carousel slide" data-ride="carousel" id="slides">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1" ></li>
        <li data-target="#slides" data-slide-to="2" ></li>
    </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/slider_one.jpg">
                <div class="carousel-caption">
                    <h1 class="display-5">Компьютеры</h1>
        <a href="#"><button type="button" class="btn btn-success btn-lg" id="menu_computer">Посмотреть</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/фф.jpg">
                <div class="carousel-caption">
                    <h1 class="display-4">Оргтехника</h1>
        <a href="#"><button type="button" class="btn btn-success btn-lg" id="menu_orgtechnical">Посмотреть</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/аа.jpg">
                <div class="carousel-caption">
                    <h1 class="display-4">Услуги</h1>
        <a href="#"><button type="button" class="btn btn-success btn-lg" id="menu_uslugi">Посмотреть</button></a>
                </div>
            </div>
        </div>
    </div>
    <!--Text-->
    <div class="container12">
        <h1>Производители компьютеров</h1>
        <div class="roww">
            <div class="col9">
                <div class="image-container">
                    <img class="logocomp" src="image/acer.png" alt="Логотип Acer">
                </div>
            </div>
            <div class="col9">
                <div class="image-container">
                    <img class="logocomp" src="image/xerox.png" alt="Логотип Xerox">
                </div>
            </div>
            <div class="col9">
                <div class="image-container">
                    <img class="logocomp" src="image/hp.png" alt="Логотип HP">
                </div>
            </div>
            <div class="col9">
                <div class="image-container">
                    <img class="logocomp" src="image/canon.png" alt="Логотип Canon">
                </div>
            </div>
        </div>
    </div>
    <!--News-->
    <div class="container-fluid">
        <div class="row text-center alert">
            <div class="col-12">
                <h1 class="display-4">Акции</h1>
            </div>
            <hr>
            <div class="col-12" id="news_container">

                <hr>

            </div>
        </div>
    </div>


<!--Footer-->
<footer class="container-fluid">
      <div class="container-fluid">
          <div class="row padding text-center">
             <div class="col-12">
              <h2>Наши контакты</h2>

          </div>
          <div class="col-12 social padding">
              <a href="#"><i class="fa fa-telegram"></i></a>
              <a href="#"><i class="fa fa-vk"></i></a>
          </div>
          </div>
      </div>
 </footer>
</div>
</div>


<script src="js/jquery-2.2.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="fm.revealator.jquery.js"></script>











</body>
</html>
