<?php

function apls_textarea($variables) {
  $element = $variables['element'];
  $element['#attributes']['name'] = $element['#name'];
  $element['#attributes']['id'] = $element['#id'];
  $element['#attributes']['cols'] = $element['#cols'];
  $element['#attributes']['rows'] = $element['#rows'];
  _form_set_class($element, array('form-textarea'));
 
  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );
 
  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    $wrapper_attributes['class'][] = 'resizable';
  }
 
  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;
}

function apls_preprocess_views_view(&$vars) {
  if (isset($vars['view']->name)) {
    $function = 'apls_preprocess_views_view__'.$vars['view']->name; 
    if (function_exists($function)) {
      $function($vars);
    }
  }
}

function apls_preprocess_views_view__resources(&$variables) {
  $view = $variables['view'];
  // Create a variable that divides number of results in half and add one.
  $variables['half'] = ceil((count($view->result) / 2) + 1);
}

function apls_preprocess_views_view__resources_admin(&$variables) {
  $view = $variables['view'];
  // Create a variable that divides number of results in half and add one.
  $variables['half'] = ceil((count($view->result) / 2) + 1);
}
  
?>