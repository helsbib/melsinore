<?php

/**
 * Override theme_ting_search_form().
 */
function melsinore_ting_search_form($form){
  jquery_ui_add('ui.dialog');
  jquery_ui_theme_load();

  $form['submit']['#type'] = "image_button" ;
  $form['submit']['#src'] = drupal_get_path('theme','melsinore')."/images/search-btn.png";
  $form['submit']['#attributes']['class'] = "";

  unset($form['example_text']);
  return drupal_render($form);
}
