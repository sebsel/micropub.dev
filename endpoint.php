<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$bearer = null;

if(array_key_exists('HTTP_AUTHORIZATION', $_SERVER)
  and preg_match('/Bearer (.+)/', $_SERVER['HTTP_AUTHORIZATION'], $match)) {
  $bearer = $match[1];
} elseif (isset($_POST['access_token'])) {
  $bearer = get('access_token');
}

if($bearer !== 'xxx') {
  header::status(403);
  echo "The access token for this debug tool is 'xxx'.";
  exit();
}

data::write('mp.txt', r::data(), 'kd');
header::redirect('/', 201);