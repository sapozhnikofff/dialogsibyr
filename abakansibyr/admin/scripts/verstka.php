<?php
require_once("../connect.php");

    if (isset($_GET['load_tovar']))
    {
        echo '<span>Модуль находится в разработке</span>
            ';
    }

    if (isset($_GET['load_status']))
    {
        $str = '';
        //$connect->select_db("goods");
    
        $query = "Select * from orders";
        $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
        $str = '';
        
        for ($i =0; $i < count($res); $i++){
            $query = "Select * from status";
            $res2 = $connect->query($query)->fetch_all(MYSQLI_NUM);
            $str.= '
            <div class = "row padding text-center ">
                    <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                           Номер заказа: '.$res[$i][0].'
                    </div>
                    <div class="col-lg-2 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                            Сумма: '.$res[$i][2].' руб.
                    </div>';
                   
            $query = "Select name from status where id=".$res[$i][3];
            $name = $connect->query($query)->fetch_all(MYSQLI_NUM);
            $str.='<select class="col-lg-4 col-sm-2 col-xs-12 mob-fix" id="select_status" name="'.$res[$i][0].'">
                    ';
            for ($j = 0; $j < count($res2); $j++){
                if ($res2[$j][1] == $name[0][0])
                    $str.='<option selected>'.$res2[$j][1].'</option>';
                else
                    $str.='<option>'.$res2[$j][1].'</option>';
            }
            
            $str.='</select>
                    
                    <div class="col-lg-3 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;" id = "orders_about" name="'.$res[$i][0].'">
                            Подробнее
                    </div>
            </div>';
        }
        if ($str == '')
            $str = "Список заказов пуст";
        echo $str;
    }
   
if (isset($_GET['load_user']))
    {
        echo '<input class="form-control" type="text" placeholder="Введите логин пользователя" id="inpt_search_login" aria-label="Search">
                <button type="button" class="btn btn-success btn_search" id="btn_search_login">Найти</button>
                <br>
              <div id="pnkt_menu_container"></div>
         ';
    }



if (isset($_GET['load_news']))
    {
        $str = '';
        //$connect->select_db("news");
        $query = "Select * from news";
        $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
        for ($i = 0; $i < count($res); $i++){
            $str .= '<div class = "row" style="margin-bottom :100px">
                    <div class="col-lg-6 col-sm-6 col-xs-12 mob-fix">
                        '.$res[$i][1].'
                    </div>
                    <div class="col-lg-2 col-sm-2 col-xs-12 mob-fix" id="change_news" name="'.$res[$i][0].'">
                        Изменить
                    </div>
                    <div class="col-lg-2 col-sm-2 col-xs-12 mob-fix" id="delete_news" name="'.$res[$i][0].'">
                        Удалить
                    </div>
                    </div>';
        
        }
    $str .= '<div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <button type="button" class="btn btn-success btn_search" id="add_news">Добавить</button>
                </div>
            </div>';
        echo $str;
    }


if (isset($_GET['load_user_login']))
{
    $login = $_POST['login'];
    
    
    //$connect->select_db("register-bg");
    $query = "Select * from users where login = '".$login."'";
    $str = '';
    $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
    if (count ($res) == 0)
    {
        $str .= '<span>Пользователь не найден</span>';
    }
    else 
    {
       $str .= '
         <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix">
            ID : '.$res[0][0].'
        </div>
         <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix">
            Login : '.$res[0][1].'
        </div>
         <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix">
            Name : '.$res[0][3].'
        </div>
         <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix">
            Mail : '.$res[0][4].'
        </div>
         <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix">
             <button type="button" class="btn btn-success btn_search" name="'.$res[0][0].'" id="change_pass_btn">Сменить пароль</button>
        </div>';
    }
    echo $str;
}


if (isset($_GET['change_pass_user']))
{
    $str .= '<input class="form-control" type="password" id="confir_pass_change_inpt"> <br> 
    <button type="button" class="btn btn-success btn_search" name="'.$_POST['id'].'" id="change_pass_btn_confirm">Подтвердить</button>';
    echo $str;
}


if (isset($_GET['add_news']))
{
    echo '<input class="form-control" type="text" placeholder="Введите новость" id="inpt_add_news">
                <button type="button" class="btn btn-success btn_search" id="btn_add_news">Добавить</button>';
}


if (isset($_GET['change_news']))
{
    $str = '';
    //$connect->select_db("news");
    $query = "Select * from news where news_id = " . $_POST['id'];
    $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
    echo '<input class="form-control" type="text" id="inpt_update_news" value="'.$res[0][1].'">
                <button type="button" class="btn btn-success btn_search" id="btn_update_news" name="'.$res[0][0].'">Изменить</button>';
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
                            <img  src="../'.$res2[0][4].'" style="width: 80px; height: 80px;  " />
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