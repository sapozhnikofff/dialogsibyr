<?php

require_once("../connect.php");


if (isset($_GET['add_korz']))
{
    //$connect->select_db("goods");
    if (isset($_SESSION['login'])){
        $query = "INSERT INTO tmp_korz(id_u, id_tovar) values('".$_SESSION['login']."', '".$_POST['id_tovar']."')";
        $connect->query($query);
        echo 1;
    }
    else
        echo "Авторизуйтесь";
    
}
    
if (isset($_GET['reg_user']))
{
    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $mail = $_POST['mail'];
    
    //$connect->select_db("register-bg");
    $query = "Select * from users where login = '".$login."'";
    $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
    if (count ($res) == 0)
    {
        $query = "Insert into users (login, pass, name, mail) values ('".$login."', '".md5($pass)."', '".$name."', '".$mail."')";
        $connect->query($query);
        echo 1;
    }
    else 
        echo "Пользователь с таким ником уже зарегиcтрирован";
}



if (isset($_GET['vhod_user']))
{
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);
    
    //$connect->select_db("register-bg");
    $query = "Select * from users where login = '".$login."'";
    $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
    if (count($res) != 0)
    {
        if ($pass == $res[0][2])
        {
            $_SESSION['login'] = $res[0][0];
            echo 1;
        }
        else
           echo "Неверный логин/пароль"; 
    }
    else
        echo "Неверный логин/пароль";
}



if (isset($_GET['delete_from_korzina']))
{ 
    //$connect->select_db("goods");
    $query = "Delete from tmp_korz where id=".$_POST['id'];
    $connect->query($query);
    
}


if (isset($_GET['user_exit'])){
    unset($_SESSION['login']);
    session_close();
}



function send_mail($id_orders){
    //$connect->select_db("register-bg");
    $query = "Select mail from users where id=".$_SESSION['login'];
    $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
    $to = $res[0][0];
    $subject = "Оформление заказа ДиалогСибирь-Абакан";
    $message = '';
        
        
    //$connect->select_db("goods");
    $query = "Select * from about_orders where id_o=".$id_orders;
    $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
    $summa = 0;
    for ($i = 0; $i < count($res); $i++){
        $str .= '<div class="row">';
        $query = "Select * from tovar where id = ".$res[$i][2];
        $res2 = $connect->query($query)->fetch_all(MYSQLI_NUM);
        for ($j = 0; $j < count($res2); $j++){
            $summa = $summa + $res2[0][3];
            $message .= '<div class="col-lg-3 col-sm-3 col-xs-12" style="height: 100px; line-height: 100px;">
                        <img  src="'.$res2[0][4].'" style="width: 80px; height: 80px;  " />
                    </div>
                     <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                        '.$res2[0][1].'
                    </div>
                    <div class="col-lg-2 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
                        '.$res2[0][3].' руб.
                    </div>';
        }
        $message.='</div>'; 
    }
    if ($message != '')
    {
        $message .= '<hr>
                <p>Итого: '.$summa.' рублей</p>';
    }
    
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers.= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    mail($to, $subject, $message, implode("\r\n", $headers));
    echo "qqqqq";
}

if (isset($_GET['finish_order'])){
    
    //$connect->select_db("goods");

    $summa = 0;
    $query = "Insert into orders(id_u, summa, status) values (".$_SESSION['login'].", 0, 1)";
    $connect->query($query);
    $id_orders = $connect->insert_id;
    
    $query = "Select * from tmp_korz where id_u=".$_SESSION['login'];
    $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
    
    for ($i = 0; $i < count($res); $i++)
    {
        $query = "INSERT INTO about_orders (id_o, id_t) values(".$id_orders.", ".$res[$i][2].")";
        $connect->query($query);
        $query = "Select price from tovar where id =".$res[$i][2];
        $res2 = $connect->query($query)->fetch_all(MYSQLI_NUM);
        $summa = $summa + $res2[0][0];
    }
    
    $query = "Update orders set summa=".$summa." where id =".$id_orders;
    $connect->query($query);
    $query = "Delete from tmp_korz where id_u=".$_SESSION['login'];
    $connect->query($query);
    
    
    //$connect->select_db("register-bg");
    $query = "Select mail from users where id=".$_SESSION['login'];
    $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
    $to = $res[0][0];
    $subject = "Оформление заказа ДиалогСибирь-Абакан";
    $message = 'Ваш заказ №'. $id_orders .' принят. Отследить статус заказа можно в личном кабинете на сайте';
        
    mail($to, $subject, $message);
    
}


?>