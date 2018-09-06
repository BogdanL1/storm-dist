<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Storm</title>
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <meta name="description" content="">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:300,300i,400,500,700" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>

  <div id="preloader" class="preloader">
    <div class="preloader__inner">
      <div class="preloader__logo" id="preloader-logo">
        <div class="preloader__logo-top">
          <img src="http://storm-dist/wp-content/uploads/2018/03/logo-top.png" alt="Logo-top">
        </div>
      </div>
    </div>
  </div>
  
  <div id="main-menu" class="main-nav__inner">
    <ul class="main-nav__list">
      <li class="main-nav__list-item  main-nav__list-item--active">
        <a href="#index-content" class="main-nav__link"><span>Главная</span></a>
      </li>
  
      <li class="main-nav__list-item">
        <a href="#about-content" class="main-nav__link"><span>О нас</span></a>
      </li>
  
      <li class="main-nav__list-item">
        <a href="#advantages" class="main-nav__link"><span>НАШИ ПРЕИМУЩЕСТВА</span></a>
      </li>
  
      <li class="main-nav__list-item">
        <a href="#portfolio" class="main-nav__link"><span>Наши работы</span></a>
      </li>
  
      <li class="main-nav__list-item">
        <a href="#contacts" class="main-nav__link"><span>Контакты</span></a>
      </li>
    </ul>
    <a href="#0" class="cd-close-menu  main-nav__close">Close<span></span></a>
  </div>

  <div id="main-content">

    <header class="main-header">
      <div class="main-header__inner">
        <div class="main-header__row">
          <div class="logo">
            <a href="<?php echo get_home_url(); ?>" class="logo__link">
              <img src="http://storm-dist/wp-content/uploads/2018/03/logo.png" alt="Logo">
            </a>
          </div>

          <nav class="main-nav">
            <button id="menu-toggle" class="main-nav__toggle">Menu
              <span class="main-nav__toggle-gamburger"></span>
            </button>
          </nav>
        </div>
      </div>
    </header>