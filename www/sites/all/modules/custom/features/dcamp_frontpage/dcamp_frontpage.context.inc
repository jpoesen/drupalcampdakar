<?php

/**
 * Implementation of hook_context_default_contexts().
 */
function dcamp_frontpage_context_default_contexts() {
  $export = array();

  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'dcamp_frontpage_context';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '<front>' => '<front>',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'dcamp-dcamp-logo' => array(
          'module' => 'dcamp',
          'delta' => 'dcamp-logo',
          'region' => 'header',
          'weight' => 0,
        ),
        'boxes-custom_box_event_list' => array(
          'module' => 'boxes',
          'delta' => 'custom_box_event_list',
          'region' => 'header',
          'weight' => 1,
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
  $export['dcamp_frontpage_context'] = $context;

  return $export;
}
