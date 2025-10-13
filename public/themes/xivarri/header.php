<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('favicon-16.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('favicon-32.png') ?>">
  <?php wp_head(); ?>
  <style>
    [x-cloak] { display: none !important; }
  </style>
</head>
<body class="bg-blue-dark text-white antialiased">
  <div class="fixed inset-0 z-[-1] bg-gradient-to-b from-blue to-blue-dark"></div>
  <?php component('site-header') ?>
