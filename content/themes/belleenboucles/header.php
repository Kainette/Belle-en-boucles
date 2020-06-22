<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belles en boucles</title>
  <link rel="stylesheet" href="css/style.css" />
  <?php wp_head(); ?>
</head>

<body>
  <header >
    <div class="header">
      <h1 class="header__title"><a href="#">L'Atelier Belle en Boucles</a></h1>
      <nav class="header__nav">
        <div class="header__nav__item">
          <a class="header__nav__item__link" href="#">Accueil</a>
          <a class="header__nav__item__link" href="presentation.html">Présentation</a>
          <a class="header__nav__item__link" href="shop.html">La boutique</a>
          <a class="header__nav__item__link" href="login.html">Se connecter</a>
          <a class="header__nav__item__link" href="registration.html">S'inscrire</a>
        </div>
        <i class="fa fa-bars" id="i" aria-hidden="true"></i>
      </nav>
     
    <!--sidebar menu responsive-->
        <nav class="sidebar__nav">
          <div class="sidebar__nav__item">
            <a class="sidebar__nav__item__link" href="index.html">Accueil</a>
            <a class="sidebar__nav__item__link" href="presentation.html">Présentation</a>
            <a class="sidebar__nav__item__link" href="shop.html">La boutique</a>
            <a class="sidebar__nav__item__link" href="login.html">Se connecter</a>
            <a class="sidebar__nav__item__link" href="registration.html">S'inscrire</a>
          </div>
        </nav>
    </div>  

  </header>
  <main>