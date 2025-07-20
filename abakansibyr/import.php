<?php
    require_once("connect.php");
    

    $query = "Select * from usluga";
    $res = $connect->query($query)->fetch_all(MYSQLI_NUM);
    for ($i = 0; $i < count($res); $i++){
        $query = "INSERT INTO tovar(name, descriptions, price, img, id_category) VALUES ('".$res[$i][1]."', '".$res[$i][2]."'
            , '".$res[$i][3]."', '".$res[$i][5]."', 3)";
        echo $query . '<br>';
        
        ////INSERT INTO `tovar` (`id`, `name`, `descriptions`, `price`, `img`, `id_category`) VALUES (NULL, '2', '2', '2', '2', '2');
        $connect->query($query);
    }

?>