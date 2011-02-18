<?php

/**
 * Implementation of hook_default_box().
 */
function dcamp_frontpage_default_box() {
  $export = array();

  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'custom_box_event_list';
  $box->plugin_key = 'simple';
  $box->title = '';
  $box->description = '[custom] event list';
  $box->options = array(
    'body' => '<div class="vevent" id="hcalendar-Drupal-Community-Dinner">
<abbr class="dtstart" title="2011-04-22">April 22nd</abbr>, <abbr class="dtend" title="2011-04-22"> 2011</abbr> 
<a class="url" href="http://dakar2011.drupalafrica.org"><span class="summary">Drupal Community Dinner</span> <span class="location-wrapper">at <span class="location">Dakar</span></span></a>
</div>

<div class="vevent" id="hcalendar-Drupal-Talks-showcases-demos">
<abbr class="dtstart" title="2011-04-23">April 23rd</abbr>, <abbr class="dtend" title="2011-04-23"> 2011</abbr> 
<a class="url" href="http://dakar2011.drupalafrica.org"><span class="summary">Drupal Talks & showcses</span> <span class="location-wrapper">at <span class="location">Dakar</span></span></a>
</div>

<div class="vevent" id="hcalendar-Drupal-Breakfast">
<abbr class="dtstart" title="2011-04-24">April 24th</abbr>, <abbr class="dtend" title="2011-04-24"> 2011</abbr> 
<a class="url" href="http://dakar2011.drupalafrica.org"><span class="summary">Drupal Breakfast (coffee & code)</span> <span class="location-wrapper">at <span class="location">Dakar</span></span></a>
</div>',
    'format' => '2',
  );
  $export['custom_box_event_list'] = $box;

  return $export;
}
