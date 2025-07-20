<?php
    require_once("connect.php");

    if($_SESSION['login'] != 16)
        header("Location: ../");
?>
<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="fm.revealator.jquery.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="widget">
      <h3 class="widget-title">Категории</h3>
            <ul class="widget-list">
                <li><a href="#" id="menu_tovar">Товар</a></li>
                <li><a href="#" id="menu_status">Статус</a></li>
                <li><a href="#" id="menu_user">Пользователи</a></li>
                <li><a href="#" id="menu_news">Новости</a></li>
            </ul>
</div>
<div id="mein_container">
</div>

<!-- Этот контейнер останется на странице, а мы будем менять только его содержимое -->
<div id="orders_container"></div>





<script src="js/jquery-2.2.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="fm.revealator.jquery.js"></script>
<script>
document.getElementById("order_date").addEventListener("change", function () {
    const selectedDate = this.value;
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "verstka.php?load_status=1&date=" + selectedDate, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("orders_container").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
});
</script>
</body>
</html>
