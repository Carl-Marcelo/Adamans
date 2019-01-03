<?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $database = 'portfolio';

  $database_connect = new mysqli($host, $user, $pass, $database);
  if ($database_connect->connect_error) {
      echo 'Database connection failed!';
  }
