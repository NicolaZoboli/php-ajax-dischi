<?php

  header('Content-Type: application/json');

  include "vars.php";

  echo json_encode($db);
