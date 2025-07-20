<?php

    require_once("../connect.php");

    if (isset($_GET['load_news']))
    {
        //$connect->select_db("news");
        $str = '';
        $query = "Select * from news";
        $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
        for ($i = 0; $i < count($res); $i++){
            $str .= '<p>'.$res[$i][1].'</p><p>'.$res[$i][2].'</p>';
        }
        echo $str;
    }

    if (isset($_GET['load_index']))
    {
        echo ' <div class="carousel slide" data-ride="carousel" id="slides">
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
                    <img src="image/1.jpg">
                    <div class="carousel-caption">
                        <h1 class="display-4">Оргтехника</h1>
            <a href="#"><button type="button" class="btn btn-success btn-lg" id="menu_orgtechnical">Посмотреть</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/777.jpg">
                    <div class="carousel-caption">
                        <h1 class="display-4">Услуги</h1>
            <a href="#"><button type="button" class="btn btn-success btn-lg" id="menu_uslugi">Посмотреть</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--Text-->
        <div class="container-fluid">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p class="lead">Компания «ДиалогСибирь-Абакан» основана в 1994 году и входит во всероссийский холдинг СП «Диалог» являющийся одним из основателей компьютерного бизнеса в России, объединяющий несколько десятков предприятий, расположенных во многих регионах России, ближнего и дальнего зарубежья.<br>Изначально компания ориентирована на поставку вычислительной и копировальной техники класса BrandName. На сегодня ДиалогСибирь-Абакан является официальным партнером более 15 крупнейших американских и японских и российских производителей вычислительной и копировальной техники, что предполагает высокий уровень работы с заказчиками, предъявляемый производителями оборудования к своим партнерам, и, соответственно, высокое качество поставляемого оборудования.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="#"><button class="btn btn-success btn-lg" type="button" id="menu_about">Читать далее</button></a>
            </div>
        </div>
        <!--News-->
        <div class="container-fluid">
            <div class="row text-center alert">
                <div class="col-12">
                    <h1 class="display-4">Новости</h1>
                </div>
                <hr>
                <div class="col-12" id="news_container">
    
                    <hr>
    
                </div>
            </div>
        </div>
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
        </footer>';
        }



            if (isset($_GET['load_about']))
            {
                echo '   <div class="container-fluid">
                <h1 class="display-5">ДиалогСибирь-Абакан</h1>
                <div class="row jumbotron">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                        <p class="lead">Компания «ДиалогСибирь-Абакан» основана в 1994 году и входит во всероссийский холдинг СП «Диалог» являющийся одним из основателей компьютерного бизнеса в России, объединяющий несколько десятков предприятий, расположенных во многих регионах России, ближнего и дальнего зарубежья.<br>Изначально компания ориентирована на поставку вычислительной и копировальной техники класса BrandName. На сегодня ДиалогСибирь-Абакан является официальным партнером более 15 крупнейших американских и японских и российских производителей вычислительной и копировальной техники, что предполагает высокий уровень работы с заказчиками, предъявляемый производителями оборудования к своим партнерам, и, соответственно, высокое качество поставляемого оборудования.<br>Специалисты ДиалогСибирь-Абакан проводят консультации по наиболее сбалансированному, по критерию «цена – качество», использованию существующего и приобретаемого оборудования, комплексным решениям, адаптированным под бизнес-процессы предприятий различного рода деятельности. При этом на первый план выходят интеллектуальные решения, позволяющие эффективно интегрировать инфраструктуры с их оптимальной загрузкой,  приводят аргументированные причины для принятия решения о наиболее рациональном использовании оборудования.<br>Предлагаемые сервисными центрами услуги, проводятся специалистами, прошедшими специальное обучение и получившие соответствующие сертификаты, заботящиеся о постоянном поддержании обслуживаемого оборудования в исправном состоянии.<br>Уровень оказываемых услуг, предлагаемый широкий спектр высокотехнологичного оборудования, его качество, позволили компании привлечь к сотрудничеству многие крупные предприятия и организаций Хакасии, юга Красноярского края и Республики Тыва.<br>Компания ДиалогСибирь-Абакан проводит социально ориентированную политику, по оказанию организационно-технической и финансовой помощи организациям образования, здравоохранения, общественным и культурным организациям, за что имеет многочисленные благодарственные письма.</p>
                    </div>
                    </div>
                    </div>
            <!--Maps -->
                <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Как добраться до нас?</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2360.9596057095114!2d91.42526721548691!3d53.7189819800589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d2c3d5aea3a7bc5%3A0xccab7377c80c39bd!2z0JTQuNCw0LvQvtCzINCh0LjQsdC40YDRjA!5e0!3m2!1sru!2sru!4v1579691766286!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10"></iframe>
                </div>
                        <div class="col-md-4">
                            <h2>Связь с нами</h2>
                    <p>
                    <i class="fa fa-phone" aria-hidden="true"></i> +7 (3902) 22-81-00, 22-24-88<br>
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
            Республика Хакасия, г. Абакан, ул. Советская, 75,<br>
            <i class="fa fa-share" aria-hidden="true"></i>
            E-mail:common@dialogabakan.ru <br>
            <i class="fa fa-bus"></i> 1 а/м, 12, 10. Остановка: "Трудовая"

                    </p>
                </div>
            </div>
                    <p>
                    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2Fb2BWe" class="pull-right" target="_blank"></a>
                    </p>
            
            </div> 
            
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
            ';
    }


    if (isset($_GET['load_computers']))
    {
        $str = ' <div class="container-fluid">
                    <div class="row text-center alert">
                     <div class="col-12">
                         <h1 class="display-4">Компьютеры</h1>
                     </div>
                    <hr>
                     <div class="col-12">

                     </div>
                  </div>
                
                <p class=" text text-center">Наша компания поможет подобрать вам ПК и ноутбук для работы в организациях,а так же в домашнем использовании. Так же вы можете оформить заявку на заказ любого компьютера, который вам бы хотелось приобрести, заполнив соответствующую заявку</p>
                    <div class="container-fluid padding ">
                        <div class="row text-center padding">';
        //$connect->select_db("goods");
        $query = "Select * from tovar where id_category = 1";
        $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
        for ($i = 0; $i < count($res); $i++){
            $str.='<div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="text1">'.$res[$i][1].'</h3>
                        <img class="img-fluid img_comps" src="'.$res[$i][4].'">
                        <a href="#" class = "no-underline"<p class="text">
                            '.$res[$i][2].' 
                        <br>
                        Цена: '.$res[$i][3].' руб.
                        </p>
                         </a> 
                        <button type="button" class="btn btn-secondary add-cart btn_add_korz" data-id="'.$res[$i][0].'" >заказать</button>
                    </div>
                    
                        ';
        }
        $str .= '</div></div>';




        $str .= '<footer class="container-fluid">
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
          </footer>';

        echo $str;
    }

