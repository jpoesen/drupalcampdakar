<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function dcamp_boxes_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "boxes" && $api == "box") {
    return array("version" => 1);
  }
}
