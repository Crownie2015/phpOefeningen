<?php
require_once 'core/init.php';

// Voorbeeld van een Get username functie
// $user = DB::getInstance()->get('users', array('username', '=', 'yoerik'));

// if(!$user->count()) {
//     echo 'No user';
// } else {
//     echo $user->first()->username;
// }

// Voorbeeld van een insert statement
// $userInsert = DB::getInstance()->insert('users', array(
//     'username' => 'Dale',
//     'password' => 'password',
//     'salt' => 'salt'
// ));

$userInsert = DB::getInstance()->update('users', 3, array(
         'password' => 'newpassword',
         'name' => 'Dale Garrett'
     ));

