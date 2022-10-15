<?php
  /* PHPMotors Main Controller
    * This file is accessed at http://lvh.me/phpmotors/
    * or at http://lvh.me/phpmotors/index.php
    *
    * This file controls all traffic to the http://lvh.me/phpmotors/ URL
  */

  // Get the database connection file
  require_once 'library/connections.php';
  // Get the PHP Motors model for use as needed
  require_once 'model/main-model.php';

  // Get the array of classifications
  $classifications = getClassifications();

  // Testing what we got from the database
  //echo "<pre>";
  //var_dump($classifications);
  //echo "</pre>";
  //exit;

  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
  }

  // Build a navigation bar using the $classifications array
  $navList = '<ul>';
  $navList .= "<li><a href='/phpmotors' class='nav-link ".(($action == NULL) ? 'active' : '')."' title='View the PHP Motors home page'>Home</a></li>";
  foreach ($classifications as $classification) {
    $navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' class='nav-link' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
  }
  $navList .= '</ul>';

  // Testing resulting html code
  //echo $navList;
  //exit;

  switch ($action) {
    case 'template':
      include 'view/template.php';
      break;
    default:
      include 'view/home.php';
      break;
  }