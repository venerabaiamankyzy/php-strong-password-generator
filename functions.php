<?php
function generateRandomPassword($length) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-{}[]|\:;"<>,.?/';
  $password = '';
  $charactersLength = strlen($characters);
  for ($i = 0; $i < $length; $i++) {
    $password .= $characters[rand(0, $charactersLength - 1)];
  }
  return $password;
}
?>