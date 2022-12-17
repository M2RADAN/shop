<?php
session_start();
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>E-lS</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body id = "body">
    <h1 class = "letter">
        <div class = "title" onclick = "window.location.href = 'index.php'" >
            E-LS
        </div>

        <div class = "spacer"></div>

        <div class = "h1content letter">
            <form id = "form" spellcheck="false">
                <input id ="input" class = "letter" type="text" autocomplete="on" maxlength="10" required placeholder="бошки сахарные...">
            </form>
            <div class = "profile"></div>
        </div>
    </h1>

    <h2>
        <div class ='logo' onclick = "window.location.href = 'index.php'" >
            <img class = "icon" src ="/source/images/icon.png"></img>  
        </div>
        <button onclick = "window.location.href = 'catalog.php'" class = "button__navigation" >ка</button>
        <button onclick = "window.location.href = 'sale.php'" class = "button__navigation" >но</button>
        <button onclick = "window.location.href = 'guide.php'" class = "button__navigation" >га</button>
        <button onclick = "window.location.href = 'info.php'" class = "button__navigation" >об</button>
    </h2>
    <div class = "row__main row">
        <div class = "panel__wrapper">
                <div class = "panel__left">

                <div class = "itembox border" onclick="show_info()" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter">Rell: MIXED BERRIES</div>
                </div>
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter">Rell: виноградный double ice</div>
                </div>
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter"></div>
                </div>
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter"></div>
                </div>
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter"></div>
                </div> 
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter"></div>
                </div> 
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter"></div>
                </div> 
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter"></div>
                </div> 
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter"></div>
                </div>
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium letter"></div>
                </div> 
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium"></div>
                </div> 
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium"></div>
                </div>
                <div class = "itembox border" style = "background-image: url(/source/images/rell.png);">
                        <div class = "item__description__medium"></div>
                </div>  

                </div>
        </div>
        <div id = "info" class = "info__wrapper">
                <div class ="item__info">
                        <div class = "item__info__top">
                                <div class = "img__big border"></div>
                        </div>
                        <div class = "item__info__bottom">
                                <button class = "button__cart letter">Добавить в корзину</button>
                        </div>
                </div>
        </div>
        </div>

</body>

<script src="js/main.js"></script>