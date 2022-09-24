<?php
  $string1 = "One of the recommended food from japan is Sushi";
  $string2 = "Indonesian doesn’t eat Sushi";
 
  $pieces1 = explode(' ', $string1);
  $last_word1 = array_pop($pieces1);

  $pieces2 = explode(' ', $string2);
  $last_word2 = array_pop($pieces2);

  print_r($last_word1);
  print_r($last_word2);
?>