<?php

  $moviesJason= file_get_contents(__DIR__."/../Models/movies_db.json");
  $moviesPhp= json_decode($moviesJason,true);
  $movie1Php= $moviesPhp[0];
  $movie2Php= $moviesPhp[1];
  