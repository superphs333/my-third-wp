<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?>
  </title>
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 shadow-lg sticky-top">
    <div class="container">
      <a href="<?php echo esc_url(site_url('/')) ?>" class="navbar-brand align-middle">
        <h3 class="m-0">
          <img src="<?php echo get_theme_file_uri('assets/images/bootstrap-logo.png') ?>" alt="Logo" height="36px" />
          <?php bloginfo('name') ?>
        </h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="na vbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="#top" class="nav-link"> <?php echo get_field('top_section_title') ?> </a>
          </li>
          <li class="nav-item">
            <a href="#intro" class="nav-link"> <?php echo get_field('intro_section_title') ?> </a>
          </li>
          <li class="nav-item">
            <a href="#services" class="nav-link"> Services </a>
          </li>
          <li class="nav-item">
            <a href="#slogan" class="nav-link"> Slogan </a>
          </li>
          <li class="nav-item">
            <a href="#gallery" class="nav-link"> Gallery </a>
          </li>
          <li class="nav-item">
            <a href="#cta" class="nav-link"> Contact </a>
          </li>
          <li class="nav-item">
            <a href="#find-us" class="nav-link"> Find us </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>