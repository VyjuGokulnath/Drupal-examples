<?php
/**
 * Alters link url in calendar events block in order to filter events at /events
 *
 * @see template_preprocess_calendar_datebox()
 */
function yourtheme_preprocess_calendar_datebox(&$vars) {
  $date = $vars['date'];
  $view = $vars['view'];
  $day_path = calendar_granularity_path($view, 'day');
  $vars['url'] = 'events/' . $date;
  $vars['link'] = !empty($day_path) ? l($vars['day'], $vars['url']) : $vars['day'];
}
?>