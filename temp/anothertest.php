<?php

class MyClass {

    public $param;
  
    public function __construct($param) {
      $this->param = $param;
    }
  }
  
  $someArray = new MyClass('foobar');
  echo $someArray->param; // foobar

