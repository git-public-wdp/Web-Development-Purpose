<?php
    include_once 'index.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ngantin Online</title>
        <meta charset="UTF-8">
        <meta name="desctiption" content="Local Host Payment">
        <meta name="viewport" content="width=device*width, intial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    </head>
    <body>
        <!--HEADER & NAVIGATION-->
        <div class="header" id="header">
            <nav class="navigation" id="navbar">
                <a href="#" class="menu-bars" id="show-menu" onclick="openSlideMenu()">
                    <i class="fas fa-bars" id="bars" style="color: #fff;"></i>
                </a>
            </nav>
            <div class="logo" id="logo" style="background: transparent; min-width: 400px; height: 55px; justify-content: left; text-align: center; align-items: center;display: flex;">
                <h2 id="spacer">|</h2>
                <a href="#home" class="namespace-home" id="home">
                    <h2 class="namespace" id="namespace" style="font-size: 35px; color: #fff; margin-left: 17px;">ngantol</h2>
                </a>
            </div>
            <div class="search" id="search">
                <input id="searchInput" placeholder="Cari makanan"  autocomplete="off" name="searchInput" onkeyup="" style="border: none; height: 27px; width: 317px; font-size: 18px;"/>
                <input type="hidden" name="searchSite" value="1" style="background-color:#000;">
                <input id="searchButton" type="submit" value=""/>
                <a href="#searchButton" class="sch-button" id="button" onclick="showResult()">
                    <img src="search.png" alt="" width="30px" height="30px">
                </a>
            </div>
            <div class="chat" id="chat">
                <a class="open-chat" href="#open-chat">
                    <img src="contact.png" width="30" height="25" style="margin-left: 25px;">
                </a>
                <p id="p-text">Hubungi Pengirim</p>
            </div>
        </div>
        <div class="navbar-menu" id="navbar-menu">
            <a href="#" class="menu-bars" id="close-menu" onclick="closeSlideMenu()">
                <i class="fas fa-bars" id="bars"></i>
            </a>
            <div class="account" id="account">
                <a href="#account" class="acc-link" id="acc-link">
                    <img src="" alt="">
                </a>
                <div class="student-data" #a-data>
                    <ul class="account-data" id="account-data" style="list-style: none; margin-top: 0px;">
                        <li class="call-data" id="nama">Name</li>
                        <li class="call-data" id="kelas">Class</li>
                        <li class="call-data" id="num">Number</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--HOME-PAGE-->
        <div class="home-page" id="home">
            <div class="home-content" id="content">
                <div class="promotion" id="promo">
                    <div class="promo-table" id="p-table"></div>
                </div>
                <div class="product-table" id="product-table">
                    <div class="product" id="product"></div>
                </div>
            </div>
            <div class="product-detail" id="product-detail">
                <div class="detail-table" id="detail-table">
                    <div class="payment-price" id="payment-price"></div>
                </div>
            </div>
            <div class="pop-login" id="login">
                <div class="log-table" id="log-table">
                    <div class="log-screen-logo" id="log-logo"><img src="" alt=""></div>
                    <div class="l-table" id="l-table"></div>
                    <p></p>
                </div>
                <div class="sign-in" id="sign-in">
                    <div class="log-screen-logo" id="log-logo"><img src="" alt=""></div>
                    <div class="s-table" id="s-table"></div>
                    <p></p>
                </div>
            </div>
        </div>
        <script src="index.js"></script>
    </body>
    <footer>

    </footer>
</html>