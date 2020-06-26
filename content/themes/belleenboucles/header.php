<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('title'); ?></title>
  <link rel="stylesheet" href="css/style.css" />
  <?php wp_head(); ?>
</head>

<body>
  <header >
    <div class="header">
      <h1 class="header__title"><a href="<?= home_url(); ?>"><?php bloginfo('title'); ?></a></h1>
      

      <?php get_template_part('template-parts/nav/nav-header'); ?>
      <!-- <nav class="header__nav">
      
         <div class="header__nav__item">
          <a class="header__nav__item__link" href="#">Accueil</a>
          <a class="header__nav__item__link" href="presentation.html">Présentation</a>
          <a class="header__nav__item__link" href="shop.html">La boutique</a>
          <a class="header__nav__item__link" href="login.html">Se connecter</a>
          <a class="header__nav__item__link" href="registration.html">S'inscrire</a>
        </div> 
      </nav> -->
      <i class="fa fa-bars" id="i" aria-hidden="true"></i>
     
    <!--sidebar menu responsive-->
        <!-- <nav class="sidebar__nav">
      
           
            <a class="sidebar__nav__item__link" href="index.html">Accueil</a>
            <a class="sidebar__nav__item__link" href="presentation.html">Présentation</a>
            <a class="sidebar__nav__item__link" href="shop.html">La boutique</a>
            <a class="sidebar__nav__item__link" href="login.html">Se connecter</a>
            <a class="sidebar__nav__item__link" href="registration.html">S'inscrire</a>
            
          </nav> -->
          <?php get_template_part('template-parts/nav/nav-burger'); ?>
    </div>  

  </header>
  <main>