<?php
// Proxy Connection to the phpmotors database

function phpmotorsConnect() {
  $server = 'mysql';
  $dbname= 'phpmotors';
  $username = 'iClient';
  $password = 'ME9wnDU/gmVC[g7a';
  $dsn = "mysql:host=$server;dbname=$dbname";
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

  try {
    $link = new PDO($dsn, $username, $password, $options);
    // if (is_object($link)) {
    //   echo "It worked!";
    // }
    return $link;
  } catch(PDOException $e) {
    // echo "It didn't work, error: " . $er->getMessage();
    header('Location: /phpmotors/view/500.php');
    exit;
  }
}

phpmotorsConnect();