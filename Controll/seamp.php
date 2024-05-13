<?php

  $test= file_get_contents("../Models/movies_db.json");
  $test2= json_decode($test,true);
  var_dump($test2);