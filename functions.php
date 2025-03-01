<?php

function theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_support');

function load_stylesheets()
{
  wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
  wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
  wp_register_script('custom', get_template_directory_uri() . '/main.js', '', 1, true);
  wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_javascript');