<?php
session_start();
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>E-lS</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body id = "body">
    <h1 class = "letter">
        <div class = "title">
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
</body>
