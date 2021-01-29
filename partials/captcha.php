<?php

function generate_string()
{
  $permitted_chars = ['A'.'B'.'C'.'D'.'E'.'F'.'G'.'H'.'J'.'K'.'L'.'M'.'N'.'P'.'Q'.'R'.'S'.'T'.'U'.'V'.'W'.'X'.'Y'.'Z'];
  $length = 10;
  $random_string = '';

  for ($i = 0; $i < $length; $i++) {
    $random_character = array_rand($permitted_chars,1);
    $random_string .= $random_character;
  }

  echo $random_string;
}

?>