if (isset($_GET['load_orgtechnical']))
{
    $str=' <div class="container-fluid">
    <div class="row text-center alert">
        <div class="col-12">
            <h1 class="display-4">Оргтехника</h1>
        </div>
        <hr>
        <div class="col-12">

        </div>
    </div>
</div>
<p class=" text text-center">Поставки оргтехники, офисного, печатного и полиграфического оборудования - еще одно направление нашей деятельности.</p>
<div class="container-fluid padding ">
    <div class="row text-center padding">';
     //$connect->select_db("goods");
        $query = "Select * from tovar where id_category = 2";
        $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
        for ($i = 0; $i < count($res); $i++){
            $str.='<div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="text1">'.$res[$i][1].'</h3>
                        <img class="img-fluid img_comps" src="'.$res[$i][4].'">
                        <p class="text">
                            '.$res[$i][2].'
                        <br>
                        Цена: '.$res[$i][3].' руб
                        </p> 
                        <button type="button" class="btn btn-secondary add-cart btn_add_korz" data-id="'.$res[$i][0].'" >заказать</button>
                    </div>
                        ';
        }
        $str .= '<footer class="container-fluid">
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
          </footer>';
    echo $str;
}

if (isset($_GET['load_uslugi']))
{
   $str=' <div class="container-fluid">
    <div class="row text-center alert">
        <div class="col-12">
            <h1 class="display-4">Услуги</h1>
        </div>
        <hr>
        <div class="col-12">

        </div>
    </div>
</div>
<p class=" text text-center"></p>
<div class="container-fluid padding ">
    <div class="row text-center padding">';
   //$connect->select_db("goods");
        $query = "Select * from tovar where id_category = 3";
        $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
        for ($i = 0; $i < count($res); $i++){
            $str.='<div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="text1">'.$res[$i][1].'</h3>
                        <img class="img-fluid img_comps" src="'.$res[$i][4].'">
                        <p class="text">
                            '.$res[$i][2].'
                        <br>
                        Цена: '.$res[$i][3].' руб.
                        </p> 
                        <button type="button" class="btn btn-secondary add-cart btn_add_korz" data-id="'.$res[$i][0].'" >заказать</button>
                    </div>
                        ';
            
        }
     $str .= '<footer class="container-fluid">
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
          </footer>';
    
    echo $str;   
}



