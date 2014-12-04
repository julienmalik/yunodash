<?php
// https://gist.github.com/aaronpk/3612742
require('app.php');


if ( !$monitor->is_loggued() )
{
  echo $twig->render("index.tpl",
    array(
      "timezone_set" => $monitor->session('time'),
      "baseurl" => $baseURL
      )
    );
}
else
{
  $monitor->loadAppData();

  echo $twig->render("main.tpl",
    array(
      "apps" => $monitor->get_apps_info(),
      "user" => $monitor->get_user(),
      "baseurl" => $baseURL,
      "timezone" => date_default_timezone_get()
      )
    );
}

?>
