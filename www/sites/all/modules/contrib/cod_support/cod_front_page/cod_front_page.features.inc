<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function cod_front_page_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "boxes" && $api == "box") {
    return array("version" => 1);
  }
  elseif ($module == "context" && $api == "context") {
    return array("version" => 3);
  }
}

/**
 * Implementation of hook_views_api().
 */
function cod_front_page_views_api() {
  return array(
    'api' => '2',
  );
}