if (isset($_GET['load_reg']))
{
    $str = '';
    
    $str .='<div class="container mt-4">
    <h1>Форма регистрации</h1>
        <input type="text" class="form-control" name="login" id="login_reg" placeholder="Введите логин"><br>
        <input type="text" class="form-control" name="name" id="name_reg" placeholder="Введите имя"><br>
        <input type="password" class="form-control" name="pass" id="pass_reg" placeholder="Введите пароль"><br>
        <input type="text" class="form-control" name="mail" id="mail_reg" placeholder="Введите Email"><br>
        <button class="btn btn-success" id="btn_reg">Зарегистрироваться</button>';
    echo $str;
}



if (isset($_GET['load_vhod']))
{
    $str = '';

    
    $str = '<div class="container mt-4">
        <h1>Авторизация</h1>
            <input type="text" class="form-control" name="login" id="login_vhod" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass_vhod" placeholder="Введите пароль"><br>
            <button class="btn btn-success" id="btn_vhod">Войти</button>
            <p>Еще не зарегестрированы? <a href="#" id="reg">Зарегистрироваться</a></p>
        ';
    
    
     echo $str;
}

if (isset($_GET['load_korzina']))
{
    if (isset($_SESSION['login']))
    {
        //$connect->select_db("goods");
        $query = "Select * from tmp_korz where id_u=".$_SESSION['login'];
        $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
        $summa = 0;
        $str = '';
        for ($i = 0; $i < count($res); $i++){
            $str .= '<div class="row">';
            $query = "Select * from tovar where id = ".$res[$i][2];
            $res2 = $connect->query($query)->fetch_all(MYSQLI_NUM);
            for ($j = 0; $j < count($res2); $j++){
                $summa = $summa + $res2[0][3];
                $str .= '<div class="col-lg-3 col-sm-3 col-xs-12" style="height: 100px; line-height: 100px;">
                            <img  src="'.$res2[0][4].'" style="width: 80px; height: 80px;  " />
                        </div>
                         <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                            '.$res2[0][1].'
                        </div>
                        <div class="col-lg-2 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                            '.$res2[0][3].' руб.
                        </div>
                        <div class="col-lg-3 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;" id = "delet_tmp_korz" name="'.$res[$i][0].'">
                            Удалить
                        </div>';
            }
            $str.='</div>'; 
        }
        if ($str != '')
        {
            $str .= '<hr>
                    <p>Итого: '.$summa.' рублей</p>
                    <div style="width: 100%; text-align: right;">
                        <div style="width: 50%; float: right;">
                        <button class="btn btn-success btn-lg" id="finish_order">Оформить заказ</button>
                        </div>
                    </div>';
        }
        else{
            $str = "Корзина пуста";
        }
        echo $str;
    }
    else
        echo 1;
}


    if (isset($_GET['load_myorders'])){
        //$connect->select_db("goods");
        $query = "Select * from orders where id_u=".$_SESSION['login'];
        $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
        $str = '';
        
        for ($i =0; $i < count($res); $i++){
            $query = "Select name from status where id=".$res[$i][3];
            $res2 = $connect->query($query)->fetch_all(MYSQLI_NUM);
            $str.= '
            <div class = "row padding text-center ">
                    <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                           Номер заказа: '.$res[$i][0].'
                    </div>
                    <div class="col-lg-2 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                            Сумма: '.$res[$i][2].' руб.
                    </div>
                    
                    <div class="col-lg-4 col-sm-2 col-xs-10 mob-fix" style="height: 100px; line-height: 100px;">
                            Статус: '.$res2[0][0].'
                    </div>
                    
                    <div class="col-lg-3 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;" id = "orders_about" name="'.$res[$i][0].'">
                            Подробнее
                    </div>
            </div>';
        }
        if ($str == '')
            $str = "Список заказов пуст";
        echo $str;
    }



    if (isset($_GET['about_order']))
    {
        //$connect->select_db("goods");
        $query = "Select * from about_orders where id_o=".$_POST['id'];
        $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
        $summa = 0;
        $str = '';
        for ($i = 0; $i < count($res); $i++){
            $str .= '<div class="row">';
            $query = "Select * from tovar where id = ".$res[$i][2];
            $res2 = $connect->query($query)->fetch_all(MYSQLI_NUM);
            for ($j = 0; $j < count($res2); $j++){
                $summa = $summa + $res2[0][3];
                $str .= '<div class="col-lg-3 col-sm-3 col-xs-12" style="height: 100px; line-height: 100px;">
                            <img  src="'.$res2[0][4].'" style="width: 80px; height: 80px;  " />
                        </div>
                         <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                            '.$res2[0][1].'
                        </div>
                        <div class="col-lg-2 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                            '.$res2[0][3].' руб.
                        </div>';
            }
            $str.='</div>'; 
        }
        if ($str != '')
        {
            $str .= '<hr>
                    <p>Итого: '.$summa.' рублей</p>';
        }
        echo $str;
    }






?>