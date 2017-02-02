<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

header('Content-type: plain-text');
header('Link: </endpoint.php>; rel="micropub"');

$file = 'mp.txt';

if(!f::exists($file))
  exit("No request received yet. The endpoint is at /endpoint.php");

echo "Last received Micropub request at ";
echo strftime('%F %T', f::modified($file));
echo "\n\n========\n\n";
echo f::read($file);