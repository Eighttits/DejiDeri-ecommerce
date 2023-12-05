<?php
include '../../app/dbConnection.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <link rel="apple-touch-icon" sizes="180x180" href="resources/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/img/favicon-16x16.png">

    
    <link rel="stylesheet" href="resources/css/normalize.css">
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/css/fonts.css">
    <link rel="stylesheet" href="resources/css/swiper-bundle.css">
    <link rel="stylesheet" href="resources/css/nice-select2.css">
    <link rel="stylesheet" href="resources/css/login-register.css">

    <meta name="theme-color" content="#fafafa">
</head>
<header>
            <!-- topbar section -->
            <div class="topbar border-bottom">
                <div class="topbar-wrapper topbar-47 container">
                    <!-- nosotros -->
                    <div class="topbar-switchers">
                        <div class="">
                            <a href="#">Nosotros</a>
                        </div>
                        <div>
                            <span>|</span>
                        </div>
                        <div class="">
                            <a href="#">Blog</a>
                        </div>
                        <div>
                            <span>|</span>
                        </div>
                        <div class="">
                            <a href="#">Contacto</a>
                        </div>
                    </div>
                    <!--  social icons list -->
                    <ul class="social-icons-list">
                        <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                    <use xlink:href="#facebook-icon"></use>
                                </svg></a></li>
                        <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                    <use xlink:href="#twitter-icon"></use>
                                </svg></a></li>
                        <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                    <use xlink:href="#instagram-icon"></use>
                                </svg></a></li>
                        <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                    <use xlink:href="#twitch-icon"></use>
                                </svg></a></li>
                        <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                    <use xlink:href="#discord-icon"></use>
                                </svg></a></li>
                    </ul>
                    <!-- currency and language switchers -->
                    <div class="topbar-switchers">
                        <div class="">
                            <a href="#">Iniciar sesion</a>
                        </div>
                        <div>
                            <span>|</span>
                        </div>
                        <div class="">
                            <a href="#">Registrarme</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- topbar section -->
        </header>
        <nav class="border-bottom nav-ds">
            <div class="navigation-wrapper container flex-space-between align-items-center">
                <div class="nav-left-hand-part">
                    <!-- mobile panel burger icon -->
                    <div class="burger-icon">
                        <svg class="crumina-icon">
                            <use xlink:href="#menu-icon"></use>
                        </svg>
                    </div>
                    <!-- mobile panel burger icon -->
                    <!-- header logo -->
                    <div class="logo">
                        <a class="logo-link" href="01-home-ds.html">
                            <!-- <div class="logo-img"><img src="svg/logo-ds.svg" alt="logo"></div> -->
                            <div class="logo-text">Deji-Deri</div>
                        </a>
                    </div>
                    <!-- header logo -->
                    <!--  navigation menu -->
                    <ul class="navigation-menu">
                        <li class="menu-item"><a class="menu-link" href="01-home-ds.html">Home</a></li>
                        <li class="menu-item"><span>|</span></li>
                        <li class="menu-item"><a class="menu-link" href="#">Productos
                            </a>
                        </li>
                        <li class="menu-item"><span>|</span></li>
                        <li class="menu-item"><a class="menu-link" href="07-sellers.html">Marcas</a></li>
                        <li class="menu-item"><span>|</span></li>
                    <!--  navigation menu -->
                </div>
                <div class="nav-right-hand-part">
                    <!-- user activity buttons -->
                    <div class="user-activity-buttons">
                        <div class="cart-button-cont">
                        <button class="cart-button cryptoki-notif-bttn" data-target="cart-dropdown">
                            <span class="counter">3</span>
                            <svg class="crumina-icon">
                                <use xlink:href="#bag-icon"></use>
                            </svg>
                        </button>
                            <div id="cart-dropdown" class="cryptoki-notif-target">
                                <div class="title">
                                    Tu carrito <span class="colored">3</span>
                                </div>
                                <div class="cart-wrapper">
                                    <div class="cart-product">
                                        <div class="thumb-box"><a href="05-product.html"><img src="img/content/notifications/notif-thumb-1.png"
                                                alt=""></a></div>
                                        <div class="purchase-info">
                                            <div class="product-info">
                                                <div class="product-title"><a href="05-product.html">Cryptoki NFT and Digital Market PSD Template</a>
                                                </div>
                                                <div class="product-price">$12.00</div>
                                            </div>
                                            <div class="product-type ui-templates">UI templates</div>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="thumb-box"><a href="05-product.html"><img src="img/content/notifications/notif-thumb-2.png"
                                                alt=""></a></div>
                                        <div class="purchase-info">
                                            <div class="product-info">
                                                <div class="product-title"><a href="05-product.html">Twitter Gaming Headers Pack 04</a></div>
                                                <div class="product-price">$40.00</div>
                                            </div>
                                            <div class="product-type social-graphics">Social graphics</div>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="thumb-box"><a href="05-product.html"><img src="img/content/notifications/notif-thumb-3.png"
                                                alt=""></a></div>
                                        <div class="purchase-info">
                                            <div class="product-info">
                                                <div class="product-title"><a href="05-product.html">Olympus WP - Social Networking Theme</a></div>
                                                <div class="product-price">$68.00</div>
                                            </div>
                                            <div class="product-type coded-templates">Coded templates</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-price">
                                    <div class="heading">Cart Total</div>
                                    <div class="price">$120.00</div>
                                </div>
                                <div class="cart-buttons">
                                    <a href="08-shopping-cart.html" class="btn-small gradient-background btn-square">Go to
                                        Cart</a>
                                    <a href="09-checkout.html" class="btn-small btn-dark btn-square">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- cart button -->
                    </div>

                </div>
            </div>
        </nav>

<body class="loading">