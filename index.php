<?php
require './src/functions.php';

for($i = 1; $i <= 50; $i++) {
  $users[] = createUser($i);
}

file_put_contents('users.json', json_encode($users));

$data = file_get_contents('users.json');
$decodeData = json_decode($data, true);

$names = [];
$sumAge = 0;

foreach ($decodeData as $user) {
  if (isset($names[$user['name']])) {
    $names[$user['name']]++;
  } else {
    $names[$user['name']] = 1;
  }
  $sumAge += $user['age'];
}

echo '<pre>';
var_dump($sumAge / sizeof($decodeData));

echo '<pre>';
var_dump($names);

echo "<pre>";
var_dump($decodeData);

?>