<?php
    require_once("../connect.php");
    
    if (isset($_GET['change_pass']))
    {
        //$connect->select_db("register-bg");
        $pass = md5($_POST['pass']);
        $query = "Update users set pass='".$pass."' where id=".$_POST['id'];
        $connect->query($query);
    }

    if (isset($_GET['delete_news']))
    {
        //$connect->select_db("news");
        $query = "Delete from news where news_id=".$_POST['id'];
        $connect->query($query); 
    }


    if (isset($_GET['add_news_conf']))
    {
        //$connect->select_db("news");
        $query = "Insert into news (ntext) values('".$_POST['text']."')";
        $connect->query($query); 
    }

    if (isset($_GET['update_news_conf']))
    {
        //$connect->select_db("news");
        $query = "Update news set ntext='".$_POST['text']."' where news_id=".$_POST['id'];
        $connect->query($query);          
    }

    if (isset($_GET['update_status_order']))
    {
        //$connect->select_db("goods");
        $query = "Update orders set status=(Select id from status where name='".$_POST['status']."') where id =".$_POST['id']."";
        $connect->query($query);
    }

?>