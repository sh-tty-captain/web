<?php

// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
  $url   =   'http://'.$_SERVER['HTTP_HOST'];
  $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
  $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

  $breadcrumbs = Array("<a href=\"$base\">$home</a>");

  $last = end(array_keys($path));

  foreach ($path AS $x => $crumb) {
    $title = ucwords(str_replace(Array('.php', '_', '-'), Array('', ' ', ' '), $crumb));
    $url   .=  '/'.$crumb;

    if ($x != $last)
      $breadcrumbs[] = "<a href=\"$url\">$title</a>";
    else
      $breadcrumbs[] = $title;
  }

  return implode($separator, $breadcrumbs);
}

?>