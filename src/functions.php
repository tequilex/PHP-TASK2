<?php

const NAMES = ['Vova', 'Katya', 'Andrew', 'Timur', 'Sasha'];

function createUser($id) 
{
  $user = [
    'id' => $id,
    'name' => NAMES[array_rand(NAMES)],
    'age' => mt_rand(18, 45)
  ];

  return $user;
}

function createArray()
{
  for ($i = 1; $i <= 50; $i++) {
    $users[] = createUser($i);
  }
  return $users;
}

file_put_contents('users.json', json_encode(createArray()));

function usersFromJson()
{
  $data = file_get_contents('users.json');
  $users = json_decode($data, true);
  return $users;
}

function calcUsername()
{
  $name = array_column(usersFromJson(), 'name');
  $nameList = array_count_values($name);
  echo '<pre>';
  var_dump($nameList);
}

function averageAge() {
  $sumAge = array_sum(array_column(usersFromJson(), 'age'));
  $average = $sumAge / sizeof(usersFromJson());
  var_dump($average);
}

































// function putContents()

// file_put_contents('users.json', json_encode($users));

// $data = file_get_contents('users.json');
// $decodeData = json_decode($data, true);

// $names = [];
// $sumAge = 0;

// foreach ($decodeData as $user) {
//   if (isset($names[$user['name']])) {
//     $names[$user['name']]++;
//   } else {
//     $names[$user['name']] = 1;
//   }
//   $sumAge += $user['age'];
// }

// echo '<pre>';
// var_dump($sumAge / sizeof($decodeData));

// echo '<pre>';
// var_dump($names);

// echo "<pre>";
// var_dump($decodeData);
?>