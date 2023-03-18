<?php
///Task 1

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

?>