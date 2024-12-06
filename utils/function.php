<?php 

function view($view, $data = []){


  foreach($data as $key =>$value){
    $$key = $value;
  }
  require "views/template/app.php";
}

function dd(...$dump){
    echo '<prev>';
    var_dump($dump);
    echo '</prev>';
    die();
}

function abort($code){
    http_response_code($code);
    view($code);
    die();
}

